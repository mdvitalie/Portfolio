
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Vitalie Developer,Creative Junior front End Developer, Experience with HTML5, CSS3, JavaScript, jQuery, SEO, RWD, Dublin, Ireland">

  <!-- jQuery CDN -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

  <!--Bootstrap CDN fontawesome -->
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  <!--Google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700,800,800i,900" rel="stylesheet">


  <link rel="stylesheet" href="css/lightbox.min.css">
  <!-- External jQuery -->
  <link rel="stylesheet"  href="css/jquery-ui.css"/>

  <!-- External Mobile -->
  <link rel="stylesheet"  href="css/main.css"/>
  <!-- External Tablet -->
  <link rel="stylesheet" media="(min-width: 740px)"  href="css/tablet.css"/>
  <!-- External CSS desktop-->
  <link rel="stylesheet" type="text/css" media="(min-width: 960px)" href="css/desktop.css"/>
  <title>Home | Vitalie Developer</title>
</head>
<body>
  <header id="header">

    <nav>
      <div class="menu-icon"><!--Mobile menu -->
        <span></span>
        <span></span>
        <span></span>
      </div><!--End of Mobile menu -->
      <div class="sidebar" id="navElement">
        <ul class="menu">
          <li><a href="index.html#header">Home</a></li>
          <li><a href="index.html#aboutMe">About</a></li>
          <li><a href="index.html#portfolio">Portfolio</a></li>
          
          <li><a href="index.html#header">Blog</a></li>
          <li><a href="index.html#contactUs">Contact</a></li>
        </ul>

        <ul class="social-icons">
          <li><a href="https://www.linkedin.com/in/vitalie-brescanu-4a7096105/" target="_blank" aria-label="linkedin media"><i class="fa fa-linkedin-square" ></i></a></li>
          <li><a class="scroll autohide" href="#contactUs"  aria-label="go-to-contact-form"><i class="fa fa-envelope"></i></a></li>
        </ul>
      </div>
    </nav><!-- End of nav -->
    <section id="blorB">
      <h1 id="thankYou">Thank you for visiting my website</h1>
      <p>Your message has been sent</p>
      <p id="backToMainPage"><a href="index.html">Back to the main page</a></p>


      <?php

      // This displays errors
      // error_reporting(E_ALL);
      // ini_set('display_errors', 1);

      if(isset($_POST['name'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        $mailTo = "info@vitaliedeveloper.com";
        $headers = "From: ".$email;
        $txt = "You have received an email from "."\n\n Name: ".$name."\n\n Phone number: ".$phone."\n\n Message: ".$message;
        $subject= "You received a message from ".$name;

        mail($mailTo, $subject, $txt, $headers);

      }
      else {
        echo "<p>There was a problem with your email</p>";
      }
      // header("Location: contact.php?mailsend");
      ?>
    </section><!-- End of #blorB header/section-->
  </header><!--End of Header -->

  <!--footer -->
  <footer>
    <small>&copy; - 2018 | vitaliedeveloper.com Dublin Ireland</small>
    <ul class="footerMedia">
      <li><a href="https://www.linkedin.com/in/vitalie-brescanu-4a7096105/" target="_blank" aria-label="go to linkedin profile"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
      <li><a class="scroll" href="#contactUs" aria-label="go to contact form"><i class="fa fa-envelope"></i></a></li>
    </ul>
  </footer><!--End of Footer -->
</div><!-- End of #wrapper -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122635282-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-122635282-1');
</script>


<!-- External JS -->
<script  src="js/lightbox-plus-jquery.min.js"></script>
<script src="js/main.js" ></script>
<script src="js/jquery-ui.js" ></script>





</body>
</html>
