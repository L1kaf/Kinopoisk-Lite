<?php
/**
 * @var \App\Kernel\View\View $view
 * @var \App\Kernel\Session\Session $session
 */
?>

<?php $view->component('start') ?>
<h1>Add Movie</h1>

<form action="/admin/movies/add" method="post">
    <p>Имя</p>
    <div>
        <input type="text" name="name">
    </div>
    <?php if($session->has('name')): ?>
    <ul>
        <?php foreach ($session->getFlash('name') as $error): ?>
        <li style="color: red;"><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>
    <div>
        <button>Добавить</button>
    </div>
</form>
<?php $view->component('end') ?>