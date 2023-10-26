<?php
/**
 * @var \App\Kernel\View\ViewInterface $view
 * @var \App\Kernel\Session\SessionInterface $session
 */
?>

<?php $view->component('header')?>
    <h1>Зарегистрироваться</h1>
    <form action="/register" method="post">
        <label for="email">Email</label>
        <div>
            <input type="text" name="email">
        </div>
        <?php if ($session->has('email')) {?>
            <ul>
                <?php foreach ($session->getFlash('email') as $error) {?>
                    <li style="color: red">
                        <?php echo $error ?>
                    </li>
                <?php } ?>
            </ul>
        <?php } ?>
        <div>
        <label for="password">Password</label>
        <div>
            <input type="password" name="password">
        </div>
        <?php if ($session->has('password')) {?>
            <ul>
                <?php foreach ($session->getFlash('password') as $error) {?>
                    <li style="color: red">
                        <?php echo $error ?>
                    </li>
                <?php } ?>
            </ul>
        <?php } ?>
        <div>
            <button type="submit">Зарегистрироваться</button>
        </div>
    </form>
<?php $view->component('footer')?>

