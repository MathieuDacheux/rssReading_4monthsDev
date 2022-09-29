<main>
    <h2><?= $links[$userChoice - 1] ?></h2>
    <section class="home">
        <div class="containerSection">
            <?php displayUniqueSubject($newChoices, $userChoice, $maxArticles, $themeStyle); ?>
        </div>
    </section>
</main>