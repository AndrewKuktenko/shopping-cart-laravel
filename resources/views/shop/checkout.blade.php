@extends('layouts.master')

@section('title')
    Laravel Shopping Cart
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-4 col-md-4 col-md-offset-1 col-sm-offset-1">
            <h1>Checkout</h1>
            <h4>Your Total: ${{ $total }}</h4>
            <div class="alert alert-danger {{ !Session::has('error') ? 'hidden' : ''}}" id="charge-error">
                {{ Session::get('error') }}
            </div>
            <form action="{{ route('checkout') }}" method="post" id="checkout-form">
                <div class='form-row'>
                    <div class='form-group required'>
                        <label class='control-label'>Name</label>
                        <input class='form-control' size='4' type='text' id="name" required>
                    </div>
                </div>
                <div class='form-row'>
                    <div class='form-group card required'>
                        <label class='control-label'>Card Number</label>
                        <input autocomplete='off' class='form-control card-number' id="card-number" size='20' type='text' required>
                    </div>
                </div>
                <div class='form-row'>
                    <div class='form-group required'>
                        <label class='control-label'>Card Holder Name</label>
                        <input class='form-control' size='4' type='text' id="card-name" required>
                    </div>
                </div>
                <div class='form-row'>
                    <div class='form-group card required'>
                        <label class='control-label'>Billing Address</label>
                        <input autocomplete='off' class='form-control' size='20' type='text' id="address" required>
                    </div>
                </div>
                <div class='form-row'>
                    <div class='form-group cvc required'>
                        <label class='control-label'>CVC</label>
                        <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text' id="card-cvc" required>
                    </div>
                    <div class='form-group expiration required'>
                        <label class='control-label'>Expiration</label>
                        <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text' id="card-expiry-month" required>
                    </div>
                    <div class='form-group expiration required'>
                        <label class='control-label'>Year</label>
                        <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text' id="card-expiry-year" required>
                    </div>
                </div>

                {{ csrf_field() }}

                <div class='form-row'>
                    <div class='form-group'>
                        <label class='control-label'></label>

                        <button class='form-control btn btn-primary' type='submit'> Buy now</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript" src="{{ URL::to('js/checkout.js') }}"></script>
@endsection