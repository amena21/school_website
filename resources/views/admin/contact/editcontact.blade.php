@include('admin.include.head');
@include('admin.include.asidemenu');

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Contact</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Contact</li>
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
              <form action="{{url('/updatecontact',$data->id)}}" method="post">
                @csrf 





                <div class="form-group">
                    <label for="inputName">Title</label>
                    <input type="text" id="inputName" class="form-control" name="title" value="{{$data->title}}" required>
                  </div>
                  <div class="form-group">
                    <label for="inputDescription">Phone</label>
                    <input id="inputDescription" type="number" class="form-control" name="phone" value="{{$data->phone}}" required>
                  </div>
                  <div class="form-group">
                    <label for="inputDescription">Email</label>
                    <input id="inputDescription" type="email" class="form-control" name="email" value="{{$data->email}}" required>
                  </div>
                  <div class="form-group">
                    <label for="inputDescription">Address</label>
                    <input id="inputDescription" type="text" class="form-control" name="address" value="{{$data->address}}" required>
                  </div>

                  <div class="form-group">
                    <label for="inputDescription">Facebook link</label>
                    <input id="inputDescription" type="text" class="form-control" name="fblink" value="{{$data->fblink}}" required>
                  </div>
                  <div class="form-group">
                    <label for="inputDescription">Instagram Link</label>
                    <input id="inputDescription" type="text" class="form-control" name="instagramlink" value="{{$data->instagramlink}}" required>
                  </div>
                  <div class="form-group">
                    <label for="inputDescription">Youtube Link</label>
                    <input id="inputDescription" type="text" class="form-control" name="youtubelink" value="{{$data->youtubelink}}" required>
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