<?php
/* Smarty version 3.1.33, created on 2020-05-23 22:14:51
  from 'D:\xampp\htdocs\proyectos\Metodologia\templates\viajesFuturos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ec9843b9fee17_02471869',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00f9a8aa2e43553d8bf3958de073195f3fda9bb8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\proyectos\\Metodologia\\templates\\viajesFuturos.tpl',
      1 => 1590264490,
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
function content_5ec9843b9fee17_02471869 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/NavBarLogeado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section>
  <div class="container">
    <div class="row cont">
    <div class="col-12 roles">
      <div class="container-fluid">
        <h1 style="margin-bottom: 3%">Viajes futuros</h1>
        <table class="table table-hover">
          <thead class="thead-primary">
              <tr class="table-primary">
                      <th scope="col">id_viaje</th>
                      <th scope="col">id_hotel</th>
                      <th scope="col">id_vuelo</th>
                      <th scope="col">nombre_usuario </th>
                      <th scope="col">email</th>
                      <th scope="col">id_plan</th>
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
                      <!-- <th scope="col"><?php echo $_smarty_tpl->tpl_vars['viajes']->value->id_viaje;?>
</th>
                      <th scope="col"><?php echo $_smarty_tpl->tpl_vars['viajes']->value->id_hotel;?>
</th>
                      <th scope="col"><?php echo $_smarty_tpl->tpl_vars['viajes']->value->id_vuelo;?>
</th>
                      <th scope="col"><?php echo $_smarty_tpl->tpl_vars['viajes']->value->nombre_usuario;?>
</th>
                      <th scope="col"><?php echo $_smarty_tpl->tpl_vars['viajes']->value->email;?>
</th>
                      <th scope="col"><?php echo $_smarty_tpl->tpl_vars['viajes']->value->id_plan;?>
</th> -->
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
</section>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}