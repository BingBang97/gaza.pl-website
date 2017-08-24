<?php include('form_process.php'); ?>
<div class="container">  
  <form id="contact" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
    <h3>Kontakt</h3>
    <h4>Skontaktuj się z nami dzisiaj, odpowiedź otrzymasz wciągu 24h!</h4>
    <fieldset>
      <input placeholder="Imię i nazwisko" type="text" tabindex="1" name="name" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Twój adres email" type="email" tabindex="2" name="email" required>
    </fieldset>
    <fieldset>
      <input placeholder="Twój numer telefonu" type="tel" tabindex="3" name="phone" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Wpisz tutaj swoją wiadomość..." tabindex="5" name="message" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Wyślij</button>
    </fieldset>
  </form>