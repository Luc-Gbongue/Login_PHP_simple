<?php
// Demarrer la session php
session_start();

// arreter la session
session_destroy();

// rediriger vers login 
header("Location: login.php");

// Stopper le script
exit();
?>