@extends('layouts.user')

@section('content')
      <div class="col-lg-12">
            <div class="mx-0 row page-titles">
                <div class="col p-md-0">
                     <span class="text-center" style="color: #000">
                        <h2>Plan</h2>
                    </span>
                </div>
            </div>
            @if (Session::has('message'))
            <div class="alert alert-warning alert-dismissible fade show" style="border-left: 4px solid red;font-size:12px;">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
        </div>

<div class="mx-2 row">
    <div class="col-lg-4" >
        <div class="card gradient-1" data-toggle="modal" data-target="#basicModal" style="border-left: 3px solid green;">
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <h5 style="" class="text-info">Starter Plan</h5><br>
                        <ul style="font-size: 13px;">
                            <li>Minimum Deposit: $500</li>
                            <li>Maxmimum Deposit: $5,000</li>
                            <li>Duration: 7 days</li>
                                <li>Referral percent: 2%</li>
                        </ul>
                    </div>

                    <div class="col-3">
                        <p style="font-size: 11px;">Daily/Hourly Percent %</p>
                            <span class="badge badge-success">20%</span>
                    </div>
                </div>
                <br>
                <br>
                <div class="mt-5 border-top" style="">
                    <p class="pt-2" style="font-size: 13px;">You will get daily return of 20% money on every investment. This is a monthly Plan. It means when you invest under this plan you will get an interest of 600% times of total investment.</p>
                </div>
            </div>
        </div>

      <div class="modal fade" id="basicModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="{{ route('user.purchase.pay', $user->id) }}" method="POST">
                        @csrf
                        <input type="hidden" value="Starter" name="plan">
                        <input type="hidden" value="500" name="minimum_deposit">
                        <input type="hidden" value="100" name="minimum_withdrawal">
                        <input type="hidden" value="20" name="percentage">
                        <div class="modal-header">
                        <h5 class="modal-title">Enter Investment Amount.</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                            <div class="mb-3 input-group">
                                <div class="input-group-prepend"><span class="input-group-text">$</span>
                                </div>
                                <input type="text" class="form-control" name="amount">
                                <div class="input-group-append"><span class="input-group-text">.00</span>
                                </div>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="plan1" class="btn btn-primary">Order</button>
                    </div>
                    </form>

                </div>
            </div>
        </div>
   </div>

   <div class="col-lg-4">
       <div class="card gradient-2 fade-in" data-toggle="modal" data-target="#basicModal1" style="border-left: 3px solid red;">
            <div class="card-body">
            <div class="row">
                <div class="col-8">
                    <h5 style="" class="text-danger">Premium Plan</h5><br>
                    <ul style="font-size: 13px;">
                        <li>Minimum Deposit: $5500</li>
                        <li>Maxmimum Deposit: $25,000</li>
                        <li>Duration: 14 days</li>
                            <li>Referral percent: 2%</li>
                    </ul>
                </div>

                <div class="col-4">
                    <p style="font-size: 11px;">Daily/Hourly Percent %</p>
                        <span class="badge badge-success">20%</span>
                </div>
            </div>
            <br>
            <br>
            <div class="mt-5 border-top" style="">
                <p class="pt-2" style="font-size: 13px;">You will get daily return of 20% money on every investment. This is a monthly Plan. It means when you invest under this plan you will get an interest of 1200% times of total investment.</p>
            </div>
            </div>
        </div>
        <div class="modal fade" id="basicModal1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="{{ route('user.purchase.pay', $user->id) }}" method="POST">
                        @csrf
                            <input type="hidden" value="Premium" name="plan">
                            <input type="hidden" value="5500" name="minimum_deposit">
                        <input type="hidden" value="100" name="minimum_withdrawal">
                        <input type="hidden" value="20" name="percentage">
                        <div class="modal-header">
                        <h5 class="modal-title">Enter Investment Amount.</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                            <div class="mb-3 input-group">
                                <div class="input-group-prepend"><span class="input-group-text">$</span>
                                </div>
                                <input type="text" class="form-control" name="amount">
                                <div class="input-group-append"><span class="input-group-text">.00</span>
                                </div>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="plan2" class="btn btn-primary">Order</button>
                    </div>
                    </form>

                </div>
            </div>
        </div>
   </div>
    <div class="col-lg-4">
        <div class="card gradient-3" data-toggle="modal" data-target="#basicModal2" style="border-left: 3px solid blue;">
            <div class="card-body">

            <div class="row">
                <div class="col-8">
                    <h5 style="" class="text-danger">Gold Plan</h5><br>
                    <ul style="font-size: 13px;">
                        <li>Minimum Deposit: $25,500</li>
                        <li>Maxmimum Deposit: $50,000</li>
                        <li>Duration: 28 days</li>
                            <li>Referral percent: 2%</li>
                    </ul>
                </div>

                <div class="col-4">
                    <p style="font-size: 11px;">Daily/Hourly Percent %</p>
                        <span class="badge badge-success">20%</span>
                </div>
            </div>
            <br>
            <br>
            <div class="mt-5 border-top" style="">
                <p class="pt-2" style="font-size: 13px;">You will get daily return of 20% money on every investment. This is a monthly Plan. It means when you invest under this plan you will get an interest of 600% times of total investment.</p>
            </div>
            </div>
        </div>
       <div class="modal fade" id="basicModal2">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="{{ route('user.purchase.pay', $user->id) }}" method="POST">
                        @csrf
                        <input type="hidden" value="Gold" name="plan">
                        <input type="hidden" value="25500" name="minimum_deposit">
                        <input type="hidden" value="20000" name="minimum_withdrawal">
                        <input type="hidden" value="20" name="percentage">
                        <div class="modal-header">
                        <h5 class="modal-title">Enter Investment Amount.</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                            <div class="mb-3 input-group">
                                <div class="input-group-prepend"><span class="input-group-text">$</span>
                                </div>
                                <input type="text" class="form-control" name="amount">
                                <div class="input-group-append"><span class="input-group-text">.00</span>
                                </div>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="plan3" class="btn btn-primary">Order</button>
                    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card gradient-3" data-toggle="modal" data-target="#basicModal3" style="border-left: 3px solid blue;">
            <div class="card-body">
                <div class="row">
                    <div class="col-8">
                        <h5 style="" class="text-danger">Platinum Plan</h5><br>
                        <ul style="font-size: 13px;">
                            <li>Minimum Deposit: $55,000</li>
                            <li>Maxmimum Deposit: Above $100k</li>
                            <li>Duration: 46 days</li>
                                <li>Referral percent: 2%</li>
                        </ul>
                    </div>

                    <div class="col-4">
                        <p style="font-size: 11px;">Daily/Hourly Percent %</p>
                            <span class="badge badge-success">20%</span>
                    </div>
                </div>
                <br>
                <br>
                <div class="mt-5 border-top" style="">
                    <p class="pt-2" style="font-size: 13px;">You will get daily return of 20% money on every investment. This is a monthly Plan. It means when you invest under this plan you will get an interest of 600% times of total investment.</p>
                </div>
            </div>
        </div>
       <div class="modal fade" id="basicModal3">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="{{ route('user.purchase.pay', $user->id) }}" method="POST">
                        @csrf
                        <input type="hidden" value="Gold" name="plan">
                        <input type="hidden" value="55000" name="minimum_deposit">
                        <input type="hidden" value="20000" name="minimum_withdrawal">
                        <input type="hidden" value="20" name="percentage">
                        <div class="modal-header">
                            <h5 class="modal-title">Enter Investment Amount.</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3 input-group">
                                <div class="input-group-prepend"><span class="input-group-text">$</span>
                                </div>
                                <input type="text" class="form-control" name="amount">
                                <div class="input-group-append"><span class="input-group-text">.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="plan3" class="btn btn-primary">Order</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
