<?php $__env->startSection('header'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <br>
    <h2>Редактирование личных данных пользователей</h2>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div>
                <?php if($message = Session::get('success')): ?>
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong><?php echo e($message); ?></strong>
                    </div>
                <?php endif; ?>
                <a href="<?php echo e(route('profile.create')); ?>">Создать пользователя</a>
                <table class="table">
                    <tr>
                        <td><b>id</b></td>
                        <td><b>Имя</b></td>
                        <td><b>Email</b></td>
                        <td><b>Телефон</b></td>
                        <td><b>Статус</b></td>
                    </tr>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($user->id); ?></td>
                            <td><?php echo e($user->name); ?></td>
                            <td><?php echo e($user->email); ?></td>
                            <td><?php echo e($user->phone); ?></td>
                            <td><?php echo e($user->role); ?></td>
                            <td><a href="<?php echo e(route('profile.edit',[$user->id])); ?>">редактировать </a></td>
                            <td><a input type="submit" onclick="return confirm('Подтвердить удаление')"
                                   href="<?php echo e(route('profile.delete',[$user->id])); ?>">удалить(!) </a></td>


                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
                <?php echo e($users->links()); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>