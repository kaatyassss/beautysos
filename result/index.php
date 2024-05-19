<?php
include "db.php";

$result = mysqli_query($mysql, "SELECT * FROM `products`");

function outputData($mysql, $category, $additional_category, $cost_min, $cost_max)
{
    $query = "SELECT brand, name, image, wildberries, ozon, goldapple FROM products WHERE category='$category' ORDER BY RAND() LIMIT 1";

    $result = $mysql->query($query);

    if ($result) {
        $row = $result->fetch_assoc();

        if ($row) {
            echo "<img class='img-main' src='" . $row['image'] . "' alt='" . "'><br>";
            echo "Бренд: " . $row['brand'] . "<br>Название: " . $row['name'] . "<br>";
            echo "<div class='button-container' style='display: flex; justify-content: space-around;'>";

            if (!empty($row['wildberries']) && !empty($row['ozon']) && !empty($row['goldapple'])) {
                echo "<a href='" . $row['wildberries'] . "' target='_blank'><button style='width: 222px; height: 61px; background: none; border: 3px solid #8D297F; border-radius: 15px; padding: 10px 20px; cursor: pointer; margin-right: -150%'><div style='color: black; font-size: 22px; font-family: Playfair Display SC, serif; font-weight: 22; word-wrap: break-word'>Wildberries</div></button></a>";
                echo "<a href='" . $row['ozon'] . "' target='_blank'><button style='width: 222px; height: 61px; background: none; border: 3px solid #0481CB; border-radius: 15px; padding: 10px 20px; cursor: pointer;'><div style='color: black; font-size: 22px; font-family: Playfair Display SC, serif; font-weight: 22; word-wrap: break-word'>OZOH</div></button></a>";
                echo "<a href='" . $row['goldapple'] . "' target='_blank'><button style='width: 222px; height: 61px; background: none; border: 3px solid #ccfe00; border-radius: 15px; padding: 10px 20px; cursor: pointer; margin-left: -150%'><div style='color: black; font-size: 20px; font-family: Playfair Display SC, serif; font-weight: 22; word-wrap: break-word'>Золотое яблоко</div></button></a>";
            } else if (!empty($row['wildberries']) && !empty($row['ozon']) && empty($row['goldapple'])) {
                echo "<a href='" . $row['wildberries'] . "' target='_blank'><button style='width: 222px; height: 61px; background: none; border: 3px solid #8D297F; border-radius: 15px; padding: 10px 20px; cursor: pointer; margin-right: -150%'><div style='color: black; font-size: 22px; font-family: Playfair Display SC, serif; font-weight: 22; word-wrap: break-word'>Wildberries</div></button></a>";
                echo "<a href='" . $row['ozon'] . "' target='_blank'><button style='width: 222px; height: 61px; background: none; border: 3px solid #0481CB; border-radius: 15px; padding: 10px 20px; cursor: pointer; margin-left: -150%'><div style='color: black; font-size: 22px; font-family: Playfair Display SC, serif; font-weight: 22; word-wrap: break-word'>OZOH</div></button></a>";
            } else if (empty($row['wildberries']) && !empty($row['ozon']) && !empty($row['goldapple'])) {
                echo "<a href='" . $row['ozon'] . "' target='_blank'><button style='width: 222px; height: 61px; background: none; border: 3px solid #0481CB; border-radius: 15px; padding: 10px 20px; cursor: pointer; margin-right: -150%'><div style='color: black; font-size: 22px; font-family: Playfair Display SC, serif; font-weight: 22; word-wrap: break-word'>OZOH</div></button></a>";
                echo "<a href='" . $row['goldapple'] . "' target='_blank'><button style='width: 222px; height: 61px; background: none; border: 3px solid #ccfe00; border-radius: 15px; padding: 10px 20px; cursor: pointer; margin-left: -150%'><div style='color: black; font-size: 20px; font-family: Playfair Display SC, serif; font-weight: 22; word-wrap: break-word'>Золотое яблоко</div></button></a>";
            } else if (!empty($row['wildberries']) && empty($row['ozon']) && !empty($row['goldapple'])) {
                echo "<a href='" . $row['wildberries'] . "' target='_blank'><button style='width: 222px; height: 61px; background: none; border: 3px solid #8D297F; border-radius: 15px; padding: 10px 20px; cursor: pointer; margin-right: -150%'><div style='color: black; font-size: 22px; font-family: Playfair Display SC, serif; font-weight: 22; word-wrap: break-word'>Wildberries</div></button></a>";
                echo "<a href='" . $row['goldapple'] . "' target='_blank'><button style='width: 222px; height: 61px; background: none; border: 3px solid #ccfe00; border-radius: 15px; padding: 10px 20px; cursor: pointer; margin-left: -150%'><div style='color: black; font-size: 20px; font-family: Playfair Display SC, serif; font-weight: 22; word-wrap: break-word'>Золотое яблоко</div></button></a>";
            } else if (!empty($row['wildberries']) && empty($row['ozon']) && empty($row['goldapple'])) {
                echo "<a href='" . $row['wildberries'] . "' target='_blank'><button style='width: 222px; height: 61px; background: none; border: 3px solid #8D297F; border-radius: 15px; padding: 10px 20px; cursor: pointer;'><div style='color: black; font-size: 22px; font-family: Playfair Display SC, serif; font-weight: 22; word-wrap: break-word'>Wildberries</div></button></a>";
            } else if (empty($row['wildberries']) && !empty($row['ozon']) && empty($row['goldapple'])) {
                echo "<a href='" . $row['ozon'] . "' target='_blank'><button style='width: 222px; height: 61px; background: none; border: 3px solid #0481CB; border-radius: 15px; padding: 10px 20px; cursor: pointer;'><div style='color: black; font-size: 22px; font-family: Playfair Display SC, serif; font-weight: 22; word-wrap: break-word'>OZOH</div></button></a>";
            } else if (empty($row['wildberries']) && empty($row['ozon']) && !empty($row['goldapple'])) {
                echo "<a href='" . $row['goldapple'] . "' target='_blank'><button style='width: 222px; height: 61px; background: none; border: 3px solid #ccfe00; border-radius: 15px; padding: 10px 20px; cursor: pointer;'><div style='color: black; font-size: 20px; font-family: Playfair Display SC, serif; font-weight: 22; word-wrap: break-word'>Золотое яблоко</div></button></a>";
            }
            echo "</div>";
        } else {
            echo "Нет данных для категории '$category'.";
        }
        $result->free();
    } else {
        echo "Ошибка выполнения запроса: " . $mysql->error;
    }
}

//
//while ($food = mysqli_fetch_assoc($result)) {
//    echo $food['brand'];
//    echo "<br>";
//}

//$food = mysqli_fetch_assoc($result);
//$food = mysqli_fetch_assoc($result);
//print_r($food);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="result.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ваши результаты</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="icon" href="../main/images/logo.png" type="image/png">
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
                    <a class="nav-link active" href="../main/index.php">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" id="id-main-nav" aria-current="page" href="#">Уход за лицом</a>
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
    <div class="container">
        <div class="description">
            <img id="img-h" src="images/main-name.png" alt="Ваше средство">
        </div>

        <div class="description">
            <p class="p-h">
                <?php
                outputData($mysql, 'крем', '', 0, 1000);
                ?>
        </div>
    </div>
</header>

<div id="div-1" class="container">
    <div class="description">
        <img style="margin-top: -1%" id="img-c" src="images/analogues.png" alt="Аналоги"><br>
        <p style="margin-top: 2%; margin-bottom: -2%; font-size: 24px">Недорогой ценовой сегмент</p><br>
        <p class="p-h">
            <?php
            outputData($mysql, 'гель', '', 0, 1000);
            ?>
        <p style="margin-top: 3%; font-size: 24px">Дорогой ценовой сегмент</p>
        <p class="p-h">
            <?php
            outputData($mysql, 'гель', '', 0, 1000);
            ?>
    </div>
</div>

<div class="contact-form">
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="../main/index.php">
                            <button style="margin-top: 1.7%" class="btn" id="btn1">На главную!</button>
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