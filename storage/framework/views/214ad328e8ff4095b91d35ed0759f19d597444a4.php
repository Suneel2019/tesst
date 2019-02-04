<?php echo $__env->make('inc.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<style>
	h1{
		color: white;
	}

	.card{

		width:50%;
		text-align: center;
		background: #0080ff;

	}


</style>

<div class="card">

	<form method="POST" action="">
  <div class="container">
    <h1>Login</h1>
   
    <hr>
    <div class="form-group">
    	
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    </div>
    

    <div class="form-group">

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    	
    </div>
    

    <div class="form-group">

    <label for=""><b>Remember Me</b></label>
    <input type="checkbox">
    	
    </div>

    <div>
    	<button type="Submit" class="btn btn-success btn-lg">Log In</button>
    </div>
    
</form>
	
</div>



<?php echo $__env->make('inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>


