<!-- Хранится в resources/views/child.blade.php -->



<?php $__env->startSection('title', 'Page Title'); ?>

<?php $__env->startSection('sidebar'); ?>
	@

	<p>Это дополнение к основной боковой панели.</p>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<p>Это содержимое тела страницы.</p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('s.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>