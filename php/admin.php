<?php

// include
require ("../vendor/autoload.php");

// namespace
use Rain\Tpl;

// config
$config = array(
    "tpl_dir"       => "templates/",
    "cache_dir"     => "cache/",
    "debug"         => false,
);

Tpl::configure( $config );


// Add PathReplace plugin (necessary to load the CSS with path replace)
Tpl::registerPlugin( new Tpl\Plugin\PathReplace() );


// create the Tpl object
$tpl = new Tpl;

// assign a variable
$tpl->assign( "HORA_LOGIN", ((new DateTime("now", new DateTimeZone('America/Sao_Paulo')))->format('H:m:s')));

// assign an array
#$tpl->assign( "week", array( "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" ) );

// draw the template
$tpl->draw( "admin" );
?>