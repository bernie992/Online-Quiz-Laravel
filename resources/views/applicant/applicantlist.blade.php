@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Categories</h1>
    <div class="row">
        <div class="col-9">

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Category Code</th>
                        <th>Description</th>
                        <th>Classes</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($applicant as $app)
                    <tr>
                        <!-- <th scope="row">{{}}</th> -->
                        <td>{{$application->name}}</td>
                        <td>{{$application->email}}</td>
                        <td>{{$application->message}}</td>
                        <td>{{$application->cv}}</td>
                        <td>
                            
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-3">
            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addSubject"> <span class="fa fa-plus"></span> Add new Category</button>
        </div>
    </div>
</div>
@endsection