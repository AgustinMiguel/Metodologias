<?php
/* Smarty version 3.1.33, created on 2019-05-22 04:25:23
  from 'C:\xampp\htdocs\metodologias\templates\Mapa.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce4b3130ea607_23887349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c243bed51ba806eb6340ad1d838bac93c4b77c79' => 
    array (
      0 => 'C:\\xampp\\htdocs\\metodologias\\templates\\Mapa.tpl',
      1 => 1558491671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce4b3130ea607_23887349 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
  <head>
  <meta name="viewport" content="initial-scale=1.0, width=device-width" />
  <link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.0/mapsjs-ui.css?dp-version=1549984893" />

  </head>


  <body>
    <div id="map" class="mx-auto" style="width: 1120px; height: 580px; background: grey" </div>


<div class="">
  <form>
    <div class="form-group">
      <label for="exampleInputEmail1">Longitud</label>
      <p>-37.33167</p>
      <input type="" class="form-control" id="Longitud" >
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Latitud</label>
      <p>-59.13316</p>
      <input type="" class="form-control" id="Latitud">
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Informacion</label>
      <input type="text" class="form-control" id="Informacion" >
    </div>
    <button type="button" name="button" id="boton">Submit</button>
  </form>
</div>





  <?php echo '<script'; ?>
 type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-core.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-service.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-ui.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-mapevents.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="js/api.js"><?php echo '</script'; ?>
>
      </body>
    </html>
<?php }
}
