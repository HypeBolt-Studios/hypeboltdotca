
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <script src="include-footer.js" defer></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact | HypeBolt Studios</title>
  <link rel="stylesheet" href="css/styles.css"> <!-- Link to your stylesheet -->
</head>
<body>

  <!-- Header section -->
  <header class="header">
    <div class="logo">
      <img src="hblogo.png" alt="HypeBolt Studios Logo">
    </div>
    <div class="title-slogan">
      <h1 class="site-title"><b>HypeBolt Studios</b></h1>
      <p class="slogan">The Officials of Film™</p>
    </div>
  </header>

  <!-- Navigation bar -->
  <nav>
    <ul>
      <li><a href="https://hypebolt.ca">Home</a></li>
      <li><a href="https://hypebolt.ca/about">About</a></li>
      <li><a href="https://hypebolt.ca/movies">Movies</a></li>
      <li><a href="https://hypebolt.ca/series">Series</a></li>
      <li><a href="https://hypebolt.ca/contact"><b><u>Contact</u></b></a></li>
    </ul>
  </nav>

  <!-- Contact form section -->
  <section class="contact-section">
    <h2>Contact Us</h2>
    <p>Please fill in the form below to get in touch. This is for business proposals, not support. DO NOT email us about site SEO, we WILL NOT respond.</p>

    <!-- Contact form -->
    <form action="send_email.php" method="post">
      <label for="name">Your Name:</label>
      <input type="text" id="name" name="name" placeholder="Your Name" readonly>
      

      <label for="email">Your Email:</label>
      <input type="email" id="email" name="email" placeholder="Email" readonly>

      <label for="message">Message:</label>
      <textarea id="message" name="message" rows="5" placeholder="Type your message here..." readonly></textarea>

      <input type="submit" value="Send Message" disabled>
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = "info@hypebolt.ca";
  $subject = "New Contact Form Submission from $name";
  $body = "Name: $name\nEmail: $email\nMessage:\n$message";

  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    echo "Your message has been sent successfully.";
  } else {
    echo "Sorry, there was an error sending your message.";
  }
}
?>
  </section>

  <!-- Footer -->
<div id="footerContainer"></div>

</body>
</html>

