<?php $__env->startSection('header'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <br>
    <h2>Редактирование главного меню</h2>
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
            <td><b>slug</b></td>
            <td><b>Описание </b></td>
            <td><b>Родитель</b></td>
            <td><b>Публикация</b></td>


        </tr>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($categorie->id); ?></td>
                <td><?php echo e($categorie->name); ?></td>
                <td><?php echo e($categorie->slug); ?></td>

                <td><?php echo e($categorie->description); ?></td>
                <td><?php echo e($categorie->parent_id); ?></td>
                <td><?php echo e($categorie->is_publish); ?></td>

                <td><a href="<?php echo e(route('menu.edit',[$categorie->id])); ?>">редактировать </a></td>

                


            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <?php echo e($categories->links()); ?>

    </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>