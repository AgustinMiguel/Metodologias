{include file="templates/header.tpl"}
{include file="templates/NavBarLogeado.tpl"}

<section>
  <div class="container">
    <div class="row cont">
    <div class="col-12 roles">
      <div class="container-fluid">
        <h1>Informacion de los Vuelos</h1>
        <!-- Tabla en donde se muestran los datos de los viajes futuros -->
        <table class="table">
            <thead>
            <tr class="table-primary">
              <th scope="col">Inicio</th>
              <th scope="col">Fin</th>
              <th scope="col">Aeropuerto</th>
              <th scope="col">Origen</th>
              <th scope="col">Destino</th>
              <th scope="col">Horario despegue</th>
              <th scope="col">Duracion</th>
              <th scope="col">Aerolinea</th>
              <th scope="col">Asiento</th>
              <th scope="col">Escala</th>
            </tr>
          </thead>
          <tbody>
            <!-- <tr>
              <td>30/5/2020</td>
              <td>30/5/2020</td>
              <td>Vacaciones</td>
              <td>Buenos Aires,Argentina</td>
              <td>Lima, Perú</td>
              <td>15:00</td>
              <td>5 horas</td>
              <td>LAN</td>
              <td>69</td>
              <td></td>
            </tr> -->
        </tbody>
            <td><button type="button" name="button" class="btn btn-primary">Agregar vuelo</button></td></a></td>
        </table>
        <h1>Informacion de los Hoteles</h1>
        <table class="table">
            <thead>
            <tr class="table-primary">
              <th scope="col">Nombre de hotel </th>
              <th scope="col">Estrellas</th>
              <th scope="col">Calle</th>
              <th scope="col">Número</th>
              <th scope="col">Nro habitación</th>
              <th scope="col">Fecha de alta</th>
              <th scope="col">Fecha de baja</th>
              <th scope="col">Horario checkin</th>
              <th scope="col">Horario checkout</th>
            </tr>
          </thead>
          <tbody>
            <tr>
            </tr>
        </tbody>
        </table>
        <td><button type="button" name="button" class="btn btn-primary"><a style="color: white" href="reservaHotel2">Agregar hotel</a></button></td></a></td>
        <h1>Mis acompañantes</h1>
        <table class="table">
            <thead>
            <tr class="table-primary">
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">DNI</th>
            </tr>
          </thead>
          <tbody>
            <tr>
            </tr>
        </tbody>
        </table>
        <td><button type="button" name="button" class="btn btn-primary">Agregar acompañante</button></td></a></td>
        <h1>Mis planes</h1>
        <table class="table">
            <thead>
            <tr class="table-primary">
              <th scope="col">Descripcion</th>
              <th scope="col">Tipo</th>
              <th scope="col">Fecha</th>
            </tr>
          </thead>
          <tbody>
            <tr>
            </tr>
        </tbody>
        </table>
        <td><button type="button" name="button" class="btn btn-primary">Agregar plan</button></td></a></td>
      </div>
    </div>
  </div>
  </div>
</section>

<script src="./js/main.js" charset="utf-8"></script>
{include file="templates/footer.tpl"}
