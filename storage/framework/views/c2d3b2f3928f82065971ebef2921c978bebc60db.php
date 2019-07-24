<?php $__env->startSection('content'); ?>

    <br>
    <?php if(!isset($user->id)): ?>
        <h2 class="hdng">Создать аккаунт </h2>
    <?php else: ?>
        <h2 class="hdng">Редактировать профиль </h2>
    <?php endif; ?>
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

                        <form method="POST" enctype="multipart/form-data"
                              <?php if(isset($user)): ?>
                              action="<?php echo e(route('profile.save',[$user->id])); ?>"
                              <?php else: ?>
                              action="<?php echo e(route('profile.save')); ?>"
                                <?php endif; ?> >
                            <?php echo csrf_field(); ?>

                            
                            <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label text-md-right">
                                    Изменить имя </label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>"
                                           name="name" value="<?php if(isset($user)): ?><?php echo e($user->name); ?><?php endif; ?>">

                                    <?php if($errors->has('name')): ?>
                                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <br>
                            

                            <div class="form-group row">
                                <label for="email" class="col-sm-4 col-form-label text-md-right">Изменить електронную
                                    почту</label>

                                <div class="col-md-6">
                                    <input id="email" type="text"
                                           class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>"
                                           name="email" value="<?php if(isset($user)): ?><?php echo e($user->email); ?><?php endif; ?>">

                                    <?php if($errors->has('email')): ?>
                                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>

                                    <?php endif; ?>
                                </div>
                            </div>
                            <br>
                            
                            <div class="form-group row">
                                <label for="phone" class="col-sm-4 col-form-label text-md-right">
                                    Изменить телефон </label>

                                <div class="col-md-6">
                                    <input id="phone" type="text"
                                           class="form-control<?php echo e($errors->has('phone') ? ' is-invalid' : ''); ?>"
                                           name="phone" value="<?php if(isset($user)): ?><?php echo e($user->phone); ?><?php endif; ?>">

                                    <?php if($errors->has('phone')): ?>
                                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('phone')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
<br>
                            
                            <div class="form-group row">
                                <label for="phone" class="col-sm-4 col-form-label text-md-right">
                                    Добавить Аватар</label>

                                <div class="col-md-6">
                                    <input id="avatar" type="file"
                                           class="form-control<?php echo e($errors->has('avatar') ? ' is-invalid' : ''); ?>"
                                           name="avatar" >

                                    <?php if($errors->has('avatar')): ?>
                                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('avatar')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <br>
                            
                            <div class="form-group row">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-right">
                                    Изменить пароль</label>

                                <div class="col-md-6">
                                    <input type="password"
                                           class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>"
                                           name="password" autocomplete="off" value="">

                                    <?php if($errors->has('password')): ?>
                                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <br>
                            
                            <?php if(!isset($user->id) || $user->isAdmin()): ?>
                                <div class="form-group row">
                                    <label for="role" class="col-sm-4 col-form-label text-md-right">
                                        Изменить статус </label>

                                    <div class="col-md-6">
                                        <input id="role" type="text"
                                               class="form-control<?php echo e($errors->has('role') ? ' is-invalid' : ''); ?>"
                                               name="role" value="<?php echo e($user->role); ?>">

                                        <?php if($errors->has('role')): ?>
                                            <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('role')); ?></strong>
                                    </span>
                                        <?php endif; ?>

                                        <?php endif; ?>
                                    </div>
                                </div>

                                <br>
                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn">
                                            Сохранить
                                        </button>

                                        <?php if(!isset($user->id)): ?>
                                            <a href="<?php echo e(route('admin.list')); ?>">назад</a>
                                        <?php else: ?>
                                            <a href="<?php echo e(route('home')); ?>">назад </a>
                                        <?php endif; ?>

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