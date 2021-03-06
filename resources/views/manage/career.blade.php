<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
</head>
<body>

<div class="container">

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title text-center">Career's</h4>
          <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModal"><span class = "fa fa-plus"></span> Job Title</button>
        </div>
        
        <!-- Modal body -->
        
        <div class="modal-body">
            <div class="container-fluid py-2">
                <table class="table table-striped table-hover" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                          
                            <th>Job Title</th>
                            <th>Post Date</th>
                            <th>End Date</th>
                            <th>Vacant</th>
                            <th class="none"></th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($jobshow as $show)
                      <tr>
                        <td>{{$show->job_title}}</td>
                        <td>{{$show->post_date}}</td>
                        <td>{{$show->last_date}}</td>
                        <td>{{$show->vacancy}}</td>
                        <td></td>
                        <td>
                          <a href="" class="btn btn-outline-primary">Edit</a>
                          <a href="" class="btn btn-outline-danger">Delete</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
@include('manage.add_career')  
</div>

</body>
</html>

