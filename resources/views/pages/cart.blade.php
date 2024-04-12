@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="btn-group" style="align-content: space-evenly;">
            <form action="/clear_cart" method="POST">
            <button class="btn btn-secondary" style="border-color: #571f70; background-color: #571f70; color: white; margin: 1.5em 7em 1em 7em">Clear Cart</button>
            </form>

        <div class="btn-group" style="align-content: space-evenly;">
            <form action="/checkout" method="view">
            <button class="btn btn-secondary" style="border-color: #571f70; background-color: #571f70; color: white; margin: 1.5em 7em 1em 7em">Proceed to Checkout</button>
            </form>
        </div>

    </div>


    <div class="py-5 container">
        <div class="row">
            <div class="col-lg-2">
                <form action="{{url('find')}}" method="GET">
                    
                    

                    <div class="product py-5 bg-light col-lg-10" style="width: 1000px">
                        <div class="container">
                            <div class="row row-cols-1 row-cols-md-1 row-cols-lg-1 row-cols-xl-3 g-1">

                                @if(count($product)==0)
                                    <div class="col-md-12" align="center" style="width: 700px">
                                    <h4 align="center" style="margin:20px">
                                        No products in your cart yet. </h4>
                                        
                                @else
                                    @each('partials.cartproduct', $product, 'product')
                                @endif
                            </div>
                        </div>
                    </div>
            </div>
                </form>
        </div>
    </div>

@endsection