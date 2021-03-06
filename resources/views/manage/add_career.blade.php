
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">Manage Hiring Job</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="add details job" method="POST">
        {{ csrf_field() }}
          <div class="form-group d-flex">
            <label for="name" class="mt-1 p-0 col-md-3">Job Title :</label>
            <input type="name" class="form-control col-md-8" id="job_title" name="title" placeholder="Input Job Title" required>
          </div>
          <div class="form-group d-flex">
            <label for="" class="mt-1 p-0 col-md-3">Post Date</label>
            <input class="form-control col-md-7 " type="date" id="dt" name="post_date" onchange="postdate();" required/>
            <input class="form-control col-md-7 " type="text" id="ndt"  onclick="mydate();" hidden required />
            <input class="col-1" type="button" Value="Date" onclick="mydate();" required />
          </div>
          <div class="form-group d-flex">
            <label for="" class="mt-1 p-0 col-md-3">End Date</label>
            <input class="form-control col-md-7 " type="date" id="enddt" name="last_date" onchange="enddate();" required/>
            <input class="form-control col-md-7 " type="text" id="endndt"  onclick="edate();" hidden  required/>
            <input class="col-1" type="button" Value="Date" onclick="edate();" required />
          </div>
          <div class="form-group d-flex">
            <label for="disc" class="mt-1 p-0 col-md-3">Description :</label>
            <input type="textarea" class="form-control col-md-8" name="job_description" placeholder="Input Description" required>
          </div>
          <div class="form-group d-flex">
            <label for="exp" class="mt-1 p-0 col-md-3">Experience :</label>
            <input type="textarea" class="form-control col-md-8" name="experience" placeholder="Input Experience" required>
          </div>
          <div class="form-group d-flex">
            <label for="vs" class="mt-1 p-0 col-md-3">Vacancy Status:</label>
            <input type="textarea" class="form-control col-md-8" name="vacancy" placeholder="Input Vacancy" required>
          </div>
          <div class="form-group d-flex">
            <label for="loc" class="mt-1 p-0 col-md-3">Location :</label>
            <input type="textarea" class="form-control col-md-8" name="location" placeholder="Input Location" required>
          </div>
          <div class="modal-footer">
        <button class="btn btn-outline-danger">Cancel</button>
        <button class="btn btn-outline-success">Save</button>
      </div>
     
          
          </form>
      </div>
     
    </div>
  </div>
</div>
<script>
  //postdate
function mydate()
{
  //alert("");
document.getElementById("dt").hidden=false;
document.getElementById("ndt").hidden=true;
}
function postdate()
{
 d=new Date(document.getElementById("dt").value);
dt=d.getDate();
mn=d.getMonth();
mn++;
yy=d.getFullYear();
document.getElementById("ndt").value=dt+"/"+mn+"/"+yy
document.getElementById("ndt").hidden=false;
document.getElementById("dt").hidden=true;
}

//enddate
function edate()
{
  //alert("");
document.getElementById("enddt").hidden=false;
document.getElementById("endndt").hidden=true;
}
function enddate()
{
 d=new Date(document.getElementById("enddt").value);
dt=d.getDate();
mn=d.getMonth();
mn++;
yy=d.getFullYear();
document.getElementById("endndt").value=dt+"/"+mn+"/"+yy
document.getElementById("endndt").hidden=false;
document.getElementById("enddt").hidden=true;
}
</script>