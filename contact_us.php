<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href='contact.css'>
  <link rel="icon" href='./Images/bb_logo(black).png' type="image/png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
  <?php $active = 'contact';
  include 'head.php'; ?>
  <?php
  if (isset($_POST["send"])) {
    $name = $_POST['fullname'];
    $number = $_POST['contactno'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $conn = mysqli_connect("localhost", "root", "", "blood_donation") or die("Connection error");
    $sql = "insert into contact_query (query_name,query_mail,query_number,query_message) values('{$name}','{$number}','{$email}','{$message}')";
    $result = mysqli_query($conn, $sql) or die("query unsuccessful.");
    echo '<div class="alert alert-success alert_dismissible"><b><button type="button" class="close" data-dismiss="alert">&times;</button></b><b>Query Sent, We will contact you shortly. </b></div>';
  } ?>
  <main>
    <div class="box">
      <h2>Contact Us</h2>
      <div class="row">
        <div class="col-lg-8 mb-4">
          <h3>Send us a Message</h3>
          <form name="sentMessage" method="post">
            <div class="control-group form-group">
              <div class="controls">
                <label>Full Name:</label>
                <input type="text" class="form-control" id="name" name="fullname" required>
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Phone Number:</label>
                <input type="tel" class="form-control" id="phone" name="contactno" required>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Email Address:</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Message:</label>
                <textarea rows="4" cols="100" class="form-control" id="message" name="message" required maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <button type="submit" name="send" class="btn btn-primary">Send Message</button>
            
          </form>
        </div>
        <div class="col-lg-4 mb-4">
          <h2>Contact Details</h2>
          <?php
          include 'conn.php';
          $sql = "select * from contact_info";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) { ?>
              <br>
              <p>
              <h4>Address :</h4><?php echo $row['contact_address']; ?>
              </p>
              <p>
              <h4>Contact Number :</h4><?php echo $row['contact_phone']; ?>
              </p>
              <p>
              <h4> Email: </h4><a href="#"><?php echo $row['contact_mail']; ?></a>
              </a></b>
              </p>
          <?php }
          } ?>
        </div>
  </main>

</body>

</html>