@extends('layouts.app')


@section('content')

<head>
    <title>smArt | Product</title>
    <!--CSS Bootstrap-->
    <link rel="stylesheet" href="./css/footer.css">
    <link href="./css/style2.css" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"
        type='text/css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"
        defer></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<body>
    <div class="d-flex flex-column">
        <div class="d-flex flex-row">
            <div class="col-sm-6" style="margin-left: 2rem; margin-top:3rem;">
                <div class="container" style="padding: 2rem;">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($product->images as $img)
                                @if($img->main)
                                <div class="carousel-item active">
                                    <div class="d-flex justify-content-center">
                                        <img class="card-img-top" src="{{ asset($img->image_path) }}" style="object-fit: contain; height:30vw; width: 30vw;" alt="First slide">
                                    </div>
                                </div>
                                @endif
                            @endforeach
                            @foreach ($product->images as $img)
                                @if($img->main == FALSE)
                                <div class="carousel-item">
                                    <div class="d-flex justify-content-center">
                                        <img class="card-img-top" src="{{ asset($img->image_path) }}" style="object-fit: contain; height:30vw; width: 30vw;" alt="Second slide">
                                    </div>
                                </div>
                                @endif
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="d-flex flex-column" style="padding-top: 7rem;">
                    <div class="product-details p-2">
                        <h2 id="title p-2"><strong>{{$product->title}}</strong></h2>
                        <p style="font-size: 25px; color: #696969;margin-bottom: 0.5rem;">{{$product->artist->name}}</p>
                        <p style="color: #696969;font-size: 1.2rem;">{{$product->type}}</p>
                        <p style="color: #696969;font-size: 1rem; font-weight: 500; margin-bottom: 0">Description:</p>
                        <p style="color: #696969;font-size: 1rem; padding-right: 4rem;">{{$product->description}}</p>
                        <div class="row">
                            <div class="stars d-flex flex-row">
                                @for ($i = 0; $i < 5; ++$i) 
                                    <i class="fa fa-star{{ $product->average <= $i ? '-o' : '' }} d-flex flex-row p-1" aria-hidden="true" style="color: #696969;font-size: 1rem;"></i>
                                @endfor
                                <p style="color: #E5E5E5;font-size: 1rem;" class="opinions-no">({{$product->score}})</p>
                            </div>
                        </div>
                        <p style="color: #696969;font-size: 1.2rem; font-weight: bold">{{$product->price}}€</p>
                        <div class="row mb-5" style="margin-top: 2rem;">
                            <div class="col">
                                <div class="add-to-basket">
                                    @if($product->stock != 0)
                                    <a class="btn btn-primary add-to-basket d-flex justify-content-center" role="button" style="background-color: #637CFF; border-color: #637CFF">Add to basket</a>
                                    @else
                                    <a class="btn btn-primary add-to-basket d-flex justify-content-center"
                                        href="#" role="button" style="background-color: gray; border-color: gray">Not
                                        available</a>
                                    @endif
                                </div>
                            </div>
                            <div class="col">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                    <path
                                        d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="padding-left: 4rem;padding-right: 4rem;">
            <p style="font-size: 25px; color: #696969;margin-bottom: 0.5rem;">About the artist:</p>
            <p style="font-size: 1rem; color: #696969;margin-bottom: 3rem;"> {{$product->artist->bio}}</p>
        </div>
        <div class="container" style="padding-left: 4rem;padding-right: 4rem;">
            <p style="font-size: 25px; color: #696969;margin-bottom: 0.5rem;">Reviews:</p>
            <div class="row">
                @if(count($reviews)=="0")
                <p style="font-size: 1rem; color: #9F9F9F"> There are curruntly no reviews for this product </p>
                @endif
                @foreach($reviews as $review)
                <div class="comments">
                    <div class="line"></div>
                    <div style="background-color: #EFEFEF; padding:2rem; margin-bottom: 2rem">
                        <div class="col">
                            <div>
                                <label><strong>Title: {{$review->title}}</strong></label>
                            </div>
                        </div>
                        <div class="col">
                            <p id="com" style="padding-left:1rem; padding-top: 1rem">{{$review->content}}</p>
                        </div>
                        <div style="padding: 1rem">
                            @for($i = 0; $i < $review->score; $i++)
                            <span style="font-size:1rem;color:grey;">&starf;</span> 
                            @php
                                $aux = $i + 1;
                            @endphp
                            @endfor
                            @if($review->score - $aux > 0)
                            <i class="fa fa-star-half-full" style="font-size:200%; color:yellow"></i>
                            @endif 
                        </div>       
                    </div>                                                                  
                    @if(auth()->check())
                        @if((auth()->user()->id) == ($review->user_id)) 
                                                                                            

                            <!-- buttons -->
                            <button style="border-color: white; background-color: #637CFF; color: white" type="button"
                                class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#EditReview-{{$review->id}}">
                                Edit Review
                            </button>
                            
                            <button style="border-color: white; background-color: #637CFF; color: white" type="button"
                                class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#DeleteReview-{{$review->id}}">
                                Delete Review
                            </button>
                            


                            <!-- actions /popopus -->
                            <div class="modal" id="DeleteReview-{{$review->id}}" tabindex="-1" aria-labelledby="DeleteReview" aria-hidden="false">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="DeleteReview">Delete Review</h5>

                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want permenantly delete this review?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                                            <a href="{{ route('deleteReview', $review->id )}}">
                                            <button style="border-color: #A82A2D; background-color: #A82A2D; color: white"
                                                type="submit" class="btn btn-primary">DELETE</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endif
                    @endif

                    <div class="modal" id="EditReview-{{$review->id}}" tabindex="-1" aria-labelledby="EditReview"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editReview">Edit Review</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <form method="post" action="{{ route('editReview', $review->id )}}">
                                    {{ csrf_field()}}{{ method_field('put') }}
                                        <div class="mb-3">
                                            <label for="title" class="form-label">Review Title </label>
                                            <input type="title" class="form-control" id="title" name="title"
                                                placeholder="Review Title" value="{{$review->title}}" aria-describedby="titleHelp">
                                        </div>
                                        <br>
                                        <div class="mb-3">
                                            <label for="content" class="form-label">Score </label>
                                            <br>
                                            <label>
                                                <input type="radio" name="radio" value="1" <?php echo ($review->score == 1) ? 'checked="checked"' : ''; ?> />1
                                            </label>
                                            <label>
                                                <input type="radio" name="radio" value="2" <?php echo ($review->score == 2) ? 'checked="checked"' : ''; ?> />2
                                            </label>
                                            <label>
                                                <input type="radio" name="radio" value="3" <?php echo ($review->score == 3) ? 'checked="checked"' : ''; ?> />3
                                            </label>
                                            <label>
                                                <input type="radio" name="radio" value="4" <?php echo ($review->score == 4) ? 'checked="checked"' : ''; ?> />4
                                            </label>
                                            <label>
                                                <input type="radio" name="radio" value="5" <?php echo ($review->score == 5) ? 'checked="checked"' : ''; ?> />5
                                            </label>
                                        </div>
                                        <br>
                                        <div class="mb-3">
                                            <label for="score" class="form-label">Content</label>
                                            <br>
                                            <textarea class="content" name="content" id="content" cols="48" rows="4" style="width: 95%;"> {{$review->content}}</textarea>
                                        </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Discard Changes</button>
                                    <button style="border-color: #637CFF; background-color: #637CFF; color: white"
                                        type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>



                    <br>
                    <br>
                    <br>
                    <div class="line"></div>
                
                    @endforeach
                    @if(auth()->check())
                    <div class="col justify-content-start" style="margin-bottom: 3rem;margin-top: 1rem;">
                        <a href="{{route('rateProduct', $product->id)}}" type="button"
                            class="btn btn-primary" style="background-color: #637CFF; border-color: #637CFF">Add review</a>
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</body>
@endsection


