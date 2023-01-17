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
            <form name="add-blog-post-form" id="add-blog-post-form" method="POST" action="{{url('update-form1')}}/{{$editshow['id']}}">
            @csrf
            {{-- @foreach($Form_Model as $edit) --}}
                    
            <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input type="text" value={{$editshow['name']}} name="name" id="name" class="form-control @error('name', 'post') is-invalid @enderror">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail">Email</label>
                <input type="text" value="{{$editshow['email'] }}" name="email" id="email" class="form-control @error('email','post')is-invalid @enderror">
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror       
            </div>
          
            <button type="submit" class="btn btn-primary" value="update User">Submit</button>
            </form>

        </div>
    </div>
  
</body>
</html>