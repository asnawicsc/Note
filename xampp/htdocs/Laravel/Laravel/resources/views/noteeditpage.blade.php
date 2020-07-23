<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" i>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" ></script>

  
     <div class="col-lg-6">
      <div class="card">
           <div class="card-header">Edit Note</div>
        <div class="card-body">
         <form  action="{{ action('NoteController@update', $id) }}" method="POST">
          {{ csrf_field()}}
            {{ method_field('PUT') }}


      <div class="form-group">
        <label >Name</label>
        <input type="text" id="name" name="name" value="{{ $notes->name }}" placeholder="Name" class="form-control" >
      </div>
      <div class="form-group">
        <label >Description</label>
        <input  type="text" id="description" name="description" value="{{ $notes->description }}"  class="form-control" placeholder="Description" >
      </div>

     
      
        <button type="submit" class="btn btn-primary">Update</button>
  
      </form>
      </div>
      </div>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>