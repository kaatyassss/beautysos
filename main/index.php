<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="main.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BeautySOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="icon" href="images/logo.png" type="image/png">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="#">
        <img src="images/logo.png" alt="Логотип" width="54" height="45" class="d-inline-block align-top"
             loading="lazy">
    </a>
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" id="id-main-nav" aria-current="page" href="#">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="../survey/index.php">Уход за лицом</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Уход за волосами</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">О нас</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header class="header">
    <div class="overlay"></div>
    <div class="container">
        <div class="description">
            <h2>
                Ваш уход - наша забота!
            </h2>
            <a href="../survey/index.php">
                <button class="btn btn-custom btn-outline-light btn-lg">Пройти опрос!</button>
            </a>
        </div>
    </div>
</header>

<div class="about" id="about">
    <div class="container">
        <h1 class="text-center">Примеры средств</h1>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="card border-0">
                    <img src="images/1.png" class="card-img-top" alt="1">
                    <div class="card-body text-center">
                        <h6 class="card-title">PROSTO COSMETICS just happy</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="card border-0">
                    <img src="images/2.png" class="card-img-top" alt="2">
                    <div class="card-body text-center">
                        <h6 class="card-title">DERMA FACTORY calamine 100 powder</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="card border-0">
                    <img src="images/3.png" class="card-img-top" alt="3">
                    <div class="card-body text-center">
                        <h6 class="card-title">КОСМЕТИКА с церамидами</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="card border-0">
                    <img src="images/4.png" class="card-img-top" alt="4">
                    <div class="card-body text-center">
                        <h6 class="card-title">LA ROCHE-POSAY toleriane sensitive</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-lg-6 position-relative">
            <!-- Картинка слева сверху -->
            <img src="images/pic1.png" class="img-fluid" id="pic1" alt="1">
        </div>
        <div class="col-md-6 col-lg-6">
            <!-- Текст справа сверху -->
            <div class="text-center" id="text-center1">
                <img src="images/list2.png" class="image-small" alt="list">
                <img src="images/list1.png" class="image-small" alt="list">
                <h4>Откройте дверь к индивидуальному уходу!</h4>
                <h4 id="h4-fl1">Пройдите наш опрос, и мы подберем для вас идеальные средства, подчеркивающие вашу
                    неповторимую
                    красоту. Ваша уверенность начинается здесь!</h4>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <!-- Текст слева снизу -->
            <div class="text-center" id="text-center2">
                <h4 id="h4-fl2">Находите идеальные продукты для вашей кожи с легкостью!
                    Мы - Ваш косметический советчик.</h4>
                <img src="images/list3.png" class="image-small" alt="list">
                <img src="images/list4.png" class="image-small" alt="list">
            </div>
        </div>
        <div class="col-md-6 col-lg-6 position-relative">
            <!-- Картинка справа снизу -->
            <img src="images/pic2.png" class="img-fluid" id="pic2" alt="2">
        </div>
    </div>
</div>

<div class="contact-form">
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="../survey/index.php">
                            <button class="btn" id="btn1">Пройти опрос!</button>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <hr class="mx-auto">
                    </div>
                </div>
            </div>
            <div id="con1" class="container">
                <div class="row" id="row1">
                    <div class="col-md-6 text-center">
                        <p>Политика конфиденциальности</p>
                        <p>Пользовательское соглашение</p>
                    </div>
                    <div class="col-md-6 text-center">
                        <p>О нас</p>
                        <p>Контакты: +79997292024</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="container-fluid">

        <div class="row">
            <div class="col-12 text-center">
                <p id="yar">Ярославль, 2024 год</p>
            </div>
        </div>
    </div>
</footer>

</body>
</html>