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
	if(@$_SERVER['REMOTE_ADDR'] == "127.0.0.1")
		return TRUE;
	if(@substr($_SERVER['REMOTE_ADDR'], 0, 10)=="192.168.3." )
		return TRUE;
	if($_SERVER['REMOTE_ADDR']=="::1")
		return TRUE;
	
	return FALSE;
}
if(!true)
{
	define('FEEDDATA_FILE', 'feeddata.updatecheck.php');	

	define('MYSQL_USER', 'gyoseiupdchk');
	define('MYSQL_PASS', 'gyoseiupdchk');
	define('MYSQL_DATABASE', 'gyoseiupdchk');
	define('RSS_IDENTITY_CHECK', 'date');
	
	define('SITE_TITLE', 'MY RSS');
	define('SITE_SUBTITLE', '私ずRSS更新');	
	define('SITE_SUBTITLE', '自分が登録したRSS');
}
else
{
	define('FEEDDATA_FILE', 'feeddata.gyosei.php');

	define('MYSQL_USER', 'gyosei');
	define('MYSQL_PASS', 'gyosei');
	define('MYSQL_DATABASE', 'gyosei');
define('RSS_IDENTITY_CHECK', 'url|origurl|desc'); // url, origurl, description
	
	define('SITE_TOPLINE_HTML', '<font color="blue" size="+3">★</font><font color="red" size="+2">★</font><font color="green">★</font>行政の「<strong><font size="+1">今</font></strong>」がわかる更新統合サイト <a href="./index.php">トップ</a>');
	define('SITE_TITLE', '最新行政報告');
	define('SITE_SUBTITLE', '行政機関が発行する報告をまとめています。省や庁、独立行政法人や日銀のような準行政機関も含まれます。地方の情報はありません。 ');
}




define('THISDIR', dirname(__FILE__));
define('GYOSEI_DEBUG', true);
define('MAX_COUNT_IN_PAGE', 50);
define('USE_JUMP_URL', false);
define('USE_CACHE', false);
define('CACHINGINTERVALSECOND', 30*24*3600);


define('FORCE_REMOTE', false);
define('IS_LOCAL_ACCESS', IsAccessLocalOrLan());
define('IS_LOCALHOST_ACCESS', IsAccessLocal());

#echo IS_LOCAL_ACCESS;
#echo IS_LOCALHOST_ACCESS;

define('SHOW_GOOGLE_ADD', !IS_LOCAL_ACCESS);
// define('IS_GOOGLEAD_SHOW', true);
// define('IS_GOOGLEAD_SHOW', false);
?>
