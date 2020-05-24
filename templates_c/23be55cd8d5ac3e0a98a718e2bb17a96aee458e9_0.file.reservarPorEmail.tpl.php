<?php
/* Smarty version 3.1.33, created on 2020-05-24 21:19:38
  from 'C:\xampp\htdocs\Metodologia\metodologia\templates\reservarPorEmail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ecac8ca7de547_44926326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23be55cd8d5ac3e0a98a718e2bb17a96aee458e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Metodologia\\metodologia\\templates\\reservarPorEmail.tpl',
      1 => 1590347633,
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
function content_5ecac8ca7de547_44926326 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/NavBarLogeado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section>
    <div class="container">
        <div class="row cont">
            <div class="col-12 roles">
                <div class="container-fluid">
                    <h1 style="margin-bottom: 3%">Reserva mediante email</h1>
                    <form>
                        <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail" placeholder=hotelupmetodologiacompany@gmail.com>
                            </div>
                            <label for="inputBoucher" class="col-sm-2 col-form-label">Boucher</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="inputBoucher" placeholder=hotelupmetodologiacompany@gmail.com>
                            </div>
                        </div>                            
                        <button type="submit" class="btn btn-primary mb-2" > <a href="cofirmacionEmail" style="color:black">Reservar</a></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
