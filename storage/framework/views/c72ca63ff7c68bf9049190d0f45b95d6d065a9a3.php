<HTML>
<head>
</head>
<body>

<div class="header">
    <?php echo $__env->yieldContent('header'); ?>
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
                        <p><a class="sign" href="/register">Регистрация</a> <span><a href="#">Напомнить пароль</a></span>
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
                        <li><a href="/team">Наша команда</a></li>
                    </ul>
                </div>
                <div class="col-md-2 footer-grid">
                    <h4>Услуги</h4>
                    <ul>
                        <li><a href="/support">Поддержка</a></li>
                        <li><a href="/faq">FAQ</a></li>
                        <li><a href="/contact">Связь</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-grid">
                    <h4>Инфо</h4>
                    <ul>
                        <li><a href="/pay">Оплата</a></li>
                        <li><a href="/dalivery">Доставка</a></li>
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