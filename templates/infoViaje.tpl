{include file="templates/header.tpl"}
{include file="templates/NavBarLogeado.tpl"}

<section>
  <div class="container">
    <div class="row cont">
    <div class="col-12 roles">
      <div class="container-fluid">
        <h1 style="margin-bottom: 3%">Informacion del   Viaje</h1>
        <!-- Tabla en donde se muestran los datos de los viajes futuros -->
        <table class="table">
            <thead>
            <tr class="table-primary">
              <th scope="col">Fecha inicio</th>
              <th scope="col">Fecha llegada</th>
              <th scope="col">Descripcion</th>
              <th scope="col">Ciudad origen</th>
              <th scope="col">Ciudad destino</th>
              <th scope="col">Horario partida</th>
              <th scope="col">Horario llegada</th>
              <th scope="col">Aerolinea</th>
              <th scope="col">Asiento</th>
              <th scope="col">Escala</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>30/5/2020</td>
              <td>30/5/2020</td>
              <td>Vacaciones</td>
              <td>Buenos Aires,Argentina</td>
              <td>Lima, Perú</td>
              <td>15:00</td>
              <td>22:00</td>
              <td>LAN</td>
              <td>69</td>
              <td></td>
            </tr>
        </tbody>
            <td><a href="reservaHotel"><button type="button" name="button" class="btn btn-primary">Agregar reserva</button></a></td>
            <td><button type="button" name="button" class="btn btn-primary">Agregar planes</button></td>
            <td><button type="button" name="button" class="btn btn-primary">Agregar vuelo</button></td></a></td>
        </table>
        <a href="viajes"><button type="button" name="button" class="btn btn-primary">Confirmar</button></a>
      </div>
    </div>
  </div>
  </div>
</section>

<script src="./js/main.js" charset="utf-8"></script>
{include file="templates/footer.tpl"}
