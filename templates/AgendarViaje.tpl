{include file="templates/header.tpl"}
{include file="templates/NavBarLogeado.tpl"}

<section>
    <div class="container">
        <div class="row cont">
            <div class="col-12 roles">
                <div class="container-fluid">
                    <h1 style="margin-bottom: 3%">Agenda tu viaje!</h1>
                    <form>
                        <div class="form-group row">
                            <label for="inputTitulo" class="col-sm-2 col-form-label">Titulo</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputTitulo" placeholder="Titulo">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputObjetivo" class="col-sm-2 col-form-label">Objetivo</label>
                            <div class="col-sm-10">
                                <select name="">
                                    <option value="1">Estudio</option>
                                    <option value="2">Trabajo</option>
                                    <option value="3">Descanso</option>
                                    <option value="4">Otros</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputDescripcion" class="col-sm-2 col-form-label">Descripcion</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputDescripcion" placeholder="Descripcion">
                            </div>
                        </div>
                    </form>
                    <button type="submit" class="btn btn-primary mb-2" > <a href="listaViajesAltaAgendaViajes" style="color:white">Confirmar</a></button>
                </div>
            </div>
        </div>
    </div>
</section>

{include file="templates/footer.tpl"}
