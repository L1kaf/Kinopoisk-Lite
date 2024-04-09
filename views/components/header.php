<?php
/**
 * @var \App\Kernel\Auth\AuthInterface $auth
 */

$user = $auth->user();
?>

<header>
    <?php if($auth->check()): ?>
        <h3>User: <?= $user->email() ?></h3>
        <form action="/logout" method="post">
            <button>Выйти</button>
        </form>
        <hr>
    <?php endif ?>
</header>