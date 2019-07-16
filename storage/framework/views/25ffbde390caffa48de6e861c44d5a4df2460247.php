<title>Sayadova Baker</title>
<?php $__env->startSection('content'); ?>
    <div class="banner">
        <div class="container">
            <h2 class="hdng"><span>S.Baker</span> with love</h2>
            <p>Наши торты сделают ваш день особенным</p>
            <a href="<?php echo e(route('products')); ?>">Купить сейчас</a>
            <div class="banner-text">
                <img src="images/2.png" alt=""/>
            </div>
        </div>
    </div>

    <div class="gallery">
        <div class="container">
            <div class="gallery-grids">
                <div class="col-md-8 gallery-grid glry-one">
                    <a href="<?php echo e(route('single',[$productsrand->id])); ?>"><img src="<?php echo e($productsrand->image_path); ?>"
                                                                           class="img-responsive" alt=""/>
                        <div class="gallery-info">
                            <p><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Подробнее</p>
                            <a class="shop" href="/single">подробнее</a>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                    <div class="galy-info">
                        <p><?php echo e($productsrand->name); ?></p>
                        <div class="galry">
                            <div class="prices">
                                <h5 class="item_price">₴<?php echo e($productsrand->price); ?></h5>
                            </div>

                            <div class="rating">
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <?php $__currentLoopData = $productsrand2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4 gallery-grid glry-two">
                        <a href="<?php echo e(route('single',[$key->id])); ?>"><img src="<?php echo e($key->image_path); ?>" class="img-responsive" alt=""/>
                            <div class="gallery-info galrr-info-two">
                                <p><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Посмотреть</p>
                                <a class="shop" href="<?php echo e(route('single',[$key->id])); ?>">Подробнее</a>
                                <div class="clearfix"></div>
                            </div>

                        </a>
                        <div class="galy-info">
                            <p><?php echo e($key->name); ?></p>
                            <div class="galry">
                                <div class="prices">
                                    <h5 class="item_price">₴<?php echo e($key->price); ?></h5>
                                </div>
                                <div class="rating">
                                    <span>☆</span>
                                    <span>☆</span>
                                    <span>☆</span>
                                    <span>☆</span>
                                    <span>☆</span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>