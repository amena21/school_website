@include('admin.include.head');
@include('admin.include.asidemenu');

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Time</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit time</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
 <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <form action="{{url('/updateopeningtime',$data->id)}}" method="post">
                @csrf 

                 
                <div class="form-group">
                    <label for="inputName">Day</label>
                    <input type="text" id="inputName" class="form-control" name="day" value="{{$data->day}}"required>
                  </div>
                  <div class="form-group">
                    <label for="inputName">Open Time</label>
                    <input type="time" id="inputName" class="form-control" name="open_time" value="{{$data->open_time}}"required>
                  </div>
                  <div class="form-group">
                    <label for="inputDescription">Close Time</label>
                    <input  type="time" class="form-control" name="close_time" value="{{$data->close_time}}" required>
                  </div>
             
            
              <button type="submit" class="btn btn-success"><span>Update</span></button>
              <a href="#" class="btn btn-secondary">Cancel</a>

            </form>
            
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
       
      </div>
      <div class="row">
        <div class="col-12">
          
        </div>
      </div>
    </section>
</div>
            


@include('admin.include.footer');


