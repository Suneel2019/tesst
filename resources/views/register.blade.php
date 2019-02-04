@include ('header.php')


<form method="POST" action="">
  <div class="container">
    	<h1>Registration Form</h1>
   		
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
    		
    		 <label for="psw-repeat"><b>Repeat Password</b></label>
    		<input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    		
    	</div>

    		<hr>

    	<div class="form-group">

    	<label for=""><b>Remember Me</b></label>
    	<input type="checkbox">
    	
    	</div>

    	<div><button type="submit" class="registerbtn">Register</button></div>

    
  </div>
</form>



@include('inc.footer')