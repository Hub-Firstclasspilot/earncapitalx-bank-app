@php
    $plans = $user->investments;
    $transfers = $user->withdrawals;
@endphp

@extends('layouts.admin')


@section('admin')

    <div class="alert alert-info" role="alert">
        <strong>All amounts are in US Dollars</strong>
    </div>
    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    Activate User
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.activate.user', $user->id) }}" method="POST">
                        @csrf

                         <div class="form-group">
                          <label for="account_status">Account Status</label>
                          <select class="form-control" name="status" id="account_status">
                            <option>Select Account Status</option>
                            <option value="Active">Activate</option>
                            <option value="Inactive">Deactivate</option>
                          </select>
                        </div>

                      <div class="form-group">
                        <button type="submit" class="btn btn-outline-primary">Submit</button>
                      </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    Daily Profit
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.deposit') }}">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ $user->id }}" >
                        <div class="form-group">
                            <label for="profit">Current Profit</label>
                            <input class="form-control" name="current_profit" readonly value="{{ $user->account->profit }}" id="profit">
                        </div>

                        <div class="form-group">
                            <label for="add_profit">Amount to Add</label>
                            <input class="form-control" type="number" name="added_profit" id="added_profit">
                        </div>

                        <div class="form-group">
                          <label for="percentage">Percentage</label>
                          <input type="number" name="percentage" id="percentage" class="form-control" value="{{ $user->account->percentage }}">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-sm btn-primary" type="submit">Add Profit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    Set Transfer Rule
                </div>
                <div class="card-body">
                    <form action="{{route('admin.set.transfer-rule', $user->id)}}" method="post">
                        @csrf

                        <div class="form-group">
                          <label for="rule">Set Transfer Rule</label>
                          <input type="number" name="withdrawal_commision" id="rule" value="{{ $user->account->withdrawal_commision }}" class="form-control" aria-describedby="helpIdTransfer">
                          <small id="helpIdTransfer" class="text-muted">Set the rule to be checked before transfer can be approved</small>
                        </div>

                        <button type="submit" class="btn btn-outline-primary btn-lg">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-3 row">
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    Add Deposit
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.account.limit', $user->id) }}" method="post">
                        @csrf

                        <div class="form-group">
                          <label for="limit">Account Balance</label>
                          <input type="number" name="balance" id="limit" class="form-control" value="{{ $user->account->balance }}" aria-describedby="helpIdLimit">
                          <small id="helpIdLimit" class="text-muted">Edit the user's account balance</small>
                        </div>

                        <button type="submit" class="btn btn-outline-primary btn-lg btn-block">Submit</button>
                    </form>
                </div>
                <div class="card-footer">
                    <form method="POST" action="{{ route('admin.account.limit', $user->id) }}">
                        @csrf
                        <input type="hidden" name="balance" value="0">
                        <button type="submit" class="btn btn-outline-danger btn-sm btn-block">Clear Account</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    Edit Investment Plan
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.edit.plan', $user->id) }}" method="post">
                        @csrf
                        <livewire:investment-plan :plans=$plans />

                        <button type="submit" class="btn btn-sm btn-outline-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    Delete Investment Plan
                </div>
                <div class="card-body">
                   <form action="{{ route('admin.delete.plan', $user->id) }}" method="post">
                       @csrf
                        @method('DELETE')

                       <div class="form-group">
                            <label for="plan">Select Plan to Edit</label>
                            <select class="form-control" name="investment_plan" id="plan" wire:model='plan'>
                            <option>Select plan</option>
                            @forelse ($plans as $plan)
                            <option value="{{ $plan->uuid }}">Type: {{ $plan->plan }} : Profit: {{ $plan->profit }} : Date: {{ date('jS M, Y', strtotime($plan->date_invested )) }}</option>
                            @empty
                            <option>You have no investments yet</option>
                            @endforelse
                            </select>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-block  btn-outline-danger">Delete</button>
                        </div>
                   </form>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-3 row">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    Approve Transfer
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.approve.transfer', $user->id) }}" method="post">
                        @csrf

                        <div class="form-group">
                          <label for=""></label>
                          <select class="form-control" name="transaction_id" id="">
                            @forelse ($transfers as $transfer)
                            <option value="{{ $transfer->id }}">Amount: {{ $transfer->amount }}, Type: {{ $transfer->type }}, Method: {{ $transfer->method }}</option>
                            @empty
                            <option>Select a transfer request</option>
                            <option>You have not made any transfer requests</option>
                            @endforelse
                          </select>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-outline-primary">Approve</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--<div class="col-4">-->
        <!--    <div class="card">-->
        <!--        <div class="car-header">-->
        <!--            Set Withdrawal Commission-->
        <!--        </div>-->
        <!--        <div class="card-body">-->
        <!--            <form action="{{ route('admin.set.commission', $user->id) }}" method="post">-->
        <!--                @csrf-->

        <!--                <div class="form-group">-->
        <!--                  <label for="commission">Withdrawal Commission</label>-->
        <!--                  <input type="number" name="withdrawal_commision" value="{{ $user->account->withdrawal_commision }}" id="commission" class="form-control" aria-describedby="helpId">-->
        <!--                  <small id="helpId" class="text-muted">This is what the customer will be charged for every withdrawal</small>-->
        <!--                </div>-->

        <!--                <button type="submit" class="btn btn-md btn-block btn-outline-primary">Set Commision</button>-->
        <!--            </form>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
    </div>
@endsection
