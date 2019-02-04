<?php echo $__env->make('inc.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			
<form class="form-horizontal" method="POST" action="<?php echo e(url('/edit', array($articles->Id))); ?>">

<?php echo e(csrf_field()); ?>


  <fieldset>
    <?php if(count($errors)>0): ?>

    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="alert alert-danger"><?php echo e($error); ?></div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php endif; ?>
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
<?php echo $__env->make('inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>