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
              <img class="logo" src="Images/SRWBLogo.png">
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
    <main>
      <div class="container">
        <div id="about">
          <h2>About The Designer</h2>
            <div class="accordion" id="accordionExample">
              <div id="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Projects
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    Test #1
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
                    Test #2
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
                    Test #3
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div id="request">
            <h2>Request A Project</h2>
              <form>
                <label for="name">Full Name:</label><br>
                <input type="text" name="name" placeholder="Full Name" required><br>
                <label for="email">Email:</label><br>
                <input type="email" name="email" placeholder="name@example.com" required><br>
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
          <div class="container">
            <div id="contact">
              <h2>General Contact Form</h2>
                <form method="POST"></form>
                <label for="name">Full Name:</label><br>
                <input type="text" name="name" placeholder="Full Name" required><br>
                <label for="email">Email:</label><br>
                <input type="email" name="email" placeholder="name@example.com" required><br>
                <label for="message">Message:</label><br>
                <input type="text" name="message" placeholder="Message" required><br>
              </div>
            </div>
      </main>
    <footer>
      <div class="container">
        <p id="copyright">&#169; - 2022 - Socially Radical Web Design</p>
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
