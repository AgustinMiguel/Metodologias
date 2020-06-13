{include file="templates/header.tpl"}
{include file="templates/NavBarLogeado.tpl"}

<section>
  <div class="container">
    <div class="row cont">
    <div class="col-12 roles">
      <div class="container-fluid">
        <h1 style="margin-bottom: 3%">Viajes futuros</h1>
        <table class="table">
          <!-- Tabla en donde se muestran los datos de los viajes futuros -->
          <thead>
            <tr class="table-primary">
              <th scope="col">Lugar destino</th>
              <th scope="col">Aeropuerto de salida</th>
              <th scope="col">Fecha de ida</th>
              <th scope="col">Fecha de vuelta</th>
              <th scope="col">Nombre hotel</th>
              <th scope="col"> </th>
              <th scope="col"> </th>
              <th scope="col"> </th>
              <th scope="col"> </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Lima, Perú</td>
              <td>Ezeiza</td>
              <td>30/5/2020</td>
              <td>24/6/2020</td>
              <td>El mirador</td>
              <td><a href="verInfoViaje"><button type="button" name="button" class="btn btn-primary">Editar</button></a></td>
              <td><button type="button" name="button" class="btn btn-primary">Borrar</button></td>
              <td><button type="button" name="button" class="btn btn-primary">Mapa</button></td>
               <td><button type="button" name="button" class="btn btn-primary">Ver más</button></td> 
            </tr>
            <tr>
              <td>Santiago, Chile</td>
              <td>Ezeiza</td>
              <td>25/6/2020</td>
              <td>28/6/2020</td>
              <td>Hotel California</td>
              <td><a href="verInfoViaje"><button type="button" name="button" class="btn btn-primary">Editar</button></a></td>
              <td><button type="button" name="button" class="btn btn-primary">Borrar</button></td>
              <td><button type="button" name="button" class="btn btn-primary">Mapa</button></td>   
               <td><button type="button" name="button" class="btn btn-primary">Ver más</button></td>          </tr>
            <tr>
              <td>París, Francia </td>
              <td>Ezeiza</td>
              <td>21/9/2020</td>
              <td>25/9/2020</td>
              <td>Idol Hotel</td>
              <td><a href="verInfoViaje"><button type="button" name="button" class="btn btn-primary">Editar</button></a></td>
              <td><button type="button" name="button" class="btn btn-primary">Borrar</button></td>
              <td><button type="button" name="button" class="btn btn-primary">Mapa</button></td>
              <td><button type="button" name="button" class="btn btn-primary">Ver más</button></td> 
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
