@extends('layouts.app')

@section('title', 'An Online Applicant Exam Management System')
@section('content')
    <main>
  
        
        <div class="jumbotron">
            <div class="container">
                
                   
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <p class="text-center text-muted">
                                    Already have an account and just want to join to a class?
                                    <a href="">Click here</a> to join!
                                </p>
                                <hr>
                               <!-- Button trigger modal -->
                               <a href="{{ url('/joblist') }}" class="btn btn-primary apply-btn">Apply Job</a>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <form>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Upload your CV</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="cv_upload">
                                        <label class="custom-file-label" for="cv_upload">Choose file</label>
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
                        </div>
                    </div>
          
                </div>
            </div>
        </div>
    </main>
   
    
@endsection