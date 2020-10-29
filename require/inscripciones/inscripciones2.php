<section id="book-a-table" class="book-a-table">
      <div class="container">

        <div class="section-title">
          <h2>Inscribite a nuestro <span>Workshop</span></h2>
          <p>Agradecemos tus ganas y entusiasmo por participar con nosotros. Completá el siguiente formulario.</p>
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
            <div class="form-group" style="display: none;">
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customControlValidation1" value="Pasteleria" name="curso" checked>
                    <label class="custom-control-label" for="customControlValidation1">Pasteleria</label>
                </div>
            </div>
        </div>
            <!--<script>
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
            </script>-->
          <div class="mb-3">
            <div class="loading">Enviando...</div>
            <div class="error-message"></div>
            <div class="sent-message">Tu solicitud ha sido enviada. Una vez recibida, te confirmaremos la recepción y solicitaremos el pago.</div>
          </div>
          <div class="text-center"><button type="submit">Enviar</button></div>
        </form>

      </div>
    </section>