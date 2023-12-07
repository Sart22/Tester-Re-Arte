<section id="contact" class="contact">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h2>Contáctanos</h2>
    </header>

    <div class="row gy-4">

      <div class="col-lg-6">

        <div class="row gy-4">
          <div class="col-md-6">
            <div class="info-box">
              <i class="bi bi-geo-alt"></i>
              <h3>Direccion</h3>
              <p>Av.Siempre Viva 123<br>Lujan,Buenos Aires</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box">
              <i class="bi bi-telephone"></i>
              <h3>Telefono</h3>
              <p>+54 2323 55488 55<br>+54 11 56254445 41</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p>info@example.com<br>contact@example.com</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box">
              <i class="bi bi-clock"></i>
              <h3>Horario de Atención</h3>
              <p>Lunes - Viernes<br>9:00AM - 18:00PM</p>
            </div>
          </div>
        </div>

      </div>

      <div class="col-lg-6">
        <form action="forms/contact.php" method="post" class="php-email-form">
          <div class="row gy-4">

            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Apellido y Nombre" required>
            </div>

            <div class="col-md-6 ">
              <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>

            <div class="col-md-12">
              <textarea class="form-control" name="message" rows="6" placeholder="Esquibe aqui tu mensaje.." required></textarea>
            </div>

            <div class="col-md-12 text-center">
              <div class="loading">Cargando</div>
              <div class="error-message"></div>
              <div class="sent-message">Tu mensaje ah sido enviado, muchas gracias!</div>

              <button type="submit">Enviar</button>
            </div>

          </div>
        </form>

      </div>

    </div>

  </div>

</section>
