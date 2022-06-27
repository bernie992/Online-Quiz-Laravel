@extends('layouts.app') @section('title', 'Manage Exam') @section('content')
<style>
    body {
        padding-top: 90px;
    }
    .btn:hover{
        color:white;
    }
</style>
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
<section class="container">
    <h1>Manage Exam</h1>
    <hr>
    <div class="row">
        <div class="col-lg-9">
            <h3>{{ $quiz_details->quiz_event_name }}</h3>
            <p>This is some basic information about the exam.</p>
            <p>Department:
                <b>
                    <a href="/manage/class/view{{ $quiz_details->class_id }}"></a>{{ $quiz_details->classe->course_sec }}</b>
            </p>
            <p>Subject:
                <b>{{ $quiz_details->classe->subject->subject_desc }}</b>
            </p>
            <p>Questionnaire:
                <b>
                    <a>{{ $quiz_details->questionnaire->questionnaire_name }}</a>
                </b>
            </p>
        </div>
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            function ChangeQuizStatus(quiz_event_id, quiz_status) {
                $.ajax({
                    url: '/quiz/' + quiz_event_id, //Your api url
                    type: 'PUT', //type is any HTTP method
                    data: {quiz_status}, //Data as js object
                    success: function () {
                        window.location.reload(true);
                    }
                });
            }
        </script>
        <div class="col-lg-3" id="quiz_actions">
            <!-- Use PUT method to update -->
            @if($quiz_details->quiz_event_status == 0)
            <button href="" onclick="javascript:ChangeQuizStatus({{ $quiz_details->quiz_event_id }}, 1)" class="btn btn-outline-success">Start Exam</button>
            @elseif($quiz_details->quiz_event_status == 1)
            <button href="" onclick="javascript:ChangeQuizStatus({{ $quiz_details->quiz_event_id }}, 0)" class="btn btn-outline-danger">End Exam</button>
            @endif <br><br>
                <a class="btn btn-outline-info" href="/questionnaire/{{ $quiz_details->questionnaire->questionnaire_id }}" style="text-decoration: none;">Manage Questionnaire</a>
        </div>
        <div class="col-lg-9 pt-4">
            <h3>Exam Results</h3>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Score</th>
                        <th>Rating</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($results->classe->student_class as $result)
                    <tr>
                        <td>{{ $result->user_profile->family_name }}, {{ $result->user_profile->given_name }} {{ $result->user_profile->ext_name
                            }} {{ $result->user_profile->middle_name }}</td>
                        <td>
                            @if(is_null($result->student_score))
                            <i>not taken</i>
                            @else {{ $result->student_score->score }} / {{$sum}}@endif
                        </td>
                        <td>
                        @php
                            try{$ave = $result->student_score->score / $sum;}catch(Exception $e){$ave = 0;}
                                        
                            echo (number_format($ave, 2) * 100) . "%";
                        @endphp
                        </td>
                       
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <p class="text-center">---NOTHING FOLLOWS---</p>
        </div>
        
    </div>
                    

</section>
</main>
</main>

@endsection