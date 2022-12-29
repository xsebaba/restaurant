@extends('layouts.app')

@section('content')
<div class="container">
    @if(Session::has('cart'))
        <div class="row justify-content-md-center">
             

            <div class="col-sm-6 col-md-12">
                <h2> Check your orders!
                </h2>
                <table class="table table-hover">
                    <thead>
                        <tr scope="row">
                            <th scope="col">Name of your meal</th>
                            <th scope="col">Price</th>
                            <th scope="col">Qty</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                        <tr scope="row">
                            <th scope="col"> {{$order['item']['name_item']}}</th>
                            <th scope="col"> {{$order['item']['price']}} USD</th>
                            <th scope="col"> {{$order['qty']}}</th>
                            <th scope="col">
                                <button type="button" class="btn btn-primary">+
                                </button>
                                <button type="button" class="btn btn-primary">-
                                </button>
                            </th>
                        </tr>
                        @endforeach
                     </tbody>
                </table>
                       
            </div>
        </div>
        <hr>
        <div class="row justify-content-md-center">
            <div class="col-sm-6 col-md-12">
                <strong> Total Price: {{$totalPrice}} USD</strong>
                <a href="payment">
                    <button type="button" class="btn btn-success">Checkout</button>
                </a>
            </div>
        </div>

    @else
    <div class="row justify-content-md-center">
            <div class="col-sm-6 col-md-12">
                <strong> No items ordered!</strong>
            </div>
    </div>
    @endif
</div>
@endsection