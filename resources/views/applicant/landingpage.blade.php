@extends('layouts.job')

@section('title', 'An Online Applicant Exam Management System')
@section('content')
<style>
    .image{
        position: absolute;     
        height: 100%;
        width:100%;
    }
    .button1{

  border: none;
  color: black;
  padding: 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  margin: 4px 2px;
  cursor: pointer;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
.button1:hover {
  background-color: #4CAF50;
  color: white; jordan poole
}
.border{
    border-width: 20px;
 
}

   
</style>
    <main>
  
        <img class="image" src="assets/img/job.jpg" alt="">
        
            <div class="container">
                <div class="col-lg-5 col-" style="top: 25em; left: 44%;">
          
                               <!-- Button trigger modal -->

    
                               <a style="background:#7FFD4;" href="{{ url('/joblist') }}" class="btn btn-primary apply-btn">Apply Job</a>


                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content" >
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Applicant Form</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <form>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" type="text" id="name">
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="form-control" type="text" id="email">
                                </div>
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea class="form-control" id="message"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Upload your CSV</label></button2>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="cv_upload">
                                        <button1 class="button button1" 8px> <label class="custom-file-label" for="cv_upload">Choose file</label></button1><input class="border" type="text">
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
   
    <script>
        function AddSubject() {
        var name = $('#name').val();
        var email = $('#email').val();
        var message = $('#message').val();
        var cv_upload = $('#cv_upload').val();


        $.ajax({
            url: '/landingpage/',
            type: 'POST', //type is any HTTP method
            data: {
                s_code, s_des
            }, //Data as js object
            success: function () {
                window.location.reload(true);
            }
        });
    }
    </script>
    
@endsection