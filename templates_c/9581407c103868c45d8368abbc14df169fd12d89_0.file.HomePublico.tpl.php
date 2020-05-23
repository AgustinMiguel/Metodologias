<?php
/* Smarty version 3.1.33, created on 2019-05-22 22:47:35
  from 'C:\xampp\htdocs\metodologias\templates\HomePublico.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce5b5670cb713_09856376',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9581407c103868c45d8368abbc14df169fd12d89' => 
    array (
      0 => 'C:\\xampp\\htdocs\\metodologias\\templates\\HomePublico.tpl',
      1 => 1558558049,
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
function content_5ce5b5670cb713_09856376 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/NavBarLogeado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">


    <div id="map" class="mx-auto" style="width: 1120px; height: 580px; background: grey" </div>


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
