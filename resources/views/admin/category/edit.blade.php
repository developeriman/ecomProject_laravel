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
    <h2 class="text-center"> Edit and Update Category</h2>
    <hr>
            <form action="{{url('update-category/'.$category->id)}}" enctype="multipart/form-data" method="POST">
                @method('PUT')
                @csrf
                    <div class="col-md-6">
                        <label for="">Name</label>
                        <input type="text" name="name" value="{{$category->name}}" class="form-control">
                    </div>

                      <div class="col-md-6">
                        <label for="">slug</label>
                        <input type="text" name="slug"value="{{$category->slug}}" class="form-control">
                    </div>

                     <div class="col-md-6 mb-3">
                        <label for="">Description</label>
                        <textarea name="description" id="" cols="3" class="form-control">
                            {{$category->description}}
                        </textarea>
                    </div>
                     <div class="col-md-6 mb-3">
                        <label for="">status</label>
                        <input type="checkbox"{{$category->status=="1" ?'checked':''}} name="status" >
                    </div>
                     <div class="col-md-6 mb-3">
                        <label for="">popular</label>
                        <input type="checkbox"{{$category->popular=="1" ?'checked':''}} name="popular">
                    </div>
                    <div class="col-md-6">
                        <label for="">meta_title</label>
                        <input type="text" name="meta_title"value="{{$category->meta_title}}" class="form-control">
                    </div>

                        <div class="form-group">
                        <label for="meta_keywords">meta_keywords:</label>
                        <textarea class="form-control" rows="3" name="meta_keywords">{{$category->meta_keywords}}</textarea>
                        </div>

                     <div class="form-group">
                        <label for="meta_descrip">meta_description:</label>
                        <textarea class="form-control" rows="3" name="meta_descrip">{{$category->meta_descrip}}</textarea>
                    </div>
                    @if($category->image)
                     <img src="{{asset('assets/upload/category/'.$category->image)}}"alt="Category Image" class="cate-image">
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