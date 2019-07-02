<?php $__currentLoopData = $category=\App\Category::where('parent_id',0)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li class="dropdown grid">
        <a href="#" class="dropdown-toggle list1" data-toggle="dropdown"><?php echo e($value->name); ?> <b class="caret"></b></a>



        <ul class="dropdown-menu multi-column columns-1">
            <div class="row">
                <div class="col-sm-10">
                    <ul class="multi-column-dropdown">
                        <?php if($value->child()->coint()>0): ?>
                            <?php $__currentLoopData = $value->child()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a class="list"
                               href="<?php echo e(route('categories.index',['slug'=>$cat->slug])); ?>"> dsfsdf </a>


                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </li>
                        </li>


                    </ul>
                </div>
            </div>
        </ul>
    </li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>












































































