<?php $__env->startSection('header'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__currentLoopData = $categories->where('parent_id',0); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


        <li class="dropdown grid">
            <a href="<?php echo e(route('categories',['slug'=>$cat->slug])); ?>" class="dropdown-toggle list1"
               data-toggle="dropdown"><?php echo e($cat->name); ?> <b class="caret"></b></a>
            <ul class="dropdown-menu multi-column columns-1">
                <div class="row">
                    <div class="col-sm-10">
                        <ul class="multi-column-dropdown">
                            <?php if($cat->child()->count()>0): ?>
                                <?php $__currentLoopData = $cat->child()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo e(dd($cat->child()->get())); ?>

                                    <li><a class="list"
                                           href="<?php echo e(route('categories',['slug'=>$cat2->slug])); ?>"> <?php echo e($cat2->name); ?></a>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </li>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </ul>
        </li>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>