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
.title-word {
  animation: color-animation 2s linear infinite;
  font-weight: 900;
}

.title-word-1 {
  --color-1: #DF8453;
  --color-2: #3D8DAE;
  --color-3: #E4A9A8;
}
.title-word-2 {
  --color-1: #DBAD4A;
  --color-2: #ACCFCB;
  --color-3: #17494D;
}

.title-word-3 {
  --color-1: #ACCFCB;
  --color-2: #E4A9A8;
  --color-3: #ACCFCB;
}

@keyframes color-animation {
  0%    {color: var(--color-1)}
  32%   {color: var(--color-1)}
  33%   {color: var(--color-2)}
  65%   {color: var(--color-2)}
  66%   {color: var(--color-3)}
  99%   {color: var(--color-3)}
  100%  {color: var(--color-1)}
}
</style>
    <main style="font-family: fantasy;">

  
        <img class="image" src="assets/img/hire.gif" alt="">                      
        
            <div class="container">
                <div class="col-lg-5 col-5" style="top: 15em; left: 75%;">
                    <h3 class="title-word title-word-1 display-4.5">
                        WE ARE
                    </h3>
                    <h1 class="title-word title-word-2 display-1" style="font-family: fantasy;">
                        HIRING
                    </h1>
                    <h5 class="title-word title-word-3 display-4">
                        join with us !!!
                    </h5>  
                </div>
                <a style="background:#7FFD4;" href="{{ url('/joblist') }}" class="btn btn-primary apply-btn">Click Here !</a>
            </div>

    </main>
@endsection