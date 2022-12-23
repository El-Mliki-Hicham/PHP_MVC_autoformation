<?php

// Make sure errors are displayed. Change this when the site is public.
// Every URL will be routed here.
// We should run different controller/actions depending on the URL
// But this example will always load the "products" controller and 
// run the "all" action.

require_once('controllers/HelloConttroller.php');

$controller = new Hello_Controller();
$result = $controller->index();

require_once('View/index.php');