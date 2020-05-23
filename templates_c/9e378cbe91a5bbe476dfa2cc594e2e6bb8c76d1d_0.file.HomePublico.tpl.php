<?php
/* Smarty version 3.1.33, created on 2019-05-23 19:32:50
  from 'C:\xampp\htdocs\proyectos\metodologias\templates\HomePublico.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce6d94262f546_59038943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e378cbe91a5bbe476dfa2cc594e2e6bb8c76d1d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\metodologias\\templates\\HomePublico.tpl',
      1 => 1558632768,
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
function content_5ce6d94262f546_59038943 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/NavBarLogeado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div id="map" class="mx-auto" style="width: 1120px; height: 580px; background: grey" </div>


<div class="">
  <form method="post" action="AgregarDenuncia">
    <div class="form-group">
      <label for="exampleInputEmail1">Longitud</label>
      <p>-37.33167</p>
      <input type=""   class="longitudForm" id="longitudForm" name="longitudForm" >
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Latitud</label>
      <p>-59.13316</p>
      <input type=""  class="latitudForm" id="latitudForm" name="latitudForm" >
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Informacion</label>
      <input type="text"  class="descripcionForm" id="descripcionForm" name="descripcionForm"   >
    </div>
    <button type="sumbit" name="button"  id="boton">Submit</button>
  </form>
</div>


<div class="">


  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['denuncias']->value, 'denuncia');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['denuncia']->value) {
?>
  <tbody>
    <tr>
      <input type="" class="hidden" id="latitud <?php echo $_smarty_tpl->tpl_vars['denuncia']->value['id_denuncia'];?>
"  value="<?php echo $_smarty_tpl->tpl_vars['denuncia']->value['latitud'];?>
">
      <input type="" class="hidden" id="longitud <?php echo $_smarty_tpl->tpl_vars['denuncia']->value['id_denuncia'];?>
"  value="<?php echo $_smarty_tpl->tpl_vars['denuncia']->value['longitud'];?>
">
      <input type="" class="hidden" id="descripcion <?php echo $_smarty_tpl->tpl_vars['denuncia']->value['id_denuncia'];?>
"  value="<?php echo $_smarty_tpl->tpl_vars['denuncia']->value['descripcion'];?>
">
    </tr>
  </tbody>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

  </div>
</div>
  <?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
