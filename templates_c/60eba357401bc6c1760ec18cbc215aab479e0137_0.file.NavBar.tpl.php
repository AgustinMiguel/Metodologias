<?php
/* Smarty version 3.1.33, created on 2019-05-22 06:46:50
  from 'C:\xampp\htdocs\proyectos\metodologias\templates\NavBar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce4d43a275962_06484988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60eba357401bc6c1760ec18cbc215aab479e0137' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\metodologias\\templates\\NavBar.tpl',
      1 => 1558500300,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce4d43a275962_06484988 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="contenedor_Navbar barra">

    <nav class="navbar navbar-expand-xl navbar-dark bg-primary  ">
    <!-- <a class="navbar-brand " href="#">Municipio de Tandil</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample06" aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> -->

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

        </div>
          </nav>
  </div>
  <div class="container logo">
        <img src="imagenes/logotandil.jpg" class="img-fluid" alt="Logo Municipalidad">
  </div>
<?php }
}
