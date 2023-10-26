<?php
/**
 * @var \App\Kernel\View\View $view
 * @var \App\Kernel\Session\SessionInterface $session
 */
?>

<?php $view->component('header')?>
    <h1>Add image</h1>
<form action="/admin/images/add" method="post">
    <label for="title">Название</label>
    <div>
        <input type="text" name="title">
    </div>
    <?php if ($session->has('title')) {?>
        <ul>
            <?php foreach ($session->getFlash('title') as $error) {?>
            <li style="color: red">
                <?php echo $error ?>
            </li>
            <?php } ?>
        </ul>
    <?php } ?>
    <div>
        <button type="submit">Загрузить</button>
    </div>
</form>
<?php $view->component('footer')?>
