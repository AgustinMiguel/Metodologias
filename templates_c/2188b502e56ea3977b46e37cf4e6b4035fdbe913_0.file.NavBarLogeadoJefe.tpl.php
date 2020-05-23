<?php
/* Smarty version 3.1.33, created on 2019-05-22 22:59:36
  from 'C:\xampp\htdocs\metodologias\templates\NavBarLogeadoJefe.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce5b838ab2486_53934844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2188b502e56ea3977b46e37cf4e6b4035fdbe913' => 
    array (
      0 => 'C:\\xampp\\htdocs\\metodologias\\templates\\NavBarLogeadoJefe.tpl',
      1 => 1558558773,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce5b838ab2486_53934844 (Smarty_Internal_Template $_smarty_tpl) {
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
            <a class="nav-link btn btn-primary" href="jefe">Inicio <span class="sr-only">(current)</span></a>

          <li class="nav-item active bd-navbar-nav  flex-row">
            <a class="nav-link btn btn-primary" >Contactos <span class="sr-only">(current)</span></a>
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
