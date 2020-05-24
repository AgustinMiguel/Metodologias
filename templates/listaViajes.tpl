{include file="templates/header.tpl"}
{include file="templates/NavBarLogeado.tpl"}

<section>
  <div class="container">
    <div class="row cont">
    <div class="col-12 roles">
      <div class="container-fluid">
        <h1 style="margin-bottom: 3%">Viajes futuros</h1>
        <table class="table">
          <thead>
            <tr class="table-primary">
              <th scope="col">numero viaje</th>
              <th scope="col">nombre hotel</th>
              <th scope="col">numero vuelo</th>
              <th scope="col">numero plan</th>
              <th scope="col">fecha inicio</th>
              <th scope="col">fecha fin</th>

              <th scope="col"> </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>El mirador</td>
              <td>55</td>
              <td>1</td>
              <td>24/6/2020</td>
              <td>28/6/2020</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Llao Llao</td>
              <td>15</td>
              <td>3</td>
              <td>28/6/2020</td>
              <td>31/6/2020</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td> </td>
              <td>4</td>
              <td>9</td>
              <td>25/9/2020</td>
              <td>05/10/2020</td>
              <td><a href="reservaHotel"><button type="button" name="button" class="btn btn-primary">Agregar Hotel</button></a></td>
            </tr>
          </tbody>
        </table>

      </div>
    </div>
  </div>
  </div>
</section>

<script src="./js/main.js" charset="utf-8"></script>
{include file="templates/footer.tpl"}
{include file="templates/header.tpl"}
{include file="templates/NavBarLogeado.tpl"}
