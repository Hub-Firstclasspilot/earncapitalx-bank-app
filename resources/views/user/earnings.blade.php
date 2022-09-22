@extends('layouts.user')

@section('content')
        <div class="col-lg-12" style="margin-top: 30px;">

                <div class="mx-0 row page-titles card-gradient">
                    <div class="col p-md-0">
                        <span class="text-center" style="color: #000">
                        <h2>Earnings</h2>
                    </span>
                    </div>
                </div>

        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12" style="margin-top: 30px;">
                    <div class="card card-gradient">
                        <div class="card-body">
                            <h4 class="card-title">Earning Logs</h4>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                        <tr>
                                            <th>S/N </th>
                                            <th>Plan</th>
                                            <th>Amount</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $count = 0;
                                        @endphp
                                        @forelse ($earnings as $earning)
                                        <tr>
                                            <td>{{ $count++ }}</td>
                                            <td>#{{ $earning->plan }}</td>
                                            <td>{{ $earning->amount }}</td>
                                            <td>{{ date('jS M, Y', strtotime($earning->date_invested)) }}</td>
                                        </tr>
                                            @empty
                                        <tr>
                                            <td colspan="4" class="text-center">You have not earned any money yet</td>
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
