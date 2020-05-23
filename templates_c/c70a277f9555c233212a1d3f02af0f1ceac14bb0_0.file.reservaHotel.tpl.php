<?php
/* Smarty version 3.1.33, created on 2020-05-24 01:07:46
  from 'C:\xampp\htdocs\metodologia\templates\reservaHotel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ec9acc2534c79_48485010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c70a277f9555c233212a1d3f02af0f1ceac14bb0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\metodologia\\templates\\reservaHotel.tpl',
      1 => 1590272445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/NavBarLogeado.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5ec9acc2534c79_48485010 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/NavBarLogeado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
                        <button type="submit" class="btn btn-primary mb-2" > <a href="listaViajes2" style="color:black">Confirmar</a></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
