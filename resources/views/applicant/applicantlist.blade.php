@extends('layouts.app')
@section('content')
<main>
<div class="container-fluid">
<div class="row">
<nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
    <ul class="nav nav-pills flex-column">
        <li class="nav-item">
            <a class="nav-link active" id="v-pills-dashboard" data-toggle="pill" href="/panel/admin" role="tab" aria-controls="v-pills-dashboard"
                aria-expanded="true">Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#quiz-events" role="tab" aria-controls="v-pills-home"
                aria-expanded="true">Exam Events</a>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#classes" role="tab" aria-controls="v-pills-profile"
                aria-expanded="true">Classes</a>
        </li> -->
        <li class="nav-item">
            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#settings" role="tab" aria-controls="v-pills-settings"
                aria-expanded="true">Settings</a>
        </li>
    </ul>
</nav>

<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
<div class="container mt-5">
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
</main>
</main>
@endsection