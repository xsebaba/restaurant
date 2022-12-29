@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-sm-6 col-md-4">
            <div class="row">
                <h1>Checkout</h1>
                <h4> You ordered: </h4>
                    <div class="row" style="margin-bottom:40px;">
                        @foreach($orders as $order)
                        <div class="col-sm-9">
                            <h5>{{$order['item']['name_item']}}</h5>
                        </div>
                        @endforeach
                    </div>
                <h4>Total amount to pay: {{$total}} USD<h4>
            </div>
            <div id="charge-error" class="alert alert-danger" {{!Session::has('error') ?  'hidden' : ''}}>
                {{Session::get('error')}}
            </div>
            <form action="/payment" method="post" id="checkout-form">
                @csrf 
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="address">Delivery address</label>
                            <input type="text" class="form-control" name="address" id="address" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="card-name">Cardholder name</label>
                            <input type="text" class="form-control" name="card-name" id="card-name" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="card-number">Credit card number</label>
                            <input type="text" class="form-control" name="card-number" id="card-number" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                <label for="card-expiry-month">Expiration Month</label>
                                <input type="text" class="form-control" name="card-expiry-month" id="card-expiry-month" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                <label for="card-expiry-year">Expiration Year</label>
                                <input type="text" class="form-control" name= "card-expiry-year" id="card-expiry-year" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="card-cvc">CVC</label>
                            <input type="text" class="form-control" name="card-cvc" id="card-cvc" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="adres">Telephone number</label>
                            <input type="number" name="tel"  id="tel" class="form-control"  required>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top:40px;">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
            <div class="row" style="margin-bottom:40px;">
                    <h3> Chard charge payment is not yet avaliable, please pay by cash
                    </h3>

            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
    <script src="https://js.stripe.com/v3/"></script>
    
    <script src="/public/src/js/checkout.js"></script>
@endsection
