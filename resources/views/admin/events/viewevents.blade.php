@include('admin.include.head');
@include('admin.include.asidemenu');


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Events</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Events</li>
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
          <h3 class="card-title">View Events</h3>

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
                          Title
                      </th>
                      <th>
                          Image
                      </th>
                      <th >
                          Date
                      </th>
                      <th>
                          Description
                      </th>
                     
                      <!-- <th style="width: 8%" class="text-center">
                          Status
                      </th> -->
                    
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
                             {{$data->title}}
                          </a>
                          <!-- <br/>
                          <small>
                              Created 01.01.2019
                          </small> -->
                      </td>

                      <td class="project_progress">
                     <img style="height:30px;width:40px;" src="/eventsimage/{{$data->image}}">
                      </td>
                      <td>
                      {{$data->date}}
                      </td>
                      <td>
                      {{$data->description}}
                      </td>
                      
                     
                      <!-- <td class="project-state">
                          <span class="badge badge-success">Registered</span>
                      </td> -->
                      <td class="project-actions text-right">
                          <!-- <a class="btn btn-primary btn-sm" href="{{url('/viewdetails',$data->id)}}">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a> -->
                          <a class="btn btn-info btn-sm" href="{{url('/editevents',$data->id)}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="{{url('/deleteevents',$data->id)}}">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
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