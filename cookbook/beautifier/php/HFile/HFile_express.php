<?php
global $BEAUT_PATH;
if (!isset ($BEAUT_PATH)) return;
require_once("$BEAUT_PATH/Beautifier/HFile.php");
  class HFile_express extends HFile{
   function HFile_express(){
     $this->HFile();	
/*************************************/
// Beautifier Highlighting Configuration File 
// Express
/*************************************/
// Flags

$this->nocase            	= "1";
$this->notrim            	= "0";
$this->perl              	= "0";

// Colours

$this->colours        	= array("blue", "gray", "purple");
$this->quotecolour       	= "blue";
$this->blockcommentcolour	= "green";
$this->linecommentcolour 	= "green";

// Indent Strings

$this->indent            	= array("DO");
$this->unindent          	= array("DOEND");

// String characters and delimiters

$this->stringchars       	= array("'");
$this->delimiters        	= array("~", "!", "@", "%", "^", "&", "*", "(", ")", "-", "+", "=", "|", "\\", "/", "{", "}", "[", "]", ":", ";", "\"", "'", "<", ">", " ", ",", "	", "?");
$this->escchar           	= "";

// Comment settings

$this->linecommenton     	= array("\"");
$this->blockcommenton    	= array("");
$this->blockcommentoff   	= array("");

// Keywords (keyword mapping to colour number)

$this->keywords          	= array(
			"ABS" => "1", 
			"AGGINDEX" => "1", 
			"AGGMAP" => "1", 
			"AGGMAPINFO" => "1", 
			"AGGREGATE" => "1", 
			"ALLCOMPILE" => "1", 
			"ALLSTAT" => "1", 
			"ANTILOG" => "1", 
			"ANTILOG10" => "1", 
			"ANY" => "1", 
			"ARCCOS" => "1", 
			"ARCSIN" => "1", 
			"ARCTAN" => "1", 
			"ARGCOUNT" => "1", 
			"ARGFR" => "1", 
			"ARGS" => "1", 
			"AVERAGE" => "1", 
			"BACK" => "1", 
			"BADLINE" => "1", 
			"BEGINDATE" => "1", 
			"BLANK" => "1", 
			"BLANKSTRIP" => "1", 
			"BREAK" => "1", 
			"CACHE" => "1", 
			"CACHEHITS" => "1", 
			"CACHEMISSES" => "1", 
			"CACHETRIES" => "1", 
			"CALENDARWEEK" => "1", 
			"CALL" => "1", 
			"CALLTYPE" => "1", 
			"CATEGORIZE" => "1", 
			"CHANGECHARS" => "1", 
			"CHARLIST" => "1", 
			"CHARSET" => "1", 
			"CHDIR" => "1", 
			"CHDRIVE" => "1", 
			"CHGDFN" => "1", 
			"COLVAL" => "1", 
			"COLWIDTH" => "1", 
			"COMMAS" => "1", 
			"COMPILE" => "1", 
			"COMPILEMESSAGE" => "1", 
			"COMPILEWARN" => "1", 
			"COMQUERY" => "1", 
			"COMSET" => "1", 
			"COMUNIT" => "1", 
			"CONNECT" => "1", 
			"CONSIDER" => "1", 
			"CONTEXT" => "1", 
			"CONTINUE" => "1", 
			"CONVERT" => "1", 
			"COPYDFN" => "1", 
			"CORRELATION" => "1", 
			"COS" => "1", 
			"COSH" => "1", 
			"COUNT" => "1", 
			"CUMSUM" => "1", 
			"DATABASE" => "1", 
			"DATEFORMAT" => "1", 
			"DATEORDER" => "1", 
			"DAYABBRLEN" => "1", 
			"DAYNAMES" => "1", 
			"DAYOF" => "1", 
			"DBDESCRIBE" => "1", 
			"DBGOUTFILE" => "1", 
			"DBGSESSION" => "1", 
			"DBREPORT" => "1", 
			"DBWAITTIME" => "1", 
			"DDOF" => "1", 
			"DECIMALOVERFLOW" => "1", 
			"DECIMALS" => "1", 
			"DEFINE" => "1", 
			"DELETE" => "1", 
			"DEPRDECL" => "1", 
			"DEPRDECLSW" => "1", 
			"DEPRSL" => "1", 
			"DEPRSOYD" => "1", 
			"DESCRIBE" => "1", 
			"DIMENSION" => "1", 
			"DIR" => "1", 
			"DISCONNECT" => "1", 
			"DIVIDEBYZERO" => "1", 
			"DO" => "1", 
			"DOEND" => "1", 
			"DSECONDS" => "1", 
			"ECHOPROMPT" => "1", 
			"EIFBYTES" => "1", 
			"ELSE" => "1", 
			"ENDDATE" => "1", 
			"ENDOF" => "1", 
			"EPRODUCT" => "1", 
			"ERELEASE" => "1", 
			"ERRNAMES" => "1", 
			"ESCAPEBASE" => "1", 
			"EVERSION" => "1", 
			"EVERY" => "1", 
			"EXECBREAK" => "1", 
			"EXECSTART" => "1", 
			"EXECSTATUS" => "1", 
			"EXECUTE" => "1", 
			"EXECWAIT" => "1", 
			"EXISTS" => "1", 
			"EXPORT" => "1", 
			"EXPTRACE" => "1", 
			"EXTARGS" => "1", 
			"EXTCHARS" => "1", 
			"EXTCOLS" => "1", 
			"EXTLINES" => "1", 
			"FCCLOSE" => "1", 
			"FCEXEC" => "1", 
			"FCOPEN" => "1", 
			"FCQUERY" => "1", 
			"FCSET" => "1", 
			"FETCH" => "1", 
			"FILECLOSE" => "1", 
			"FILECOPY" => "1", 
			"FILEDELETE" => "1", 
			"FILEERROR" => "1", 
			"FILEGET" => "1", 
			"FILEMODEMASK" => "1", 
			"FILEMOVE" => "1", 
			"FILENEXT" => "1", 
			"FILEOPEN" => "1", 
			"FILEPAGE" => "1", 
			"FILEPUT" => "1", 
			"FILEQUERY" => "1", 
			"FILEREAD" => "1", 
			"FILESET" => "1", 
			"FILEVIEW" => "1", 
			"FILTERLINES" => "1", 
			"FINDCHARS" => "1", 
			"FINDLINES" => "1", 
			"FINTSCHED" => "1", 
			"FOR" => "1", 
			"FORECAST" => "1", 
			"FPMTSCHED" => "1", 
			"FULLDSC" => "1", 
			"GET" => "1", 
			"GOTO" => "1", 
			"GROWRATE" => "1", 
			"HEADING" => "1", 
			"HIDE" => "1", 
			"HIERCHECK" => "1", 
			"IF" => "1", 
			"IFCOPY" => "1", 
			"IMPORT" => "1", 
			"INCLUDE" => "1", 
			"INFILE" => "1", 
			"INFO" => "1", 
			"INLIST" => "1", 
			"INSCHARS" => "1", 
			"INSCOLS" => "1", 
			"INSLINES" => "1", 
			"INSTAT" => "1", 
			"INTPART" => "1", 
			"IRR" => "1", 
			"ISDATE" => "1", 
			"ISVALUE" => "1", 
			"JOINCHARS" => "1", 
			"JOINCOLS" => "1", 
			"JOINLINES" => "1", 
			"KEY" => "1", 
			"LAG" => "1", 
			"LAGABSPCT" => "1", 
			"LAGDIF" => "1", 
			"LAGPCT" => "1", 
			"LARGEST" => "1", 
			"LCOLWIDTH" => "1", 
			"LD" => "1", 
			"LEAD" => "1", 
			"LIKECASE" => "1", 
			"LIKENL" => "1", 
			"LIKEESCAPE" => "1", 
			"LIMIT" => "1", 
			"LINENUM" => "1", 
			"LINESLEFT" => "1", 
			"LISTBY" => "1", 
			"LISTFILES" => "1", 
			"LISTNAMES" => "1", 
			"LOAD" => "1", 
			"LOG" => "1", 
			"LOG10" => "1", 
			"LONGOBJNAMES" => "1", 
			"LOWCASE" => "1", 
			"LSIZE" => "1", 
			"MAINTAIN" => "1", 
			"MAKEDATE" => "1", 
			"MAX" => "1", 
			"MAXCHARS" => "1", 
			"MAXFETCH" => "1", 
			"MEDIAN" => "1", 
			"MIN" => "1", 
			"MKDIR" => "1", 
			"MMOF" => "1", 
			"MODDAMP" => "1", 
			"MODE" => "1", 
			"MODEL" => "1", 
			"MODERROR" => "1", 
			"MODGAMMA" => "1", 
			"MODINPUTORDER" => "1", 
			"MODMAXITERS" => "1", 
			"MODOVERFLOW" => "1", 
			"MODSIMULTYPE" => "1", 
			"MODTOLERANCE" => "1", 
			"MODTRACE" => "1", 
			"MONITOR" => "1", 
			"MONTHABBRLEN" => "1", 
			"MONTHNAMES" => "1", 
			"MOVE" => "1", 
			"MOVINGAVERAGE" => "1", 
			"MOVINGMAX" => "1", 
			"MOVINGMIN" => "1", 
			"MOVINGTOTAL" => "1", 
			"NAFILL" => "1", 
			"NAME" => "1", 
			"NAPAGEFREE" => "1", 
			"NASKIP" => "1", 
			"NASKIP2" => "1", 
			"NASPELL" => "1", 
			"NONE" => "1", 
			"NOPRINT" => "1", 
			"NORMAL" => "1", 
			"NOSPELL" => "1", 
			"NPV" => "1", 
			"NUMCHARS" => "1", 
			"NUMLINES" => "1", 
			"OBJ" => "1", 
			"OBJLIST" => "1", 
			"OBSCURE" => "1", 
			"OFF" => "1", 
			"OKFORLIMIT" => "1", 
			"ON" => "1", 
			"OUTFILE" => "1", 
			"OUTFILEUNIT" => "1", 
			"PAGE" => "1", 
			"PAGEPAUSE" => "1", 
			"PAGEPROMPT" => "1", 
			"PARENS" => "1", 
			"PARSE" => "1", 
			"PAUSE" => "1", 
			"PERCENTAGE" => "1", 
			"PERMIT" => "1", 
			"PERMITERROR" => "1", 
			"PERMITRESET" => "1", 
			"PGCACHEHITS" => "1", 
			"PGCACHEMISSES" => "1", 
			"POP" => "1", 
			"POPLEVEL" => "1", 
			"PROGRAM" => "1", 
			"PROPERTY" => "1", 
			"PUSH" => "1", 
			"PUSHLEVEL" => "1", 
			"QUAL" => "1", 
			"RANDOM" => "1", 
			"RANK" => "1", 
			"RECAP" => "1", 
			"RECNO" => "1", 
			"RECURSIVE" => "1", 
			"REDO" => "1", 
			"REEDIT" => "1", 
			"REGRESS" => "1", 
			"RELATION" => "1", 
			"REM" => "1", 
			"REMCHARS" => "1", 
			"REMCOLS" => "1", 
			"REMLINES" => "1", 
			"RENAME" => "1", 
			"REPLCHARS" => "1", 
			"REPLCOLS" => "1", 
			"REPLLINES" => "1", 
			"REPORT" => "1", 
			"RESERVED" => "1", 
			"RETRIEVE" => "1", 
			"RETURN" => "1", 
			"RMDIR" => "1", 
			"ROLLUP" => "1", 
			"ROOTOFNEGATIVE" => "1", 
			"ROUND" => "1", 
			"ROW" => "1", 
			"RPR" => "1", 
			"RUNTOTAL" => "1", 
			"SECONDS" => "1", 
			"SESSIONQUERY" => "1", 
			"SET" => "1", 
			"SHARESESSION" => "1", 
			"SHELL" => "1", 
			"SHOW" => "1", 
			"SHW" => "1", 
			"SIGNAL" => "1", 
			"SIN" => "1", 
			"SINH" => "1", 
			"SLEEP" => "1", 
			"SMALLEST" => "1", 
			"SMOOTH" => "1", 
			"SORT" => "1", 
			"SORTCOMPOSITE" => "1", 
			"SORTLINES" => "1", 
			"SPARSEINDEX" => "1", 
			"SQL" => "1", 
			"SQLBLOCKMAX" => "1", 
			"SQLMESSAGES" => "1", 
			"SQRT" => "1", 
			"STARTOF" => "1", 
			"STATALL" => "1", 
			"STATFIRST" => "1", 
			"STATLAST" => "1", 
			"STATLEN" => "1", 
			"STATLIST" => "1", 
			"STATMAX" => "1", 
			"STATMIN" => "1", 
			"STATRANK" => "1", 
			"STATUS" => "1", 
			"STATVAL" => "1", 
			"STDDEV" => "1", 
			"STDHDR" => "1", 
			"STRIP" => "1", 
			"SUBTOTAL" => "1", 
			"SWITCH" => "1", 
			"SYSINFO" => "1", 
			"SYSTEM" => "1", 
			"TALLY" => "1", 
			"TAN" => "1", 
			"TANH" => "1", 
			"TCONVERT" => "1", 
			"TEMPSTAT" => "1", 
			"TEXTFILL" => "1", 
			"THEN" => "1", 
			"THOUSANDSCHAR" => "1", 
			"THREADEXTCALL" => "1", 
			"TOD" => "1", 
			"TODAY" => "1", 
			"TOTAL" => "1", 
			"TRACE" => "1", 
			"TRACKPRG" => "1", 
			"TRANSLATE" => "1", 
			"TRANSPORT" => "1", 
			"TRAP" => "1", 
			"TRIGGERMAXDEPTH" => "1", 
			"TRIGGERSTOREOK" => "1", 
			"UNHIDE" => "1", 
			"UNIQUELINES" => "1", 
			"UNRAVEL" => "1", 
			"UPCASE" => "1", 
			"UPDATE" => "1", 
			"UPD" => "1", 
			"VALSPERPAGE" => "1", 
			"VALUES" => "1", 
			"VINTSCHED" => "1", 
			"VNF" => "1", 
			"VPMTSCHED" => "1", 
			"WATCH" => "1", 
			"WEEKDAYSNEWYEAR" => "1", 
			"WEEKOF" => "1", 
			"WHILE" => "1", 
			"WKSDATA" => "1", 
			"XABORT" => "1", 
			"XCAPORTNUMBER" => "1", 
			"XCLOSE" => "1", 
			"XOPEN" => "1", 
			"YESSPELL" => "1", 
			"YRABSTART" => "1", 
			"YYOF" => "1", 
			"ZEROROW" => "1", 
			"ZEROTOTAL" => "1", 
			"ZSPELL" => "1", 
			"ARG" => "3", 
			"ARGUMENT" => "3", 
			"BMARGIN" => "3", 
			"BOOL" => "3", 
			"BOOLEAN" => "3", 
			"DBEXTENDPATH" => "3", 
			"DBSEARCHPATH" => "3", 
			"DBTEMPPATH" => "3", 
			"DECIMALCHAR" => "3", 
			"EIFEXTENSIONPATH" => "3", 
			"EIFNAMES" => "3", 
			"EIFSHORTNAMES" => "3", 
			"EIFTYPES" => "3", 
			"EIFUPDBYTES" => "3", 
			"ERRORNAME" => "3", 
			"ERRORTEXT" => "3", 
			"INT" => "3", 
			"INTEGER" => "3", 
			"OKNULLSTATUS" => "3", 
			"PAGENUM" => "3", 
			"PAGEPRG" => "3", 
			"PAGESIZE" => "3", 
			"PAGING" => "3", 
			"PRGTRACE" => "3", 
			"SQLCODE" => "3", 
			"SQLERRM" => "3", 
			"TEXT" => "3", 
			"TMARGIN" => "3", 
			"VARIABLE" => "3", 
			"VRB" => "3", 
			"+" => "2", 
			"-" => "2", 
			"=" => "2", 
			"//" => "2", 
			"/" => "2", 
			"%" => "2", 
			"&" => "2", 
			"^" => "2", 
			"!" => "2", 
			"|" => "2", 
			":" => "2", 
			"AND" => "2", 
			"EQ" => "2", 
			"GE" => "2", 
			"GT" => "2", 
			"LE" => "2", 
			"LT" => "2", 
			"NE" => "2", 
			"NOT" => "2", 
			"OR" => "2");

// Special extensions

// Each category can specify a PHP function that returns an altered
// version of the keyword.
        
        

$this->linkscripts    	= array(
			"1" => "donothing", 
			"3" => "donothing", 
			"2" => "donothing");
}


function donothing($keywordin)
{
	return $keywordin;
}

}?>
