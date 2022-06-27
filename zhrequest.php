<!DOCTYPE html>
<html lang="zh-Hans">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="Images/SRWBLogo.png" width="30" height="30" type="image/png">
    <link rel="stylesheet" href="webdesign.css" type="text/css">
    <title>请求认可</title>
  </head>
  <body>
    <header>
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-success bg-gradient bg-opacity-50 rounded-3 border border-dark border-5">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
              <img class="logo" src="Images/SRWBLogo.png" class="d-inline-block align-text-top" alt="Socially Radical Web Design Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="parent_navigation nav-item"><a class="navigation nav-link active" aria-current="page" href="index.php"><button type="button" class="btn btn-outline-dark">返回首页</button></a></li>
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
      <p class="text-center fst-italic">以社会合理的价格进行社会激进的网页设计。</p><br><br>
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

          $s = "INSERT INTO projects(Name,Email,Address,City,Region,Zip,Country,Project,Notes) VALUES (?,?,?,?,?,?,?,?,?)";

          $projects_input = mysqli_prepare($db_connect, $s);

          mysqli_stmt_bind_param(
              $projects_input,
              'sssssssss',
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
            $to = 'cshingiro@sociallyradicalwebdesign.com';
            $subject = 'Website Order';
            $order_name = "Name: ".$name;
            $order_address = "Address: ".$address;
            $order_city = "City: ".$city;
            $order_region = "Region: ".$region;
            $order_zip = "Zip: ".$zip;
            $order_country = "Country: ".$country;
            $order_project = "Project: ".$project;
            $order_notes = "Notes: ".$notes;
            $message = $order_name."\r".$order_address."\r".$order_city."\r".$order_region."\r".$order_zip."\r".$order_country."\r".$order_project."\r".$order_notes;
            $headers = "From: ".$email;
            mail($to,$subject,$message,$headers);
            echo "<h1 class='fst-italic'>感谢您提出要求！ Socially Radical Web Design 将在 24-48 小时内就您的订单与您联系。要返回主页，请单 <a href='zhindex.php'>击此处.</a>.</h1>";
          }
          else {
              echo "<h1 class='fst-italic'>500. 内部错误。请稍后再试.</h1>";
          }
        ?>
      </div>
      <div class="text-center">
      <p class="fst-italic">如果您是开发人员并且有兴趣以折扣价使用相同的主机，请单击下面的图片.</p><br>
        <a href="https://nhtrx.com/?a=89&oc=2&c=4&s1="><img src="Images/NameHeroLink.png" width="60px" height="60px"></a>
      </div>
    </main>
    <br>
    <br>
    <br>
    <footer>
      <div class="container d-flex justify-content-center">
        <a href="https://linkedin.com/in/sociallyradicalwebdesign" target="_blank"><img src="Images/linkedin.svg" width="60px" height="60px" alt="LinkedIn Icon"></a>
        <a href="https://www.facebook.com/SociallyRadicalWebDesign" target="_blank"><img src="Images/facebook.svg" width="60px" height="60px" alt="Facebook Icon"></a>
        <a href="https://www.instagram.com/sociallyradicalwebdesign/" target="_blank"><img src="Images/instagram.svg" width="60px" height="60px" alt="Instagram Icon"></a>
        <a href="https://www.github.com/CShingiro" target="_blank"><img src="Images/github.svg" width="60px" height="60px" alt="Github Icon"></a>
        <a href="https://twitter.com/web_socially" target="_blank"><img src="Images/twitter.svg" width="60px" height="60px" alt="Twitter Icon"></a><br>
      </div><br>
      <p class="text-center">&#169; - 2022 - 社会激进的网页设计</p><br>
      <p class="text-center"><a href="https://www.flaticon.com/free-icons/flag" target="_blank" title="flag icons">由 Freepik 创建的标记图标 - Flaticon</a></p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
