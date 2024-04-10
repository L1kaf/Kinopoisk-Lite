<?php
/**
 * @var \App\Kernel\View\ViewInterface $view
 * @var \App\Kernel\Session\SessionInterface $session
 */

$view->component('start'); ?>

<main>
    <div class="container">
        <h3 class="mt-3">Регистрация</h3>
        <hr>
        <div class="container d-flex justify-content-center">
            <form action="/register" method="post" class="d-flex flex-column justify-content-center w-50 gap-2 mt-5 mb-5">
                <div class="row g-2">
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="text" class="form-control <?php echo $session->has('name') ? 'is-invalid' : '' ?>" id="name" name="name" placeholder="Иван Иванов">
                            <label for="name">Имя</label>
                            <?php if ($session->has('name')): ?>
                                <div id="checkName" class="invalid-feedback">
                                    <?php echo $session->getFlash('name')[0] ?>
                                </div>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="email" class="form-control <?php echo $session->has('email') ? 'is-invalid' : '' ?>" id="email" name="email" placeholder="name@name.ru">
                            <label for="email">E-mail</label>
                            <?php if ($session->has('email')): ?>
                                <div id="checkEmail" class="invalid-feedback">
                                    <?php echo $session->getFlash('email')[0] ?>
                                </div>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="password" class="form-control <?php echo $session->has('password') ? 'is-invalid' : '' ?>" id="password" name="password" placeholder="********">
                            <label for="password">Пароль</label>
                            <?php if ($session->has('password')): ?>
                                <div id="checkPassword" class="invalid-feedback">
                                    <?php echo $session->getFlash('password')[0] ?>
                                </div>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="********">
                            <label for="password">Потверждение пароля</label>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <button class="btn btn-primary">Создать аккаунт</button>
                </div>
            </form>
        </div>
    </div>
</main>
<?php $view->component('end'); ?>

