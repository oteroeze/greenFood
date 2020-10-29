<section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2><span>Contactá</span> con nosotros</h2>
          <p>Si tenés alguna duda o consulta, envianos tu mensaje y te contestaremos a la brevedad.</p>
        </div>
      </div>

      <div class="container mt-3">

        <div class="info-wrap">
          <div class="row">
            <div class="col-lg-3 col-md-6 info">
              <i class="icofont-google-map"></i>
              <h4>Locación:</h4>
              <p>El Calafate<br>Santa Cruz, Argentina CP9405</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="icofont-clock-time icofont-rotate-90"></i>
              <h4>Horario:</h4>
              <p>Lunes a Viernes:<br>10:00 AM -  19:00 PM</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="icofont-envelope"></i>
              <h4>Emails:</h4>
              <p style="font-size: 10px; font-weight: bold; line-height: 3">veggiespatagonicos@gmail.com<br>contacto@veggiespatagonicos.com</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="icofont-phone"></i>
              <h4>Teléfono:</h4>
              <p>+54 9 2902 48-9492</p>
            </div>
          </div>
        </div>

        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="form-row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Ingrese por lo menos 4 caracteres." />
              <div class="validate"></div>
            </div>
            <div class="col-md-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Ingrese un e-mail válido." />
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Ingrese el asunto de su mensaje." />
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Escriba su consulta aquí." placeholder="Mensaje"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Enviando...</div>
            <div class="error-message"></div>
            <div class="sent-message">Su mensaje ha sido enviado ¡Gracias!</div>
          </div>
          <div class="text-center"><button type="submit">Enviar</button></div>
        </form>

      </div>
    </section>