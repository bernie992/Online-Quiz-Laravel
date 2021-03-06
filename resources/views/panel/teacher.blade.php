@extends('layouts.app')
@section('title', 'Quiz Dashboard')
@section('content')
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
        transform: scale(1.1);
        }
</style>
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
                    <li class="nav-item">
                        <a class="nav-link {{ $subjects->count() == 0 ? 'disabled' : '' }} " id="v-pills-profile-tab" data-toggle="pill" href="#my-classes" role="tab" aria-controls="v-pills-profile"
                            aria-expanded="true">My Classes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#settings" role="tab" aria-controls="v-pills-settings"
                            aria-expanded="true">Settings</a>
                    </li>
                </ul>
            </nav>

            <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
                <div class="tab-content container" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="dashboard">
                        <h1 class="align-left">Dashboard</h1><hr>
                        <div class="row">
                            <div class="col-lg-3 col-sm-12 pb-3">
                                <div class="card text-white bg-primary">
                                    <div class="card-body">
                                        <h1 class="align-left display-4">{{ $applicant}}</h1>
                                        <p class="lead align-left">Applicant</p>
                                    </div>
                                    <a class="card-footer clearfix small z-1 align-left" href="/application_list" style="color: white; text-decoration: none;">View Applicant</a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-12 pb-3">
                                <div class="card text-white bg-secondary">
                                    <div class="card-body">
                                        <h1 class="align-left display-4" >{{ $subjects->count() }}</h1>
                                        <p class="lead align-left">Category</p>
                                    </div>
                                    <a class="card-footer clearfix small z-1 align-left" href="/subjects" style="color: white;text-decoration: none;">View category</a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-12 pb-3">
                            <div class="card text-white bg-info">
                                <div class="card-body">
                                    <h1 class="align-left display-4">0</h1>
                                    <p class="lead align-left">Career's</p>
                                </div>
                                    <a class="card-footer clearfix small z-1 align-left" data-toggle="modal" data-target="#myModal" href="" style="text-decoration: none; color: white">Manage Career's</a>
                                </div>
                            </div>
                        </div>
                    </div> @include('manage.career')
                    <div class="tab-pane fade {{ $classes->count() == 0 ? '' : '' }}" id="quiz-events" role="tabpanel" aria-labelledby="quiz-events">
                        <h1 class="text-left">Exam Events</h1>
                        <div class="col-md-4 float-right">
                            {{--  <button class="btn btn-primary" data-toggle="modal" data-target="#NewQuizEventModal">New exam event</button>  --}}
                            <a class="btn btn-primary" href="/quiz/create">New exam event</a>
                        </div><br>
                        <div class="col-10">
                            <h4>Current Exam</h4>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Topic</th>
                                        <th>Department</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($quiz_events as $qe)
                                        <tr id="quiz_entry{{ $qe->quiz_event_id }}">
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
                                            <th>Category</th>
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

                    <div class="tab-pane fade {{ $classes->count() == 0 ? '' : '' }}" id="my-classes" role="tabpanel" aria-labelledby="my-classes"><!-- Manage Class -->
                        <!-- Fetch instructor's subjects -->
                        <h1>My Classes</h1>
                        <div class="col-md-3 float-right">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#NewClassModal">New class</button>
                        </div><br>
                        <div class="row">
                            <!-- Class entry -->
                            @foreach ($classes as $classe)
                                <div class="col-xl-4 col-sm-4 mb-4">
                                    <div class="card bg-primary">
                                        <div class="card-body">
                                            <h4 class="card-title">{{ $classe->subject->subject_code }}: {{ $classe->subject->subject_desc }}</h4>
                                            <h3 class="text-center">{{ $classe->class_id }}</h3>
                                        </div>
                                        <a href="/class/{{ $classe->class_id }}" class="card-footer text-center clearfix small z-1" style="color: white; text-decoration: none;">View Class</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings">
                        <center class="mt-5">
                            <h3>Advanced Settings</h3>
                            <div class="cards" style="width: 40rem;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#changePassword" style="float: right">Change password</button>
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

<!-- New Quiz Modal -->
<div class="modal fade" id="NewQuizEventModal" tabindex="-1" role="dialog" aria-labelledby="NewQuizEventModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form class="modal-content form" action="/new/quiz" method="POST">
            {{ csrf_field() }}
            <div class="modal-header">
                <h5 class="modal-title" id="ModalTitle">New Exam Event</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Exam Name</label>
                    <input name="quiz_name" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Class</label>
                    <select name="class_id" id="class_id" class="form-control">
                        @foreach ($classes as $classe)
                        <option value="{{ $classe->class_id }}">{{ $classe->subject->subject_desc }} ({{ $classe->course_sec }})</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Questions</label>
                    <input name="questions" type="number" min="1" class="form-control">
                </div>
                <!-- TODO: Time limit -->
                <div class="form-group">
                    <label for="">Questionnaire to use</label>
                    <select name="questionnaire" id="questionnaire" class="form-control">
                        <option value="1">Create new questionnaire</option>
                        <option value="2">Use existing questionnaire</option>
                    </select>
                </div>
                <input type="hidden" name="valid" value="1">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Next</button>
            </div>
        </form>
    </div>
</div>

<!-- New Class Modal -->
<div class="modal fade" id="NewClassModal" tabindex="-1" role="dialog" aria-labelledby="NewClassModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form class="modal-content form" action="/class" method="POST">
            {{ csrf_field() }}
            <div class="modal-header">
                <h5 class="modal-title" id="ModalTitle">New Class</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Class Name</label>
                    <input name="course_sec" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Subject</label>
                    <select name="sub_id" id="" class="form-control">
                        @foreach($subjects as $s)
                        <option value="{{ $s->subject_id }}">{{$s->subject_code}}: {{$s->subject_desc}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>

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
    function goToQuizPanel(){
        $('.nav-item a[href="#quiz-events"]').tab('show');
    }
    
</script>

@endsection