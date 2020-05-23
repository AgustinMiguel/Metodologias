{include file="templates/header.tpl"}
{include file="templates/NavBarLogeado.tpl"}
<section>
    <div class="container">
        <div class="row cont">
            <div class="col-12 roles">
                <div class="container-fluid">
                    <h1 style="margin-bottom: 3%">Reserva tu Hotel</h1>
                    <form>
                        <div class="form-group row">
                            <label for="inputNombre" class="col-sm-2 col-form-label">Nombre</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputNombre" placeholder="Nombre">     
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputCalle" class="col-sm-2 col-form-label">Calle</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputCalle" placeholder="Calle">     
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputNumero" class="col-sm-2 col-form-label">Numero</label>
                            <div class="col-sm-10">
                                <input type="integer" class="form-control" id="inputNumero" placeholder="Numero">     
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEstrella" class="col-sm-2 col-form-label">Estrellas</label>
                            <div class="col-sm-10">
                                <input type="integer" class="form-control" id="inputEstrella" placeholder="Estrellas">     
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputNumHab" class="col-sm-2 col-form-label">Numero habitacion</label>
                            <div class="col-sm-10">
                                <input type="integer" class="form-control" id="inputNumHab" placeholder="Numero">     
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputFechaA" class="col-sm-2 col-form-label">Fecha de ingreso</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="inputFechaA" placeholder="Ingreso">     
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputFechaB" class="col-sm-2 col-form-label">Fecha de salida</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="inputFechaB" placeholder="Salida">     
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputCheckin" class="col-sm-2 col-form-label">Horario entrada</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputCheckin" placeholder="">     
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputCheckout" class="col-sm-2 col-form-label">Horario salida</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputCheckout" placeholder="">     
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Confirmar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
{include file="templates/footer.tpl"}