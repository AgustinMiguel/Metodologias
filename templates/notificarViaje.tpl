{include file="templates/header.tpl"}
{include file="templates/NavBarLogeado.tpl"}
<section>
  <div class="container">
    <div class="row cont">
    <div class="col-12 roles">
      <div class="container-fluid">
        <h1 style="margin-bottom: 3%">Lista de viajes</h1>
        <table class="table table-hover">
          <thead class="thead-primary">
              <tr class="table-primary">
                      <th scope="col">Destino</th>
                      <th scope="col">Origen</th>
                      <th scope="col">Fecha de inicio</th>
                      <th scope="col">Fecha de fin </th>
                      <th scope="col">Escala</th>
                </tr>
              </thead>
            <tbody class="" >
              <!-- {foreach from=$viaje item=viajes} -->
                <tr>
                <td scope="col">asd</td>
                <td scope="col">asd</td>
                <td scope="col">asd</td>
                <td scope="col">asd </td>
                <td scope="col">asd</td>
                <td scope="col">asd</td>
                      <!-- <th scope="col">{$viajes->Destino}</th>
                      <th scope="col">{$viajes->Origen}</th>
                      <th scope="col">{$viajes->Fecha_de_inicio}</th>
                      <th scope="col">{$viajes->Fecha_de_fin}</th>
                      <th scope="col">{$viajes->Escala}</th>
                </tr>
            <!-- {/foreach} -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
  </div>
    <h1 style="margin-bottom: 3%">Usted no posee viajes planeados</h1>

    
<article>
  <div class="container">
    <div class="row cont">
    <div class="card icono2 mx-auto" style="width: 18rem;">
      <a class="nav-link active home" href="usuario">
      <img class="card-img-top" src="imagenes/home.png" alt="Card image cap">
            </a>
      <div class="card-body">

          <p class="card-text">Volver</p>
              </div>
      </div>
  </div>
  </div>
</article>
</section>
{include file="templates/footer.tpl"}
