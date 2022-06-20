@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Categories</h1>
    <div class="row">
        <div class="col-9">

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Csv File</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($applicant as $app)
                    <tr>
                        
                        <td>{{$app->name}}</td>
                        <td>{{$app->email}}</td>
                        <td>{{$app->message}}</td>
                        <td>{{$app->cv}}</td>
                        <td>
                            
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
</div>
@endsection