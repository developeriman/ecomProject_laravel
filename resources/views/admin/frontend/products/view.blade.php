<!DOCTYPE html>
<html lang="en">
<head>
  <title>Show Product</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <link href="{{ asset('admin/css/custom.css') }}" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body> 
 
<div class="container">
    <div class="row">
       
  @foreach ($products as $prod)
            <div class="col-md-3">
                <div class="card">
                        <h6>Collection/ {{$prod->category->name}}/{{$prod->name}}</h6>
                     <img src="{{asset('assets/upload/products/'.$prod->image)}}"
                      alt="Image is not found" class="cate-image">
                    <div class="card-body">
                    <h5> {{$prod->name}} </h5>
                    <hr>
                    @if($prod->trending=='1')
                      <p class="text-center">{{$prod->trending=='1'?'Trending':''}} </p>
                    @endif()
                    <hr>
                    <span class="float-start"> {{$prod->selling_price}}</span>
                    <span class="float-end"> <s>{{$prod->original_price}}</s> </span>
                    @if($prod->qty > 0)
                    <label class="badge bg-success">In Stock</label>
                    @else 
                    <label class="badge bg-dange">Out of Stock </label>
                    @endif
                    </div>
                  </div>
                  <span> <button> <i class="fa fa-heart"></i>Add to Wishlist </button>
                     <button> <i class="fa fa-shopping-cart"></i>Add to Cart </button></span>
            </div>
        @endforeach
        
    </div>

</div>
<hr>

    

</body>
</html>
