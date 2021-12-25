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
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body> 
 
<div class="container">
    <div class="row">
        @foreach ($featured_products as $prod)
            <div class="col-md-3">
                <div class="card">
                     <img src="{{asset('assets/upload/products/'.$prod->image)}}"
                      alt="Image is not found" class="cate-image">
                    <div class="card-body">
                    <h5> {{$prod->name}} </h5>
                    <span class="float-start"> {{$prod->selling_price}}</span>
                    <span class="float-end"> <s>{{$prod->original_price}}</s> </span>
                    </div>
                </div>
            </div>
        @endforeach
        
    </div>

</div>
<hr>
<h2 class="text-center"> Treanding Product </h2>
<div class="container">
    <div class="row">
        @foreach ($trending_category as $tcategory)
            <div class="col-md-3">
                <div class="card">
                     <img src="{{asset('assets/upload/category/'.$tcategory->image)}}"
                      alt="Image is not found" class="cate-image">
                    <div class="card-body">
                    <h5> {{$tcategory->name}} </h5>
                    <p>{{$tcategory->description}}</p>
                    {{-- <span class="float-start"> {{$prod->selling_price}}</span>
                    <span class="float-end"> <s>{{$prod->original_price}}</s> </span> --}}
                    </div>
                </div>
            </div>
        @endforeach
        
    </div>

</div>
    {{-- <div class="row">
        @foreach ($trending_category as $category)
            <div class="col-md-3">
                <div class="card">
                     <img src="{{asset('assets/upload/products/'.$category->image)}}"
                      alt="Image is not found" class="cate-image">
                    <div class="card-body">
                    <h5> {{$prod->name}} </h5>
                    <span class="float-start"> {{$prod->selling_price}}</span>
                    <span class="float-end"> <s>{{$prod->original_price}}</s> </span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div> --}}

</body>
</html>
