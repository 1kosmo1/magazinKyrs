<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    @vite(['resources/js/app.js'])
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg border-bottom">
    <div class="container">
        <a class="navbar-brand"  href="#">Магазин бытовой техники</a>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Корзина</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Аккаунт
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Войти</a></li>
                        <li><a class="dropdown-item" href="#">Зарегистрироваться</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Найти</button>
            </form>
        </div>
    </div>
</nav>
<div class="container">
    <div>
        <div class="search-menu">
            <ul class="list-group">
                <li class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="" id="firstCheckbox">
                    <label class="form-check-label" for="firstCheckbox">First checkbox</label>
                </li>
                <li class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="" id="secondCheckbox">
                    <label class="form-check-label" for="secondCheckbox">Second checkbox</label>
                </li>
                <li class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="" id="thirdCheckbox">
                    <label class="form-check-label" for="thirdCheckbox">Third checkbox</label>
                </li>
            </ul>
            <ul class="list-group">
                <li class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="" id="firstCheckbox">
                    <label class="form-check-label" for="firstCheckbox">First checkbox</label>
                </li>
                <li class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="" id="secondCheckbox">
                    <label class="form-check-label" for="secondCheckbox">Second checkbox</label>
                </li>
                <li class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="" id="thirdCheckbox">
                    <label class="form-check-label" for="thirdCheckbox">Third checkbox</label>
                </li>
            </ul>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="card" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="..." class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="..." class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="..." class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
