<?php
/* Smarty version 3.1.33, created on 2020-05-23 22:32:39
  from 'C:\xampp\htdocs\metodologias\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ec9886764dd73_08726938',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b30fee1306e70f261d0aa1d22043d8fe6b4bd8f5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\metodologias\\templates\\home.tpl',
      1 => 1590265933,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5ec9886764dd73_08726938 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="contenedor_Navbar barra">

    <nav class="navbar navbar-expand-xl navbar-dark bg-primary  ">


      <!-- Dentro de este div se crea una lista donde se encuentra cada boton de la navbar del lado izquierdo-->
      <div class="collapse navbar-collapse" id="navbarsExample06">
        <ul class="navbar-nav mr-auto no-margin">
          <!-- Dentro de cada "li" se crea un boton de la barra de navegacion -->
          <li class="nav-item active logonav">
          <img src="imagenes/logo.png" class="logo" alt="Logo">
          </li>
            </ul>

        </div>
          </nav>
  </div>


<section>
  <div class="container">
    <div class="row cont">


    <div class="card icono2 mx-auto" style="width: 18rem;">
      <a class="nav-link active home" href="usuario">
      <img class="card-img-top" src="imagenes/usuario.png" alt="Card image cap">
            </a>
      <div class="card-body">

          <p class="card-text">Usuario</p>
              </div>
      </div>
  </div>
  </div>
</section>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
