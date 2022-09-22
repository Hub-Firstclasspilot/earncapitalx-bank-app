@extends('layouts.admin')

@section('admin')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mx-auto">Transfer Details</h2>

                <table class="table table-bordered table-inverse table-responsive">
                    <thead class="thead-inverse">
                        <tr>
                            <th>Id</th>
                            <th>Username</th>
                            <th>Amount</th>
                            <th>Charge</th>
                            <th>Wallet</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">{{ $transaction->id }}}</td>
                                <td>{{ $transaction->user->username }}</td>
                                <td>{{ $transaction->amount }}</td>
                                <td>{{ $transaction->charge }}</td>
                                <td>{{ $transaction->wallet }}</td>
                                <td>{{ $transaction->date_requested }}</td>
                            </tr>
                        </tbody>
                </table>
            </div>
            <div class="col-12">
                <a href="{{ route('admin.approve.transfer', $transaction->user->id) }}" class="mx-auto btn btn-md btn-block btn-outline-primary"  onclick="event.preventDefault();
                                                     document.getElementById('transactionForm').submit();>Approve Transfer</a>

                <form method="POST" id="transactionForm" action="{{ route('admin.approve.transfer', $transaction->user->id) }}" class="d-none">
                    @csrf
                    <input type="hidden" name="transaction_id" value="{{ $transaction->id }}">
                </form>
            </div>
        </div>
    </div>
@endsection
