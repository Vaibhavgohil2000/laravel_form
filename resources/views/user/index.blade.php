<!DOCTYPE html>
@extends('layout')
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"  /> --}}
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <title>Document</title>

    <style>
        .mt {
            margin-top: 150px;
        }
    </style>
</head>
<body>
    @section('content')
        <div class="container mt">
            @csrf
            {{-- <div class="card-body">
                <form action="{{ route('importdata') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" class="form-control">
                    <button class="btn btn-success" type="submit">Import User Data</button>
                    <br>
                </form>
            </div> --}}
            {{-- <a href="{{ url('create-form') }}" class="btn btn-primary btn-lm pb-2 mb-2 pr-3">Create</a> --}}
           
            {{-- <a class="btn btn-warning btn-lm pb-2 mb-2 pr-3" href="{{ route('export') }}">Export User Data</a> --}}
            {{-- <a href="{{url('index')}}"class="btn btn-primary btn-lm pb-2 mb-2 pr-3 ml-10;">user</a> --}}
            {{-- <input type="file" name="file" class="form-control"> --}}
         <?php
            $i=1;
         ?>
            
            <table class="table table-bordered table-striped mg-5">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        {{-- <th scope="col">City</th>
                        <th scope="col">Phone</th> --}}
                        
                        <th scope="col">
                            <center>Action</center>
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($ushow1  as $ushowone)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $ushowone->name }}</td>
                        <td>{{ $ushowone->email }}</td>
                        {{-- <td>{{ $item->phone }}</td> --}}
                        <td>
                           
                            <center>
                                <a href="{{ url('edit-form1') }}/{{ $ushowone->id }}"
                                    class="btn btn-primary btn-lm">Edit</a>
                                 <a href="{{ url('destroy-form1') }}/{{ $ushowone->id }}"
                                    class="btn btn-danger btn-lm">Delete</a> 
                                    
                                    <input data-id="{{$ushowone->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $ushowone->status ? 'checked' : '' }}>
                            </center>
                            </td>
                        </tr>
                        @endforeach             
                   
                </tbody>
            </table>
            <script>
                $(function() {
                  $('.toggle-class').change(function() {
                      var status = $(this).prop('checked') == true ? 1 : 0; 
                      var user_id = $(this).data('id'); 
                       
                      $.ajax({
                          type: "GET",
                          dataType: "json",
                          url: '/status',
                          data: {'status': status, 'user_id': user_id},
                          success: function(data){
                            console.log(data.success)
                          }
                      });
                  })
                })
              </script>         


            {{-- {{ $Form_Model->links() }} --}}
            {{ $ushow1->links()}}
        </div>
    @endsection
</body>
</html>