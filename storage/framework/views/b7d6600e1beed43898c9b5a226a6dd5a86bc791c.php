<?php echo $__env->make('inc.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container">

	<div class="card" style="width: 20rem;">
 		 <div class="card-body">
    		<h5 class="card-title"><?php echo e($articles->Title); ?></h5>
    		<h6 class="card-subtitle mb-2 text-muted">Description</h6>
    		<p class="card-text"><?php echo e($articles->Description); ?></p>

				<a href="/dashboard" class="card-link"><< Dashboard</a>
	</div>
</div>

<?php echo $__env->make('inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

