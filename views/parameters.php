<main>
    <div class="containerForm">
        <form method="POST" class="formParameters">
            <!-- INPUT POUR LE CHOIX DU THÈME -->
            <h4>
                Couleur du thème
            </h4>
            <div class="inputLot">
                <div class="containerInput">
                    <label for="light">Thème clair</label>
                    <input type="radio" name="theme" id="light" value="1">

                </div>
                <div class="containerInput">
                    <label for="dark">Thème Sombre</label>
                    <input type="radio" name="theme" id="dark" value="2">

                </div>
            </div>

            <!-- INPUT POUR LE NOMBRE D'ARTICLES -->
            <h4>
                Nombre d'articles
            </h4>
            <div class="inputLot">
                <div class="containerInput">
                    <label for="lenghtSix">6 Articles</label>
                    <input type="radio" name="number" id="lenghtSix" value="6">
                </div>

                <div class="containerInput">
                    <label for="lenghtNine">9 Articles</label>
                    <input type="radio" name="number" id="lenghtNine" value="9">
                </div>

                <div class="containerInput">
                    <label for="lenghtTwelve">12 Articles</label>
                    <input type="radio" name="number" id="lenghtTwelve" value="12">
                </div>
            </div>

            <!-- INPUT POUR LES SUJETS -->
            <h4>
                Choix des sujets
            </h4>
            <div class="inputLot">
                <div class="containerInput">
                    <label for="company">Entreprise</label>
                    <input type="checkbox" name="subject[]" id="company" value="0">
                </div>

                <div class="containerInput">
                    <label for="money">Argent</label>
                    <input type="checkbox" name="subject[]" id="money" value="1">
                </div>

                <div class="containerInput">
                    <label for="frenchEconomy">Économie</label>
                    <input type="checkbox" name="subject[]" id="frenchEconomy" value="2">
                </div>

            </div>

            <div class="inputLot">
                <div class="containerInput">
                    <label for="estate">Immobilier</label>
                    <input type="checkbox" name="subject[]" id="estate" value="3">
                </div>

                <div class="containerInput">
                    <label for="workd">Travail</label>
                    <input type="checkbox" name="subject[]" id="work" value="4">
                </div>
            </div>

            <button type="submit">ENVOYER</button>
        </form>
    </div>
</main>