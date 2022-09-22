@extends('layouts.user')

@section('content')
          <div class="col-lg-12 dark--bg mb-2">
                <div class="mx-0 row page-titles">
                    <div class="col p-md-0">
                         <span class="text-center" style="color: #000">
                        <h2>Withdraw Funds</h2>
                    </span>
                    </div>
                </div>

    </div>
<div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card-regular d-flex justify-content-center align-items-center">
                            <div class="card-body">
                                 @if ($errors)
                                    <div style="color: red">
                                        @foreach ($errors->all() as $error)
                                            <p>{{ $error }}</p>
                                        @endforeach
                                    </div>
                                @endif
                             <form action="{{ route('user.withdrawal.request', $user->id) }}" method="POST" id="withdrawalForm">
                                @csrf
                                    <input type="hidden" name="percentage" value="{{ $user->account->withdrawal_commision ?? 0 }}" id="percentage">
                                  <div class="form-group row">
                                            <label class="col-sm-12 col-form-label">Amount</label>
                                            <div class="col-sm-12">
                                                <input type="text" name="amount" id="amount" class="form-control form-control-sm input--yellow" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-12 col-form-label">Withdraw Type</label>
                                            <div class="col-sm-12">
                                                <select class="form-control form-control-sm input--yellow" name="type" id="type">
                                                <option class="input--yellow" value="Trading Profit" style="background: grey;">Trading Profit</option>
                                                <option class="input--yellow" value="Account Balance" style="background: grey;">Account Balance</option>
                                            </select>
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label class="col-sm-12 col-form-label">Payout Method</label>
                                            <div class="col-sm-12">
                                                <select class="form-control form-control-sm input--yellow" name="method" id="method">
                                                <option class="input--yellow" value="Bitcoin" style="background:  grey;">Bitcoin</option>
                                                <option class="input--yellow" value="Litecoin" style="background: grey;">Litecoin</option>
                                                <option class="input--yellow" value="Bitcoin Cash" style="background: grey;">Bitcoin Cash </option>
                                                <option class="input--yellow" value="Ethereum" style="background: grey;">Ethereum</option>
                                                <option class="input--yellow" value="Stellar" style="background: grey;">Stellar</option>
                                                <option class="input--yellow" value="Dash" style="background: grey;">Dash</option>
                                            </select>
                                            </div>
                                        </div>

                                         <div class="form-group row">
                                            <label class="col-sm-12 col-form-label">Wallet</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control form-control-sm input--yellow" name="wallet" placeholder="" id="wallet">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                    <button type="button" class="mb-1 btn btn--medium btn--yellow full--width" style="max-width: 45rem; text-align: center;" id="show-swal">Submit</button>
                                            </div>

                                        </div>
                             </form>
                            </div>
                        </div>
                        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                            <script>
                                let percentage = document.getElementById('percentage').value
                                let charge = 0;
                                let amount = document.getElementById('amount');
                                
                                amount.addEventListener('change', () => {
                                    charge = (percentage * amount.value) / 100;
                                })
                                
                                
                                const showSwal = () => {
                                    if(percentage == 0){
                                        swal({
                                        title: "Do you want to continue?",
                                        icon: 'info',
                                    }).then(() => {
                                        document.getElementById('withdrawalForm').submit();
                                    })
                                    }else {
                                        swal({
                                        title: "Do you want to continue?",
                                        text: "You will be charged " + percentage + "% for this withdrawal?",
                                        icon: 'info',
                                    }).then(() => {
                                        document.getElementById('withdrawalForm').submit();
                                    })
                                    }
                                }
                                
                                document.getElementById('show-swal').addEventListener('click', showSwal);
                            </script>
                        <div class="card dark--bg">
                            <div class="card-body">
                                <h4 class="card-title">Cashout Logs</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>S/N </th>
                                                 <th>Type </th>
                                                <th>Method</th>
                                                <th>Amount</th>
                                                <th>Date</th>
                                                <th>Status</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                             @php
                                                 $count = 0;
                                             @endphp
                                                @forelse ($user->withdrawals as $withdrawal)
                                                <tr>
                                                    <td>#{{ $count++ }}</td>
                                                     <td>{{ $withdrawal->type }}</td>
                                                      <td>{{ $withdrawal->method }}</td>
                                                      <td>{{ $withdrawal->amount }}</td>
                                                        <td>{{ date('jS M, Y', strtotime($withdrawal->date_requested)) }}</td>
                                                      <td>{{ $withdrawal->status }}</td>
                                                </tr>
                                                @empty
                                                <tr>
                                                    <td colspan="6" class="text-center">You have not made any withdrawal requests yet</td>
                                                </tr>
                                                @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
