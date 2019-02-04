@include('inc.header')
<div class="container">
	<div class="row">
		<div class="col-md-6">
			
<form class="form-horizontal" method="POST" action="{{ url('/insert')}}">

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
        <input type="text" name="Title" placeholder="Title" class="form-control-plaintext" id="staticEmail">
      </div>
    </div><br><br>
    <div class="form-group">
      <label for="InputPassword1" class="col-lg-2 control-label">Description</label>
      <div class="col-sm-10">
      <textarea class="form-control" name="Description" placeholder="Description"></textarea>
    </div><br><br>

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
         <button type="submit" class="btn btn-primary btn-sm">Submit</button>
          <button type="reset" class="btn btn-danger btn-sm">Cancel</button> 
          <a href="/" class="btn btn-info btn-sm"><< Home Page</a>
      </div>
 
  </div>
     </fieldset>
</form>
		</div>
	</div>
</div>

@include('inc.footer')