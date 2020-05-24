<?php
/* Smarty version 3.1.33, created on 2020-05-24 21:24:52
  from 'C:\xampp\htdocs\Metodologia\metodologia\templates\listaViajesCompleta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ecaca04585401_22412313',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b6f59c8f57fb925ff445fc279ff54eb5ed5ad62' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Metodologia\\metodologia\\templates\\listaViajesCompleta.tpl',
      1 => 1590348133,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/footer.tpl' => 2,
    'file:templates/header.tpl' => 1,
    'file:templates/NavBarLogeado.tpl' => 1,
  ),
),false)) {
function content_5ecaca04585401_22412313 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="./js/main.js" charset="utf-8"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
                <th scope="col">fecha inicio</th>
                <th scope="col">fecha fin</th>


              </tr>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>El mirador</td>
              <td>55</td>
              <td>1</td>
              <td>24/6/2020</td>
              <td>28/6/2020</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Llao Llao</td>
              <td>15</td>
              <td>3</td>
              <td>28/6/2020</td>
              <td>31/6/2020</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Hotel California</td>
              <td>4</td>
              <td>9</td>
              <td>25/9/2020</td>
              <td>05/10/2020</td>
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
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>s
<?php }
}
