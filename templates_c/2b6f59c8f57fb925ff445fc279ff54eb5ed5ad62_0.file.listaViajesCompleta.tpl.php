<?php
/* Smarty version 3.1.33, created on 2020-05-24 00:32:30
  from 'C:\xampp\htdocs\Metodologia\metodologia\templates\listaViajesCompleta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ec9a47e6eba48_57070248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b6f59c8f57fb925ff445fc279ff54eb5ed5ad62' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Metodologia\\metodologia\\templates\\listaViajesCompleta.tpl',
      1 => 1590272336,
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
function content_5ec9a47e6eba48_57070248 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/NavBarLogeado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section>
  <div class="container">
    <div class="row cont">
    <div class="col-12 roles">
      <div class="container-fluid">
        <h1 style="margin-bottom: 3%">Viajes futuros</h1>
        <table class="table">
          <thead>
            <tr class="table-primary">
              <tr class="table-primary">
                <th scope="col">numero viaje</th>
                <th scope="col">nombre hotel</th>
                <th scope="col">numero vuelo</th>
                <th scope="col">numero plan</th>
              </tr>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>El mirador</td>
              <td>55</td>
              <td>1</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Llao Llao</td>
              <td>15</td>
              <td>3</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Hotel California</td>
              <td>4</td>
              <td>9</td>
            </tr>
          </tbody>
        </table>

      </div>
    </div>
  </div>
  </div>
</section>

<?php echo '<script'; ?>
 src="./js/main.js" charset="utf-8"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
