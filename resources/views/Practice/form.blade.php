<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title></title>
</head>
<body>
    <div class="container mt-4">
    @if(session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif
    <div class="crud">
        <div class="crud-header text-center font-weight-bold">
            Add Blog Post Form Example
        </div>
        <div class="crud-body">
            <form name="add-blog-post-form" id="add-blog-post-form" method="POST" action="{{url('store-form')}}">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail">Name</label>
                <input type="text" name="name" id="name" class="form-control" required="">
            </div>
            <div class="form-group">
               <label for="exampleInputEmail">City</label>
               <input type="text" name="city" id="city" class="form-control" required=""> 
            </div>
            <div class="form-group">
               <label for="exampleInputEmail">Phone</label>
               <input type="text" name="phone" id="phone" class="form-control" required=""> 
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        
        {{-- create another button to redirect page --}}
        {{-- <button onclick="window.location='{{url('/)}}'" class="btn btn-primary btn-sm" >home</a>  --}}
      
    </div>
    </div>
  
</body>
</html>