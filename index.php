<?php
error_reporting(E_ALL);
ini_set("display_errors", -1);
setlocale(LC_ALL, 'en_US.UTF8');
#==============================================#
define("SHA",false); # Small Http::SH Authentication [ Don't remove it ]
#==============================================#
# We can import the packages via composer 
require 'vendor/autoload.php';
require 'sys/Http.php';
################################################

# Simple Http Routes #
require 'routes.php';
# Simple Http Routes #

################################################

