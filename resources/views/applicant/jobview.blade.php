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
	background-color: #f43b48;
	color: red;
}
    
</style>
        <!-- Page Wrapper -->
        <div class="page-wrapper job-wrapper" style="background-color: Silver;">
            <!-- Page Content -->
            <div class="content container" style="background-color: Silver;">
                <!-- Page Header -->
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Jobs</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                                <li class="breadcrumb-item active">Jobs</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- /Page Header -->
                <div class="row">
                    <div class="col-md-8">
                        <div class="job-info job-widget">
                            <h3 class="job-title">Android Developer</h3>
                            <span class="job-dept">App Development</span>
                            <ul class="job-post-det">
                                <li><i class="fa fa-calendar"></i> Post Date: <span class="text-blue">Feb 18, 2019</span></li>
                                <li><i class="fa fa-calendar"></i> Last Date: <span class="text-blue">May 31, 2019</span></li>
                                <li><i class="fa fa-user-o"></i> Applications: <span class="text-blue">4</span></li>
                                <li><i class="fa fa-eye"></i> Views: <span class="text-blue">3806</span></li>
                            </ul>
                        </div>
                        <div class="job-content job-widget">
                            <div class="job-desc-title"><h4>Job Description</h4></div>
                            <div class="job-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                            </div>
                            <div class="job-desc-title"><h4>Job Description</h4></div>
                            <div class="job-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                <ul class="square-list">
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                </ul>
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
                                <span><i class="fa fa-money"></i></span>
                                <h5>Salary</h5>
                                <p>$32k - $38k</p>
                            </div>
                            <div class="info-list">
                                <span><i class="fa fa-suitcase"></i></span>
                                <h5>Experience</h5>
                                <p>2 Years</p>
                            </div>
                            <div class="info-list">
                                <span><i class="fa fa-ticket"></i></span>
                                <h5>Vacancy</h5>
                                <p>5</p>
                            </div>
                            <div class="info-list">
                                <span><i class="fa fa-map-signs"></i></span>
                                <h5>Location</h5>
                                <p> Dreamguy's Technologies
                                <br> 3864 Quiet Valley Lane,
                                <br> Sherman Oaks,
                                <br> California, 91403</p>
                            </div>
                            <div class="info-list">
                                <p> 818-978-7102
                                <br> danielporter@example.com
                                <br> https://www.example.com
                                </p>
                            </div>
                            <div class="info-list text-center">
                                <a class="app-ends" href="#">Application ends in 2d 7h 6m</a>
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
                    <div class="modal-content">
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
<<<<<<< Updated upstream
                                    <input class="form-control" type="text">
                                </div>\
                                    <input class="form-control" type="text">
=======
                                    <input class="form-control" type="text" name="name">
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="form-control" type="text" name="email">
>>>>>>> Stashed changes
                                </div>
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea class="form-control" name="message"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Upload your CV</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="cv_upload" name="cv_upload">
                                        <label class="custom-file-label" for="cv_upload" >Choose File</label>
                                    </div>
                                </div>
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn">Submit</button>
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