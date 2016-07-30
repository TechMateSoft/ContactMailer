<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>ContactMailer</title>
  <link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
  <div class="col-md-8">
    <h2 class="clf-title">Your Inquiry</h2>
    <label></label>
    <div class="clearfix"></div><br />
    <form action="postcontact.php" method="post">
      <div class="row">
        <div class="col-md-6">
          <input type="text" class="clf-input" placeholder="First name*" name="fname" required>
        </div>
        <div class="col-md-6">
          <input type="text" class="clf-input" placeholder="Last name*" name="lname" required>
        </div>
      </div>
      <div class="clearfix"></div><br />
      <div class="row">
        <div class="col-md-12">
          <input type="email" class="clf-input" placeholder="Email*" name="email" required>
        </div>
      </div>
      <div class="clearfix"></div><br />
      <div class="row">
        <div class="col-md-12">
          <textarea class="clf-input" cols="20" rows="10" placeholder="Message*" name="message" required></textarea>
        </div>
      </div>
      <div class="clearfix"></div><br />
      <div class="row">
        <div class="col-md-12">
          <button class="clf-btn" type="submit" name="send">Send</button>
        </div>
      </div>
    </form>
  </div>
</body>
</html>
  