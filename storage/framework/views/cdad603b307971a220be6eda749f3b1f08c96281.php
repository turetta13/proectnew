<?php $__env->startSection('content'); ?>
    <br>
    <h2 class="hdng">Редактировать профиль </h2>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">
                        <form method="POST" action="<?php echo e(route('profile.save')); ?>">
                            <?php echo csrf_field(); ?>
                                   
                            <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label text-md-right">
                                Имя </label>

                                <div class="col-md-6">
                                    <input id="email" type="text"
                                           class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>"
                                           name="name" value="<?php echo e(old('email')); ?>" required autofocus>

                                    <?php if($errors->has('email')): ?>
                                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

<br>
                            
                            <div class="form-group row">
                                <label for="email" class="col-sm-4 col-form-label text-md-right">Електронная почта</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>"
                                           name="email" value="<?php echo e($user->name); ?>" required autofocus>

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
                                    Телефон </label>

                                <div class="col-md-6">
                                    <input id="email" type="text"
                                           class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>"
                                           name="email" value="<?php echo e(old('email')); ?>" required autofocus>

                                    <?php if($errors->has('email')): ?>
                                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

 <br>
                            <div class="form-group row">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-right">Пароль</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>"
                                           name="password" required>

                                    <?php if($errors->has('password')): ?>
                                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
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