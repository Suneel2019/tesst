<?php echo $__env->make('inc.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="container">
	<div class="row">
      <div>
        <?php if(session('info')): ?>
        <div class="alert alert-success">
          <?php echo e(session('info')); ?>

        </div>
        <?php endif; ?>
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
    <?php if(count($articles)>0): ?>

    <?php $__currentLoopData = $articles->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr class="table-active">
      <td><?php echo e($article->Id); ?></td>
      <td><?php echo e($article->Title); ?></td>
      <td><?php echo e($article->Description); ?></td>
      <td>
      	<a href='<?php echo e(url("/read/{$article->Id}")); ?>'' class="btn btn-primary btn-sm">Read</a>
      	<a href='<?php echo e(url("/update/{$article->Id}")); ?>'' class="btn btn-success btn-sm">Update</a>
      	<a href='<?php echo e(url("/delete/{$article->Id}")); ?>'' class="btn btn-danger btn-sm">Delete</a>
      </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
  </tbody>
</table>

	</div>
</div>

<?php echo $__env->make('inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
