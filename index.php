<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <title>Socially Radical Web Design</title>
  </head>
  <body>
    <header>
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img class="logo" src="Images/SRWBLogo.png" class="d-inline-block align-text-top" alt="Socially Radical Web Design Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="parent_navigation nav-item"><a class="navigation nav-link active" aria-current="page" href="#index">Home</a></li>
                <li class="parent_navigation nav-item"><a class="navigation nav-link active" aria-current="page" href="#about">About</a></li>
                <li class="parent_navigation nav-item"><a class="navigation nav-link active" aria-current="page" href="#request">Site Request</a></li>
                <li class="parent_navigation nav-item"><a class="navigation nav-link active" aria-current="page" href="#contact">Contact</a></li>
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

      <div class="container">
        <div id="about">
          <h2>About The Designer</h2>
            <div class="accordion" id="accordionExample">
              <div id="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Biography
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p><strong>Christian Shingiro</strong> is a recent graduate of the Internet Applications and Web Development Fundamentals Program at Conestoga College.
                      He already has a few projects under his belt, and is the web master and host of a radio show called <a href="https://sociallyradicalguitarist.com">
                      The Socially Radical Guitarist</a>. His specialties are Wordpress, Bootstrap, PHP, MySQL, and general Full Stack web development.
                      He aims to be Socially Radical, while providing web services at a rate that's socially reasonable.
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
                    <h3>Awards</h3><br>
                    <iframe src="Images/AwardLetter.pdf" width="60%" height="300px"></iframe><br>
                    <br>
                    <h3>Education</h3><br>
                    <iframe src="Images/ConestogaOfficialTranscript.pdf" width="60%" height="300px"></iframe><br><br>
                    <iframe src="Images/ProofofProgramCompletion.pdf" width="60%" height="300px"></iframe><br>
                    <br>
                    <h3>Certificates</h3><br>
                    <p>Coming Soon! After convocation!</p>
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
                      </div>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="Images/Showcase1.png" class="d-block w-100" alt="First Showcase Site">
                          <div class="carousel-caption d-none d-md-block">
                            <h5>Wordpress Individual Project</h5>
                            <p><a href="https://dev-shingiroportfolio.pantheonsite.io/">Link to Site Here</a></p>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img src="Images/Showcase2.png" class="d-block w-100" alt="Second Showcase Site">
                          <div class="carousel-caption d-none d-md-block">
                            <h5>Socially Radical Guitarist Pilot Blog</h5>
                            <p><a href="https://live-guitarenthusiasm.pantheonsite.io/">Link to Site Here</a></p>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img src="Images/Showcase3.png" class="d-block w-100" alt="Third Showcase Site">
                          <div class="carousel-caption d-none d-md-block">
                            <h5>Socially Radical Guitarist Pilot Blog #2</h5>
                            <p><a href="https://guitarenthusiasm.wordpress.com/">Link to Site Here</a></p>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img src="Images/Showcase4.png" class="d-block w-100" alt="Fourth Showcase Site">
                          <div class="carousel-caption d-none d-md-block">
                            <h5>Collaborative Wordpress Project</h5>
                            <p><a href="https://dev-chrisolysimhotel.pantheonsite.io/">Link to Site Here</a></p>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img src="Images/Showcase5.png" class="d-block w-100" alt="Fifth Showcase Site">
                          <div class="carousel-caption d-none d-md-block">
                            <h5>Collaborative Coffee Shop Project</h5>
                            <p><a href="https://cshingiro.github.io/Team6Project/">Link to Site Here</a></p>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img src="Images/Showcase6.png" class="d-block w-100" alt="Sixth Showcase Site">
                          <div class="carousel-caption d-none d-md-block">
                            <h5>The Socially Radical Guitarist Website</h5>
                            <p><a href="https://sociallyradicalguitarist.com">Link to Site Here</a></p>
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
        <div class="container">
          <div id="request">
            <h2>Request A Project</h2>
            <form>
              <label for="name">Full Name:</label><br>
              <input type="text" name="name" placeholder="Full Name" required><br>
              <label for="email">Email:</label><br>
              <input type="email" name="email" placeholder="name@example.com" required><br>
              <br>
              <h3>Project Type</h3>
              <input type="radio" id="wordpress" name="project_type" value="Wordpress" checked>
              <label for="wordpress">Wordpress Site - $500 + $50 per page</label><br>
              <input type="radio" id="static_site_no_javascript" name="project_type" value="Static - No Javascript">
              <label for="static_site_no_javascript">Static Site - No Javascript Animations - $700 + $100 per page</label><br>
              <input type="radio" id="static_site_with_javascript" name="project_type" value="Static + Javascript">
              <label for="static_site_with_javascript">Static Site With Javascript Animations - $850 + $125 per page</label><br>
              <input type="radio" id="dynamic_site_no_javascript" name="project_type" value="Dynamic - No Javascript">
              <label for="dynamic_site_no_javascript">Dynamic Site - No Javascript Animations - $1000 + $150 per page</label><br>
              <input type="radio" id="dynamic_site_with_javascript" name="project_type" value="Dynamic + Javascript">
              <label for="dynamic_site_with_javascript">Dynamic Site With Javascript Animations - $1200 +$250 per page</label><br>
              <input type="submit" formaction="#about" formmethod="POST" value="Order Website">
            </form>
          </div>
        </div>
        <br>
        <br>
        <br>
        <div class="container">
          <div id="contact">
            <h2>General Contact Form</h2>
            <form method="POST"></form>
            <label for="name">Full Name:</label><br>
            <input type="text" id="name" name="name" placeholder="Full Name" required><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" placeholder="name@example.com" required><br>
            <label for="message">Subject:</label><br>
            <input type="text" id="subject" name="subject" placeholder="Subject" required><br>
            <label for="message">Message:</label><br>
            <textarea id="message" placeholder="Message/Comment" name="message" required></textarea><br>
            <input type="submit" formaction="#contact" formmethod="POST" value="Contact Socially Radical Web Design">
          </div>
        </div>
    </main>
    <br>
    <br>
    <br>
    <footer>
      <div class="container">
        <p id="copyright">&#169; - 2022 - Socially Radical Web Design</p>
        <a href="https://linkedin.com/in/sociallyradicalwebdesign.com"><img src="Images/linkedin.svg"></a>
      </div>
    </footer>
    <script src="index.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js" integrity="sha256-hlKLmzaRlE8SCJC1Kw8zoUbU8BxA+8kR3gseuKfMjxA=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/react@17/umd/react.production.min.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@17/umd/react-dom.production.min.js" crossorigin></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
