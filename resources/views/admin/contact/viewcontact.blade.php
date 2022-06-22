@include('admin.include.head');
@include('admin.include.asidemenu');


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Contact</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Contact info</li>
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
          <h3 class="card-title">Contact info</h3>

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
                      <th style="width: 10%">
                         Phone
                      </th>
                      <th style="width: 10%">
                          Email
                      </th>
                      <th style="width: 20%">
                          Address
                      </th>
                      <th style="width: 6%">
                          Facebook Link
                      </th>
                      <th style="width: 6%">
                          Instagram Link
                      </th>
                      <th style="width: 6%">
                          Youtube Link
                      </th>
                      <!-- <th style="width: 8%" class="text-center">
                          Status
                      </th> -->
                      <th style="width: 20%">
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
                      <td>
                      {{$data->phone}}
                      </td>
                      <td>
                      {{$data->email}}
                      </td>
                      <td>
                      {{$data->address}}
                      </td>
                      <td>
                      {{$data->fblink}}
                      </td>
                      <td>
                      {{$data->instagramlink}}
                      </td>
                      <td>
                      {{$data->youtubelink}}
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
                          <a class="btn btn-info btn-sm" href="{{url('/editcontact',$data->id)}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="{{url('/deletecontact',$data->id)}}">
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