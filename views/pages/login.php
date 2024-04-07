<?php
/**
 * @var \App\Kernel\View\ViewInterface $view
 * @var \App\Kernel\Session\SessionInterface $session
 */
?>

<?php $view->component('start') ?>
<h1>Login</h1>

    <form action="/login" method="post">
        <?php if($session->has('error')): ?>
            <p style="color: red;"><?= $session->getFlash('error') ?></p>
        <?php endif; ?>
        <p>email</p>
        <input type="text" name="email">
        <p>Пароль</p>
        <input type="password" name="password">
        <button>Войти</button>
    </form>
<?php $view->component('end') ?>