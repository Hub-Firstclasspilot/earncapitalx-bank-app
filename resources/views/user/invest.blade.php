@extends('layouts.user')

@section('content')
      <div class="col-lg-12">

                <div class="mx-0 row page-titles">
                    <div class="col p-md-0">
                        <span class="text-center" style="color: #000">
                        <h2>Investments</h2>
                    </span>
                    </div>
                </div>


        </div>
          <div class="mx-2 alert alert-dark" style="border-left: 2px solid black;"> Current account balance is $ {{ $user->account->balance }}</div>
          <div class="mx-2 alert alert-warning" style="border-left: 2px solid orange; font-size: 12px;">Users have the privilege to claim profit once profit is greater than minimum withdrawal. Please know that your investment plan won't be ended provided your profit percent is not complete.</div>


                      <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card gradient-8">
                            <div class="card-body">
                                <h4 class="card-title">Investments Log</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Plan</th>
                                                <th>Deposited</th>
                                                <th>Percent</th>
                                                <th>Profit</th>
                                                <th>Min Withdraw</th>
                                                <th>Started Duration</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($investments as $investment)
                                            <tr>
                                                 <td>{{ $investment->plan }}</td>
                                                  <td>{{ $investment->amount }}</td>
                                                 <td>{{ $investment->percentage }}</td>
                                                  <td>{{ $investment->profit }}</td>
                                                 <td>{{ $investment->minimum_withdrawal }}</td>
                                                  <td>{{ date('jS M, Y', strtotime($investment->date_started)) }}</td>
                                                 <td>{{ $investment->status }}</td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="7" class="text-center">You have not purchased any plan</td>
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
