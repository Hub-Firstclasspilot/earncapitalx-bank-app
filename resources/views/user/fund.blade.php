@extends('layouts.user')

@section('content')
        <div class="col-lg-12 mt-3">
            <div class="mx-0 row page-titles">
                <div class="col p-md-0">
                     <span class="text-center" style="color: #000">
                        <h2>Fund Account</h2>
                    </span>
                </div>
            </div>
        </div>

         <div class="my-2 card-regular mx-auto align-items-center d-flex justify-content-center">
            <div class="card-body">
                <x-fund :user=$user :variables=$variables />
            </div>
        </div>
@endsection
