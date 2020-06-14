{include file="templates/header.tpl"}
{include file="templates/NavBarLogeado.tpl"}


<section>
  <div class="container">
    <div class="row justify-content-center align-items-center minh-100">
      <div class="col-lg-12">
        <!-- Se muestra la imagen de perfil del usuario -->
          <div class="card icono2 mx-auto margin-top" style="width: 18rem;">
            <a class="nav-link active home margin-top" ><img class="card-img-top" src="imagenes/usuario.png" alt="Card image cap"></a>
             </div>
        <div>
          <!-- para comenzar el flujo se debe presionar "mis viajes" -->
          <p  class="text-center margin-top"><a href="viajes" class="btn btn-primary btn-lg " role="button" aria-disabled="true">Mis Viajes</a></p>
          <p  class="text-center margin-top"><a href="agendarViaje" class="btn btn-primary btn-lg " role="button" aria-disabled="true">Agendar Viaje</a></p>
          <p  class="text-center margin-top"><a href="agendarViajeViaEmail" class="btn btn-primary btn-lg " role="button" aria-disabled="true">Agendar Viaje via E-mail</a></p>
        </div>

      </div>

    </div>
  </div>


</section>
{include file="templates/footer.tpl"}
