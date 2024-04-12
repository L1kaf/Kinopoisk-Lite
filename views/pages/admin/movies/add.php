<?php
/**
 * @var \App\Kernel\View\ViewInterface $view
 * @var \App\Kernel\Session\SessionInterface $session
 * @var array<\App\Models\Category> $categories
 */

$view->component('start'); ?>

<main>
    <div class="container">
        <h3 class="mt-3">Добавление фильма</h3>
        <hr>
        <div>
            <form action="/admin/movies/add" method="post" enctype="multipart/form-data" class="d-flex flex-column justify-content-center w-50 gap-2 mt-5 mb-5">
                <div class="row g-2">
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="text" class="form-control <?php echo $session->has('name') ? 'is-invalid' : '' ?>" id="name" name="name" placeholder="Пацаны">
                            <label for="name">Имя</label>
                            <?php if ($session->has('name')): ?>
                                <div id="checkName" class="invalid-feedback">
                                    <?php echo $session->getFlash('name')[0] ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-md">
                        <div class="form-floating">
                            <textarea
                                    style="height: 100px"
                                    type="text"
                                    class="form-control <?php echo $session->has('description') ? 'is-invalid' : '' ?>"
                                    id="description"
                                    name="description"
                                    placeholder="Крутой фильм про..."
                            ></textarea>
                            <label for="description">Описание</label>
                            <?php if ($session->has('description')): ?>
                                <div id="checkDescription" class="invalid-feedback">
                                    <?php echo $session->getFlash('description')[0] ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="image" class="form-label">Изображение</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <select class="form-select" name="category">
                        <option selected>Жанр</option>
                        <?php foreach ($categories as $category): ?>
                            <option value="<?php echo $category->id() ?>">
                                <?php echo $category->name() ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="row g-2">
                    <button class="btn btn-primary">Добавить фильм</button>
                </div>
            </form>
        </div>
    </div>
</main>
<?php $view->component('end'); ?>

