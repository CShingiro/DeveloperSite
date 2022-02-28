<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="Images/SRWBLogo.png" width="30" height="30" type="image/png">
    <link rel="stylesheet" href="webdesign.css" type="text/css">
    <title>Conception Web Socialement Radicale</title>
  </head>
  <body>
    <header>
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-success bg-gradient bg-opacity-50 rounded-3 border border-dark border-5">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img class="logo" src="Images/SRWBLogo.png" class="d-inline-block align-text-top" alt="Socially Radical Web Design Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="parent_navigation nav-item"><a class="navigation nav-link disabled" aria-current="page" href="#index"><button type="button" class="btn btn-outline-dark">Accueil</button></a></li>
                <li class="parent_navigation nav-item"><a class="navigation nav-link active" aria-current="page" href="#about"><button type="button" class="btn btn-outline-dark">À Propos</button></a></li>
                <li class="parent_navigation nav-item"><a class="navigation nav-link active" aria-current="page" href="#request"><button type="button" class="btn btn-outline-dark">Demande De Site</button></a></li>
                <li class="parent_navigation nav-item"><a class="navigation nav-link active" aria-current="page" href="#contact"><button type="button" class="btn btn-outline-dark">Contact</button></a></li>
                <li class="parent_navigation nav-item"><a class="navigation nav-link active" aria-current="page" href="index.php"><button type="button" class="btn btn-outline-dark"><img src="Images/united-kingdom.png" width="20px" height="20px">Anglais</button></a></li>
                <li class="parent_navigation nav-item"><a class="navigation nav-link disabled" aria-current="page" href="frindex.php"><button type="button" class="btn btn-outline-dark"><img src="Images/france.png" width="20px" height="20px">Français</button></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <br>
    <br>
    <br>
    <main>
      <p class="text-center fst-italic">Conception des Sites Radicales à un tarif Socialement Raisonnable</p><br><br>
      <div class="container bg-success bg-gradient bg-opacity-50 rounded-3 border border-dark border-5">
        <div id="about">
          <h2 class="text-center">À Propos Du Concepteur</h2>
            <div class="accordion rounded-3 border border-dark border-3" id="accordionExample">
              <div id="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Biographie
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <img src="Images/ChristianShingiro.jpg" class="img-thumbnail rounded mx-auto d-block" alt="Photo of Christian Shingiro"><br><br>
                    <p><strong>Christian Shingiro</strong> est un jeune dîplomé du programme Fondamentaux des applications Internet et du développement web à Conestoga College.
                      Il a déjà quelques projets à son actif, et il est le webmestre et animateur d'une émission de radio intitulée <a href="https://sociallyradicalguitarist.com">
                      The Socially Radical Guitarist</a>. Ses spécialités sont la conception UI/UX, Wordpress, Bootstrap, PHP, MySQL et le développement Web général Full Stack sur Linux.
                      Il vise à être socialement radical, tout en fournissant des services Web à un tarif socialement raisonnable. Veuillez allez <a href="https://github.com/CShingiro">ici</a>
                      pour son GitHub public de projets complets et en cours.
                    </p>
                  </div>
                </div>
              </div>
              <div id="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Identifiants
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <h3 class="text-center">Récompenses</h3><br>
                    <iframe src="Images/AwardLetter.pdf#toolbar=0" width="100%" height="500px"></iframe><br>
                    <br>
                    <h3 class="text-center">Éducation</h3><br>
                    <iframe src="Images/ConestogaOfficialTranscript.pdf#toolbar=0" width="100%" height="500px"></iframe><br><br>
                    <iframe src="Images/ProofofProgramCompletion.pdf#toolbar=0" width="100%" height="500px"></iframe><br>
                    <br>
                    <h3 class="text-center">Certificates</h3><br>
                    <p>À venir! Après convocation!</p>
                  </div>
                </div>
              </div>
              <div id="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Travail Passé
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div id="carouselCaptions" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
                        <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
                      </div>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="Images/Showcase1.png" class="d-block w-100" alt="First Showcase Site">
                          <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75">
                            <h5>Projet Individuel WordPress</h5>
                            <p><a class="link-light" href="https://dev-shingiroportfolio.pantheonsite.io/" target="_blank">Lien Vers Le Site Ici</a></p>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img src="Images/Showcase2.png" class="d-block w-100" alt="Second Showcase Site">
                          <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75">
                            <h5>Blog Pilote Du Socially Radical Guitarist</h5>
                            <p><a class="link-light" href="https://live-guitarenthusiasm.pantheonsite.io/" target="_blank">Lien Vers Le Site Ici</a></p>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img src="Images/Showcase3.png" class="d-block w-100" alt="Third Showcase Site">
                          <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75">
                            <h5>Blog Pilote #2 Du Socially Radical Guitarist</h5>
                            <p><a class="link-light" href="https://guitarenthusiasm.wordpress.com/" target="_blank">Lien Vers Le Site Ici</a></p>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img src="Images/Showcase4.png" class="d-block w-100" alt="Fourth Showcase Site">
                          <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75">
                            <h5>Projet Collaboratif WordPress</h5>
                            <p><a class="link-light" href="https://dev-chrisolysimhotel.pantheonsite.io/" target="_blank">Lien Vers Le Site Ici</a></p>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img src="Images/Showcase5.png" class="d-block w-100" alt="Fifth Showcase Site">
                          <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75">
                            <h5>Projet Collaboratif Du Café</h5>
                            <p><a class="link-light" href="https://cshingiro.github.io/Team6Project/" target="_blank">Lien Vers Le Site Ici</a></p>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img src="Images/Showcase6.png" class="d-block w-100" alt="Sixth Showcase Site">
                          <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75">
                            <h5>Site Web Du Socially Radical Guitarist</h5>
                            <p><a class="link-light" href="https://sociallyradicalguitarist.com" target="_blank">Lien Vers Le Site Ici</a></p>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img src="Images/Showcase7.png" class="d-block w-100" alt="Seventh Showcase Site">
                          <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75">
                            <h5>Backend pour le Centre d'inclusion des Africains et des Caraïbes</h5>
                            <p><a class="link-light" href="https://www.aciccanada.ca" target="_blank">Lien Vers Le Site Ici</a></p>
                          </div>
                        </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Précédente</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Suivante</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
        <br>
        <br>
        <div class="container bg-success bg-gradient bg-opacity-50 rounded-3 border border-dark border-5">
          <div id="request">
            <h2>Demander Un Projet</h2>
            <span class="text-danger">**Remarque : Veuillez prévoir de 4 à 6 semaines pour la livraison.**</span><br>
            <span class="text-danger">**Les frais incluent le coût de tous les services d'hébergement requis, y compris l'URL pendant un an et l'espace MySQL, si demandé.**</span><br>
            <span class="text-danger">**Les prix sont tous en dollars canadiens (CAD).**</span><br><br>
            <form>
              <h3>Renseignements Personnels</h3><br>
              <label for="name">Nom et Prénom:</label><br>
              <input type="text" id="name" name="name" placeholder="Nom et Prénom" required><br>
              <label for="email">E-mail:</label><br>
              <input type="email" id="email" name="email" placeholder="nom@example.com" required><br>
              <label for="address">Adresse:</label><br>
              <input type="text" id="address" name="address" placeholder="123 Example St" required><br>
              <label for="city">Ville:</label><br>
              <input type="text" id="city" name="city" placeholder="Example: Timbuktu" required><br>
              <label for="region">Province, État ou Territoire:</label><br>
              <input type="text" id="region" name="region" placeholder="Example: Xinjiang" required><br>
              <label for="zip">Zip/Code Postal:</label><br>
              <input type="text" id="zip" name="zip" placeholder="Example: 12345, A1A 1A1, or 123456"><br>
              <label for="country">Pays:</label><br>
              <input type="text" id="country" name="country" placeholder="Example: Cuba" required><br><br>
              <h3>Type De Project</h3><br>
              <input type="radio" id="wordpress" name="project_type" value="Wordpress/Joomla/CMS" checked>
              <label for="wordpress">Wordpress/Joomla/CMS Site - $500 + $50 par page</label><br>
              <input type="radio" id="static_site_no_javascript" name="project_type" value="Static - No Javascript">
              <label for="static_site_no_javascript">Site Statique - Rien des Animations Javascript - $700 + $100 par page</label><br>
              <input type="radio" id="static_site_with_javascript" name="project_type" value="Static + Javascript">
              <label for="static_site_with_javascript">Site Statique Avec des Animations Javascript - $850 + $125 par page</label><br>
              <input type="radio" id="dynamic_site_no_javascript" name="project_type" value="Dynamic - No Javascript">
              <label for="dynamic_site_no_javascript">Site Dynamic - Rien des Animations Javascript - $1000 + $150 par page</label><br>
              <input type="radio" id="dynamic_site_with_javascript" name="project_type" value="Dynamic + Javascript">
              <label for="dynamic_site_with_javascript">Site Dynamic Avec des Animations Javascript - $1200 +$250 par page</label><br><br>
              <label for="notes">Remarques/Instructions Speciales:</label><br>
              <textarea style="height: 300px" class="form-control" id="notes" placeholder="Remarques/Instructions Speciales" name="notes" required></textarea><br>
              <input type="submit" formaction="frrequest.php" name="site_request" formmethod="POST" value="Demande Du Site"><br>
            </form>
          </div>
        </div>
        <br>
        <br>
        <br>
        <div class="container bg-success bg-gradient bg-opacity-50 rounded-3 border border-dark border-5">
          <div id="contact">
            <h2>Formulaire de Contact Général</h2>
              <form>
              <label for="name">Nom et Prénom:</label><br>
              <input type="text" id="name" name="name" placeholder="Full Name" required><br>
              <label for="email">Email:</label><br>
              <input type="email" id="email" name="email" placeholder="name@example.com" required><br>
              <label for="subject">Sujet:</label><br>
              <input type="text" id="subject" name="subject" placeholder="Subject" required><br>
              <label for="message">Message:</label><br>
              <textarea style="height: 300px" class="form-control" id="message" placeholder="Message/Comment" name="message" required></textarea><br>
              <input type="submit" formaction="#contact" formmethod="POST" name="contact" value="Contacter Le CWSR">
            </form><br>
            <?php
              if (isset($_POST['contact'])) {
                $to = 'cshingiro@sociallyradicalwebdesign.com';
                $subject = 'Message De Contact Général';
                $customername = $_POST['name'];
                $customeremail = $_POST['email'];
                $customersubject = $_POST['subject'];
                $customermessage = $_POST['message'];
                $contact_name = "Nom: ". $customername;
                $contact_subject = "Sujet: ".$customersubject;
                $contact_message = "Message: ".$customermessage;
                $message = $contact_name . "\r" .$contact_subject."\r". $contact_message;
                $headers = "De: ".$customeremail;
                mail($to,$subject,$message,$headers);
                $customername = '';
                $customeremail = '';
                $customersubject = '';
                $custonermessage = '';
                echo "<br><br><p class='text-danger'>Votre message a été reçu. Socially Radical Web Design vous répondra bientôt.</p>";
              }
            ?>
          </div>
        </div>
        <div class="text-center">
          <p class="fst-italic">Cliquez sur l'image ci-dessous si vous êtes un développeur et souhaitez utiliser le même hébergement à un tarif réduit.</p><br>
          <a href="https://nhtrx.com/?a=89&oc=2&c=4&s1="><img src="Images/NameHeroLink.png" width="60px" height="60px"></a>
        </div>
    </main>
    <br>
    <br>
    <br>
    <footer>
      <div class="container d-flex justify-content-center">
        <a href="https://linkedin.com/in/sociallyradicalwebdesign"><img src="Images/linkedin.svg" width="60px" height="60px" alt="LinkedIn Icon"></a>
        <a href="https://www.facebook.com/SociallyRadicalWebDesign"><img src="Images/facebook.svg" width="60px" height="60px" alt="Facebook Icon"></a>
        <a href="https://www.instagram.com/sociallyradicalwebdesign/"><img src="Images/instagram.svg" width="60px" height="60px" alt="Instagram Icon"></a>
        <a href="https://www.github.com/CShingiro"><img src="Images/github.svg" width="60px" height="60px" alt="Github Icon"></a>
        <a href="https://twitter.com/web_socially"><img src="Images/twitter.svg" width="60px" height="60px" alt="Twitter Icon"></a><br>
      </div><br>
      <p class="text-center">&#169; - 2022 - Conception Web Socialement Radicale</p><br>
      <p class="text-center"><a href="https://www.flaticon.com/free-icons/flag" title="flag icons">Icônes de drapeau créées par Freepik - Flaticon</a></p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>