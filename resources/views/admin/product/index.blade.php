
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Category</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
   <link href="{{ asset('admin/css/custom.css') }}" rel="stylesheet">
</head>
<body>

<div class="container">
  <h2>Product Page</h2>
  <hr>
  <table class="table table-bordered-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Category</th>
        <th>Name</th>
        <th>Description</th>
        <th>Selling Price</th>
        <th></th>
        <th>Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($product as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->category->name}}</td>
            <td>{{$item->description}}</td>
            <td>{{$item->selling_price}}</td>
            <td>
                <img src="{{asset('assets/upload/products/'.$item->image)}}" alt="Image is not found" class="cate-image">
            </td>
                <td>  
                <a href="{{url('update-product/'.$item->id)}}"{{url('update-product/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                <a href="{{url('delete-product/'.$item->id)}}" class="btn btn-danger btn-sm">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
