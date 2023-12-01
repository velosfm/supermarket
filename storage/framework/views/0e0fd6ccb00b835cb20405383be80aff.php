
<?php $__env->startSection('content'); ?>
<h1>Προιόντα Καλαθιού</h1>
<div class="container ">
  <div class="row justify-content-md-center">
            <?php $__currentLoopData = $basket_data['retailers']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chain): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div><h2><?php echo e($chain['name']); ?></h2></div>
            <ul class="list-group w-50 mx-auto">
             <?php $__currentLoopData = $chain['basket']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <li class="list-group-item">
                <div class="row">
                <div class="col-sm-4">
            <img src="<?php echo e($basket_data['base_url']); ?><?php echo e($prod['IMAGE']); ?>" class="img-thumbnail" width="100px">
        </div>
        <div class="col-sm-8">
            <ul class="list-group">
                <li class="prod-list"><?php echo e($prod['NAME']); ?></li>
                <li class="prod-list">Τιμή: <?php echo e($prod['PRICE']); ?></li>
                <li class="prod-list">Τιμή/<?php echo e($prod['UNIT']); ?>: <?php echo e($prod['PRICE_NORMALIZED']); ?></li>
            </ul>
        </div>
    </div>
           </li>        
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </ul>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<div class="data_date"> Οι τιμές αφορούν την περίοδο Από: <?php echo e($basket_data['from']); ?> Έως: <?php echo e($basket_data['to']); ?></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\supermarket\resources\views/Home/kalathi01.blade.php ENDPATH**/ ?>