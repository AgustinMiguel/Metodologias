<?php
/* Smarty version 3.1.33, created on 2019-05-20 01:11:50
  from '/opt/lampp/htdocs/metodologias/view/templates/Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce1e2b65b9ad6_06069274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '788e7558f8bd9eb582b98f3a6cd85b925b5bab7a' => 
    array (
      0 => '/opt/lampp/htdocs/metodologias/view/templates/Login.tpl',
      1 => 1558307508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/templates/header.tpl' => 1,
    'file:view/templates/NavBar.tpl' => 1,
    'file:view/templates/footer.tpl' => 1,
  ),
),false)) {
function content_5ce1e2b65b9ad6_06069274 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:view/templates/NavBar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <h3><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h3>
    <form method="post" action="verificarLogin">
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


<?php $_smarty_tpl->_subTemplateRender("file:view/templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
