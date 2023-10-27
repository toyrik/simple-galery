<?php
/**
 * @var \App\Kernel\Auth\AuthInterface $auth
 */
$user = $auth->user();
?>
<div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Simple Galery</a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="/">Главная</a></li>
                    <?php if ($auth->check()) {?>
                        <li><a href="/images/add"></a></li>
                    <?php }?>
                </ul>

                <?php if ($auth->check()) {?>
                    <div class="row">
                        <div class="col">
                            <span class="navbar-text">
                                Пользователь: <?php echo $user->email(); ?>
                            </span>
                        </div>
                        <div class="col">
                            <form action="/logout" method="post">
                                <button>Выход</button>
                            </form>
                        </div>
                    </div>
                <?php } else {?>
                    <nav class="navbar">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="/login">Вход</a></li>
                            <li class="nav-item"><a class="nav-link" href="/register">Регистрация</a></li>
                        </ul>
                    </nav>
                <?php } ?>
        </div>
    </nav>
    <header class="row">
        <div class="col">
            <ul class="navbar-nav">
            </ul>
        </div>
        <div class="col">
            <div class="text-end">
            </div>
        </div>
    </header>
</div>
