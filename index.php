<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />    
    <link rel="stylesheet" href="style.css">
    <title>Welcome to travel form</title>
  </head>
  <body>
    <img class="bg" src="bg.jpg" alt="">
    <div class="container">
    <h1>Welcome to IIT Kharagpur US trip form</h1>
    <P>Enter your details and submit this form ti confirm your participation in the trip</P>
    <p class="submitMsg">Thanks for submitting your form. We are happy to see you joining us for the US trip.</p>
    <form action="index.php" method="post">
      <input type="text" name="name" id="name" placeholder="Enter your name">
      <input type="number" name="age" id="age" placeholder="Enter your age">
      <input type="text" name="gender" id="gender" placeholder="Enter your gender">
      <input type="email" name="email" id="email" placeholder="Enter your email">
      <input type="number" name="phone" id="phone" placeholder="Enter your number">
      <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
      <button class="submit-btn">Submit</button>
      <button class="reset-btn">Reset</button>
    </form>
    </div>
    <?php
  echo "Hello world;"
?>
    <script src="/index.js"></script>
  </body>
</html>