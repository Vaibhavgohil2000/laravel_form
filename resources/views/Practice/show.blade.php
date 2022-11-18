<!DOCTYPE html>
@extends('layout')
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
            <div class="card-body">
                <form action="{{ route('importdata') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" class="form-control">
                    <button class="btn btn-success" type="submit">Import User Data</button>
                    <br>
                </form>
            </div>
            <a href="{{ url('create-form') }}" class="btn btn-primary btn-lm pb-2 mb-2 pr-3">Create</a>
           
            <a class="btn btn-warning" href="{{ route('export') }}">Export User Data</a>
            {{-- <input type="file" name="file" class="form-control"> --}}
         <?php
            $i=1;
         ?>
            <table class="table table-bordered table-striped mg-5">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">City</th>
                        <th scope="col">Phone</th>
                        <th scope="col">
                            <center>Action</center>
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($Form_Model as $item)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->city }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>
                                <center>
                                    <a href="{{ url('edit-form') }}/{{ $item->id }}"
                                        class="btn btn-primary btn-lm">Edit</a>
                                    <a href="{{ url('destroy-form') }}/{{ $item->id }}"
                                        class="btn btn-danger btn-lm">Delete</a>
                                </center>
                            </td>
                        </tr>
                    @endforeach             
                </tbody>
            </table>

            {{-- {{ $Form_Model->links() }} --}}
            {{ $Form_Model->links() }}
        </div>
    @endsection
</body>
</html>