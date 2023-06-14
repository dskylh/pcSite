<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Lenovo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded-2">
        <div class="container-fluid ">
            <a class="navbar-brand" href="index.php">Lenovo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Ana Sayfa</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="thinkpad.php" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Thinkpad Serisi
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="thinkpad.php">Thinkpad</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="x1.php">X1 Serisi</a></li>
                            <li><a class="dropdown-item" href="x.php">X Serisi</a></li>
                            <li><a class="dropdown-item" href="t.php">T Serisi</a></li>
                            <li><a class="dropdown-item" href="p.php">P Serisi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="thinkbook.php" class="nav-link">ThinkBook Serisi</a>
                    </li>
                    <li class="nav-item">
                        <a href="thinkstation.php" class="nav-link">ThinkStation Serisi</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.php" class="nav-link">Hakkımızda</a>
                    </li>

                    <li class="nav-item">
                        <a href="contact.php" class="nav-link">İletişim</a>
                    </li>
                </ul>
                <?php
                    if (isset($_SESSION['userId'])) {
                        echo"<ul class='navbar-nav'>";
                        echo"<li class='d-flex nav-item'>";
                        echo"<a href='profile.php' class='nav-link'>". $_SESSION['userUid'] ."</a>";
                        echo"</li>";
                        echo"<li class='d-flex nav-item'>";
                        echo "<a href='includes/logout.inc.php' class='nav-link'>Çıkış Yap</a>";
                        echo"</li>";
                        echo"</ul>";
                    }
                    else{
                        echo"<ul class='navbar-nav'>";
                        echo"<li class='d-flex nav-item'>";
                        echo"<a href='register.php' class='nav-link'>Kayıt Ol</a>";
                        echo"</li>";
                        echo"<li class='d-flex nav-item'>";
                        echo"<a href='login.php' class='nav-link'>Giriş Yap</a>";
                        echo"</li>";
                        echo"</ul>";
                    }
                ?>
                
                <!-- <ul class="navbar-nav">
                    <li class="d-flex nav-item">
                        <a href="register.php" class="nav-link">Kayıt Ol</a>
                    </li>
                    <li class="d-flex nav-item">
                        <a href="login.php" class="nav-link">Giriş Yap</a>
                    </li>
                </ul> -->
            </div>


        </div>
    </nav>