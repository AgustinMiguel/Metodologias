{include file="templates/header.tpl"}
{include file="templates/NavBarLogeado.tpl"}
<section>
  <div class="container">
    <div class="row cont">
    <div class="col-12 roles">
      <div class="container-fluid">
        <h1 style="margin-bottom: 3%">Viajes futuros</h1>
        <table class="table table-hover">
          <thead class="thead-primary">
              <tr class="table-primary">
                      <th scope="col">id_viaje</th>
                      <th scope="col">id_hotel</th>
                      <th scope="col">id_vuelo</th>
                      <th scope="col">nombre_usuario </th>
                      <th scope="col">email</th>
                      <th scope="col">id_plan</th>
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
                      <!-- <th scope="col">{$viajes->id_viaje}</th>
                      <th scope="col">{$viajes->id_hotel}</th>
                      <th scope="col">{$viajes->id_vuelo}</th>
                      <th scope="col">{$viajes->nombre_usuario}</th>
                      <th scope="col">{$viajes->email}</th>
                      <th scope="col">{$viajes->id_plan}</th> -->
                </tr>
            <!-- {/foreach} -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
  </div>
</section>
{include file="templates/footer.tpl"}
