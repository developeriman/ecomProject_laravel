<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <link href="{{ asset('admin/css/custom.css') }}" rel="stylesheet">

</head>
<body>
    <h1 class="text-center">Add Product</h1>
            <form action="{{url('updates-products/'.$product->id)}}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                    <div class="col-md-12 md-3">
                        <select class="form-select" name="">
                            <option value="">{{$product->category->name}}
                            </option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                        <label for="">Category Id </label>
                        <input type="text" name="cate_id" value="{{$product->cate_id}}" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">Name</label>
                        <input type="text" name="name" value="{{$product->name}}" class="form-control">
                    </div>

                      <div class="col-md-6">
                        <label for="">slug</label>
                        <input type="text" name="slug" value="{{$product->slug}}" class="form-control">
                    </div>

                     <div class="col-md-6 mb-3">
                        <label for="">Description</label>
                        <textarea name="description" id="" cols="3" class="form-control">{{$product->description}} </textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Meta Description</label>
                        <textarea name="meta_description" id="" cols="3" class="form-control">{{$product->meta_description}} </textarea>
                    </div>
                     <div class="col-md-6 mb-3">
                        <label for="">Small Description</label>
                        <textarea name="small_description" id="" cols="3" class="form-control">{{$product->small_description}}</textarea>
                    </div>
                     <div class="col-md-6 mb-3">
                        <label for="">Meta title</label>
                            <textarea name="meta_title" id="" cols="3" class="form-control">{{$product->meta_title}}</textarea>
                    </div>
                     <div class="col-md-6 mb-3">
                        <label for="">status</label>
                        <input type="checkbox"{{$product->status=='1'?'checked':''}} name="status" >
                    </div>
                     <div class="col-md-6 mb-3">
                        <label for="">popular</label>
                        <input type="checkbox"{{$product->popular=='1'?'checked':''}} name="popular">
                    </div>
                      <div class="col-md-6 mb-3">
                        <label for="">Trending</label>
                        <input type="checkbox"{{$product->trending=='1'?'checked':''}} name="trending">
                    </div>
                    <hr>
                  <div class="col-md-6 mb-3">
                        <label for="">selling price</label>
                        <input type="number" value="{{$product->selling_price}}" name="selling_price" class="form-control" >
                    </div>
                     <div class="col-md-6 mb-3">
                        <label for="">Original Price</label>
                        <input type="number" value="{{$product->original_price}}" name="original_price" class="form-control" >
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Quantity</label>
                        <input type="number" value="{{$product->qty}}" name="qty" class="form-control" >
                    </div>
                     <div class="col-md-6 mb-3">
                        <label for="">Tax</label>
                        <input type="number" value="{{$product->tax}}" name="tax" class="form-control" >
                    </div>
                  
                     <div class="form-group">
                        <label for="meta_keywords">meta_keywords:</label>
                        <textarea class="form-control" rows="3" name="meta_keywords">{{$product->meta_keywords}}"</textarea>
                        </div>

                    @if($product->image)
                        <img src="{{asset('assets/upload/products/'.$product->image)}}" 
                            alt="Image is not found" class="cate-image">
                    @endif
                    <div class="col-md-12">
                        <input type="file"name="image" class="form-control" >
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>


                </div>
            </form>
          
     
</body>
</html>
