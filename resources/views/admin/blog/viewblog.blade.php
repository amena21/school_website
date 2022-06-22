@include('admin.include.head');
@include('admin.include.asidemenu');


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blog</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blog</li>
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
          <h3 class="card-title">View Blog</h3>

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
                          Description1
                      </th>
                      <th>
                          Description2
                      </th>
                      <th>
                          Description3
                      </th>
                      <th>
                      Qoute
                      </th>
                      <!-- <th style="width: 8%" class="text-center">
                          Status
                      </th> -->
                      <th>
                        Action
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
                             {{$data->title}}
                          </a>
                          <!-- <br/>
                          <small>
                              Created 01.01.2019
                          </small> -->
                      </td>

                      <td class="project_progress">
                     <img style="height:30px;width:40px;" src="/blogimage/{{$data->image}}">
                      </td>
                      <td>
                      {{$data->date}}
                      </td>
                      <td>
                      {{$data->description1}}
                      </td>
                      <td>
                      {{$data->description2}}
                      </td>
                      <td>
                      {{$data->description3}}
                      </td>
                      <td>
                      {{$data->qoute}}
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
                          <a class="btn btn-info btn-sm" href="{{url('/editblog',$data->id)}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="{{url('/deleteblog',$data->id)}}">
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