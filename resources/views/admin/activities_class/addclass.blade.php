@include('admin.include.head');
@include('admin.include.asidemenu');


 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Class</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Class</li>
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
              <h3 class="card-title">Text</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <form action="{{route('addclass')}}" method="post" enctype="multipart/form-data">
                @csrf 

                <div class="form-group">
                    <label for="inputName">Title</label>
                    <input type="text" id="inputName" class="form-control" name="title" required>
                  </div>
                  <div class="form-group">
                <label for="inputClientCompany">Image</label>
                <input type="file" id="inputClientCompany" class="form-control" name="image" required>
              </div>
                  <div class="form-group">
                    <label for="inputName">Date</label>
                    <input type="text" id="inputName" class="form-control" name="date" required>
                  </div>
                  <div class="form-group">
                    <label for="inputName">Description1</label>
                    <input type="text" id="inputName" class="form-control" name="description1" required>
                  </div>
                  <div class="form-group">
                    <label for="inputName">Description2</label>
                    <input type="text" id="inputName" class="form-control" name="description2" required>
                  </div>
                  <div class="form-group">
                    <label for="inputName">Description3</label>
                    <input type="text" id="inputName" class="form-control" name="description3" required>
                  </div>
                  <div class="form-group">
                    <label for="inputName">Qoute</label>
                    <input type="text" id="inputName" class="form-control" name="qoute" required>
                  </div>
               



                  <!-- <div class="form-group">
                    <label for="inputDescription">Description</label>
                    <input id="inputDescription" class="form-control" rows="4" name="description" required>
                  </div> -->
              <!-- <div class="form-group">
                <label for="inputStatus">Status</label>
                <select id="inputStatus" class="form-control custom-select">
                  <option selected disabled>Select one</option>
                  <option>On Hold</option>
                  <option>Canceled</option>
                  <option>Success</option>
                </select>
              </div> -->
           
              <!-- <a href="#" class="btn btn-secondary">Cancel</a>
              <input type="submit" value="save" class="btn btn-success"> -->
              <button type="submit" class="btn btn-success"><span>Submit</span></button>

            </form>
            
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Budget</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputEstimatedBudget">Estimated budget</label>
                <input type="number" id="inputEstimatedBudget" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputSpentBudget">Total amount spent</label>
                <input type="number" id="inputSpentBudget" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputEstimatedDuration">Estimated project duration</label>
                <input type="number" id="inputEstimatedDuration" class="form-control">
              </div>
            </div>-->
            <!-- /.card-body -->
         <!-- </div>
         /.card -->
       <!-- </div> -->
      </div>
      <div class="row">
        <div class="col-12">
          
        </div>
      </div>
    </section>
</div>

    @include('admin.include.footer');