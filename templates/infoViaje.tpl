{include file="templates/header.tpl"}
{include file="templates/NavBarLogeado.tpl"}

<section>
  <div class="container">
    <div class="row cont">
    <div class="col-12 roles">
      <div class="container-fluid">
        <h1 style="margin-bottom: 3%">Informacion del   Viaje</h1>
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
              <td>Lima, Perú</td>
              <td>Lima, Perú</td>
              <td>Lima, Perú</td>
              <td>Lima, Perú</td>
              <td>Lima, Perú</td>
              <td>Lima, Perú</td>
              <td>Lima, Perú</td>
              <td>Lima, Perú</td>
              <td>Lima, Perú</td>
              <td>Lima, Perú</td>
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
