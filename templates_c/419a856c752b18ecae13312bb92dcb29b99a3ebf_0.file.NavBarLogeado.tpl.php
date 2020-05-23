<?php
/* Smarty version 3.1.33, created on 2020-05-23 22:14:51
  from 'D:\xampp\htdocs\proyectos\Metodologia\templates\NavBarLogeado.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ec9843bac5a98_77600665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '419a856c752b18ecae13312bb92dcb29b99a3ebf' => 
    array (
      0 => 'D:\\xampp\\htdocs\\proyectos\\Metodologia\\templates\\NavBarLogeado.tpl',
      1 => 1590257214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec9843bac5a98_77600665 (Smarty_Internal_Template $_smarty_tpl) {
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

              <ul class="navbar-nav mr-auto">
          <li class="nav-item active  bd-navbar-nav">
            <a class="nav-link btn btn-primary" href="ciudadano">Ver viajes <span class="sr-only">(current)</span></a>
          <li class="nav-item active  bd-navbar-nav text-center">
            <a class=" nav-link btn btn-primar" >Contacto <span class="sr-only">(current)</span></a>
          </li>
  </ul>

        <div class=" nav-item active  bd-navbar-nav center ">
            <a class=" nav-link btn btn-primary"  style="color: white;" href="#">Salir</a>
        </div>
        </div>
          </nav>
  </div>
<?php }
}
