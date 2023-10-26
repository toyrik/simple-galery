<?php
/**
 * @var \App\Kernel\View\ViewInterface $view
 * @var \App\Kernel\Session\SessionInterface $session
 */
?>

<?php $view->component('header')?>
<h1>Вход</h1>
<form action="/login" method="post">
    <?php if ($session->has('error')) {?>
        <p style="color: red">
            <?php $session->getFlash('error') ?>
        </p>
    <?php } ?>
    <label for="email">Email</label>
    <div>
        <input type="text" name="email">
    </div>
    <div>
        <label for="password">Password</label>
        <div>
            <input type="password" name="password">
        </div>
        <div>
            <button type="submit">Войти</button>
        </div>
</form>
<?php $view->component('footer')?>
