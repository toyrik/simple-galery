<?php
/**
 * @var \App\Kernel\Auth\AuthInterface $auth
 */
$user = $auth->user();
?>
<header>
    <?php if ($auth->check()) {?>
        <h3>Пользователь: <?php echo $user->email(); ?></h3>
        <form action="/logout" method="post">
            <button>Выход</button>
        </form>
        <hr>
    <?php } ?>
</header>
