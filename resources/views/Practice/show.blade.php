
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container mt-4">
    <table class="table table-bordered table-striped mg-5">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">City</th>
            <th scope="col">Phone</th>     
        </tr>  
        </thead>
        <tbody> 
            @foreach ($Form_Model as $item)
            <tr>
                <td>{{ $item->id}}</td>
                <td>{{ $item->name}}</td>
                <td>{{ $item->city}}</td>
                <td>{{ $item->phone}}</td> 
                <td>
                   <a href="{{url('edit-form')}}" class="btn btn-primary btn-sm" >Edit</a> 
                </td>    
                <td>
                   <a href="" class="btn btn-danger btn-sm">Delete</a> 
                </td>    
            </tr>  
            @endforeach  
        </tbody>   
    </table>
    <h5> Pagination:</h5>
    {{-- {{ $Form_Model->links() }} --}}
    {{ $Form_Model->links() }}
</div>  
</body>
</html>