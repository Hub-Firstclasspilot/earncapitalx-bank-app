@extends('layouts.user')

@section('content')
    <div class="col-lg-12 mt-3">

                <div class="mx-0 row page-titles">
                    <div class="col p-md-0">
                         <span class="text-center" style="color: #000">
                        <h2>Deposits</h2>
                    </span>
                    </div>
                </div>
        </div>
          <div class="mx-2 alert alert-dark" style="border-left: 2px solid black;"> Current account balance is $ {{ $user->account->balance }}</div>

             <div class="container-fluid">
                <div class="row">

                    <div class="col-12">
                        <div class="card bg-dark">
                            <div class="card-body">
                                <h4 class="card-title">Deposit History</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>S/N </th>
                                                <th> Reference ID </th>
                                                <th>Amount</th>
                                                <th>Method</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Charge</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         @php
                                            $count = 0;
                                         @endphp
                                         @forelse ($depositHistory as $deposit)
                                            <tr>
                                                <td>{{ $count++ }}</td>
                                                <td>#{{ $deposit->transaction_id }}</td>
                                                <td>{{ $deposit->amount }}</td>
                                                <td>{{ $deposit->method }}</td>
                                                <td>{{ date('jS M, Y', strtotime($deposit->date)) }}</td>
                                                <td>{{ $deposit->status }}</td>
                                                <td>{{ $deposit->charge }}</td>
                                            </tr>
                                         @empty
                                            <tr>
                                                <td colspan="7" class="text-center">
                                                    You have not made any deposits yet
                                                </td>
                                            </tr>
                                         @endforelse
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-dark">
                            <div class="card-body">
                                <h4 class="card-title">Bank Transfer History</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>S/N </th>
                                                <th>Amount</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($bankTransferHistory as $transferHistory)
                                            <tr>
                                                <td>{{ $count++ }}</td>
                                                <td>{{ $transferHistory->amount }}</td>
                                                <td>{{ date('jS M, Y', strtotime($transferHistory->date_approved)) }}</td>
                                            </tr>
                                            @empty
                                                <tr>
                                                    <td class="text-center" colspan="3">
                                                        You do not have any transfer history
                                                    </td>
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
