<?php
/* Smarty version 3.1.33, created on 2019-05-22 00:13:01
  from 'C:\xampp\htdocs\metodologias\templates\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce477ed4fb645_85948125',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78a19e59b82aa33e3cf081c08ae11c599eac5ff7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\metodologias\\templates\\Login.tpl',
      1 => 1558476779,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/NavBar.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5ce477ed4fb645_85948125 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/NavBar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <h3><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h3>
    <form method="post" action="ciudadano">
      <div class="modal-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Usuario</label>
              <input type="input" class="form-control" name="usuarioId" aria-describedby="usuarioId" placeholder="Usuario">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" name="passwordId" placeholder="Contraseña">
            </div>
      <div class="">
        <?php echo $_smarty_tpl->tpl_vars['Message']->value;?>

      </div>
      <button type="submit" class="btn btn-primary">Login</button>
      </div>
    </form>


<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
