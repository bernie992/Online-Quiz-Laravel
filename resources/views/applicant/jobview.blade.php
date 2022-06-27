@extends('layouts.job')

@section('title', 'An Online Applicant Exam Management System')
@section('content')
<style> 
    .job-list-det{
    border: 2px solid #f43b48;
    color: #f43b48;
    display: block;
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 20px;
    padding: 15px;
    text-transform: uppercase;
    transition: all 0.3s ease 0s;
    }
.job-list-det:hover {
	background-color: orange;
	color: red;
}
.btn{
    color: black;
    border: solid 1px;
}
.btn:hover{
    color: white;
    background-color: orange;
}
</style>
        <!-- Page Wrapper -->
        <div class="page-wrapper job-wrapper" style="background-color: orangered;">
            <!-- Page Content -->
            <div class="content container">
                <!-- Page Header -->
                <div class="page-header">
                    <div class="row ">
                    <div class="col-sm-12">
                            <h3 class="page-title text-center">Be Part of Our Amazing Team!</h3>
                            <h5 class="page-title text-center">Stable your self with your abilities.</h5>
                            <div class="btn-job m-2">
                                <a class="btn btn-outline-warning" href=" / "> Home</a>
                                <a class="btn btn-outline-warning float-right" href=" /joblist "> Back</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- /Page Header -->

                <div class="row">
                    <div class="col-md-8">
                        <div class="job-info job-widget">
                            <h3 class="job-title">{{$jobshow->job_title}}
                            </h3>
                      
                            <ul class="job-post-det">
                                <li><i class="fa fa-calendar"></i> Post Date: <span class="text-blue">{{$jobshow->post_date}}</span></li>
                                <li><i class="fa fa-calendar"></i> Last Date: <span class="text-blue">{{$jobshow->last_date}}</span></li>
                                
                            </ul>
                        </div>
                        <div class="job-content job-widget">
                            <div class="job-desc-title"><h4>Job Description</h4></div>
                            <div class="job-description">
                                <p>{{$jobshow->job_description}}</p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="job-det-info job-widget">
                            <a class="btn job-btn" href="#" data-toggle="modal" data-target="#apply_job">Apply For This Job</a>
                            <div class="info-list">
                                <span><i class="fa fa-bar-chart"></i></span>
                                <h5>Job Type</h5>
                                <p> Full Time</p>
                            </div>
                           
                            <div class="info-list">
                                <span><i class="fa fa-suitcase"></i></span>
                                <h5>Experience</h5>
                                <p>{{$jobshow->experience}}</p>
                            </div>
                            <div class="info-list">
                                <span><i class="fa fa-ticket"></i></span>
                                <h5>Vacancy</h5>
                                <p>{{$jobshow->vacancy}}</p>
                            </div>
                            <div class="info-list">
                                <span><i class="fa fa-map-signs"></i></span>
                                <h5>Location</h5>
                                <p> {{$jobshow->location}}</p>
                            </div>
                            <div class="info-list">
                                <p> 818-978-7102
                                <br> danielporter@example.com
                                <br> https://www.example.com
                                </p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Page Content -->
            <!-- Apply Job Modal -->
            
            @csrf
            <div class="modal custom-modal fade" id="apply_job" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content" style="background-color:orangered;">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Your Details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form action="/applyjob" method="POST">
                        {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control text-white" type="text" name="name" style="background-color:orange; border: solid 1px orange;" placeholder="Input Name...">

                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="form-control text-white" type="text" name="email" style="background-color:orange; border: solid 1px orange;" placeholder="Input Email...">

                                </div>
                                <div class="form-group">
                                    <label>Contact</label>
                                    <input class="form-control text-white" name="message" style="background-color:orange; border: solid 1px orange;" placeholder="+63...">
                                </div>
                                <div class="panel-body">

                                <div class="form-group{{ $errors->has('cv_upload') ? ' has-error' : '' }}">
                                    <label>Input your CV here!</label>
                                    <div class="col-md-15">
                                        <input id="cv_upload" type="file" class="form-control text-white" name="cv_upload" style="background-color:orange; border: solid 1px orange;" required>
                            
                                        @if ($errors->has('cv_upload'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('cv_upload') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="submit-section">
                                    <button class="btn submit-btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Apply Job Modal -->
        </div>
        <!-- /Page Wrapper -->
@endsection