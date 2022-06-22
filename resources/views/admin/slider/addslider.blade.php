@include('admin.include.head');
@include('admin.include.asidemenu');


 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
   <div class="container-fluid">
    <div class="row mb-2">
     <div class="col-sm-6">
      <h1>Add Slider</h1>
     </div>
     <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
       <li class="breadcrumb-item"><a href="#">Home</a></li>
       <li class="breadcrumb-item active">Add Slider</li>
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
       <form action="{{route('addslider')}}" method="POST" enctype="multipart/form-data">
        @csrf 
                                                                                                                    
          
       <div class="form-group">
        <label>Image (background) </label>
        <input type="file" class="form-control" name="image" required>
       </div>
       <div class="form-group">
        <label>Image2 (background) </label>
        <input type="file" class="form-control" name="image2" required>
       </div>
       <!-- <div class="form-group">
        <label for="inputClientCompany">Image3 (background) </label>
        <input type="file" id="inputClientCompany3" class="form-control" name="image3" required>
       </div>
       <div class="form-group">
        <label for="inputClientCompany4">Image 4</label>
        <input type="file" id="inputClientCompany4" class="form-control" name="image4" required>
       </div>
       <div class="form-group">
        <label for="inputClientCompany5">Image 5</label>
        <input type="file" id="inputClientCompany5" class="form-control" name="image5" required>
       </div>
       <div class="form-group">
        <label for="inputClientCompany6">Image 6</label>
        <input type="file" id="inputClientCompany6" class="form-control" name="image6" required>
       </div>
       <div class="form-group">
        <label for="inputClientCompany7">Image 7</label>
        <input type="file" id="inputClientCompany7" class="form-control" name="image7" required>
       </div>
       <div class="form-group">
        <label for="inputClientCompany8">Image 8</label>
        <input type="file" id="inputClientCompany8" class="form-control" name="image8" required>
       </div>


       <div class="form-group">
        <label for="inputClientCompany9">Image 9</label>
        <input type="file" id="inputClientCompany9" class="form-control" name="image9" required>
       </div>
       <div class="form-group">
        <label for="inputClientCompany10">Image 10</label>
        <input type="file" id="inputClientCompany10" class="form-control" name="image10" required>
       </div>
       <div class="form-group">
        <label for="inputClientCompany11">Image 11</label>
        <input type="file" id="inputClientCompany11" class="form-control" name="image11" required>
       </div>
       <a href="#" class="btn btn-secondary">Cancel</a> -->
       <!-- <input type="submit" value="save" class="btn btn-success"> -->
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



<!-- 






    <html lang="en">
<head>
  <title>Laravel 8 Multiple Image Upload Example - ItSolutionStuff.com</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
  
<div class="container lst">
  
@if (count($errors) > 0)
<div class="alert alert-danger">
    <strong>Sorry!</strong> There were more problems with your HTML input.<br><br>
    <ul>
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
    </ul>
</div>
@endif
  
@if(session('success'))
<div class="alert alert-success">
  {{ session('success') }}
</div> 
@endif
  
<h3 class="well">Laravel 8 Multiple Image Upload - ItSolutionStuff.com</h3>
 
<form method="post" action="{{url('file')}}" enctype="multipart/form-data">
    @csrf
  
    <div class="input-group hdtuto control-group lst increment" >
      <input type="file" name="filenames[]" class="myfrm form-control">
      <div class="input-group-btn"> 
        <button class="btn btn-success" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add</button>
      </div>
    </div>
    <div class="clone hide">
      <div class="hdtuto control-group lst input-group" style="margin-top:10px">
        <input type="file" name="filenames[]" class="myfrm form-control">
        <div class="input-group-btn"> 
          <button class="btn btn-danger" type="button"><i class="fldemo glyphicon glyphicon-remove"></i> Remove</button>
        </div>
      </div>
    </div>
  
    <button type="submit" class="btn btn-success" style="margin-top:10px">Submit</button>
  
</form>        
</div>
  
<script type="text/javascript">
    $(document).ready(function() {
      $(".btn-success").click(function(){ 
          var lsthmtl = $(".clone").html();
          $(".increment").after(lsthmtl);
      });
      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".hdtuto").remove();
      });
    });
</script>
  
</body>
</html> -->