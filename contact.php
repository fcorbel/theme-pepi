<?php 
/*
 * Template Name: Contact
 */

// Fonctions PHP pour envoyer le mail
$response = "";

//function to generate response
function my_contact_form_generate_response($type, $message) {
  global $response;

  if($type == "success") $response = "<div class='success'>{$message}</div>";
  else $response = "<div class='error'>{$message}</div>";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  //response messages
  $missing_content = "Please supply all information.";
  $email_invalid   = "Email Address Invalid.";
  $message_unsent  = "Message was not sent. Try Again.";
  $message_sent    = "Thanks! Your message has been sent.";

  $email = $_POST['email'];
  $tel = $_POST['tel'];
  $nom = $_POST['nom'];
  $message = $_POST['message'];

  //php mailer variables
  $to = get_option('admin_email');
  $subject = "Quelqu'un à envoyé un message à partir de: ".get_bloginfo('name');
  $headers = 'From: '. $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n";

  //validate email
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    my_contact_form_generate_response("error", $email_invalid);
  } else {//email is valid
    //validate presence of name and message
    if (empty($name) || empty($message)) {
      my_contact_form_generate_response("error", $missing_content);
    } else { //ready to go!
      $sent = wp_mail($to, $subject, strip_tags($message), $headers);
      if ($sent) {
        my_contact_form_generate_response("success", $message_sent); //message sent!
      } else {
        my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
      }
    }
  }
}





get_header();

do_action('woocommerce_before_main_content');
?>

<section id="contact_infos">
  <div id="contact">
    <address class="card">
      <p class="address">
        Jean-Jacques Laurent<br>
        Penhoadic<br>
        29410 Guiclan
      </p>
      <a class="phone" href="tel:0651297023">0651297023</a>
    </address>

    <?php echo $response; ?>
    <form action="<?php the_permalink(); ?>" method="post" class="card">
      <p>
        <label for="email" class="required">E-mail</label>
        <input type="email" name="email" id="email" required>
      </p>
      <p>
        <label for="tel">Téléphone</label>
        <input type="tel" name="tel" id="tel">
      </p>
      <p>
        <label for="nom" class="required">Nom</label>
        <input id="nom" type="text" name="nom" required>
      </p>
      <p>
        <label for="message" class="required">Message</label>
        <textarea id="message" name="message" cols="30" rows="10" required></textarea>
      </p>
      <input type="submit" value="Envoyer">
    </form>
  </div>

  <div id="map" class="card">
    <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://www.openstreetmap.org/export/embed.html?bbox=-3.99876594543457%2C48.5179119855645%2C-3.9333629608154292%2C48.5521827667489&amp;layer=mapnik&amp;marker=48.535050275918515%2C-3.966064453125"></iframe><br/><small><a href="http://www.openstreetmap.org/?mlat=48.5351&amp;mlon=-3.9661#map=14/48.5351/-3.9661&amp;layers=N">View Larger Map</a></small>
  </div>
</section>

<?php
do_action('woocommerce_after_main_content');

get_footer();
?>

