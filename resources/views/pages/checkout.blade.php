@extends('layouts.app')

@section('content')


    <div class="row">

        <form action="/action_page.php">
            <label for="cardnumber">Credit Card Number:</label>
            <input type="text" id="cardnumber" name="cardnumber"><br><br>
            <label for="expirydate">Card Expiry Date:</label>
            <input type="text" id="expirydate" name="expirydate"><br><br>
            <label for="code">Security Code:</label>
            <input type="text" id="code" name="code"><br><br>

        </form>

        <div class="btn-group" style="align-content: space-evenly;">
            <form action="/paid">


            <button class="btn btn-primary" style="border-color: #571f70; background-color: #571f70; color: white; margin: 1.5em 7em 1em 7em">Pay & Purchase</button>
            </form>

    </div>

    </div>

@endsection