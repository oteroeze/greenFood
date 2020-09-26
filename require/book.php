<section id="book-a-table" class="book-a-table">
      <div class="container">

        <div class="section-title">
          <h2>Inscribite a nuestro <span>Workshop</span></h2>
          <p>Confirmaremos tu inscripción con el link de pago correspondiente.</p>
        </div>

        <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form">
          <div class="form-col">
            <div class="col-lg-12 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Nombre..." data-rule="minlen:3" data-msg="Por favor coloque su nombre.">
              <div class="validate"></div>
            </div>
            <div class="col-lg-12 col-md-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email..." data-rule="email" data-msg="Por favor, coloque un email válido.">
              <div class="validate"></div>
            </div>
            <div class="col-lg-12 col-md-6 form-group">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Número de Teléfono..." data-rule="minlen:8" data-msg="Por favor, coloque un número válido.">
              <div class="validate"></div>
            </div>

            <div class="col-lg-12 col-md-6 form-group">
              <p>Método de Pago:</p>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" id="customCheckBox1" name="mercadopago" value="1" class="custom-control-input">
                <label class="custom-control-label" for="customCheckBox1">MercadoPago</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" id="customCheckBox2" name="paypal" value="2" class="custom-control-input">
                <label class="custom-control-label" for="customCheckBox2">PayPal</label>
              </div>
            </div>
        </div>
            <script>
              let Checked = null;
              //The class name can vary
              for (let CheckBox of document.getElementsByClassName('custom-control-input')){
                CheckBox.onclick = function(){
                  if(Checked!=null){
                    Checked.checked = false;
                    Checked = CheckBox;
                  }
                  Checked = CheckBox;
                }
              }
            </script>

          <div class="mb-3">
            <div class="loading">Enviando...</div>
            <div class="error-message"></div>
            <div class="sent-message">Su solicitud ha sido enviada. Una vez recibida, le enviaremos el link de pago para completar la inscripción.</div>
          </div>
          <div class="text-center"><button type="submit">Enviar</button></div>
        </form>

      </div>
    </section>