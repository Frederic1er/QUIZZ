<?php
include './header.php';
?>

 <body>
<img class="bg_image" src="./img/bg_image.jpg">
 <noscript>
      You need to enable JavaScript to run this app.
    </noscript>
    <div id="root"></div>

 <div class="start_btn"><button><i>JOUER</i></button></div>
 <div class="info_box">
        <div class="info-title"><span>Voici les Règles du Quizz</span></div>
        <div class="info-list">
            <div class="info">1. Vous avez <span>15 secondes</span> par question.</div>
            <div class="info">2. Une fois la réponse choisie vous ne pouvez plus en changer.</div>
            <div class="info">3. Vous ne pouvez plus selectionner de réponse une fois le temps écoulé.</div>
            <div class="info">4. Il ne vous est plus possible de quitter le Quizz une fois commencé.</div>
            <div class="info">5. Vos points seront équivalents au nombre de bonnes réponses.</div>
        </div>
        <div class="buttons">
            <button class="quit">Quitter</button>
            <button class="restart">Continuer</button>
        </div>
    </div>

    
 </body>

<?php
include './footer.php';
?>






