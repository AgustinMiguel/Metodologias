<?php
/* Smarty version 3.1.33, created on 2019-05-22 18:49:30
  from 'C:\xampp\htdocs\proyectos\metodologias\templates\NavBarLogeado.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce57d9a6bc7a7_88074385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c8c2622a7c94d6c50d00934521cea26c0ec835b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\metodologias\\templates\\NavBarLogeado.tpl',
      1 => 1558500300,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce57d9a6bc7a7_88074385 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="contenedor_Navbar barra">

    <nav class="navbar navbar-expand-xl navbar-dark bg-primary  ">


      <!-- Dentro de este div se crea una lista donde se encuentra cada boton de la navbar del lado izquierdo-->
      <div class="collapse navbar-collapse" id="navbarsExample06">
        <ul class="navbar-nav mr-auto">
          <!-- Dentro de cada "li" se crea un boton de la barra de navegacion -->
          <li class="nav-item active logonav">
          <img src="imagenes/logonav.png" class="img-fluid" alt="Logo Municipalidad">
          </li>
          <li class="nav-item active">
            <a class="nav-link btn btn-primary" href="#">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link btn btn-primary mapaBoton" href="#">Ver Mapa <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active bd-navbar-nav  flex-row">
            <a class="nav-link btn btn-primary" href="#">Contactos <span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <!-- Dentro de este div se crea una lista donde se encuentra cada boton de la navbar del lado derecho-->
<!--          <div class=" nav-item active  bd-navbar-nav flex-row">-->
<!--            <a class=" nav-link btn btn-primary"  style="color: white;" href="#">Iniciar Sesión</a>-->
<!--          </div>-->
<!--          <div class=" nav-item active  bd-navbar-nav ">-->
<!--            <a class=" nav-link btn btn-primary"  style="color: white;" href="#">Registrarte</a>-->
<!--          </div>-->
        <div class=" nav-item active  bd-navbar-nav ">
            <a class=" nav-link btn btn-primary"  style="color: white;" href="#">Cerrar Sesión</a>
        </div>
        </div>
          </nav>
  </div>
  <div class="container logo">
        <img src="imagenes/logotandil.jpg" class="img-fluid" alt="Logo Municipalidad">
  </div>
<?php }
}
