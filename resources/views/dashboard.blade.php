@include('inc.header')

<div class="container">
	<div class="row">
      <div>
        @if(session('info'))
        <div class="alert alert-success">
          {{session('info')}}
        </div>
        @endif
      </div>
    </div> 
		
		<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th >Id</th>
      <th>Title</th>
      <th>Description</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @if(count($articles)>0)

    @foreach($articles->all() as $article)
    <tr class="table-active">
      <td>{{ $article->Id}}</td>
      <td>{{$article->Title }}</td>
      <td>{{ $article->Description}}</td>
      <td>
      	<a href='{{ url("/read/{$article->Id}")}}'' class="btn btn-primary btn-sm">Read</a>
      	<a href='{{ url("/update/{$article->Id}")}}'' class="btn btn-success btn-sm">Update</a>
      	<a href='{{ url("/delete/{$article->Id}")}}'' class="btn btn-danger btn-sm">Delete</a>
      </td>
    </tr>
    @endforeach
    @endif
  </tbody>
</table>

	</div>
</div>

@include('inc.footer')
