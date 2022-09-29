<!-- Contenu -->
<main>
    <section class="home">
        <div class="containerDisplayCard">
            <div class="containerSection">
                <h2><?= $links[0] ?></h2>
                <?php displayChoices($urlOne, $maxArticles, $themeStyle); ?>
            </div>
            <div class="containerSection">
                <h2><?= $links[1] ?></h2>
                <?php displayChoices($urlTwo, $maxArticles, $themeStyle); ?>
            </div>
            <div class="containerSection">
                <h2><?= $links[2] ?></h2>
                <?php displayChoices($urlThree, $maxArticles, $themeStyle); ?>
            </div>
        </div>
    </section>
</main>n

    
