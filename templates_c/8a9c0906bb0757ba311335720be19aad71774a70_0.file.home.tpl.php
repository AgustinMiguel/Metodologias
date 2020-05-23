<?php
/* Smarty version 3.1.33, created on 2020-05-23 21:23:06
  from 'C:\xampp\htdocs\metodologia\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ec9781a3947b3_92529774',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a9c0906bb0757ba311335720be19aad71774a70' => 
    array (
      0 => 'C:\\xampp\\htdocs\\metodologia\\templates\\home.tpl',
      1 => 1590261691,
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
function content_5ec9781a3947b3_92529774 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/NavBarLogeado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section>
  <div class="container">
    <div class="row cont">
    <div class="col-12 roles">

    <div class="card icono2" style="width: 18rem;">
      <a class="nav-link active home" href="usuario">
      <img class="card-img-top" src="imagenes/usuario.png" alt="Card image cap">
            </a>
      <div class="card-body">

          <p class="card-text">Usuario</p>
              </div>
      </div>
    </div>
  </div>
  </div>
</section>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
