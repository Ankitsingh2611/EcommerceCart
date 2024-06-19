<!-- resources/views/payment-success.blade.php -->
@extends('layouts.base')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">Payment Success</div>
                <div class="card-body">
                    <h3>Your payment was successful!</h3>
                    <p>Thank you for your purchase. Your transaction has been completed successfully.</p>
                    <a href="{{ route('shop.index') }}" class="btn btn-primary">Continue Shopping</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
