<?php include_once("header.php");?>

<!-- Contact Section contato inicio -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
 
  <h3 class="w3-center">CONTATOS</h3>

  <p class="w3-center w3-large">Entre em contato pelo telefone ou deixe sua mensagem</p>

  <div class="w3-row-padding" style="margin-top:64px">
   
    <div class="w3-half">
      <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Ibirite, MG Brasil</p>
      <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: 031 99999-9999</p>
      <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: construmar@mail.com</p>
      <br>

      <form action="/action_page.php" target="_blank">
        <p><input class="w3-input w3-border" type="text" placeholder="Nome" required name="Nome"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Assunto" required name="Assunto"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Messagem" required name="Messagem"></p>
        <p>
          <button class="w3-button w3-black" type="submit">
            <i class="fa fa-paper-plane"></i> ENVIAR
          </button>
        </p>
      </form>

    </div>

    <div class="w3-half">
      <!-- Add Google Maps -->
      <div id="googleMap" class="w3-greyscale-max" style="width:100%;height:510px;"></div>
    </div>

  </div>

</div>
<!-- Contact Section contato fim -->

<?php include_once("footer.php");?>