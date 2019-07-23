<?php $__env->startSection('header'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <br>
    <h2>Редактирование товаров</h2>
    <br>
    <div class="container" >
    <div class="row justify-content-center" >
    <div >

        <?php if($message = Session::get('success')): ?>
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong><?php echo e($message); ?></strong>
            </div>
        <?php endif; ?>

    <table class="table" width="100%">
        <tr>
            <td><b>id</b></td>
            <td><b>Название</b></td>
            <td><b>Категория</b></td>
            <td><b>Краткое описание </b></td>
            <td><b>Описание</b></td>
            <td><b>Публикация</b></td>
            <td><b>Фото</b></td>

        </tr>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($product->id); ?></td>
                <td><?php echo e($product->name); ?></td>
                <td><?php echo e($product->category_id); ?></td>

                <td><?php echo e($product->shortdesc); ?></td>
                <td><?php echo e($product->description); ?></td>
                <td><?php echo e($product->publish); ?></td>
                <td><img width="50" src="<?php echo e($product->image_path); ?>"></td>

                
                


            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <?php echo e($products->links()); ?>

    </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>