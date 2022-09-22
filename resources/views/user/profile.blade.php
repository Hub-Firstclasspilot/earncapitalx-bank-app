{{-- @php
    dd($user->avatar);
@endphp --}}

@extends('layouts.user')

@section('content')
    <div>
        <div class="col-lg-12 mt-3">
            <div class="mx-0 row page-titles">
                <div class="col p-md-0">
                    <span class="text-center" style="color: #000">
                        <h2>Profile</h2>
                    </span>
                </div>
            </div>
        </div>



    <div class="row">
         <div class="my-2 ml-1 col-lg-4 col-md-6 col-xs-12">
            <div class="my-2 card gradient-6">
                            <div class="card-body">
                                <div class="text-center">
                                    <img alt="" class="mt-4 rounded-circle img-fluid" src="" style="max-width: 300px; max-height: 300px;">
                                    <h4 class="mt-3 card-widget__title text-dark">{{ $user->name }}</h4>
                                    <p class="">{{ $user->email }}</p>
                                    <a class="px-5 border-0 btn gradient-4 btn-lg btn-rounded" href="javascript:void()">$ {{ $user->account->balance }}</a>
                                </div>
                            </div>
                            <div class="bg-transparent border-0 card-footer">
                                <div class="row">
                                    <div class="pt-3 col-4 border-right-1">
                                        <a class="text-center d-block text-light" href="javascript:void()">
                                            <i class="fa fa-star gradient-1-text" aria-hidden="true"></i>
                                            <p class="">Star</p>
                                        </a>
                                    </div>
                                    <div class="pt-3 col-4 border-right-1"><a class="text-center d-block text-muted" href="javascript:void()">
                                        <i class="fa fa-heart gradient-3-text"></i>
                                            <p class="" class="text-light">Like</p>
                                        </a>
                                    </div>
                                    <div class="pt-3 col-4"><a class="text-center d-block text-light" href="javascript:void()">
                                        <i class="fa fa-envelope gradient-4-text"></i>
                                            <p class="">Email</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
          </div>
          <div class="my-2">
              <x-profile-avatar :user=$user />
          </div>
          <div class="my-2 col-lg-4 col-md-6 col-xs-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Change Password</h4>
                    <div class="basic-form">
                        <form action="{{ route('user.password.update', $user) }}" method="post" id="passwordForm">
                            @csrf

                            <div class="form-group">
                              <label for="current_password">Current Password</label>
                              <input type="password" name="old_password" id="current_password" class="form-control" placeholder="Enter your current password">
                            </div>

                            <div class="form-group">
                              <label for="password">Current Password</label>
                              <input type="password" name="password" id="password" class="form-control" placeholder="Enter your new password">
                            </div>

                            <div class="form-group">
                              <label for="confirm_password">Confirm Password</label>
                              <input type="password" name="password_confirmation" id="confirm_password" class="form-control" placeholder="Enter your new password again">
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-10">
                                        <button type="submit" name="btnedit" class="mb-1 btn btn--small btn--yellow">
                                    Submit
                                </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
          </div>
         <div class="my-2 col-lg-8 col-md-6 col-xs-12">
              <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Account</h4>
                    <div class="basic-form">
                        <form method="POST" action="{{ route('user.profile.update', $user->id) }}">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control border-top-0 border-left-0 border-right-0 border-bottom-1" placeholder="{{ $user->username }}" name="username" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control border-top-0 border-left-0 border-right-0 border-bottom-1" name="name" placeholder="{{ $user->name }}">
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control border-top-0 border-left-0 border-right-0 border-bottom-1" name="email" placeholder="{{ $user->email }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Mobile</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control border-top-0 border-left-0 border-right-0 border-bottom-1" name="mobile" placeholder="{{ $user->mobile }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                        <button type="submit" name="btnedit" class="mb-1 btn btn--small btn--yellow">
                                    Upload
                                </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
          </div>

            <div class="my-2 col-lg-4 col-md-4 col-xs-12">
               <div class="card card-gradient">
                    <div class="card-body">
                        <div class="text-center">
                            <form  class="text-center" method="POST" action="" >
                                <h5 class="text-warning">Submit Ticket</h5>

                                    <textarea class="form-control" id="val-suggestions" name="msg" rows="4" placeholder="write your Ticket content here" style="border-top: none; border-bottom: 2px solid black; border-left: none;border-right: none;"></textarea>
                                    <div class="mx-auto mt-2 ">
                                         <button type="submit" name="btnticket" class="mb-1 btn btn--small btn--yellow">Send</button>

                                    </div>

                            </form>
                        </div>
                    </div>
                </div>
          </div>
            <div class="my-2 col-lg-8 col-md-8 col-xs-12">
             <div class="card card-gradient">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Refferals</h4>
                    </div>
                    <p class="card-text">{{ $user->referrals->referrals }}</p>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
