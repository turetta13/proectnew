<?php $__env->startSection('content'); ?>

    <br>
    <h2 class="hdng">Редактировать меню </h2>

    <br>
    <div class="container">

        

        <?php if($message = Session::get('success')): ?>
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong><?php echo e($message); ?></strong>
            </div>
        <?php endif; ?>

        <div class="row justify-content-center">

            <div class="col-md-8">

                <div class="card">

                    <div class="card-body">

                        <form method="POST"
                              action="<?php echo e(route('menu.save',[$categories->id])); ?>">
                            <?php echo csrf_field(); ?>

                            
                            <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label text-md-right">
                                    Название </label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control"
                                           name="name" value="<?php echo e($categories->name); ?>">
                                </div>
                            </div>

                            <br>
                            
                            <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label text-md-right">
                                    Slug </label>

                                <div class="col-md-6">
                                    <input id="slug" type="text"
                                           class="form-control"
                                           name="slug" value="<?php echo e($categories->slug); ?>">
                                </div>
                            </div>

                            <br>
                            
                            <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label text-md-right">
                                    Описание </label>

                                <div class="col-md-6">
                                    <input id="description" type="text"
                                           class="form-control"
                                           name="description" value="<?php echo e($categories->description); ?>">
                                </div>
                            </div>

                            <br>
                            
                            <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label text-md-right">
                                    Родительская категория </label>

                                <div class="col-md-6">
                                    <input id="parent_id" type="number"
                                           class="form-control"
                                           name="parent_id" value="<?php echo e($categories->parent_id); ?>">
                                </div>
                            </div>

                            <br>
                            
                            <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label text-md-right">
                                    Включение\Выключение </label>

                                <div class="col-md-6">
                                    <input id="is_publish" type="number"
                                           class="form-control"
                                           name="is_publish" value="<?php echo e($categories->is_publish); ?>">
                                    <?php if($errors->has('is_publish')): ?>
                                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('is_publish')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <br>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn">
                                        Сохранить
                                    </button>

                                    <br>
                                    <br>


                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>