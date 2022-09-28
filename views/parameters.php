<main>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-xl-4">
                <div class="d-flex flex-column justify-content-center m-auto">
                <form method="POST">
                    
                    <!-- INPUT POUR LE CHOIX DU THÈME -->
                    <label for="light">Light</label>
                    <input type="radio" name="theme" id="light" value="1">
                    <br>
                    
                    <label for="dark">Dark</label>
                    <input type="radio" name="theme" id="dark" value="2">
                    <br>
                
                    <!-- INPUT POUR LE NOMBRE D'ARTICLES -->
                    <label for="lenghtSix">6 Articles</label>
                    <input type="radio" name="number" id="lenghtSix" value="6">
                    <br>
                
                    <label for="lenghtNine">9 Articles</label>
                    <input type="radio" name="number" id="lenghtNine" value="9">
                    <br>
                
                    <label for="lenghtTwelve">12 Articles</label>
                    <input type="radio" name="number" id="lenghtTwelve" value="12">
                    <br>
                
                    <!-- INPUT POUR LES SUJETS -->
                    <label for="company">Entreprise</label>
                    <input class="hidden" type="checkbox" name="subject[]" id="company" value="0">
                    <br>
                    
                    <label for="money">Argent</label>
                    <input class="hidden" type="checkbox" name="subject[]" id="money" value="1">
                    <br>
                    
                    <label for="frenchEconomy">Économie Française</label>
                    <input class="hidden" type="checkbox" name="subject[]" id="frenchEconomy" value="2">
                    <br>
                    
                    <label for="estate">Immobilier</label>
                    <input class="hidden" type="checkbox" name="subject[]" id="estate" value="3">
                    <br>
                    
                    <label for="workd">Travail</label>
                    <input class="hidden" type="checkbox" name="subject[]" id="work" value="4">
                    <br>
                
                    <button type="submit">ENVOYER</button>
    </form>
                </div>
            </div>
        </div>
    </div>
    
</main>