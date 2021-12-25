<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body> 
 
<div class="container">
    <div class="row">
           @foreach ($category as $cate)
        <div class="col-md-4">
          <a href="{{url('view-category/'.$cate->slug)}}">
                   <div class="card">
                     <img src="{{asset('assets/upload/category/'.$cate->image)}}"
                      alt="Image is not found" class="cate-image">
                    <div class="card-body">
                    <h5> {{$cate->name}} </h5>
                     <p>{{$cate->description}}</p>   
                    </div>
                </div>
            @endforeach
        </div>
        </a>
    </div>
</div>

</body>
</html>
