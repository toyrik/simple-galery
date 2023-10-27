<?php
/**
 * @var \App\Kernel\View\ViewInterface $view
 * @var \App\Kernel\Session\SessionInterface $session
 */
?>

<?php $view->component('header')?>
<h1>Вход</h1>

<?php if ($session->has('error')) {?>
    <p style="color: red">
        <?php echo $session->getFlash('error');?>
    </p>
<?php } ?>

<form action="/login" method="post">
    <div class="mb-5">
        <label for="email">Email</label>
        <input type="text" name="email">
    </div>
    <div class="mb-5">
        <label for="password">Password</label>
        <input type="password" name="password">
    </div>
    <div>
        <button type="submit">Войти</button>
    </div>

</form>
<?php $view->component('footer')?>
