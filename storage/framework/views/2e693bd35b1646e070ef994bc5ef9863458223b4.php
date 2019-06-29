 <?php $__currentLoopData = \App\Product::$categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $url => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

 <?php if(isset($category['name'])): ?>
<li class="dropdown grid">
    <a href="#" class="dropdown-toggle list1" data-toggle="dropdown"><?php echo e($category['name']); ?> <b class="caret"></b></a>
    <ul class="dropdown-menu multi-column columns-1">
        <div class="row">
            <div class="col-sm-10">
                <ul class="multi-column-dropdown">
                    <?php $__currentLoopData = $category['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $url => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a class="list" href="/<?php echo e($url); ?>"> <?php echo e($category); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    </ul>
</li>
<?php else: ?>

<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Торты<b class="caret"></b></a>
    <ul class="dropdown-menu multi-column columns-4">
        <div class="row">
            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $url => $categor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-4">


                <h4><?php echo e($categor['name']); ?></h4>
                <ul class="multi-column-dropdown">
                     <?php $__currentLoopData = $categor['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $url => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a class="list" href="/<?php echo e($url); ?>"> <?php echo e($category); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                </ul>
            </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </ul>
</li>
<?php endif; ?>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




<li class="dropdown grid">
    <a href="#" class="dropdown-toggle list1" data-toggle="dropdown">ИЗ БД <b class="caret"></b></a>
    <ul class="dropdown-menu multi-column columns-1">
        <div class="row">
            <div class="col-sm-10">
                <ul class="multi-column-dropdown">
                    <?php $__currentLoopData = \App\Category::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a class="list" href="<?php echo e(route('categories.index',['slug'=>$category->slug])); ?>"> <?php echo e($category->name); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    </ul>
</li>