{include file="templates/header.tpl"}
{include file="templates/NavBarLogeado.tpl"}


<div class="row d-flex noMarginRight">
  <div class="col-md-6 diferenciar">
    <div class="container">
      <h1 class="cont borde">Da de alta tu vuelo via Email con la reserva de tu hotel</h1>
      <form>
          <div class="form-group row">
              <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                  <input type="email" class="form-control" id="inputEmail" placeholder=hotelupmetodologiacompany@gmail.com>
              </div>
              <label for="inputBoucher" class="col-sm-2 col-form-label">Voucher</label>
              <div class="col-sm-10">
                  <input type="file" class="form-control" id="inputBoucher" placeholder=hotelupmetodologiacompany@gmail.com>
              </div>
          </div>
          <button type="submit" class="btn btn-primary mb-2 "> <a href="altaPorReservaHotelEmail" style="color:white">Confirmar</a></button>
      </form>
    </div>

      </div>
  <div class="col-md-6">
    <div class="container">
      <h1 class="cont">Da de alta tu vuelo via Email con la reserva de tu vuelo</h1>
      <form>
          <div class="form-group row">
              <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                  <input type="email" class="form-control" id="inputEmail" placeholder=hotelupmetodologiacompany@gmail.com>
              </div>
              <label for="inputBoucher" class="col-sm-2 col-form-label">Voucher</label>
              <div class="col-sm-10">
                  <input type="file" class="form-control" id="inputBoucher" placeholder=hotelupmetodologiacompany@gmail.com>
              </div>
          </div>
          <button type="submit" class="btn btn-primary mb-2 "> <a href="altaPorReservaVueloEmail" style="color:white">Confirmar</a></button>
      </form>
    </div>
  </div>
</div>
{include file="templates/footer.tpl"}
