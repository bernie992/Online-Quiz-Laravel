@extends('layouts.job')

@section('title', 'An Online Applicant Exam Management System')
@section('content')
<style> 
  
.job-list-det:hover {
	background-color: aquamarine;
}
    
</style>
        <!-- Page Wrapper -->
        <div class="page-wrapper job-wrapper">
            <!-- Page Content -->
            <div class="content container" style="background-color: Silver;">
                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Jobs</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->
                <div class="row">
                    <div class="col-md-6">
                        <a class="job-list" href="{{url('/jobview')}}">
                            <div class="job-list-det">
                                <div class="job-list-desc">
                                    <h3 class="job-list-title">Web Devloper</h3>
                                    <h4 class="job-department">Development</h4>
                                </div>
                                <div class="job-type-info">
                                    <span class="job-types">Full Time</span>
                                </div>
                            </div>
                            <div class="job-list-footer">
                                <ul>
                                    <li><i class="fa fa-map-signs"></i> California</li>
                                    <li><i class="fa fa-money"></i> $35000-$38000</li>
                                    <li><i class="fa fa-clock-o"></i> 2 days ago</li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a class="job-list" href="{{url('/jobview')}}">
                            <div class="job-list-det">
                                <div class="job-list-desc">
                                    <h3 class="job-list-title">Android Devloper</h3>
                                    <h4 class="job-department">App Development</h4>
                                </div>
                                <div class="job-type-info">
                                    <span class="job-types">Part Time</span>
                                </div>
                            </div>
                            <div class="job-list-footer">
                                <ul>
                                    <li><i class="fa fa-map-signs"></i> California</li>
                                    <li><i class="fa fa-money"></i> $35000-$38000</li>
                                    <li><i class="fa fa-clock-o"></i> 2 days ago</li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a class="job-list" href="{{url('/jobview')}}">
                            <div class="job-list-det">
                                <div class="job-list-desc">
                                    <h3 class="job-list-title">Web Devloper</h3>
                                    <h4 class="job-department">Development</h4>
                                </div>
                                <div class="job-type-info">
                                    <span class="job-types">Full Time</span>
                                </div>
                            </div>
                            <div class="job-list-footer">
                                <ul>
                                    <li><i class="fa fa-map-signs"></i> California</li>
                                    <li><i class="fa fa-money"></i> $35000-$38000</li>
                                    <li><i class="fa fa-clock-o"></i> 2 days ago</li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a class="job-list" href="{{url('/jobview')}}">
                            <div class="job-list-det">
                                <div class="job-list-desc">
                                    <h3 class="job-list-title">Android Devloper</h3>
                                    <h4 class="job-department">App Development</h4>
                                </div>
                                <div class="job-type-info">
                                    <span class="job-types">Part Time</span>
                                </div>
                            </div>
                            <div class="job-list-footer">
                                <ul>
                                    <li><i class="fa fa-map-signs"></i> California</li>
                                    <li><i class="fa fa-money"></i> $35000-$38000</li>
                                    <li><i class="fa fa-clock-o"></i> 2 days ago</li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a class="job-list" href="{{url('/jobview')}}">
                            <div class="job-list-det">
                                <div class="job-list-desc">
                                    <h3 class="job-list-title">Web Devloper</h3>
                                    <h4 class="job-department">Development</h4>
                                </div>
                                <div class="job-type-info">
                                    <span class="job-types">Full Time</span>
                                </div>
                            </div>
                            <div class="job-list-footer">
                                <ul>
                                    <li><i class="fa fa-map-signs"></i> California</li>
                                    <li><i class="fa fa-money"></i> $35000-$38000</li>
                                    <li><i class="fa fa-clock-o"></i> 2 days ago</li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a class="job-list" href="{{url('/jobview')}}">
                            <div class="job-list-det">
                                <div class="job-list-desc">
                                    <h3 class="job-list-title">Android Devloper</h3>
                                    <h4 class="job-department">App Development</h4>
                                </div>
                                <div class="job-type-info">
                                    <span class="job-types">Part Time</span>
                                </div>
                            </div>
                            <div class="job-list-footer">
                                <ul>
                                    <li><i class="fa fa-map-signs"></i> California</li>
                                    <li><i class="fa fa-money"></i> $35000-$38000</li>
                                    <li><i class="fa fa-clock-o"></i> 2 days ago</li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a class="job-list" href="{{url('/jobview')}}">
                            <div class="job-list-det">
                                <div class="job-list-desc">
                                    <h3 class="job-list-title">Web Devloper</h3>
                                    <h4 class="job-department">Development</h4>
                                </div>
                                <div class="job-type-info">
                                    <span class="job-types">Full Time</span>
                                </div>
                            </div>
                            <div class="job-list-footer">
                                <ul>
                                    <li><i class="fa fa-map-signs"></i> California</li>
                                    <li><i class="fa fa-money"></i> $35000-$38000</li>
                                    <li><i class="fa fa-clock-o"></i> 2 days ago</li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a class="job-list" href="{{url('/jobview')}}">
                            <div class="job-list-det">
                                <div class="job-list-desc">
                                    <h3 class="job-list-title">Android Devloper</h3>
                                    <h4 class="job-department">App Development</h4>
                                </div>
                                <div class="job-type-info">
                                    <span class="job-types">Part Time</span>
                                </div>
                            </div>
                            <div class="job-list-footer">
                                <ul>
                                    <li><i class="fa fa-map-signs"></i> California</li>
                                    <li><i class="fa fa-money"></i> $35000-$38000</li>
                                    <li><i class="fa fa-clock-o"></i> 2 days ago</li>
                                </ul>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Wrapper -->
@endsection