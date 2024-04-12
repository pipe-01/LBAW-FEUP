<head>
  <link href="{{ asset('css/checkout.css') }}" rel="stylesheet">
</head>

<div class="col">
    <div class="card box-shadow">
        <a href="{{ route('openProduct', $product->id) }}"><img class="card-img-top" height="250" data-holder-rendered="true"></a>

        <div style="display: block; max-width: 100%; word-break:break-all; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;" class="card-body">
            <h2 style="font-size: 1em;">{{ $product->title }}</h2>
            <div class="row" style="margin-top: 1em">
                <div class="col-sm">
                    <p class="card-text">{{ $product->type }}</p>
                </div>
                <div class="col-sm">
                    <small style="color: black;" class="text-muted"><b>{{ $product->price}}€</b></small>
                </div>
            </div>
            <div class="row">
                <div class="btn-group" style="align-content: space-evenly;">
                    <form action="/remove_from_cart" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value={{$product->id}}>
                    <button class="btn btn-secondary" style="border-color: #571f70; background-color: #571f70; color: white; margin: 1.5em 7em 1em 7em">Remove from Cart</button>
                    </form>
                </div>

        </div>
    </div>
</div>


