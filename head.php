<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href='Images/bb_logo(white).png' type="image/png">
  <link rel="stylesheet" href='index.css'>
  <link rel="stylesheet" href='https://fontawesome.com/v4.7.0/icon/bars'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="icon" href='./Images/bb_logo(white).png' type="image/png">
  <link rel="stylesheet" href='index.css'>
  <link rel="stylesheet" href='https://fontawesome.com/v4.7.0/icon/bars'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

</head>

<body>


  <div class="header">
    <header>
      <div class="header-logo"> <a href="home.php"><img src="./Images/bb_logo(black).png"></a>
      </div>
      
        <div class="header-list">
          <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="donate_blood.php">Become A Donor</a></li>
            <li><a href="need_blood.php" target="_blank">Need Blood</a></li>
            <li><a href="contact_us.php" target="_blank">Contact Us</a></li>

          </ul>
        </div>
     
    </header>

   

  </div>


  <script>
    const preloader = document.querySelector('.preloader');
    const fadeEffect = setInterval(() => {
      if (!preloader.style.opacity) {
        preloader.style.opacity = 1;
      }
      if (preloader.style.opacity > 0) {
        preloader.style.opacity -= 1.5;
      } else {
        clearInterval(fadeEffect);
      }
    }, 1500);
    window.addEventListener('load', fadeEffect);
  </script>
  <!--js for scroll to top-->
  <script src="up.js"></script>

  <!--JAVASCRIPT FOR TOGGLE MENU -->
  <script>
    var headerl = document.getElementById("headerl");

    function showMenu() {
      headerl.style.right = "0";
    }

    function hideMenu() {
      headerl.style.right = "-210px";
    }
  </script>


  <!--js for scroll effects-->
  <script src="scroll.js"></script>
</body>

</html>