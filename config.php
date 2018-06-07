<?php
#############################################
	 # DO NOT REMOVE ANYTHONG HERE #
#############################################
define("SH_KEY","API");
define("SH_VALUE","SH");
define("REMOTE_TOKEN","Tok");
$SH_AUTH = [
			"HEAD"=>[
						"API"=>"SH"
					],
			"AUTH"=>[
					"access_token"=>"shservice"
					]
		   ];

$_GLOBALS['SH_AUTH'] = $SH_AUTH;

define("BASE_URL", "http://localhost/sh-service/");

define("_400_", "./400.php"); # Bad Request

/* CONTROLLER */
#=================================#
define("CONTROLLER_PATH","app/controller/");
define("MODEL_PATH","app/model/");
define("HTML_PATH","app/html/");
define("LIBRARY_PATH","app/library/");
define("LANG_PATH","app/language/");
define("EXT_PATH","app/extender/");
define("CMS_PATH","app/cms/");

#===============DONT EDIR==================#
define("APPPATH",__DIR__); 				 # __DIR__     
define("ENVIRONMENT","DEVELOPMENT");			 # DEVELOPMENT
define("BASEPATH","sys/");				 # APPPATH."/" Ex: dbc/
#================DONT EDIT=================#

/* DATABASE */
define("HOST","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","shservice");
define("DATABASE_TYPE","mysqli");
define("DB_STATUS",false); #

# ADDITIONAL OPTIONS
define("DNS","");
define("DATABASE_PREFIX","");
ini_set('session.save_path',realpath(dirname($_SERVER['DOCUMENT_ROOT']) . '/../session'));
#############################################
	 # DO NOT REMOVE ANYTHONG HERE #
#############################################
