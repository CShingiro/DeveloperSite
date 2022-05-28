<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="Images/SRWBLogo.png" width="30" height="30" type="image/png">
    <link rel="stylesheet" href="webdesign.css" type="text/css">
    <title>Socially Radical Web Design</title>
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
                <li class="parent_navigation nav-item"><a class="navigation nav-link disabled" aria-current="page" href="#index"><button type="button" class="btn btn-outline-dark">Home</button></a></li>
                <li class="parent_navigation nav-item"><a class="navigation nav-link active" aria-current="page" href="#about"><button type="button" class="btn btn-outline-dark">About</button></a></li>
                <li class="parent_navigation nav-item"><a class="navigation nav-link active" aria-current="page" href="#request"><button type="button" class="btn btn-outline-dark">Site Request</button></a></li>
                <li class="parent_navigation nav-item"><a class="navigation nav-link active" aria-current="page" href="#contact"><button type="button" class="btn btn-outline-dark">Contact</button></a></li>
                <li class="parent_navigation nav-item"><a class="navigation nav-link disabled" aria-current="page" href="#"><button type="button" class="btn btn-outline-dark"><img src="Images/united-kingdom.png" width="20px" height="20px">English</button></a></li>
                <li class="parent_navigation nav-item"><a class="navigation nav-link active" aria-current="page" href="frindex.php"><button type="button" class="btn btn-outline-dark"><img src="Images/france.png" width="20px" height="20px">French</button></a></li>
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
      <p class="text-center fst-italic">Socially Radical Web Design at a Socially Reasonable Price</p><br><br>
      <div class="container bg-success bg-gradient bg-opacity-50 rounded-3 border border-dark border-5">
        <div id="about">
          <h2 class="text-center">About The Designer</h2>
            <div class="accordion rounded-3 border border-dark border-3" id="accordionExample">
              <div id="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Biography
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <img src="Images/ChristianShingiro.jpg" class="img-thumbnail rounded mx-auto d-block" alt="Photo of Christian Shingiro"><br><br>
                    <p><strong>Christian Shingiro</strong> is a recent graduate of the Internet Applications and Web Development Fundamentals Program at Conestoga College.
                      He already has a few projects under his belt, and is the web master and host of a radio show called <a href="https://sociallyradicalguitarist.com">
                      The Socially Radical Guitarist</a>. His specialties are UI/UX design, Wordpress, Bootstrap, PHP, MySQL, and general Full Stack web development on Linux.
                      He aims to be Socially Radical, while providing web services at a rate that's socially reasonable. You can go <a href="https://github.com/CShingiro">here</a>
                      for his public GitHub of complete and ongoing projects.
                    </p>
                  </div>
                </div>
              </div>
              <div id="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Credentials
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <h3 class="text-center">Awards</h3><br>
                    <object data="Images/AwardLetter.pdf#toolbar=0" type="application/pdf" width="100%" height="500px">
                      <div>Non compatible PDF viewer in browser.</div>
                    </object><br>
                    <br>
                    <h3 class="text-center">Education</h3><br>
                    <object data="Images/ConestogaOfficialTranscript.pdf#toolbar=0" type="application/pdf" width="100%" height="500px">
                      <div>Non compatible PDF viewer in browser.</div>
                    </object><br><br>
                    <object data="Images/ProofofProgramCompletion.pdf#toolbar=0" type="application/pdf" width="100%" height="500px">
                      <div>Non compatible PDF viewer in browser.</div>
                    </object><br>
                    <br>
                    <h3 class="text-center">Certificates</h3><br>
                    <object data="Images/ConestogaCertificate.pdf#toolbar=0" type="application/pdf" width ="100%" height="500px">
                      <div>Non compatible PDF viewer in browser.</div>
                    </object><br><br>
                    <object data="Images/CertificateCodeCademy.pdf#toolbar=0" type="application/pdf" width ="100%" height="500px">
                      <div>Non compatible PDF viewer in browser.</div>
                    </object><br><br>
                    <img src="Images/FreeCodeCampCertificate.png" class="d-block w-100"><br>
                  </div>
                </div>
              </div>
              <div id="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Past Work
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
                        <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="7" aria-label="Slide 8"></button>
                        <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="8" aria-label="Slide 9"></button>
                      </div>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="Images/Showcase1.png" class="d-block w-100" alt="First Showcase Site">
                          <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75">
                            <h5>Wordpress Individual Project</h5>
                            <p><a class="link-light" href="https://dev-shingiroportfolio.pantheonsite.io/" target="_blank">Link to Site Here</a></p>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img src="Images/Showcase2.png" class="d-block w-100" alt="Second Showcase Site">
                          <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75">
                            <h5>Socially Radical Guitarist Pilot Blog</h5>
                            <p><a class="link-light" href="https://live-guitarenthusiasm.pantheonsite.io/" target="_blank">Link to Site Here</a></p>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img src="Images/Showcase3.png" class="d-block w-100" alt="Third Showcase Site">
                          <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75">
                            <h5>Socially Radical Guitarist Pilot Blog #2</h5>
                            <p><a class="link-light" href="https://guitarenthusiasm.wordpress.com/" target="_blank">Link to Site Here</a></p>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img src="Images/Showcase4.png" class="d-block w-100" alt="Fourth Showcase Site">
                          <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75">
                            <h5>Collaborative Wordpress Project</h5>
                            <p><a class="link-light" href="https://dev-chrisolysimhotel.pantheonsite.io/" target="_blank">Link to Site Here</a></p>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img src="Images/Showcase5.png" class="d-block w-100" alt="Fifth Showcase Site">
                          <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75">
                            <h5>Collaborative Coffee Shop Project</h5>
                            <p><a class="link-light" href="https://cshingiro.github.io/Team6Project/" target="_blank">Link to Site Here</a></p>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img src="Images/Showcase6.png" class="d-block w-100" alt="Sixth Showcase Site">
                          <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75">
                            <h5>The Socially Radical Guitarist Website</h5>
                            <p><a class="link-light" href="https://sociallyradicalguitarist.com" target="_blank">Link to Site Here</a></p>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img src="Images/Showcase7.png" class="d-block w-100" alt="Seventh Showcase Site">
                          <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75">
                            <h5>Backend for the African and Caribbean Inclusion Centre</h5>
                            <p><a class="link-light" href="https://www.aciccanada.ca" target="_blank">Link to Site Here</a></p>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img src="Images/Showcase8.png" class="d-block w-100" alt="Eighth Showcase Site">
                          <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75">
                            <h5>E-Commerce Functionality for Maestro's Pizza Waterloo</h5>
                            <p><a class="link-light" href="https://maestrospizzawaterloo.com/" target="_blank">Link to Site Here</a></p>
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                          <img src="Images/Showcase8.png" class="d-block w-100" alt="Ninth Showcase Site">
                          <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75">
                            <h5>Site Web animé pour Rade's Restaurant</h5>
                            <p><a class="link-light" href="https://radesrestaurant.ca" target="_blank">Link to Site Here</a></p>
                          </div>
                        </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
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
            <h2>Request A Project</h2>
            <span class="text-danger">**Note: Please allow 4-6 weeks for delivery.**</span><br>
            <span class="text-danger">**Fees include cost of all required hosting services, including URL for one year, and MySQL space, if requested.**</span><br>
            <span class="text-danger">**Prices are all in Canadian Dollars (CAD).**</span><br><br>
            <form>
              <h3>Personal Information</h3><br>
              <label for="name">Full Name:</label><br>
              <input type="text" id="name" name="name" placeholder="Full Name" required><br>
              <label for="email">Email:</label><br>
              <input type="email" id="email" name="email" placeholder="name@example.com" required><br>
              <label for="address">Address:</label><br>
              <input type="text" id="address" name="address" placeholder="123 Example St" required><br>
              <label for="city">City:</label><br>
              <input type="text" id="city" name="city" placeholder="Example: Timbuktu" required><br>
              <label for="region">Province, State, or Territory:</label><br>
              <input type="text" id="region" name="region" placeholder="Example: Xinjiang" required><br>
              <label for="zip">Zip/Postal Code:</label><br>
              <input type="text" id="zip" name="zip" placeholder="Example: 12345, A1A 1A1, or 123456"><br>
              <label for="country">Country:</label><br>
              <input type="text" id="country" name="country" placeholder="Example: Cuba" required><br><br>
              <h3>Project Type</h3><br>
              <input type="radio" id="wordpress" name="project_type" value="Wordpress/Joomla/CMS" checked>
              <label for="wordpress">Wordpress/Joomla/CMS Site - $500 + $50 per page</label><br>
              <input type="radio" id="static_site_no_javascript" name="project_type" value="Static - No Javascript">
              <label for="static_site_no_javascript">Static Site - No Javascript Animations - $700 + $100 per page</label><br>
              <input type="radio" id="static_site_with_javascript" name="project_type" value="Static + Javascript">
              <label for="static_site_with_javascript">Static Site With Javascript Animations - $850 + $125 per page</label><br>
              <input type="radio" id="dynamic_site_no_javascript" name="project_type" value="Dynamic - No Javascript">
              <label for="dynamic_site_no_javascript">Dynamic Site - No Javascript Animations - $1000 + $150 per page</label><br>
              <input type="radio" id="dynamic_site_with_javascript" name="project_type" value="Dynamic + Javascript">
              <label for="dynamic_site_with_javascript">Dynamic Site With Javascript Animations - $1200 +$250 per page</label><br><br>
              <label for="notes">Notes/Special Instructions:</label><br>
              <textarea style="height: 300px" class="form-control" id="notes" placeholder="Notes/Special Instructions" name="notes" required></textarea><br>
              <input type="submit" formaction="request.php" name="site_request" formmethod="POST" value="Order Website"><br>
            </form>
          </div>
        </div>
        <br>
        <br>
        <br>
        <div class="container bg-success bg-gradient bg-opacity-50 rounded-3 border border-dark border-5">
          <div id="contact">
            <h2>General Contact Form</h2>
              <form>
              <label for="name">Full Name:</label><br>
              <input type="text" id="name" name="name" placeholder="Full Name" required><br>
              <label for="email">Email:</label><br>
              <input type="email" id="email" name="email" placeholder="name@example.com" required><br>
              <label for="subject">Subject:</label><br>
              <input type="text" id="subject" name="subject" placeholder="Subject" required><br>
              <label for="message">Message:</label><br>
              <textarea style="height: 300px" class="form-control" id="message" placeholder="Message/Comment" name="message" required></textarea><br>
              <input type="submit" formaction="#contact" formmethod="POST" name="contact" value="Contact Socially Radical Web Design">
            </form><br>
            <?php
              if (isset($_POST['contact'])) {
                $to = 'cshingiro@sociallyradicalwebdesign.com';
                $subject = 'General Contact Message';
                $customername = $_POST['name'];
                $customeremail = $_POST['email'];
                $customersubject = $_POST['subject'];
                $customermessage = $_POST['message'];
                $contact_name = "Name: ". $customername;
                $contact_subject = "Subject: ".$customersubject;
                $contact_message = "Message: ".$customermessage;
                $message = $contact_name . "\r" .$contact_subject."\r". $contact_message;
                $headers = "From: ".$customeremail;
                mail($to,$subject,$message,$headers);
                $customername = '';
                $customeremail = '';
                $customersubject = '';
                $custonermessage = '';
                echo "<br><br><p class='text-danger'>Your message was received. Socially Radical Web Design will return your message soon.</p>";
              }
            ?>
          </div>
        </div>
        <div class="text-center">
          <p class="fst-italic">Click the image below if you're a developer and are interested in using the same hosting at a discounted rate.</p><br>
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
      <p class="text-center">&#169; - 2022 - Socially Radical Web Design</p><br>
      <p class="text-center"><a href="https://www.flaticon.com/free-icons/flag" title="flag icons">Flag icons created by Freepik - Flaticon</a></p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
