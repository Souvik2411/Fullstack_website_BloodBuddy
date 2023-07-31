<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href='home.css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href='https://fontawesome.com/v4.7.0/icon/bars'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <style>
  </style>
</head>
<title>BLOOD BUDDY</title>
<!-- <div class="preloader">
  <img src="Images/pre-loader.svg" alt="spinner">
</div> -->


<body>
  <button onclick="topFunction()" id="myBtn" class="fas fa-arrow-up"></button>

  <div class="header">
    <?php
    $active = "home";
    include('heads.php'); ?>

  </div>


  <div id="page-container" style="margin-top:50px; position: relative;min-height: 84vh;   ">
    <div class="container">
      <div id="content-wrap" style="padding-bottom:75px;">
        <main>
          <section id="about-us">
            <div class="about">
              <h1 class="heading">What is this all about ?</h1> <br>
              <p class="head-des" class="text">We solve the problem of blood emergencies by connecting <span class="one-line"><br></span> blood donors directly with people in blood need. </p>
              <div class="row">
                <div class="about-col">
                  <div class="image">
                    <img src="./Images/drop.png">
                  </div>
                  <h3>What we do ?</h3>
                  <p>We connect blood donors with recipients, without any intermediary such as blood banks, for an
                    efficient and seamless process.</p>
                </div>

                <div class="about-col">
                  <div class="image">
                    <img src="./Images/netwotk.png">
                  </div>
                  <h3>Network</h3>
                  <p>Blood Buddy is one of several community organizations working together as a network that
                    responds to emergencies in an efficient manner.</p>
                </div>


                <div class="about-col">
                  <div class="image">
                    <img src="./Images/save.png">
                  </div>
                  <h3>Save Life</h3>
                  <p>We are a non profit foundation and our main objective is to make sure that everything is done
                    to protect vulnerable persons.<span>Help
                      us by making a gift!</span></p>
                </div>
              </div>
            </div>
          </section>
        </main>


        <div class="row">
          <div class="col-lg-4 mb-4">
            <div class="card">
              <h4 class="card-header card bg-info text-white">The need for blood</h4>

              <p class="card-body overflow-auto" style="padding-left:2%;height:120px;text-align:left;">
                <?php
                include 'conn.php';
                $sql = $sql = "select * from pages where page_type='needforblood'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['page_data'];
                  }
                }

                ?>
              </p>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card">
              <h4 class="card-header card bg-info text-white">Blood Tips</h4>

              <p class="card-body overflow-auto" style="padding-left:2%;height:120px;text-align:left;">
                <?php
                include 'conn.php';
                $sql = $sql = "select * from pages where page_type='bloodtips'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['page_data'];
                  }
                }

                ?>
              </p>

            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card">
              <h4 class="card-header card bg-info text-white">Who you could Help</h4>

              <p class="card-body overflow-auto" style="padding-left:2%;height:120px;text-align:left;">
                <?php
                include 'conn.php';
                $sql = $sql = "select * from pages where page_type='whoyouhelp'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['page_data'];
                  }
                }

                ?>
              </p>


            </div>
          </div>
        </div>
        <br><br>
        <h1 style="text-align:center" class="heading">Blood Donor Names</h1>

        <div class="row">
          <?php
          include 'conn.php';
          $sql = "select * from donor_details join blood where donor_details.donor_blood=blood.blood_id order by rand() limit 6";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
          ?>

              <div class="about-col">
                <div class="image">
                  <img style="text-align:center" src="./Images/drop.png">
                </div>
                <h3 style="text-align:center" class="card-title"><?php echo $row['donor_name']; ?></h3>
                <p class="card-text">
                  <b>Blood Group : </b> <b><?php echo $row['blood_group']; ?></b><br>
                  <b>Mobile No. : </b> <?php echo $row['donor_number']; ?><br>
                  <b>Gender : </b><?php echo $row['donor_gender']; ?><br>
                  <b>Age : </b> <?php echo $row['donor_age']; ?><br>
                  <b>Address : </b> <?php echo $row['donor_address']; ?><br>
                </p>
              </div>



          <?php }
          } ?>
        </div>
        <br>
        <!-- /.row -->

        <!-- Features Section -->
        <br><br>
        <div id="why"></div>
        <h1 style="text-align:center" class="heading">BLOOD GROUPS</h1>
        <div class="row">

          <div class="col-lg-6">
            <p>
              <?php
              include 'conn.php';
              $sql = $sql = "select * from pages where page_type='bloodgroups'";
              $result = mysqli_query($conn, $sql);
              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row['page_data'];
                }
              }

              ?></p>

          </div>
          <div class="col-lg-6">
          </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="row mb-4">
          <div class="col-md-8">
            <h4>UNIVERSAL DONORS AND RECIPIENTS</h4>
            <p>
              <?php
              include 'conn.php';
              $sql = $sql = "select * from pages where page_type='universal'";
              $result = mysqli_query($conn, $sql);
              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row['page_data'];
                }
              }

              ?></p>
          </div>
          <div class="col-md-4">
            <a href="donate_blood.php" class="donbtn" target="_blank">Become a donor</a>
              </div>
        </div>

      </div>
    </div>
    <?php include('footer.php'); ?>
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