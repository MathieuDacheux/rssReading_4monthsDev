<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="https://api.fontshare.com/v2/css?f[]=general-sans@500,600,400,700&display=swap" rel="stylesheet">
    <link href="https://api.fontshare.com/v2/css?f[]=zodiak@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/assets/css/style.css">
    <script defer src="../public/assets/js/script.js"></script>
    <title>Entreprendre | L'actualité des meilleures</title>
</head>

<body class="light">
    <!-- En tête -->
    <header>
        <!-- Menu navigation -->
        <nav class="navbar navbar-expand-lg  navbar-light p-4 mb-4 ">
            <div class="container-fluid">
                <a class="navbar-brand mx-auto" href="/../index.php">
                    <img src="../public/assets/img/logo/logoBlack.png" alt="Logo" class="logo d-inline-block d-center  align-text-center">
                </a>
                <!-- NavBar -->
                <div class="collapse navbar-collapse navbarContainer" id="navbarNavAltMarkup">
                    <ul class="navbar-nav">
                    <?php
                        $links = displayNavbar($choices, $subjectsValue);
                        if (empty($links)) {
                            echo '';
                        } else {
                            echo '<form method="POST" action="'.$method.'">';
                            foreach ($links as $key => $value) {
                                $inputValue = $key + 1;
                                echo '<label class="nav-item" for="'.$inputValue.'">'.$value.'</label>';
                                echo '<input onchange=\'this.form.submit();\' type="radio" class="hidden" name="userChoice" id="'.$inputValue.'" value="'.$inputValue.'">';
                            }
                            echo '</form>';
                            echo '</ul></div>';
                            echo '<div class="btnContainer">
                            <a href="http://www.rssreading_4monthsdev.localhost/controllers/parametersController.php" class="btnParam">
                            <div>
                                <img src="../public/assets/img/icon/param.png" alt="Paramètre" class="modalImg">
                            </div>
                        </a>
                                    <button class="navbar-toggler btnMenuBurger btn navbar-dark bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                            </div>';
                        }
                    ?>
            </div>
        </nav>
    </header>
