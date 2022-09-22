@extends('layouts.user')

@section('content')
    <div class="container" style="margin-top: 10%;">
        <div class="row">
            <div class="col-md-12 col-sm-12">

            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12" style="text-align: center;">
                <div class="mb-3 alert alert-primary" role="alert">
                    <strong>Amount to pay</strong>
                    <p>${{ $variables['amount'] }}</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="text-center col-md-12 col-sm-12">
                <div class="mb-3 alert alert-success" role="alert">
                    <strong>Choose Payment Form</strong>
                </div>
            </div>

            <div class="col-md-12 col-sm-12">
                <div class="row d-flex" style="justify-content: center;">

                    <div class="mx-1 img-container" onclick="document.getElementById('btc-form').submit()">
                        <span><img src="{{ asset('assets/front/img/if_Bitcoin_2745023.png') }}" alt="" style="width: 40px; height:40px; padding:5%; margin:0 auto;">
                            <h4 class="card-title">Bitcoin</h4></span>
                    </div>
                    <div class="mx-1 img-container" onclick="document.getElementById('eth-form').submit()">
                        <span><img src="{{ asset('assets/front/img/if_etherium_eth_ethcoin_crypto_2844386.png') }}" alt="" style="width: 40px; height:40px; padding:5%;">
                            <h4 class="card-title">Ethereum</h4></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form id="btc-form" method="POST" action="{{ route('user.fund.store') }}" style="display: none;">
        @csrf
        <input type="hidden" name="payment_method" value="bitcoin">
        <input type="hidden" name="show_invoice" value="show">
        <input type="hidden" name="transaction_id" value="{{ $variables['transaction_id'] }}">
        <input type="hidden" name="amount" value="{{ $variables['amount'] }}">
        <input type="hidden" name="plan" value="{{ $variables['plan'] }}" >
        <input type="hidden" name="duration" value="{{ $variables['duration'] }}" >
    </form>
    <form id="eth-form" method="POST" action="{{ route('user.fund.store') }}" style="display: none;">
        @csrf
        <input type="hidden" name="payment_method" value="ethereum">
        <input type="hidden" name="show_invoice" value="show">
        <input type="hidden" name="transaction_id" value="{{ $variables['transaction_id'] }}">
        <input type="hidden" name="amount" value="{{ $variables['amount'] }}">
        <input type="hidden" name="plan" value="{{ $variables['plan'] }}" >
        <input type="hidden" name="duration" value="{{ $variables['duration'] }}" >
    </form>
    @endsection
