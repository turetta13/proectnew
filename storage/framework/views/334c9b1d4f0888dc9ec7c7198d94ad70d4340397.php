<?php $__currentLoopData = \App\Menu::$categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $url => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    
        
            
            
                
                    
                        
                            
                                
                            
                        
                    
                
            
        
    

        
            
            
                
                    
                        
                            
                            
                                
                                    
                                
                            
                        
                    
                
            
        
    



<li class="dropdown grid">
    <a href="#" class="dropdown-toggle list1" data-toggle="dropdown">ИЗ БД <b class="caret"></b></a>
    <ul class="dropdown-menu multi-column columns-1">
        <div class="row">
            <div class="col-sm-10">
                <ul class="multi-column-dropdown">
                    <?php $__currentLoopData = \App\Category::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a class="list"
                               href="<?php echo e(route('categories.index',['slug'=>$category->slug])); ?>"> <?php echo e($category->name); ?></a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    </ul>
</li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>