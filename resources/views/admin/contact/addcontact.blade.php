@include('admin.include.head');
@include('admin.include.asidemenu');


 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Contact</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add contact</li>
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
              <form action="{{route('addcontact')}}" method="post">
                @csrf 

                  <div class="form-group">
                    <label for="inputName">Title</label>
                    <input type="text" id="inputName" class="form-control" name="title" required>
                  </div>
                  <div class="form-group">
                    <label for="inputDescription">Phone</label>
                    <input id="inputDescription" type="number" class="form-control" name="phone" required>
                  </div>
                  <div class="form-group">
                    <label for="inputDescription">Email</label>
                    <input id="inputDescription" type="email" class="form-control" name="email" required>
                  </div>
                  <div class="form-group">
                    <label for="inputDescription">Address</label>
                    <input id="inputDescription" type="text" class="form-control" name="address" required>
                  </div>

                  <div class="form-group">
                    <label for="inputDescription">Facebook link</label>
                    <input id="inputDescription" type="text" class="form-control" name="fblink" required>
                  </div>
                  <div class="form-group">
                    <label for="inputDescription">Instagram Link</label>
                    <input id="inputDescription" type="text" class="form-control" name="instagramlink" required>
                  </div>
                  <div class="form-group">
                    <label for="inputDescription">Youtube Link</label>
                    <input id="inputDescription" type="text" class="form-control" name="youtubelink" required>
                  </div>
             
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