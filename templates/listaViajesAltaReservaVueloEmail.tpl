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
              <th scope="col">Titulo</th>
              <th scope="col">Destino</th>
              <th scope="col">Salida</th>
              <th scope="col">Inicio</th>
              <th scope="col">Fin</th>
              <th scope="col">Objetivo</th>
              <th scope="col"> </th>
              <th scope="col"> </th>
              <th scope="col"> </th>
              <th scope="col"> </th>

            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Encuentro Pokemon</td>
              <td>Lima, Perú</td>
              <td>Ae.Ezeiza</td>
              <td>25/5/2020</td>
              <td>28/5/2020</td>
              <td>Otro</td>
              <td><button type="button" name="button" class="btn btn-primary">Borrar</button></td>
              <td><button type="button" name="button" class="btn btn-primary">Mapa</button></td>
              <td><a href="verInfoViaje"><button type="button" name="button" class="btn btn-primary">Ver más</button></a></td>
            </tr>
            <tr>
              <td>Lucha por el Gym</td>
              <td>Santiago, Chile</td>
              <td>Ae.Ezeiza</td>
              <td>25/6/2020</td>
              <td>28/6/2020</td>
              <td>Trabajo</td>
              <td><button type="button" name="button" class="btn btn-primary">Borrar</button></td>
              <td><button type="button" name="button" class="btn btn-primary">Mapa</button></td>
              <td><a href="verInfoViaje"><button type="button" name="button" class="btn btn-primary">Ver más</button></a></td>
               </tr>
            <tr>
              <td>Vamo a la Playa </td>
              <td>Sin destino</td>
              <td>Sin vuelo</td>
              <td>Sin vuelo</td>
              <td>Sin vuelo</td>
              <td>Descanso</td>
              <td><button type="button" name="button" class="btn btn-primary">Borrar</button></td>
              <td><button type="button" name="button" class="btn btn-primary">Mapa</button></td>
              <td><a href="verInfoViaje"><button type="button" name="button" class="btn btn-primary">Ver más</button></a></td>
             </tr>
            <tr>
              <td>Sin titulo</td>
              <td>Bariloche, Argentina</td>
              <td>Aeroparque</td>
              <td>14/07/2020</td>
              <td>27/07/2020</td>
              <td>Otro</td>
              <td><button type="button" name="button" class="btn btn-primary">Borrar</button></td>
              <td><button type="button" name="button" class="btn btn-primary">Mapa</button></td>
              <td><a href="verInfoViaje"><button type="button" name="button" class="btn btn-primary">Ver más</button></a></td>
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
