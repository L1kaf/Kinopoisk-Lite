<?php
/**
 * @var \App\Kernel\View\ViewInterface $view
 * @var \App\Kernel\Storage\StorageInterface $storage
 * @var \App\Models\Movie $movie
 */

$view->component('start'); ?>

<main>
    <div class="container">
        <div class="one-movie">
            <div class="card text-white bg-dark mb-3 mt-3 one-movie__item">
                <div class="row g-3">
                    <div class="col md-4">
                        <img  src="<?php echo $storage->url($movie->preview()) ?>" class="img-fluid rounded one-movie__image" alt="<?php echo $movie->name() ?>">
                        <form action="" class="m-3 w-100">
                            <select aria-label="Default select example" class="form-select">
                                <option selected>Оценка</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                            <div class="form-floating mt-2">
                                <textarea id="floatingTexarea2" class="form-control" placeholder="Укажите свое мнение о фильме" style="height: 100px;"></textarea>
                                <label for="floatingTexarea2" class="text-dark">Комментарий</label>
                            </div>
                            <button type="button" class="btn btn-primary mt-2">Оставить отзыв</button>
                        </form>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h1 class="card-title"><?php echo $movie->name() ?></h1>
                            <p class="card-text">Оценка <span class="badge bg-warning warn__badge">7.9</span></p>
                            <p class="card-text"><?php echo $movie->description() ?></p>
                            <p class="card-text"><small class="text-secondary">Добавлен <?php echo $movie->createdAt() ?></small></p>
                            <h4>Отзывы</h4>
                            <div class="one-movie_reviews">
                                <div class="card text-white bg-secondary mt-2">
                                    <div class="card-header">
                                        Пользователь: 1@mail.ru
                                    </div>
                                    <div class="card-body text-white bg-dark">
                                        <blockquote class="blockquote mb-0">
                                            <p>В сериале и теперь хватает брутальной жестокости и разбросанных по кадрам кишок. Более того, первые эпизоды третьего сезона могут похвастаться одними из самых мерзких (но по-своему креативных) сцен во всём шоу.</p>
                                            <footer class="blockquote-footer">Оценка <span class="badge bg-warning warn__badge">8</span></footer>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="card text-white bg-secondary mt-2">
                                    <div class="card-header">
                                        Пользователь: 2@mail.ru
                                    </div>
                                    <div class="card-body text-white bg-dark">
                                        <blockquote class="blockquote mb-0">
                                            <p>В сериале и теперь хватает брутальной жестокости и разбросанных по кадрам кишок. Более того, первые эпизоды третьего сезона могут похвастаться одними из самых мерзких (но по-своему креативных) сцен во всём шоу.</p>
                                            <footer class="blockquote-footer">Оценка <span class="badge bg-warning warn__badge">8</span></footer>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="card text-white bg-secondary mt-2">
                                    <div class="card-header">
                                        Пользователь: 3@mail.ru
                                    </div>
                                    <div class="card-body text-white bg-dark">
                                        <blockquote class="blockquote mb-0">
                                            <p>В сериале и теперь хватает брутальной жестокости и разбросанных по кадрам кишок. Более того, первые эпизоды третьего сезона могут похвастаться одними из самых мерзких (но по-своему креативных) сцен во всём шоу.</p>
                                            <footer class="blockquote-footer">Оценка <span class="badge bg-warning warn__badge">8</span></footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php $view->component('end'); ?>

