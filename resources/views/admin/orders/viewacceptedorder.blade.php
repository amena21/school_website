@include('admin.include.head');
@include('admin.include.asidemenu');


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Orders</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Orders</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Orders</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          #
                      </th>
                      <th style="width: 10%">
                         Name
                      </th>
                      <th style="width: 10%">
                       Address
                  
                      </th>
                      <th style="width: 10%">
                          Email
                      </th>
                      <th style="width: 10%">
                          phone
                      </th>
                      <th style="width: 5%">
                          pay_type
                      </th>
                      <th style="width: 10%">
                          products_title
                      </th>
                      <th style="width: 1%">
                          quantity
                      </th>
                      <th style="width: 10%">
                          totalprice
                      </th>
                      <th style="width: 10%">
                          tracking no
                      </th>
                      <th style="width: 4%">
                          status
                      </th>
                      <th style="width: 4%">
                     
                      </th>
                      <!-- <th style="width: 8%" class="text-center">
                          Status
                      </th> -->
                      <th style="width: 10%">
                      </th>
                  </tr>
              </thead>
              <tbody>

              @foreach($data as $data)
                  <tr>
                      <td>
                          #
                      </td>
                      <td>
                          <a>
                             {{$data->name}}
                          </a>
                          <!-- <br/>
                          <small>
                              Created 01.01.2019
                          </small> -->
                      </td>
                      <td>
                      {{$data->address}}
                      </td>
                      <td>
                      {{$data->email}}
                      </td>
                      <td>
                      {{$data->phone}}
                      </td>
                      <td>
                      {{$data->pay_type}}
                      </td>
                      <td>
                      {{$data->products_title}}
                      </td>
                      <td>
                      {{$data->quantity}}
                      </td>
                      <td>
                      {{$data->totalprice}}
                      </td>

                      <td>
                      {{$data->tracking_no}}
                      </td>
                      <form action="{{url('update_order/'.$data->id)}}" method="POST">
                        @csrf 
                        @method('PUT')
                      <td> 
                      <select name="status" id="">
                     
                       <option {{ $data->status == '0'? 'selected':''}} value="0"> Pending </option>
                       <option {{ $data->status == '1'? 'selected':''}} value="1"> Order Accepted  </option>
                       <option {{ $data->status == '2'? 'selected':''}} value="2"> Food on the way  </option>
                       <option {{ $data->status == '3'? 'selected':''}} value="3"> Delivered  </option>
                      </select>

                     
                      </td>
                     <td>  <button type="submit" class="btn btn-info btn-sm float-end ">update</button></td>
                       </form>
                      <!-- <td class="project-state">
                          <span class="badge badge-success">Registered</span>
                      </td> -->
                      <td class="project-actions text-right">
                          <!-- <a class="btn btn-primary btn-sm" href="{{url('/viewdetails',$data->id)}}">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a> -->
                          <a class="btn btn-primary btn-sm" href="{{url('/editabout',$data->id)}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              View
                          </a>
                          <!-- <a class="btn btn-danger btn-sm" href="{{url('/deleteabout',$data->id)}}">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a> -->
                      </td>
                  </tr>
                
                @endforeach
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@include('admin.include.footer');