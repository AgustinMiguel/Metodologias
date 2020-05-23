<?php

//define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
//define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"]. ":". $_SERVER['SERVER_PORT'] . dirname($_SERVER["PHP_SELF"]));
//dirname($_SERVER["PHP_SELF"]);
define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/home');
define('formulario', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/formulario');



class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      'home' => 'LoginController#Home',
      'usuario'=> 'UsuarioController#Home',
      'viajes'=> 'ViajesController#listarViajes',
<<<<<<< HEAD
      'viajesFuturos' => 'ViajesController#viajesFuturos', 
      'notificarViaje' => 'ViajesController#notificarViaje'
=======
      'viajesFuturos' => 'ViajesController#viajesFuturos',
      'cargarReservaHotel' => 'HotelesController#reservarHotel'
>>>>>>> 9bad3267ff2f43a2880276e2fbf637ac5c4618a4
      // 'ciudadano'=> 'CiudadanoController#Home',
      // 'formulario'=>'CiudadanoController#mostrarFormulario',
      // //Esto es para ver el mapa del jefe, pero no pude probar si anda
      // 'mapajefe'=> 'JefeController#VerMapaJefe',
      // 'AgregarDenuncia'=> 'CiudadanoController#InsertarDenuncia'
    ];

    }
 ?>
