@include('inc.header')
<div class="container">
	<div class="row">
		<div class="col-md-6">
			
<form class="form-horizontal" method="POST" action="{{ url('/edit', array($articles->Id))}}">

{{ csrf_field() }}

  <fieldset>
    @if(count($errors)>0)

    @foreach($errors->all() as $error)
    <div class="alert alert-danger">{{$error}}</div>
    @endforeach

    @endif
    <div class="form-group">
      <label for="staticEmail" class="col-sm-2 col-form-label">Title</label>
      <div class="col-sm-10">
        <input type="text" name="Title" value="<?php echo $articles->Title; ?>" placeholder="Title" class="form-control-plaintext" id="staticEmail">
      </div>
    </div><br><br>
    <div class="form-group">
      <label for="InputPassword1" class="col-lg-2 control-label">Description</label>
      <div class="col-sm-10">
      <textarea class="form-control" name="Description" placeholder="Description"><?php echo $articles->Description; ?></textarea>
    </div><br><br>

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
         <button type="submit" class="btn btn-primary">Update</button>
          <button type="reset" class="btn btn-default">Cancel</button> 
      </div>
 
  </div>
     </fieldset>
</form>
		</div>
	</div>
</div>
@include('inc.footer')