@extends('layouts.job')

@section('title', 'An Online Applicant Exam Management System')
@section('content')
<style>
.job-type-info:hover {
	background-color: orange;
}
.job-types:hover{
    color:white;
}
.btn{
    color: black;
}
.btn:hover{
    color: white;
}
    
</style>
        <!-- Page Wrapper -->
        <div class="page-wrapper job-wrapper" style="background-color: #f4f2ed;">
            <!-- Page Content -->
            <div class="content container">
                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title text-center">Be Part of Our Amazing Team</h3>
                            <h5 class="page-title text-center">Stable your self with your abilities.</h5>
                            <div class="btn-jobs ">
                                <div class="btn-job float-left">
                                    <a class="btn btn-outline-warning" href=" / "> Home</a>
                                </div>
                                <div class="btn-job float-right">
                                    <a class="btn btn-outline-warning" href=" / "> Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->
              
                <div class="row">
                @foreach($jobshow as $show)
                    <div class="col-md-6">
                        <a class="job-list" href="/jobview/{{$show->id}}">
                            <div class="job-list-det">
                                <div class="job-list-desc">
                                    <h3 class="job-list-title">{{$show->job_title}}</h3>
                                    <h4 class="job-department">Development</h4>
                                </div>
                                <div class="job-type-info">
                                    <span class="job-types">Full Time</span>
                                </div>
                            </div>
                            <div class="job-list-footer">
                                <ul>
                                    <li><i class="fa fa-map-signs"></i>{{$show->location}}</li>
                                    <!-- <li><i class="fa fa-money"></i> $35000-$38000</li> -->
                                    <!-- <li><i class="fa fa-clock-o"></i> 2 days ago</li> -->
                                </ul>
                            </div>
                        </a>
                    </div>
                    @endforeach
                   
                </div>
            </div>
        </div>
        <!-- /Page Wrapper -->
@endsection