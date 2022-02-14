<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="Images/SRWBLogo.png" width="30" height="30" type="image/png">
    <link rel="stylesheet" href="webdesign.css" type="text/css">
    <title>Request Recognized</title>
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
                <li class="parent_navigation nav-item"><a class="navigation nav-link active" aria-current="page" href="index.php">Back to Home Page</a></li>
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
      <div class="container">
        <?php
          require("PHP/database.php");
          $name = $_POST['name'];
          $email = $_POST['email'];
          $address = $_POST['address'];
          $city = $_POST['city'];
          $region = $_POST['region'];
          $zip = $_POST['zip'];
          $country = $_POST['country'];
          $project = $_POST['project_type'];
          $notes = $_POST['notes'];

          $name_input = set_string($db_connect, $name);
          $email_input = set_string($db_connect, $email);
          $address_input = set_string($db_connect, $address);
          $city_input = set_string($db_connect, $city);
          $region_input = set_string($db_connect, $region);
          $zip_input = set_string($db_connect, $zip);
          $country_input = set_string($db_connect, $country);
          $notes_input = set_string($db_connect, $notes);

          $s = "INSERT INTO projects(Name,Email,Address,City,Region,Zip,Country,Project,Notes       ,PoliceCheck) VALUES (?,?,?,?,?,?,?,?,?)";

          $projects_input = mysqli_prepare($db_connect, $s);

          mysqli_stmt_bind_param(
              $volunteer_list_input,
              'sssssss',
              $name_input,
              $email_input,
              $address_input,
              $city_input,
              $region_input,
              $zip_input,
              $country_input,
              $project,
              $notes_input
          );

          $input = mysqli_stmt_execute($projects_input);
          if($input) {
          echo "<h1>Thank you for making the request! Socially Radical Web Design will contact you within 24-48 hours about your order. To return to the main page, click <a href='index.php'>here</a>.</h1>";
          }
          else {
              echo "<h1>500. Internal error. Our apologies. Please try again later.</h1>";
          }
        ?>
      </div>
    </main>
    <br>
    <br>
    <br>
    <footer>
      <div class="container d-flex justify-content-center">
        <a href="https://linkedin.com/in/sociallyradicalwebdesign.com"><img src="Images/linkedin.svg" width="60px" height="60px" alt="LinkedIn Icon"></a>
        <a href="#"><img src="Images/facebook.svg" width="60px" height="60px" alt="Facebook Icon"></a>
        <a href="#"><img src="Images/instagram.svg" width="60px" height="60px" alt="Instagram Icon"></a>
        <a href="#"><img src="Images/twitter.svg" width="60px" height="60px" alt="Twitter Icon"></a>
        <p id="copyright">&#169; - 2022 - Socially Radical Web Design</p>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>