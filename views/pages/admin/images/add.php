<?php
/**
 * @var \App\Kernel\View\View $view
 */
?>

<?php $view->component('header')?>
    <h1>Add image</h1>
<form action="/admin/images/add" method="post">
    <label for="title">Название</label>
    <div>
        <input type="text" name="title">
    </div>
    <div>
        <button type="submit">Загрузить</button>
    </div>
</form>
<?php $view->component('footer')?>
