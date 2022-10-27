@extends('layouts.dashboard')

@section('content')
<script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
<script src="https://js.stripe.com/v3/"></script>
    <section class="payment-page-wrap">
        <div class="product">
            <img src="https://pgbtoppers.nl/images/logo.png" alt="PGBToppers Logo" />
            <div class="description">
            <h3>Activeer uw zorgverlenerprofiel</h3>
            <h5>€45.00</h5>
            </div>
        </div>
        <form action="{{ url('admin/payment/process') }}" method="POST">
            @csrf
            <button type="submit" id="checkout-button">Betalen</button>
        </form>
    </section>
@endsection