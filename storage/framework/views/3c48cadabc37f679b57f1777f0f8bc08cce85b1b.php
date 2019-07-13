<HTML>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="/text/html; charset=utf-8"/>
    <!-- //Custom Theme files -->
    <link href="/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="/css/style.css" type="text/css" rel="stylesheet" media="all">
    <link href="/css/form.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- js -->
    <script src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap-3.1.1.min.js"></script>
    <!-- //js -->
    <!-- cart -->
    <script src="js/simpleCart.min.js"></script>

    
    <script src="/js/imagezoom.js"></script>
    <!-- cart -->
    <!-- the jScrollPane script -->
    <script type="/text/javascript" src="/js/jquery.jscrollpane.min.js"></script>
    <script type="/text/javascript" id="sourcecode">
        $(function () {
            $('.scroll-pane').jScrollPane();
        });

    </script>
    <!-- //the jScrollPane script -->
    <script type="text/javascript" src="js/jquery.mousewheel.js"></script>
    <!-- the mousewheel plugin -->

    <!-- FlexSlider -->
    <script defer src="/js/jquery.flexslider.js"></script>
    <link rel="stylesheet" href="/css/flexslider.css" type="text/css" media="screen"/>
    <script>
        // Can also be used with $(document).ready()
        $(window).load(function () {
            $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
            });
        });
    </script>
</head>

<body>

<div class="header">

    <div class="container">
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h1 class="navbar-brand"><a href="/">S.Baker</a></h1>
            </div>
            <!--navbar-header-->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="/" class="active">Главная</a></li>
                    <?php echo $__env->make('partials.menu', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </ul>
            </div>
        </nav>
        <div class="header-info">
            <div class="header-right search-box">
                <a href="#"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
                <div class="search">
                    <form class="navbar-form">
                        <input type="text" class="form-control">
                        <button type="submit" class="btn btn-default" aria-label="Left Align">
                            Поиск
                        </button>
                    </form>
                </div>
            </div>
            <div class="header-right login">
                <a href="/register"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
                <div id="loginBox">
                    <form id="loginForm">
                        <fieldset id="body">
                            <fieldset>
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email">
                            </fieldset>
                            <fieldset>
                                <label for="password">Пароль</label>
                                <input type="password" name="password" id="password">
                            </fieldset>
                            <input type="submit" id="login" value="Sign in">
                            <label for="checkbox"><input type="checkbox" id="checkbox"> <i>Запомнить меня</i></label>
                        </fieldset>
                        <p><a class="sign" href="/register">Регистрация</a> <span><a
                                        href="#">Напомнить пароль</a></span>
                        </p>
                    </form>
                </div>
            </div>
            <div class="header-right cart">
                <a href="/check"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
                <div class="cart-box">
                    <h4><a href="/check">
                            <span class="simpleCart_total"> $0.00 </span> (<span id="simpleCart_quantity"
                                                                                 class="simpleCart_quantity"> 0 </span>)
                        </a></h4>
                    <p><a href="javascript:;" class="simpleCart_empty">Пустая корзина</a></p>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>


<div>
    <?php echo $__env->yieldContent('content'); ?>
</div>



<div>
    <div class="footer">
        <?php echo $__env->yieldContent('footer'); ?>
        <div class="container">
            <div class="footer-grids">
                <div class="col-md-2 footer-grid">
                    <h4>Команда</h4>
                    <ul>
                        <li><a href="<?php echo e(route('info',['slug'=>'team'])); ?>">Наша команда</a></li>
                    </ul>
                </div>
                <div class="col-md-2 footer-grid">
                    <h4>Услуги</h4>
                    <ul>
                        <li><a href="<?php echo e(route('info',['slug'=>'support'])); ?>">Поддержка</a></li>
                        <li><a href="<?php echo e(route('info',['slug'=>'faq'])); ?>">FAQ</a></li>
                        <li><a href="<?php echo e(route('info',['slug'=>'contact'])); ?>">Связь</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-grid">
                    <h4>Инфо</h4>
                    <ul>
                        <li><a href="<?php echo e(route('info',['slug'=>'pay'])); ?>">Оплата</a></li>
                        <li><a href="<?php echo e(route('info',['slug'=>'delivery'])); ?>">Доставка</a></li>
                    </ul>
                </div>
                <div class="col-md-2 footer-grid icons">
                    <h4>Связь</h4>
                    <ul>
                        <li></li>
                        <img src="images/vibe.png" alt=""/>+380965473377</li>
                        <li></li>
                    </ul>
                </div>

                <div class="col-md-3 footer-grid icons">
                    <h4>соцсети</h4>
                    <ul>
                        <li><a href="https://www.facebook.com/profile.php?id=100022691383878" target="_blank"><img
                                        src="images/face.png" alt=""/>Facebook</a></li>
                        <li><a href="https://www.instagram.com/sayadova_baker/" target="_blank"><img
                                        src="images/inst.png" alt=""/>Instagram</a></li>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <!--//footer-->
    <div class="footer-bottom">
        <div class="container">
            <p> © 2019 S.Baker. Все права защищены.</p>
        </div>
    </div>
</div>

</body>
</HTML>