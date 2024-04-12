@extends('layouts.app')

@section('content')

<div class="py-5 container">
    <div class="row">
        <div class="col-lg-2">
            <ul class="nav flex-column nav-fill">
                <li class="nav-item" style="margin-bottom: 2rem">
                    <span style="align-self:center; font-size:1.2rem"> Profile Area </span>
                 </li>
                <li class="nav-item">
                    <a style="color: #637CFF" class="nav-link active" aria-current="page" href="/myprofile">Personal Information</a>
                </li>
                <li class="nav-item">
                    <a style="color: #637CFF" class="nav-link" href="../myprofile/account_data">Account Data</a>
                </li>
                <li class="nav-item">
                    <a style="color: #2B4DFF" class="nav-link" href="../myprofile/myprofile_my_orders">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671z"/>
                    </svg>
                    My Orders</a>
                </li>
            </ul>
        </div>
        <div class="col-lg-10">
            <div class="d-flex flex-column">
                <div style="align-self: center; margin-top: 1rem">
                    <span style="font-size: 1.5rem"> Orders </span>
                </div>
                <br></br>
                <div class="card" style="background-color: #BFC9FF;" >
                    <div class="card-body">
                        <div class="card">
                            @foreach ($orders as $order)
                            <div class="card-header">{{$order->date}}</div>
                            <div class="card-body">
                                <div class="row text-center">
                                    <div class="col-auto">
                                        <p>{{auth()->user()->name}}</p>
                                    </div>
                                    <div class="col">
                                        <p>{{$order->total}},0 €</p>
                                    </div>
                                    <div class="col">
                                    </div>

                                    <div class="col-auto">
                                        @if($order->state == 2)
                                        <h3>Delivered</h3>
                                        @elseif($order->state == 1)
                                        <h3>Purchased</h3>
                                        @else
                                        <h3>Cart</h3>
                                        @endif
                                    </div>
                                    <div class="col">
                                    <h6>{{auth()->user()->address}}</h6>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                </div>
            </div>
        </div>        
    </div>
</div>

@endsection