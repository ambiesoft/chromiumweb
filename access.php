<?php
define('MYSQL_SERVER', 'mysqlserverhost');

function IsAccessLocal()
{
	if(FORCE_REMOTE)
		return FALSE;
	
	if($_SERVER['REMOTE_ADDR']=="::1")
		return TRUE;
		
	if(@$_SERVER['REMOTE_ADDR'] == "127.0.0.1")
		return TRUE;
		
	return FALSE;
}
function IsAccessLocalOrLan()
{
	if ( FORCE_REMOTE )
		return FALSE;
	
	if(IsAccessLocal())
		return TRUE;

	if(@substr($_SERVER['REMOTE_ADDR'], 0, 10)=="192.168.3." )
		return TRUE;
	
	return FALSE;
}

define('THISDIR', dirname(__FILE__));
define('FORCE_REMOTE', false);
define('IS_LOCAL_ACCESS', IsAccessLocalOrLan());
define('IS_LOCALHOST_ACCESS', IsAccessLocal());

define('SHOW_GOOGLE_AD', !IS_LOCAL_ACCESS);
?>
