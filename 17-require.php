<?php include 'includes/header.php';
// <?php include_once 'includes/header.php'; // Incluye una sola vez, es igual que Require pero primero va a revisar si este archivo fue incluido, y si ya fue incluido ignora esta linea de código y si no ha sido incluido lo incluye.



// Utilizar Require cuando tenga funciones que son criticas para tu aplicación.Ej: una función para una conexión a la base de datos o basicamente todas las funciones.En caso de que no pueda encontrar o cargar un archivo de las funciones el Require se va a encargar de que la aplicación no se ejecute.

require 'funciones.php';
iniciarApp();
// Se puede crear archivos y separar un poco las funciones de tu app, para que los archivos principales no esten muy cargados y tengas mucho mejor organización en los proyectos.Dependiendo de la arquitectura de los mismos se pueden crear funciones relacionadas a las bd, a pagos, ajustes a las bds,etc.

// Utilizar Include cuando quiera incluir otros templates, de esa forma en caso de que falle el incluir un template, puede ser que la aplicación no funcione al 100% porque obviamente le faltan piezas.Mientras que en Include si es algo pequeño ( el error al cargar o encontrar un archivo) entonces la aplicación dependiendo de la configuración va a seguir funcionando.




include 'includes/footer.php';