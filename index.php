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
    <header class="container-fluid">
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
    <main class="container-fluid">
      <div class="container" id="about">
        <h1>About The Designer</h1>
          <h2>Projects</h2>
          <h2>Credentials</h2>
          <h2>Past Work</h2>
      </div>
      <div class="container" id="request">
        <h1>Request A Project</h1>
        <form>
          <label for="name">Name:</label>
          <input type="text">
          <label for="email">Email:</label>
          <input type="email" name="email" placeholder="name@example.com">
          <input type="submit" formaction="#about" formmethod="POST" value="Order Website">
        </form>
        <?php
        ?>
      </div>
      <div class="container" id="contact">
        <h1>General Contact Form</h1>
        <form method="POST"></form>
        <?php
        ?>
      </div>
    </main>
    <footer class="container-fluid">
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
