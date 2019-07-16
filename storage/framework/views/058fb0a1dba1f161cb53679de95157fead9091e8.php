<title>S.Baker | <?php echo e($category->name); ?></title>
<?php $__env->startSection('header'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="products">
        <div class="container">


            <h2><?php echo e($category->name); ?></h2>
            <h4>
                <center><br> <?php echo e($category->description); ?></center>
            </h4>
            <div class="col-md-9 product-model-sec">

                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <?php if($category): ?>


                        <div class="product-grid">
                            <a href="<?php echo e(route('single',[$product->id])); ?>">
                                <div class="more-product"><span> </span></div>
                                <div class="product-img b-link-stripe b-animate-go thickbox">
                                    <img src="<?php echo e($product->image_path); ?>" class="img-responsive" alt="">
                                    <div class="b-wrapper">
                                        <h4 class="b-animate b-from-left  b-delay03">
                                            <button>Подробнее</button>
                                        </h4>
                                    </div>
                                </div>
                            </a>
                            <div class="product-info simpleCart_shelfItem">
                                <div class="product-info-cust prt_name">
                                    <h4><?php echo e($product->name); ?></h4>
                                    <span class="item_price">₴<?php echo e($product->price); ?></span>

                                    <div>
                                        <?php echo e($product->shortdesc); ?>

                                    </div>

                                    <input type="text" class="item_quantity" value="1"/>
                                    <input type="button" class="item_add items" value="Add">
                                    <div class="clearfix"></div>

                                </div>
                            </div>
                        </div>
                    <?php else: ?> <p>
                    <li>утовар отсутвует</li> <BR>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                <td> <?php echo e($products->links()); ?></td>

            </div>

            <div class="col-md-3 rsidebar span_1_of_left">
                <section class="sky-form">
                    <div class="product_right">
                        <h4 class="m_2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Categories
                        </h4>
                        <div class="tab1">
                            <ul class="place">
                                <li class="sort">Regular Cakes</li>
                                <li class="by"><span class="glyphicon glyphicon-triangle-bottom"
                                                     aria-hidden="true"></span></li>
                            </ul>
                            <div class="clearfix"></div>
                            <div class="single-bottom">
                                <a href="#"><p>Cassata</p></a>
                                <a href="#"><p>Cheesecake</p></a>
                                <a href="#"><p>Coconut cake</p></a>
                                <a href="#"><p>Cupcake</p></a>
                            </div>
                        </div>
                        <div class="tab2">
                            <ul class="place">
                                <li class="sort">Special Cakes</li>
                                <li class="by"><span class="glyphicon glyphicon-triangle-bottom"
                                                     aria-hidden="true"></span></li>
                            </ul>
                            <div class="clearfix"></div>
                            <div class="single-bottom">
                                <a href="#"><p>Delicious Cakes</p></a>
                                <a href="#"><p>Gingerbread</p></a>
                            </div>
                        </div>
                        <div class="tab3">
                            <ul class="place">
                                <li class="sort">Eggless Cake</li>
                                <li class="by"><span class="glyphicon glyphicon-triangle-bottom"
                                                     aria-hidden="true"></span></li>
                            </ul>
                            <div class="clearfix"></div>
                            <div class="single-bottom">
                                <a href="#"><p>Milk Cakes</p></a>
                                <a href="#"><p>Fruits Cakes</p></a>
                            </div>
                        </div>
                        <div class="tab4">
                            <ul class="place">
                                <li class="sort">2-3 Tier Cakes</li>
                                <li class="by"><span class="glyphicon glyphicon-triangle-bottom"
                                                     aria-hidden="true"></span></li>
                            </ul>
                            <div class="clearfix"></div>
                            <div class="single-bottom">
                                <a href="#"><p>Twist 4 tier</p></a>
                                <a href="#"><p>Floral Tier</p></a>
                                <a href="#"><p>Double Heartshape</p></a>
                            </div>
                        </div>
                        <p>
                            <!--script-->
                            <script>
                                $(document).ready(function () {
                                    $(".tab1 .single-bottom").hide();
                                    $(".tab2 .single-bottom").hide();
                                    $(".tab3 .single-bottom").hide();
                                    $(".tab4 .single-bottom").hide();
                                    $(".tab5 .single-bottom").hide();

                                    $(".tab1 ul").click(function () {
                                        $(".tab1 .single-bottom").slideToggle(300);
                                        $(".tab2 .single-bottom").hide();
                                        $(".tab3 .single-bottom").hide();
                                        $(".tab4 .single-bottom").hide();
                                        $(".tab5 .single-bottom").hide();
                                    })
                                    $(".tab2 ul").click(function () {
                                        $(".tab2 .single-bottom").slideToggle(300);
                                        $(".tab1 .single-bottom").hide();
                                        $(".tab3 .single-bottom").hide();
                                        $(".tab4 .single-bottom").hide();
                                        $(".tab5 .single-bottom").hide();
                                    })
                                    $(".tab3 ul").click(function () {
                                        $(".tab3 .single-bottom").slideToggle(300);
                                        $(".tab4 .single-bottom").hide();
                                        $(".tab5 .single-bottom").hide();
                                        $(".tab2 .single-bottom").hide();
                                        $(".tab1 .single-bottom").hide();
                                    })
                                    $(".tab4 ul").click(function () {
                                        $(".tab4 .single-bottom").slideToggle(300);
                                        $(".tab5 .single-bottom").hide();
                                        $(".tab3 .single-bottom").hide();
                                        $(".tab2 .single-bottom").hide();
                                        $(".tab1 .single-bottom").hide();
                                    })
                                    $(".tab5 ul").click(function () {
                                        $(".tab5 .single-bottom").slideToggle(300);
                                        $(".tab4 .single-bottom").hide();
                                        $(".tab3 .single-bottom").hide();
                                        $(".tab2 .single-bottom").hide();
                                        $(".tab1 .single-bottom").hide();
                                    })
                                });
                            </script>
                            <!--//script -->
                    </div>
                </section>
                <section class="sky-form">
                    <h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>DISCOUNTS</h4>
                    <div class="row row1 scroll-pane">
                        <div class="col col-4">
                            <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Upto - 10%
                                (20)</label>
                        </div>
                        <div class="col col-4">
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>70% - 60% (5)</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>50% - 40% (7)</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>30% - 20% (2)</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>10% - 5% (5)</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>30% - 20% (7)</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>10% - 5% (2)</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other(50)</label>
                        </div>
                    </div>
                </section>
                <section class="sky-form">
                    <h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Price</h4>
                    <ul class="dropdown-menu1">
                        <li><a href="">
                                <div id="slider-range"></div>
                                <input type="text" id="amount"
                                       style="border: 0; font-weight: NORMAL;   font-family: 'Dosis-Regular';"/>
                            </a></li>
                    </ul>
                </section>


                <!---->
                <script type="text/javascript" src="js/jquery-ui.min.js"></script>
                <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
                <script type='text/javascript'>//<![CDATA[
                    $(window).load(function () {
                        $("#slider-range").slider({
                            range: true,
                            min: 0,
                            max: 1000,
                            values: [0, 1000],
                            slide: function (event, ui) {
                                $("#amount").val("₴" + ui.values[0] + " - ₴" + ui.values[1]);
                            }
                        });
                        $("#amount").val("₴" + $("#slider-range").slider("values", 0) + " - ₴" + $("#slider-range").slider("values", 1));

                    });//]]>
                </script>
                <!---->
                <section class="sky-form">
                    <h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>By Flavour</h4>
                    <div class="row row1 scroll-pane">
                        <div class="col col-4">
                            <label class="checkbox"><input type="checkbox" name="checkbox"
                                                           checked=""><i></i>Vanilla</label>
                        </div>
                        <div class="col col-4">
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Chocolate</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Butterscotch</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Strawberry</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Black Forest</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Mixed Fruit</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Honey</label>
                        </div>
                    </div>
                </section>
                <section class="sky-form">
                    <h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Weight</h4>
                    <div class="row row1 scroll-pane">
                        <div class="col col-4">
                            <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Half
                                KG</label>
                        </div>
                        <div class="col col-4">
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>One KG</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>TwO KG</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>More</label>
                        </div>
                    </div>
                </section>
                <section class="sky-form">
                    <h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Color</h4>
                    <div class="row row1 scroll-pane">
                        <div class="col col-4">
                            <label class="checkbox"><input type="checkbox" name="checkbox"
                                                           checked=""><i></i>White</label>
                        </div>
                        <div class="col col-4">
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Pink</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Gold</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Silver</label>
                        </div>
                    </div>
                </section>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<!--//products-->
<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>