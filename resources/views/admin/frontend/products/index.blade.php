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
        <h2>{{$category->name}}</h2>
        @foreach ($products as $prod)
            <div class="col-md-3">
                <div class="card">
                    <a href="{{url('category/'.$category->slug.'/'.$prod->slug)}}">
                     <img src="{{asset('assets/upload/products/'.$prod->image)}}"
                      alt="Image is not found" class="cate-image">
                    <div class="card-body">
                    <h5> {{$prod->name}} </h5>
                    <span class="float-start"> {{$prod->selling_price}}</span>
                    <span class="float-end"> <s>{{$prod->original_price}}</s> </span>
                    </div>
                    </a>
                </div>
            </div>
        @endforeach
        
    </div>

</div>
<hr>

    

</body>
</html>
