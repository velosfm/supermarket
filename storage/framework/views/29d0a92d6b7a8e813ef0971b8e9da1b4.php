
<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <div class="row d-flex justify-content-center">
        <div class="col-md-9">
            <div class="card p-4 mt-3">
                <h3 class="heading mt-5 text-center">Γειά σας ! Τι ψάχνουμε;</h3>
                <div class="justify-content-center px-5">
                    <form class="main-saerch" method="GET" action="/results" name="search" id="search">
                         <div class="row">
                        <div class="col-8 ">
                            <input type="text" class="form-control" name="search" id="search" placeholder="Πληκτρολογείστε εδώ το προιόν">
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary mb-3">Αναζήτηση</button>
                        </div>
                    </div>
                    </form>                             
                </div>
                <div class="row mt-4 g-1 px-4 mb-5">
                    <div class="col-md-2">
                        <div class="card-inner p-3 d-flex flex-column align-items-center"> <a href="/"><img src="/assets/images/icons/icons8-product-100.png" width="50">
                            <div class="text-center mg-text"> <span class="mg-text">Προιόντα</span> </div></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card-inner p-3 d-flex flex-column align-items-center"> <a href="/kalathi"><img src="/assets/images/icons/icons8-cart-64.png" width="50">
                            <div class="text-center mg-text"> <span class="mg-text">Καλάθι Νοικοκυριού</span> </div></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card-inner p-3 d-flex flex-column align-items-center"> <a href="/laxanika"><img src="/assets/images/icons/icons8-groceries-64.png" width="50">
                            <div class="text-center mg-text"> <span class="mg-text">Οπωροκηπευτικά</span> </div></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card-inner p-3 d-flex flex-column align-items-center"> <img src="/assets/images/icons/icons8-energy-64.png" width="50">
                            <div class="text-center mg-text"> <span class="mg-text">Ενέργεια</span> </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card-inner p-3 d-flex flex-column align-items-center"> <img src="/assets/images/icons/icons8-cart-64.png" width="50">
                            <div class="text-center mg-text"> <span class="mg-text">Προσφορές</span> </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card-inner p-3 d-flex flex-column align-items-center"> <img src="/assets/images/icons/icons8-gasoline-refill-100.png" width="50">
                            <div class="text-center mg-text"> <span class="mg-text">Καύσιμα</span> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\supermarket\resources\views/Home/index.blade.php ENDPATH**/ ?>