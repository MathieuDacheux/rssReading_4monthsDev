<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://api.fontshare.com/v2/css?f[]=general-sans@500,600,400,700&display=swap" rel="stylesheet">
    <link href="https://api.fontshare.com/v2/css?f[]=zodiak@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/assets/css/style.css">
    <script defer src="public/assets/js/script.js"></script>
    <title>Entreprendre | L'actualité des meilleures</title>
</head>
<body>

    <!-- MODAL -->

    <header>
        <div class="containerImage">
            <a href="/../index.php">
                <img src="../public/assets/img/logo/logoBlack.png" alt="Logo du site Entreprendre">
            </a>
        </div>
        <nav>
            <?php
                $links = displayNavbar($choices, $subjectsValue);
                if (empty($links)) {
                    echo '';
                } else {
                    echo '<div class="containerLinks">';
                    echo '<form method="POST" action="'.$method.'">';
                        foreach ($links as $key => $value) {
                            $inputValue = $key + 1;
                            echo '<label for="'.$inputValue.'">'.$value.'</label>';
                            echo '<input onchange=\'this.form.submit();\' type="radio" class="hidden" name="userChoice" id="'.$inputValue.'" value="'.$inputValue.'">';
                        }
                        echo '</form></div>';
                } ?>
        </nav>
    </header>