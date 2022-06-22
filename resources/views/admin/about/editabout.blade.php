@include('admin.include.head');
@include('admin.include.asidemenu');

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit About</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit About</li>
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
              <form action="{{url('/updateabout',$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf 

                 
                <div class="form-group">
                    <label for="inputName">Title</label>
                    <input type="text" id="inputName" class="form-control" name="title" value="{{$data->title}}"required>
                  </div>
                  <div class="form-group">
                    <label for="inputName">short Description</label>
                    <input type="text" id="inputName" class="form-control" name="short_description" value="{{$data->short_description}}"required>
                  </div>
                  <div class="form-group">
                    <label for="inputDescription">Description</label>
                    <input id="inputDescription" class="form-control" rows="4" name="description" value="{{$data->description}}" required>
                  </div>

                  <div class="form-group">
                    <label for="inputDescription">Founder Name</label>
                    <input id="inputDescription" class="form-control" rows="4" name="foundername" value="{{$data->foundername}}" required>
                  </div>
                  <div class="form-group">
                    <label for="inputDescription">Designation</label>
                    <input id="inputDescription" class="form-control" rows="4" name="founderdesignation" value="{{$data->founderdesignation}}" required>
                  </div>
                  <div class="form-group">
                    <label for="inputDescription">Message</label>
                    <input id="inputDescription" class="form-control" rows="4" name="message" value="{{$data->message}}" required>
                  </div>


              <div class="form-group">
                <label for="inputClientCompany">Old Image</label>
                <img style="height:150px;width:150px;" src="/aboutimage/{{$data->image}}">
               
              </div>

                 
              <div class="form-group">
                <label for="">Upload Image</label>
                <input type="file" id="inputClientCompany" class="form-control" name="image" required>
              </div>
            
            
              <button type="submit" class="btn btn-success"><span>Update</span></button>
             

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


