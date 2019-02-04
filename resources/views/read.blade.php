@include('inc.header')
<div class="container">

	<div class="card" style="width: 20rem;">
 		 <div class="card-body">
    		<h5 class="card-title">{{$articles->Title}}</h5>
    		<h6 class="card-subtitle mb-2 text-muted">Description</h6>
    		<p class="card-text">{{$articles->Description}}</p>

				<a href="/dashboard" class="card-link"><< Dashboard</a>
	</div>
</div>

@include('inc.footer')

