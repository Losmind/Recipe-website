<?php
  session_start();
  require 'header.php';
?>
<div class="content" id="content_contact_us">
  <div id="contact_us">
    <img src="images/contact_us.png" id="contact_us_image" alt="" width="300px" height="300px">
      <div class="contact_us_form">
        <h2 class="h2_contact_us">Contact Us</h2>
        <form action="contact_us.php" method="post">
          <label for="email">Enter your email:</label>
          <input placeholder="Email" class="input_contact_us" type="email" id="email" name="email" required>
          <label for="phone">Enter your phone number:</label>
          <input placeholder="Phone number" maxlength="11" class="input_contact_us" type="tel" id="phone" name="phone" pattern="[0-9]{11}" required>
          <textarea name="comment" placeholder="How can we help you?" maxlength="500" required></textarea>
          <button type="submit" class="input green_button"><strong>Submit</strong></button>
        </form>
      </div>
      <div class="info_au"><p>
        Our adress: Bolshaya Morskaya 67<br />
        Our phone: 89881233211
      </p></div>
  </div>
</div>
<?php require 'footer.php' ?>
