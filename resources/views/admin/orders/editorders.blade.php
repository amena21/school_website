@include('admin.include.head');
@include('admin.include.asidemenu');

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>View Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">View Details</li>
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
              <h3 class="card-title">View Details</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <!-- <form action="{{url('/updateabout',$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf  -->

                 
                <div class="form-group">
                    <label for="inputName">  Name</label>
                    <span type="text" id="inputName" class="form-control" >{{$data->name}}</span>
                  </div>
                  <div class="form-group">
                    <label for="inputName">Address</label>
                    <span type="text" id="inputName" class="form-control" >{{$data->address}}</span>
                  </div>
                  <div class="form-group">
                    <label for="inputDescription">Email</label>
                    <span type="text" id="inputName" class="form-control" >{{$data->email}}</span>
                  </div>
              <div class="form-group">
                <label for="inputClientCompany">phone</label>
                <span type="text" id="inputName" class="form-control" >{{$data->phone}}</span>
               
              </div>

                 
              <div class="form-group">
                <label for=""> pay_type</label>
                <span type="text" id="inputName" class="form-control" >{{$data->pay_type}}</span>
              </div>
              <div class="form-group">
                <label for=""> products_title</label>
                <span type="text" id="inputName" class="form-control" >{{$data->products_title}}</span>
               
              </div>

                 
              <div class="form-group">
                <label for="inputClientCompany">quantity</label>
                <span type="text" id="inputName" class="form-control" >{{$data->quantity}}</span>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">totalprice</label>
                <span type="text" id="inputName" class="form-control" >{{$data->totalprice}}</span>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">tracking no</label>
                <span type="text" id="inputName" class="form-control" >{{$data->tracking_no}}</span>
              </div>

              <div class="form-group">
                <label for="inputClientCompany">status</label>
                <span type="text" id="inputName" class="form-control" > {{ $data->status == '0'? ' Pending ':''}} 
                     {{ $data->status == '1'? 'Order Accepted  ':''}} 
                    {{ $data->status == '2'? 'Food on the way ':''}} 
                    {{ $data->status == '3'? 'Delivered ':''}}
                   </span>
              </div>


           
              <!-- <button type="submit" class="btn btn-success"><span>Update</span></button>
              <a href="#" class="btn btn-secondary">Cancel</a> -->

            <!-- </form>
             -->
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


