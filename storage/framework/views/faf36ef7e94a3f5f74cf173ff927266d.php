
<?php $__env->startSection('content'); ?>
<h1>Τιμές Οπωροκηπευτικών</h1>
<div class="container">
    <div class="d-grid gap-3">
        <ul class="nav nav-tabs mb-3" id="ex1" role="tablist">
            <?php $__currentLoopData = $basket_data['retailers']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chain): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="nav-item" role="presentation">
                <a
                class="nav-link"
                id="ex1-tab-<?php echo e(Str::before($chain['logo'], '.png')); ?>"
                style="border-right: 1px solid #cccccc;"
                data-bs-toggle="tab"
                href="#ex1-tabs-<?php echo e(Str::before($chain['logo'], '.png')); ?>"
                role="tab"
                aria-controls="ex1-tabs-<?php echo e(Str::before($chain['logo'], '.png')); ?>"
                aria-selected="true"
                ><img src="<?php echo e($basket_data['base_url']); ?><?php echo e($chain['logo']); ?>" class="img-thumbnail" style="width: 100px;"></a
                >
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</div>
<div class="data_date"> Οι τιμές αφορούν την περίοδο Από: <?php echo e($basket_data['from']); ?> Έως: <?php echo e($basket_data['to']); ?></div>
<div class="container ">
  <div class="tab-content" id="ex1-content">
    <?php $__currentLoopData = $basket_data['retailers']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chain): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php if($loop->first): ?>
  <div
    class="tab-pane fade show active" 
    id="ex1-tabs-<?php echo e(Str::before($chain['logo'], '.png')); ?>"
    role="tabpanel"
    aria-labelledby="ex1-tab-<?php echo e(Str::before($chain['logo'], '.png')); ?>"
  >  
  <div class="row justify-content-md-center">
            
            <div><h2><?php echo e($chain['name']); ?></h2></div>
            <ul class="list-group w-50 mx-auto">
             <?php $__currentLoopData = $chain['basket']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <li class="list-group-item" style="background: #afb9c7; text-align: center;">
                <div class="row">
                <div class="col-sm-4">

                  <?php if(empty($prod['IMAGE'])): ?>       
            <img src="<?php echo e($basket_data['base_url']); ?>default_kalathi.png" class="img-thumbnail" width="100px">
                   <?php else: ?>
            <img src="<?php echo e($basket_data['base_url']); ?><?php echo e($prod['IMAGE']); ?>" class="img-thumbnail" width="100px">
            <?php endif; ?>        
        </div>
        <div class="col-sm-8">
            <ul class="list-group" style="background: #dee9f3;">
                <li class="prod-list" style="font-weight: bold;"><?php echo e($prod['NAME']); ?></li>
                <li class="prod-list" style="font-weight: bold;">Ελάχιστη Τιμή: <?php echo e($prod['PRICE_MIN']); ?> €</li>
                <li class="prod-list"style="font-weight: bold;">Μέγιστη Τιμή: <?php echo e($prod['PRICE_MAX']); ?> €</li>
            </ul>
        </div>
    </div>
           </li>        
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </ul>
            
    </div> 

</div>
<?php else: ?>
<div
    class="tab-pane fade show" 
    id="ex1-tabs-<?php echo e(Str::before($chain['logo'], '.png')); ?>"
    role="tabpanel"
    aria-labelledby="ex1-tab-<?php echo e(Str::before($chain['logo'], '.png')); ?>"
  >  
  <div class="row justify-content-md-center">
            
            <div><h2><?php echo e($chain['name']); ?></h2></div>
            <ul class="list-group w-50 mx-auto">
             <?php $__currentLoopData = $chain['basket']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <li class="list-group-item" style="background: #afb9c7; text-align: center;">
                <div class="row">
                <div class="col-sm-4">
             <?php if(empty($prod['IMAGE'])): ?>       
            <img src="<?php echo e($basket_data['base_url']); ?>default_kalathi.png" class="img-thumbnail" width="100px">
                   <?php else: ?>
            <img src="<?php echo e($basket_data['base_url']); ?><?php echo e($prod['IMAGE']); ?>" class="img-thumbnail" width="100px">
            <?php endif; ?> 
        </div>
        <div class="col-sm-8">
            <ul class="list-group" style="background: #dee9f3;">
                <li class="prod-list" style="font-weight: bold;"><?php echo e($prod['NAME']); ?></li>
                <li class="prod-list" style="font-weight: bold;">Ελάχιστη Τιμή: <?php echo e($prod['PRICE_MIN']); ?> €</li>
                <li class="prod-list"style="font-weight: bold;">Μέγιστη Τιμή: <?php echo e($prod['PRICE_MAX']); ?> €</li>
            </ul>
        </div>
    </div>
           </li>        
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </ul>
            
    </div> 

</div>
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\supermarket\resources\views/Home/laxanika.blade.php ENDPATH**/ ?>