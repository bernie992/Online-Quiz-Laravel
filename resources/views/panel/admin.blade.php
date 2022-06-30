@extends('layouts.app')
@section('title', 'Administrator\'s Dashboard')
<style>
    main{
        padding-top: 2.5rem;
    }
    .card{
        text-align: center;
    }
    .card-footer {
        transition: transform .2s;
        margin: 0 auto;
        }

    .card-footer:hover {
        transform: scale(1.2);
        }

</style>
@section('content')
<main>
<div class="container-fluid">
<div class="row">
<nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
    <ul class="nav nav-pills flex-column">
        <li class="nav-item">
            <a class="nav-link active" id="v-pills-dashboard" data-toggle="pill" href="#dashboard" role="tab" aria-controls="v-pills-dashboard"
                aria-expanded="true">Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $classes->count() == 0 ? 'disabled' : '' }}" id="v-pills-home-tab" data-toggle="pill" href="#quiz-events" role="tab" aria-controls="v-pills-home"
                aria-expanded="true">Exam Events</a>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link {{ $classes->count() == 0 ? 'disabled' : '' }} " id="v-pills-profile-tab" data-toggle="pill" href="#classes" role="tab" aria-controls="v-pills-profile"
                aria-expanded="true">Classes</a>
        </li> -->
        <li class="nav-item">
            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#settings" role="tab" aria-controls="v-pills-settings"
                aria-expanded="true">Settings</a>
        </li>
    </ul>
</nav>
<main class="col-sm-9 ml-sm-auto col-md-10" role="main">
    <div class="tab-content container" id="v-pills-tabContent">
    <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="dashboard">
        <h1 class="align-left">Dashboard</h1><hr>
        <div class="row">
            
            <div class="col-lg-3 col-sm-12 pb-3">
                <div class="card text-white bg-primary">
                    <div class="card-body">
                        <h1 class="align-left display-4" >{{ $subjects->count() }}</h1>
                        <p class="lead align-left">Department</p>
                    </div>
                    <a class="card-footer text-white clearfix small z-1 align-left" href="/subjects" style="color: orangered; text-decoration: none;">View Department</a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-12 pb-3">
                <div class="card text-white bg-info">
                    <div class="card-body">
                        <h1 class="align-left display-4">{{ $teachers }}</h1>
                        <p class="lead align-left">HR</p>
                    </div>
                    <a class="card-footer text-white clearfix small z-1 align-left" href="/teachers" style="color: orangered; text-decoration: none;">View HR</a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-12 pb-3">
                <div class="card text-white bg-success">
                    <div class="card-body">
                        <h1 class="align-left display-4">{{ $applicant}}</h1>
                        <p class="lead align-left">Applicant</p>
                    </div>
                    <a class="card-footer text-white clearfix small z-1 align-left" href="/application_list" style="color: orangered; text-decoration: none;">View Applicant</a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-12 pb-3">
                <div class="card text-white bg-secondary">
                    <div class="card-body">
                        <h1 class="align-left display-4">{{ $jobrecord }}</h1>
                        <p class="lead align-left">Career's</p>
                    </div>
                    <a class="card-footer text-white clearfix small z-1 align-left" data-toggle="modal" data-target="#myModal" href="" style="color: orangered; text-decoration: none;">Manage Career's</a>
                </div>
            </div>
        </div>
    </div> @include('manage.career')
    <div class="tab-pane fade" id="quiz-events" role="tabpanel" aria-labelledby="quiz-events">
        <h1 class="text-left">Exam Events</h1>
        <div class="col-10">
            <h4>Current Exams</h4>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Topic</th>
                        <th>Deparment</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($quiz_events as $qe)
                        <tr id="quiz-entry{{ $qe->quiz_event_id }}">
                            <td>{{ $qe->quiz_event_name }}</td>
                            <td>{{ $qe->classe->subject->subject_desc }}</td>
                            <td>
                                <a href="/quiz/{{ $qe->quiz_event_id }}" class="btn btn-outline-primary">View</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @if(count($finished_quiz_events) >= 1)
            <div class="col-10">
                <h4>Past Exams</h4>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Topic</th>
                            <th>Department</th>
                            <th>Class</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($finished_quiz_events as $qe)
                            <tr>
                                <td><a href="/quiz/{{ $qe->quiz_event_id }}">{{ $qe->quiz_event_name }}</a></td>
                                <td>{{ $qe->classe->subject->subject_desc }}</td>
                                <td>{{ $qe->classe->course_sec}}</td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>

    <div class="tab-pane fade" id="classes" role="tabpanel" aria-labelledby="classes"><!-- Manage Class -->
        <h3>Classes</h3>
        <div class="row">
            <!-- Class entry -->
            @foreach ($classes as $classe)
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{ $classe->subject->subject_code }}: {{ $classe->subject->subject_desc }}</h4>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $classe->course_sec }}</h6>
                            <h3 class="text-center">{{ $classe->class_id }}</h3>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings">
        <center class="mt-5">
            <h3>Advanced Settings</h3>
            <div class="cards col-12" style="max-width: 40rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <a class="btn btn-primary" href="/subjects" style="float: right">Manage Department</a>
                        <strong>Manage department</strong>
                        <p>This will allow you to manage department to serve as basis for the classes.</p>
                    </li>
                    <li class="list-group-item">
                        <a class="btn btn-primary" href="/teachers" style="float: right">Manage HR</a>
                        <strong>Manage HR</strong>
                        <p>This will allow you to manage HR to use this system.</p>
                    </li>
                    <li class="list-group-item">
                        <button class="btn btn-danger" data-toggle="modal" data-target="#changePassword" style="float: right">Change password</button>
                        <strong>Change password</strong>
                        <p>This will allow you to change your password.</p>
                    </li>
                </ul>
            </div>
        </center>
    </div>

    </div>
</main>      
</div>
</div>
</main>
<!-- Change password modal -->
<div class="modal fade" id="changePassword" tabindex="-1" role="dialog" aria-labelledby="changePassword" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Change password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Current password</label>
                    <input id="pwd" type="password" class="form-control">
                    <div class="invalid-feedback">
                        Input your correct password.
                    </div>
                </div>
                <div class="form-group">
                    <label for="">New password</label>
                    <input id="pwd_new" type="password" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="changePassword()">Change password</button>
            </div>
        </div>
    </div>
</div>

<!-- Change password Success Modal -->
<div class="modal fade" id="changePasswordSuccess" tabindex="-1" role="dialog" aria-labelledby="changePasswordSuccess"
    aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Success!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Password changed successfully!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    function changePassword(){
        var oldPass = $('#pwd').val();
        var newPass = $('#pwd_new').val();
        var update_type = 0;

         $.ajax({
            url: '/account/' + {{Auth::id()}},
            type: 'PUT', //type is any HTTP method
            data: {
                update_type, oldPass, newPass
            }, //Data as js object
            success: function () {
                $('#changePassword').modal('hide')
                $('#changePasswordSuccess').modal('show')
            },
            error: function(data){
                $('#pwd').addClass('is-invalid');
            }
        });
    }
</script>
@endsection