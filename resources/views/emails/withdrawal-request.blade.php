@component('mail::message')
# Hello Admin, I want to make a withdrawal.

## Here are my details

| S/N         | Description |
| ----------- | ----------- |
| User Name   | {{ $details['user']->name }} |
| User Wallet | {{ $details['wallet'] }} |
| Amount      | {{ $details['request']->amount }} |
| Date        | {{ date('jS M, Y', strtotime($details['request']->date_requested)) }} |

Thank you for your speedy response

@php
    $id = $details['user']->id;
    $transaction_id = $details['request']->transaction_id;
@endphp

@component('mail::button', ['url' => env('APP_URL')."admin/$id/transfer/$transaction_id"])
Approve Transfer
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
