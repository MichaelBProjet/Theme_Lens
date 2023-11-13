<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Accueil - Robbie Lens Photographie</title>
        <link rel="stylesheet" href="style.css"/>
        <link rel="stylesheet" href="index.css"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Montserrat:wght@100&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Manrope&family=Montserrat:wght@100&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <header>
        <?php include('header.php'); ?>
    </header>
    <main>
        <section class="accueil-introduction">
        <div>
        <h1>Robbie Lens Photographie</h1>
        <p>Où <em class="separation-bleu"> professionalisme </em>s’allie avec <em class="separation-bleu">passion</em>. Depuis plus de 5 ans maintenant, j’exerce mon métier avec la passion qui m’anime : capturer l’essence de chaque instant.</p>
        <a class ="cta" href ="#mon_ancre">UN PROJET ? ÉCRIVEZ-MOI</a>
        </div>
        <img src = "images/robbie-lens.png" alt="portrait avec effet de la photographe Robbie Lens"/><br>
        </section>
        
        <section class="accueil-photos">
            <h2>Mon dernier projet</h2>            
            <div>
                <img src = "images/mer_agitee.png" alt="Twelve apostles - Australie"/>
                <img src = "images/brume.png" alt="Wai-O-Tapu - Nouvelle-Zélande"/>
                <img src = "images/lac_rouge.png" alt="Parc National d’Abel Tasman - Nouvelle-Zélande"/>
            </div>
            <div>
            <img src = "images/mer_bleu.png" alt="Lac Rotorua - Nouvelle-Zélande"/>
            <img src = "images/lac_montagne.png" alt="Milford Sound - Nouvelle-Zélande"/>
            <img src = "images/lac_ciel_rose.png" alt="Lac Wanaka - Nouvelle-Zélande"/>
            </div>
        </section>

        <section id="contact" class="section-contact">
            <h2 id="mon_ancre">Parlons de votre projet</h2>
            <form action="submit_contact.php" method="POST" target ="_blank">
                <div class="form-nom-email">
                <div class="form-column">
                <label for="nom" >nom</label>
                <input type="text" name="nom" id="nom" size = "30" maxlength="20" required>
                </div>
                <div class="form-column"> 
                <label for="email" >email</label>
                <input type="email" name="email" id="email" size = "30" maxlength="30" required>
                </div>
                </div>
                <label for="message" >message</label>
                <textarea name="message" id="message" rows="10" maxlength="170"></textarea>
                <input type="submit" value="ENVOYER" class="cta">
            </form>
        </section>
    </main>
        <footer>
            <?php include('footer.php'); ?>
        </footer>
    </body>
</html>