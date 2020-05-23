<?php
/* Smarty version 3.1.33, created on 2020-05-24 00:28:20
  from 'C:\xampp\htdocs\metodologia\templates\notificarViaje.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ec9a3841ff073_35820359',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7379ce3c55b14f0ff801d7cc01cbfc1866199c96' => 
    array (
      0 => 'C:\\xampp\\htdocs\\metodologia\\templates\\notificarViaje.tpl',
      1 => 1590272391,
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
function content_5ec9a3841ff073_35820359 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/NavBarLogeado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section>
  <div class="container">
    <div class="row cont">
    <div class="col-12 roles">
      <div class="container-fluid">
        <h1 style="margin-bottom: 3%">Lista de viajes</h1>
        <table class="table table-hover">
          <thead class="thead-primary">
              <tr class="table-primary">
                      <th scope="col">Destino</th>
                      <th scope="col">Origen</th>
                      <th scope="col">Fecha de inicio</th>
                      <th scope="col">Fecha de fin </th>
                      <th scope="col">Escala</th>
                </tr>
              </thead>
            <tbody class="" >
              <!-- <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['viaje']->value, 'viajes');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['viajes']->value) {
?> -->
                <tr>
                <td scope="col">asd</td>
                <td scope="col">asd</td>
                <td scope="col">asd</td>
                <td scope="col">asd </td>
                <td scope="col">asd</td>
                <td scope="col">asd</td>
                      <!-- <th scope="col"><?php echo $_smarty_tpl->tpl_vars['viajes']->value->Destino;?>
</th>
                      <th scope="col"><?php echo $_smarty_tpl->tpl_vars['viajes']->value->Origen;?>
</th>
                      <th scope="col"><?php echo $_smarty_tpl->tpl_vars['viajes']->value->Fecha_de_inicio;?>
</th>
                      <th scope="col"><?php echo $_smarty_tpl->tpl_vars['viajes']->value->Fecha_de_fin;?>
</th>
                      <th scope="col"><?php echo $_smarty_tpl->tpl_vars['viajes']->value->Escala;?>
</th>
                </tr>
            <!-- <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
  </div>
    <h1 style="margin-bottom: 3%">Usted no posee viajes planeados</h1>

    
<article>
  <div class="container">
    <div class="row cont">
    <div class="card icono2 mx-auto" style="width: 18rem;">
      <a class="nav-link active home" href="usuario">
      <img class="card-img-top" src="imagenes/home.png" alt="Card image cap">
            </a>
      <div class="card-body">

          <p class="card-text">Volver</p>
              </div>
      </div>
  </div>
  </div>
</article>
</section>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
