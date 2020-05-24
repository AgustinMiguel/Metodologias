<?php
/* Smarty version 3.1.33, created on 2020-05-24 20:49:38
  from 'D:\xampp\htdocs\proyectos\metodologia\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ecac1c25add80_35837432',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3844d03848bad0b447f8fa3793379500058d6d15' => 
    array (
      0 => 'D:\\xampp\\htdocs\\proyectos\\metodologia\\templates\\home.tpl',
      1 => 1590346132,
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
function content_5ecac1c25add80_35837432 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/NavBarLogeado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<section>

  <div class="container">
    <div class="row justify-content-center align-items-center minh-100">
      <div class="col-lg-12">
          <div class="card icono2 mx-auto margin-top" style="width: 18rem;">
            <a class="nav-link active home margin-top" ><img class="card-img-top" src="imagenes/usuario.png" alt="Card image cap"></a>
             </div>
        <div>
          <p  class="text-center margin-top"><a href="viajes" class="btn btn-primary btn-lg " role="button" aria-disabled="true">Mis Viajes</a></p>
          <p  class="text-center margin-top"><a href="#" class="btn btn-primary btn-lg " role="button" aria-disabled="true">Agendar Viaje</a></p>
        </div>

      </div>

    </div>
  </div>


</section>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
