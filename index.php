<!-- <?php
        include 'captcha.php';
        ?> -->

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Besoins d'un taxi ? réservez votre taxi rapide en immédiat pour aller à l'Aéroport, la Gare, l'Hôpital ou ailleurs. Trajets toutes distances. Véhicule confort. 7j/7">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/style-page.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/image/logo-noir.svg" type="image/x-icon" sizes="20*20">
    <script type="module" src="https://cdn.jsdelivr.net/npm/friendly-challenge@0.8.3/widget.module.min.js" async defer></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/friendly-challenge@0.8.3/widget.min.js" async defer></script>
    <title>RAAJ - Taxi rapide en immédiat sur Creil et aux alentours</title>
</head>

<body>
    <header id="nav">
        <div class="nav">
            <input type="checkbox" id="nav-check">
            <div class="nav-header">
                <div class="nav-logo">
                    <img src="/image/logo1.svg" alt="logo">
                </div>
            </div>
            <div class="nav-btn">
                <label for="nav-check">
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
            </div>
            <div class="nav-links">
                <a href="#nav" class="nav1"></i> Accueil</a>
                <a href="#service" class="nav2">Service</a>
                <a href="#contact" class="nav3">Contact</a>
                <a href="tel:+33602121907" class="nav4">0602121907</a>
            </div>
        </div>


        <div class="content">
            <div class="presentation" id="presentation">

                <h1>

                    Réservez un taxi.
                </h1>
                <p class="societe">
                    Toutes directions 7j/7.
                </p>
                <p class="phone">
                    <i class="bi bi-telephone-inbound"></i> 0602121907
                </p>
            </div>
        </div>
        <div class="down">
            <a href="#qui">
                <i class="bi bi-arrow-down-circle"></i>
            </a>

        </div>
    </header>
    <section id="qui">

        <div class="pre reveal">
            <div class="reveal-1">
                <h2>Qui sommes nous ?</h2>
            </div>
            <div class="reveal-2">
                <p>
                    RAAJ Taxi est une société basée sur Creil dans le département de l'Oise (60) qui met à votre disposition un service de chauffeur taxi compétent,
                    qui assurera tous vos déplacements en toute sécurité et en toute discrétion et en respectant les gestes barrières. Peu importe la distance, nous mettons à votre disposition un van (1 à 7 personnes)
                    ou un véhicule classe confort (1 à 3 personnes). <br>Disponibles 7j/7.
                </p>
            </div>
        </div>
        <div class="infoContact reveal">
            <p class="reveal-3">
                <i class="bi bi-phone"><a href="tel:+33602121907">+33(0)602121907</a> </i>
                <i class="bi bi-envelope"> <a href="mailto:raaj.taxi@yahoo.com"> raaj.taxi@yahoo.com</a> </i>
                <i class="bi bi-geo-alt"><a href="https://www.google.fr/maps/place/Creil/@49.2556227,2.4666335,14z/data=!3m1!4b1!4m5!3m4!1s0x47e649f8f20ae9d1:0x40af13e81644510!8m2!3d49.2576872!4d2.4783913" target="_blank"> 60100, Creil</a> </i>
            </p>
        </div>

    </section>

    <section id="service">
        <div class="reveal">
            <h2 class="reveal-1">
                Nos services
            </h2>
        </div>
        <div class="service" id="serv">
            <div class="content1 reveal">
                <div class="card1">
                    <img src="/image/client.jpg" alt="taxi" class="reveal-1">
                    <h3 class="reveal-2">Pour vos déplacements quotidiens</h3>
                    <p class="reveal-3">RAAJ assure vos déplacements entre le point de départ et d'arrivée de votre choix.
                        Peu importe l'occasion un chauffeur taxi vous transportera en toute discrétion. </p>
                </div>
            </div>
            <div class="content2 reveal">
                <div class="card2">
                    <img src="/image/aeroport.PNG" alt="aeroport vue sur un avion" class="reveal-1">
                    <h3 class="reveal-2">Aéroport/Gare
                    </h3>
                    <p class="reveal-3">
                        RAAJ assure la prise en charge complète de vos trajets en
                        direction ou en provenance des aéroports de Roissy CDG,
                        Orly, le Bourget, Beauvais et aux gares de votre choix.
                    </p>
                </div>
            </div>
            <div class="content3 reveal">
                <div class="card3">
                    <img src="/image/taxihop.jpg" alt="Hôpital avec un taxi conventionnée" class="reveal-1">
                    <h3 class="reveal-2">
                        Hôpital
                    </h3>
                    <p class="reveal-3">
                        RAAJ c'est aussi un service de taxi médical conventionné à votre disposition
                        pour vos déplacements vers des centres hospitaliers et des centres de rééducation.
                    </p>
                </div>
            </div>

        </div>
    </section>
    <section class="contact" id="contact">
        <?php

        $msgNom = "";
        $msgMail = "";
        $msgTel = "";
        $msg = "";
        if (isset($envoyer) == true) {
            $position_arobase = strpos($mail, '@');
            $numVerif = $_POST['tel'];
            if (preg_match('#(0|\+33)[1-9]( *[0-9]{2}){4}#', $numVerif)) {
            } else {
                $msgTel = "Le numéro de téléphone n'est pas correct ";
            }

            if (isset($_POST['nom']) == false || trim($_POST['nom']) == "") {
                $msgNom = "Le nom est obligatoire";
            }
            if (isset($_POST['mail']) == false || trim($_POST['mail']) == "" && $position_arobase === false) {
                $msgMail = "Le mail n'est pas correct";
            }

            if (isset($_POST['msg']) == false || trim($_POST['msg']) == "") {
                $msg = "Le message est obligatoire ";
            }
        }


        ?>
        <div class="contact reveal" id="contact">
            <h2 class="reveal-1">Nous contacter</h2>

            <div class="containerContact reveal">



                <form action="/index.php" method="post">
                    <div class="nom reveal-1">
                        <label for="nom">Nom : </label>
                        <input type="text" class="reveal-1" value="<?php echo !empty($_POST['nom']) ? $_POST['nom'] : ''; ?>" title="Veuillez remplir ce champ" required name="nom" id="nom" />
                        <?php echo "<p class='error' >" . $msgNom . "</p>" ?>
                    </div>
                    <div class="mail reveal-2">
                        <label for="mail">Mail : </label>
                        <input type="email" class="reveal-2" value="<?php echo !empty($_POST['mail']) ? $_POST['mail'] : ''; ?>" required name="mail" id="mail" />
                        <?php echo "<p class='error' >" . $msgMail . "</p>" ?>
                    </div>
                    <div class="tel reveal-2">
                        <label for="tel">Numéro de téléphone : </label>
                        <input type="tel" class="reveal-2" value="<?php echo !empty($_POST['tel']) ? $_POST['tel'] : ''; ?>" pattern="^\+?\s*(\d+\s?){10,}$" title="Veuillez saisir un numéro de téléphone correct" required name="tel" id="tel" />
                        <?php echo "<p class='error' >" . $msgTel . "</p>" ?>
                    </div>
                    <div class="msg reveal-2">
                        <label for="msg">Votre message : </label>
                        <textarea required pattern="[A-Za-z]{4,200}" title="Veuillez saisir entre 4 et 200 caractères" class="reveal-3" name="msg" id="msg">
                        <?php echo !empty($_POST['msg']) ?> 
                        </textarea>

                        <?php echo "<p class='error' >" . $msg . "</p>" ?>
                    </div>
                    <br>

                    <div class="frc-captcha dark reveal-3" data-start="none" data-lang="fr" data-sitekey="<?php echo $siteKey; ?>">
                        <input type="hidden" class="frc-captcha-solution" name="frc-captcha-solution">

                    </div>
                    <?php if (!empty($statusMsg)) { ?>
                        <p class="status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?> </p>
                    <?php }
                    ?>
                    <div class="envoi">
                        <input type="submit" value="Envoyer" name="envoyer" class="reveal-3">
                    </div>
                </form>
            </div>
        </div>
        <footer class="footer">
            <div class="logoFooter">
                <img src="/image/logo1.svg" alt="logo de raaj taxi">
            </div>
            <div class="lienFooter">
                <ul>
                    <li>© 2020 - 2021 RAAJ</li>
                    <li><a href="/page/mentions.html">Mentions légales</a></li>
                    <li><a href="/page/confidentialite.html">Politique de confidentialité</a></li>

                </ul>
            </div>

        </footer>

        <?php
        if (isset($_POST['envoyer'])) {

            $erreurnom = $erreuremail = $erreurmessage = $messageenvoi = $nom = $prenom = $email = $message =  '';
            // On récupère les données envoyées par le formulaire
            $nom = $_POST['nom'];
            $tel = $_POST['tel'];
            $email = $_POST['mail'];
            $message = $_POST['msg'];
            $valid = true;
            $envoi = false;
            // test du nom    
            if (empty($nom)) {
                $valid = false;
                $erreurnom = '<br><span class="error">Vous n\'avez pas mis votre nom</span><br>';
            }
            // Test format e-mail    
            if (!preg_match("/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/i", $email)) {
                $valid = false;
                $erreuremail = '<br><span class="error">Email non valide</span><br>';
            }
            // Test message
            if (empty($msg)) {
                $valid = false;
                $erreurmessage = '<br><span class="error">Vous n\'avez pas mis votre message</span><br>';
            }



            $entete  = 'MIME-Version: 1.0' . "\r\n";
            $entete .= 'From: ' . $email . "\r\n";
            $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
            $entete .= 'Content-Transfer-Encoding: 8bit';
            $mailenvoi = 'ramzy_alktb@yahoo.com';

            $message = '<h1>Message envoyé depuis la page Contact de monsite.fr</h1>
        <p><b>Nom : </b>' . $nom . '<br>
        <b>Email : </b>' . $email . '<br>
        <b>Tel : </b>' . $tel . '<br>
        <b>Message : </b>' . $msg . '</p>';

            $retour = mail($mailenvoi, 'Envoi depuis la page Contact du site', $message, $entete);
            var_dump($retour);
            if ($retour) {
                echo "<p>Votre message a bien été envoyé.</p>";
            } else {
                echo "Votre message n'a pas été envoyé";
            }
        }
        ?>
    </section>
    <script src="/js/app.js"></script>
</body>


</html>