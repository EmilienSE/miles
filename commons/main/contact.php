<!--==========================
  Contact Section
============================-->
<section id="contact" class="wow fadeInUp">

  <div class="container">

    <div class="section-header">
      <h2>Contactez-moi</h2>
      <p>Parlez-moi de votre projet.</p>
    </div>

    <div class="row contact-info">

      <div class="col-md-4">
        <div class="contact-address">
          <i class="ion-ios-location-outline"></i>
          <h3>Localisation</h3>
          <address>Angers et ses alentours</address>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-phone">
          <i class="ion-ios-telephone-outline"></i>
          <h3>Mon numéro de téléphone</h3>
          <p><a href="tel:+33611310222">+33 6 11 31 02 22</a></p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-email">
          <i class="ion-ios-email-outline"></i>
          <h3>Email</h3>
          <p><a href="mailto:contact@milesclipmaker.fr">contact@milesclipmaker.fr</a></p>
        </div>
      </div>

    </div>

    <div class="form">
      <div id="sendmessage">Votre message a bien été envoyé, je vous répondrai au plus vite !</div>
      <div id="errormessage"></div>
      <form action="" method="post" role="form" class="contactForm">
        <div class="form-row">
          <div class="form-group col-md-4">
            <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom" data-rule="minlen:4" data-msg="Merci d'entrer au moins 4 caractères." />
            <div class="validation"></div>
          </div>
          <div class="form-group col-md-4">
            <input type="email" class="form-control" name="email" id="email" placeholder="Votre adresse mail" data-rule="email" data-msg="Merci d'entrer une adresse email valide." />
            <div class="validation"></div>
          </div>
          <div class="form-group col-md-4">
            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Votre numéro de téléphone" data-rule="phone" data-msg="Merci d'entrer un numéro de téléphone valide." />
            <div class="validation"></div>
          </div>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Objet du message" data-rule="minlen:4" data-msg="Merci d'entrer au moins 8 caractères" />
          <div class="validation"></div>
        </div>
        <div class="form-group">
          <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Merci de renseigner votre message !" placeholder="Message"></textarea>
          <div class="validation"></div>
        </div>
        <div class="text-center"><button type="submit">Envoyer le message</button></div>
      </form>
    </div>

  </div>
</section><!-- #contact -->