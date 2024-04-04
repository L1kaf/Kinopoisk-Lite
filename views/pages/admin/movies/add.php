<?php
/**
 * @var \App\Kernel\View\View $view
 */
?>

<?php $view->component('start') ?>
<h1>Add Movie</h1>

<form action="/admin/movies/add" method="post">
    <p>Имя</p>
    <div>
        <input type="text" name="name">
    </div>
    <div>
        <button>Добавить</button>
    </div>
</form>
<?php $view->component('end') ?>