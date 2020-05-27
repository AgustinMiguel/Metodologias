{include file="templates/header.tpl"}

<nav class="navbar navbar-expand-md navbar-dark  bg-primary ">
  <a href="#"><img src="imagenes/logo.png" class="logo" alt="Logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">

      </ul>
      <form class="form-inline mt-2 mt-md-0 no-mobile" action="busqueda.html">

                  <div class="dropdown show">
                    <img class="notificacion" src="imagenes/campana.png" id="dropdownMenuLink" data-toggle="dropdown" alt="" aria-expanded="true">
                    </button>
                    <div class="dropdown-menu contorno show" aria-labelledby="dropdownMenuButton">
                      <div class="row align-items-center item-dropdown no-margin">
                          <img class="  col-7 img-notificacion "  src="imagenes/torre-eiffel.jpg" alt="" width="200px">
                          <div class="  col-5 no-padding  ">
                            <p class="titulo-notificacion">Reserva cargada</p>
                            <p class="descripcion-notificacion ">Id viaje: 1</p>
                            <p class="descripcion-notificacion ">Destino: Francia</p>
                          </div>
                      </div>
                    </div>
                  </div>

        <a class=" nav-link btn btn-primary nombre-usuario"  style="color: white;" href="#" disabled>#Pablo</a>
        <a class=" nav-link btn btn-primary"  style="color: white;" href="">Salir</a>
      </form>
    </div>
  </nav>


<section>

  <div class="container">
    <div class="row justify-content-center align-items-center minh-100">
      <div class="col-lg-12">
          <div class="card icono2 mx-auto margin-top" style="width: 18rem;">
            <a class="nav-link active home margin-top" ><img class="card-img-top" src="imagenes/usuario.png" alt="Card image cap"></a>
             </div>
        <div>
          <p  class="text-center margin-top"><a href="viajes" class="btn btn-primary btn-lg " role="button" aria-disabled="true">Mis Viajes</a></p>
          <p  class="text-center margin-top"><a href="#" class="btn btn-primary btn-lg " role="button" aria-disabled="true">Agendar Viaje</a></p>
        </div>

      </div>

    </div>
  </div>


</section>
{include file="templates/footer.tpl"}
