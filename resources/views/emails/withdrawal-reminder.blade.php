@component('mail::message')
# Hello {{ $username }}

You made a request for a withdrawal. Here are the details of your request

| S/N         | Description |
| ----------- | ----------- |
| Amount   | {{ $details->amount }} |
| Type | {{ $details->type }} |
| Transaction ID     | {{ $details->transaction_id }} |
| Date        | {{ date('jS M, Y', strtotime($details->date_requested)) }} |


Thanks,<br>
{{ config('app.name') }}
@endcomponent
