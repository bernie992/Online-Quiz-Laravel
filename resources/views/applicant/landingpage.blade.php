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
  color: white; 
}
.border{
    border-width: 20px;
 
}
</style>

    <main>
  
        <img class="image" src="assets/img/slide.gif" alt="">                      
        
            <div class="container">

                <div class="col-lg-5 col-" style="top: 25em; left: 44%;">

          
                               <!-- Button trigger modal -->

                               <a style="background:#7FFD4;" href="{{ url('/joblist') }}" class="btn btn-primary apply-btn">Apply Job</a>

                </div>
            </div>
    </main>
   
@endsection