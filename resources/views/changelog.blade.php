@extends('layouts.app') @section('title', 'Changelog') @section('content')
<style>
    body {
        padding-top: 90px;
    }
</style>
<div class="container">
    <div class="row">

        <div class="col-8">
            <h1>Changelog</h1>
            <hr>
            <h5>2017-10-08</h5>
            <ul>
                <li>Adding class done.</li>
                <li>Registration via class code for applicant</li>
            </ul>
            <h5>2017-10-05</h5>
            <ul>
                <li>Class code implemented.</li>
                <li>Added intial setup.</li>

            </ul>
            <h5>2017-10-04</h5>
            <ul>
                <li>Correct answer now showing properly in viewing questionnaire</li>

            </ul>
            <h5>2017-09-26</h5>
            <ul>
                <li>Added iconic icon fonts for future use.</li>

            </ul>
            <h5>2017-09-26</h5>
            <ul>
                <li>Fixed something</li>

            </ul>
            <h5>2017-09-26</h5>
            <ul>
                <li>Changed storing of answer logic. Changed storing of answer logic.</li>

            </ul>
            <h5>2017-09-24</h5>
            <ul>
                <li>Adding applicant done!</li>

            </ul>
            <h5>2017-09-21</h5>
            <ul>
                <li>Organized migration order for no conflicts</li>

            </ul>
            <h5>2017-09-20</h5>
            <ul>
                <li>Fixed choices not saving properly.</li>

            </ul>
            <h5>2017-09-17</h5>
            <ul>
                <li>'Manage exam' read capability</li>
                <li>Merge branch 'eloquent-migration' into emir-development</li>
                <li>Preparation for 'Manage exam' functionality.</li>
                <li>Merge branch 'emir-development' into eloquent-migration</li>
                <li>UI improvements on 'exam.event.blade.php'</li>
                <li>'Finished exam' migration done. </li>
                <li>'Upcoming exam' migration done.</li>   
                <li>'Upcoming exams' migrated</li>

            </ul>
            <h5>2017-09-14</h5>
            <ul>
                <li>Started migration to Eloquent model.</li>
                <li>Added eloquent models for some tables.</li>
                <li>Added foreign keys</li>
                <li>Indention fix on app.blade.php</li>

            </ul>
            <h5>2017-09-13</h5>
            <ul>
                <li>Changed some of the exam UI</li>
                <li>Fixed pending exams not showing due to existing applicant already taken.</li>
                <li>Fixed query storing wrong variables.</li> 
                

            </ul>
            <h5>2017-09-12</h5>
            <ul>
                <li>Reworked login. </li>
                <li>Changed home page to allow for instant registration (placeholder yet for signup form)</li>
                <li>Applicant Profile now editable by HR.</li>
                
<li></li>
            </ul>
            <h5>2017-09-10</h5>
            <ul>
                <li>Started on editing student information.</li>
                <li>Changed exam event tab of HR's dashboard to be tabulated.</li> 

            </ul>
            <h5>2017-09-06</h5>
            <ul>
                <li>Added Manage class function.</li>
                <li>Renamed various components to be more organized.</li>
                <li>Reorganized QuizController functions and changed some database structures.</li>
                <li>Added controls to enable, disable, or end the exam.</li>   

            </ul>
            <h5>2017-09-03</h5>
            <ul>
                <li>Recording of answers and scores implemented.</li>
                <li>Implemented exam serve. No submission yet.</li>

            </ul>
            <h5>2017-09-03</h5>
            <ul>
                <li>>Questions now showing on a exam event. (No submission however)</li

            </ul>
            <h5>2017-09-02</h5>
            <ul>
                <li>Deleted unused Eloquent models. (To be implemented soon however)</li>
                <li>Initiated working directory.</li> 

            </ul>
            <h5>2017-08-30</h5>
            <ul>
                <li>Add exam event implemented.</li>

            </ul>
            <h5>2017-08-22</h5>
            <ul>
                <li>Added functionality to applicant exam panel</li>
                <li>Fixed a missing column in 'questions' table.</li>
                <li>Changed HR panel</li>
                <li>Added Seeders to fill data</li>
                <li>Corrected query bug</li>

            </ul>
            <h5>2017-08-21</h5>
            <ul>
                <li>'Exam Events' and 'Manage Class' now shows data. </li>
                <li>Resorted to hard-code instead of relationships.</li>
                <li>Changed Classe model</li>
                <li>Resetted database to fix relationships.</li>

            </ul>
            <h5>2017-08-20</h5>
            <ul>
                <li>Database done.</li>
                
            </ul>
            <h5>2017-08-20</h5>
            <ul>
                <li>Initial commit.</li>
            </ul>

        </div>
    </div>

    @endsection