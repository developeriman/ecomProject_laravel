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
</head>
<body>
    
            <form action="{{url('insert-category')}}" enctype="multipart/form-data" method="POST">
                @csrf
                    <div class="col-md-6">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>

                      <div class="col-md-6">
                        <label for="">slug</label>
                        <input type="text" name="slug" class="form-control">
                    </div>

                     <div class="col-md-6 mb-3">
                        <label for="">Description</label>
                        <textarea name="description" id="" cols="3" class="form-control"></textarea>
                    </div>
                     <div class="col-md-6 mb-3">
                        <label for="">status</label>
                        <input type="checkbox" name="status" >
                    </div>
                     <div class="col-md-6 mb-3">
                        <label for="">popular</label>
                        <input type="checkbox" name="popular">
                    </div>
                    <div class="col-md-6">
                        <label for="">meta_title</label>
                        <input type="text" name="meta_title" class="form-control">
                    </div>

                        <div class="form-group">
                        <label for="meta_keywords">meta_keywords:</label>
                        <textarea class="form-control" rows="3" name="meta_keywords"></textarea>
                        </div>

                     <div class="form-group">
                        <label for="meta_descrip">meta_description:</label>
                        <textarea class="form-control" rows="3" name="meta_descrip"></textarea>
                    </div>
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