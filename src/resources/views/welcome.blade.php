@extends('layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <img src="{{ asset('image/coffee.png') }}" alt="" style="width: 100%; max-width: 600px;">

        <label class="amount">
            <p>ブレンドコーヒー</p>
            <p>150円</p>
        </label>
        <form action="{{route('stripe.charge')}}" method="POST">
            @csrf
            <script
                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                data-key="{{ env('STRIPE_PUBLIC_KEY') }}"
                data-amount="150"
                data-name="お支払い画面"
                data-label="payment"
                data-description="現在はデモ画面です"
                data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                data-locale="auto"
                data-currency="JPY">
            </script>
        </form>
    </div>
</div>
@stop
