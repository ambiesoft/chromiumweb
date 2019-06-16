<?php
global $BEAUT_PATH;
if (!isset ($BEAUT_PATH)) return;
require_once("$BEAUT_PATH/Beautifier/HFile.php");
  class HFile_plsql extends HFile{
   function HFile_plsql(){
     $this->HFile();	
/*************************************/
// Beautifier Highlighting Configuration File 
// PL/SQL
/*************************************/
// Flags

$this->nocase            	= "1";
$this->notrim            	= "0";
$this->perl              	= "0";

// Colours

$this->colours        	= array("blue", "purple", "brown", "blue", "purple", "gray");
$this->quotecolour       	= "blue";
$this->blockcommentcolour	= "green";
$this->linecommentcolour 	= "green";

// Indent Strings

$this->indent            	= array();
$this->unindent          	= array();

// String characters and delimiters

$this->stringchars       	= array();
$this->delimiters        	= array("~", "!", "%", "@", "^", "&", "*", "(", ")", "-", "+", "=", "|", "\\", "/", "{", "}", "[", "]", ":", ";", "\"", "'", "<", ">", " ", ",", "	", ".", "?");
$this->escchar           	= "";

// Comment settings

$this->linecommenton     	= array("--");
$this->blockcommenton    	= array("/*");
$this->blockcommentoff   	= array("*/");

// Keywords (keyword mapping to colour number)

$this->keywords          	= array(
			"ABORT" => "1", 
			"ACCEPT" => "1", 
			"ACCESS" => "1", 
			"ADD" => "1", 
			"ALL" => "1", 
			"ALTER" => "1", 
			"AND" => "1", 
			"ANY" => "1", 
			"ARRAY" => "1", 
			"ARRAYLEN" => "1", 
			"AS" => "1", 
			"ASC" => "1", 
			"ASSERT" => "1", 
			"ASSIGN" => "1", 
			"AT" => "1", 
			"AUDIT" => "1", 
			"AUTHORIZATION" => "1", 
			"AVG" => "1", 
			"BASE_TABLE" => "1", 
			"BEGIN" => "1", 
			"BETWEEN" => "1", 
			"BINARY_INTEGER" => "1", 
			"BODY" => "1", 
			"BOOLEAN" => "1", 
			"BY" => "1", 
			"CASE" => "1", 
			"CHAR" => "1", 
			"CHAR_BASE" => "1", 
			"CHECK" => "1", 
			"CLOSE" => "1", 
			"CLUSTER" => "1", 
			"CLUSTERS" => "1", 
			"COLAUTH" => "1", 
			"COLUMN" => "1", 
			"COMMENT" => "1", 
			"COMMIT" => "1", 
			"COMPRESS" => "1", 
			"CONNECT" => "1", 
			"CONSTANT" => "1", 
			"CRASH" => "1", 
			"CREATE" => "1", 
			"CURRENT" => "1", 
			"CURRVAL" => "1", 
			"CURSOR" => "1", 
			"DATABASE" => "1", 
			"DATA_BASE" => "1", 
			"DATE" => "1", 
			"DBA" => "1", 
			"DEBUGOFF" => "1", 
			"DEBUGON" => "1", 
			"DECLARE" => "1", 
			"DECIMAL" => "1", 
			"DEFAULT" => "1", 
			"DEFINITION" => "1", 
			"DELAY" => "1", 
			"DELETE" => "1", 
			"DESC" => "1", 
			"DIGITS" => "1", 
			"DISPOSE" => "1", 
			"DISTINCT" => "1", 
			"DO" => "1", 
			"DROP" => "1", 
			"ELSE" => "1", 
			"ELSIF" => "1", 
			"END" => "1", 
			"ENTRY" => "1", 
			"EXCEPTION" => "1", 
			"EXCEPTION_INIT" => "1", 
			"EXCLUSIVE" => "1", 
			"EXISTS" => "1", 
			"EXIT" => "1", 
			"FALSE" => "1", 
			"FETCH" => "1", 
			"FILE" => "1", 
			"FLOAT" => "1", 
			"FOR" => "6", 
			"FORM" => "1", 
			"FROM" => "1", 
			"FUNCTION" => "1", 
			"GENERIC" => "1", 
			"GOTO" => "1", 
			"GRANT" => "4", 
			"GROUP" => "1", 
			"HAVING" => "1", 
			"IDENTIFIED" => "1", 
			"IF" => "1", 
			"IMMEDIATE" => "1", 
			"IN" => "1", 
			"INCREMENT" => "1", 
			"INDEX" => "1", 
			"INDEXES" => "1", 
			"INDICATOR" => "1", 
			"INITIAL" => "1", 
			"INSERT" => "1", 
			"INTEGER" => "1", 
			"INTERFACE" => "1", 
			"INTERSECT" => "1", 
			"INTO" => "1", 
			"IS" => "1", 
			"LEVEL" => "1", 
			"LIKE" => "1", 
			"LIMITED" => "1", 
			"LOCK" => "1", 
			"LONG" => "1", 
			"LOOP" => "1", 
			"MAX" => "1", 
			"MAXEXTENTS" => "1", 
			"MIN" => "1", 
			"MINEXTENTS" => "1", 
			"MINUS" => "1", 
			"MISLABEL" => "1", 
			"MOD" => "5", 
			"MODE" => "1", 
			"NATURAL" => "1", 
			"NATURALN" => "1", 
			"NEW" => "1", 
			"NEXTVAL" => "1", 
			"NOAUDIT" => "1", 
			"NOCOMPRESS" => "1", 
			"NOLOGGING" => "1", 
			"NOT" => "1", 
			"NOWAIT" => "1", 
			"NULL" => "1", 
			"NUMBER" => "1", 
			"NUMBER_BASE" => "1", 
			"OF" => "1", 
			"OFFLINE" => "1", 
			"ON" => "1", 
			"ONLINE" => "1", 
			"OPEN" => "1", 
			"OPTION" => "1", 
			"OR" => "1", 
			"ORDER" => "1", 
			"OTHERS" => "1", 
			"OUT" => "1", 
			"PACKAGE" => "1", 
			"PARTITION" => "1", 
			"PCTFREE" => "1", 
			"PCTUSED" => "1", 
			"PLS_INTEGER" => "1", 
			"POSITIVE" => "1", 
			"POSITIVEN" => "1", 
			"PRAGMA" => "1", 
			"PRIOR" => "1", 
			"PRIVATE" => "1", 
			"PRIVILEGES" => "1", 
			"PROCEDURE" => "1", 
			"PUBLIC" => "1", 
			"RAISE" => "1", 
			"RANGE" => "1", 
			"RAW" => "1", 
			"REAL" => "1", 
			"RECORD" => "1", 
			"REF" => "1", 
			"RELEASE" => "1", 
			"REMR" => "1", 
			"RENAME" => "1", 
			"RESOURCE" => "1", 
			"RETURN" => "1", 
			"REVERSE" => "1", 
			"REVOKE" => "1", 
			"ROLLBACK" => "1", 
			"ROW" => "1", 
			"ROWID" => "1", 
			"ROWLABEL" => "1", 
			"ROWNUM" => "1", 
			"ROWS" => "1", 
			"ROWTYPE" => "1", 
			"RUN" => "4", 
			"SAVEPOINT" => "1", 
			"SCHEMA" => "1", 
			"SELECT" => "1", 
			"SEPARATE" => "1", 
			"SESSION" => "1", 
			"SET" => "1", 
			"SHARE" => "1", 
			"SMALLINT" => "1", 
			"SPACE" => "1", 
			"SQL" => "1", 
			"SQLCODE" => "1", 
			"SQLERRM" => "1", 
			"START" => "4", 
			"STATEMENT" => "1", 
			"STDDEV" => "1", 
			"SUBTYPE" => "1", 
			"SUCCESSFUL" => "1", 
			"SUM" => "1", 
			"SYNONYM" => "1", 
			"SYSDATE" => "1", 
			"TABAUTH" => "1", 
			"TABLE" => "1", 
			"TABLES" => "1", 
			"TASK" => "1", 
			"TERMINATE" => "1", 
			"THEN" => "1", 
			"TO" => "1", 
			"TRIGGER" => "1", 
			"TRUE" => "1", 
			"TYPE" => "1", 
			"UID" => "1", 
			"UNION" => "1", 
			"UNIQUE" => "1", 
			"UPDATE" => "1", 
			"USE" => "1", 
			"USER" => "1", 
			"VALIDATE" => "1", 
			"VALUES" => "1", 
			"VARCHAR" => "1", 
			"VARCHAR2" => "1", 
			"VARIANCE" => "1", 
			"VIEW" => "1", 
			"VIEWS" => "1", 
			"WHEN" => "6", 
			"WHENEVER" => "1", 
			"WHERE" => "6", 
			"WHILE" => "6", 
			"WITH" => "1", 
			"WORK" => "1", 
			"WRITE" => "1", 
			"XOR" => "1", 
			"DBMS_OUTPUT" => "2", 
			"DBMS_JOB" => "2", 
			"DBMS_SQL" => "2", 
			"BIND_VARIABLE" => "3", 
			"BIND_VARIABLE_CHAR" => "3", 
			"BIND_VARIABLE_RAW" => "3", 
			"BIND_VARIABLE_ROWID" => "3", 
			"BROKEN" => "3", 
			"CHANGE" => "3", 
			"CLOSE_CURSOR" => "3", 
			"COLUMN_VALUE" => "3", 
			"COLUMN_VALUE_CHAR" => "3", 
			"COLUMN_VALUE_RAW" => "3", 
			"COLUMN_VALUE_ROWID" => "3", 
			"DEFINE_COLUMN" => "3", 
			"DEFINE_COLUMN_CHAR" => "3", 
			"DEFINE_COLUMN_RAW" => "3", 
			"DEFINE_COLUMN_ROWID" => "3", 
			"DISABLE" => "3", 
			"ENABLE" => "3", 
			"EXECUTE" => "4", 
			"EXECUTE_AND_FETCH" => "3", 
			"FETCH_ROWS" => "3", 
			"GET_LINE" => "3", 
			"GET_LINES" => "3", 
			"INTERVAL" => "3", 
			"IS_OPEN" => "3", 
			"LAST_ERROR_POSITION" => "3", 
			"LAST_ROW_COUNT" => "3", 
			"LAST_ROW_ID" => "3", 
			"LAST_SQL_FUNCTION_CODE" => "3", 
			"NEW_LINE" => "3", 
			"NEXT_DATE" => "3", 
			"PARSE" => "3", 
			"PUT" => "3", 
			"PUT_LINE" => "3", 
			"REMOVE" => "3", 
			"SUBMIT" => "3", 
			"WHAT" => "3", 
			"REPLACE" => "5", 
			"ABS" => "5", 
			"ADD_MONTHS" => "5", 
			"ASCII" => "5", 
			"CEIL" => "5", 
			"CHR" => "5", 
			"CONCAT" => "5", 
			"CONVERT" => "5", 
			"COS" => "5", 
			"COSH" => "5", 
			"DECODE" => "5", 
			"EXP" => "5", 
			"FLOOR" => "5", 
			"GREATEST" => "5", 
			"HEXTORAW" => "5", 
			"INITCAP" => "5", 
			"INSTR" => "5", 
			"LAST_DAY" => "5", 
			"LENGTH" => "5", 
			"LN" => "5", 
			"LOG" => "5", 
			"LOWER" => "5", 
			"LPAD" => "5", 
			"LTRIM" => "5", 
			"MONTHS_BETWEEN" => "5", 
			"NEXT_DAY" => "5", 
			"NEW_TIME" => "5", 
			"NLS_INITCAP" => "5", 
			"NLS_LOWER" => "5", 
			"NLS_UPPER" => "5", 
			"NVL" => "5", 
			"POWER" => "5", 
			"RAWTOHEX" => "5", 
			"ROUND" => "5", 
			"ROWIDTOCHAR" => "5", 
			"RPAD" => "5", 
			"RTRIM" => "5", 
			"SIGN" => "5", 
			"SIN" => "5", 
			"SINH" => "5", 
			"SOUNDEX" => "5", 
			"SQRT" => "5", 
			"SUBSTR" => "5", 
			"SUBSTRB" => "5", 
			"TAN" => "5", 
			"TANH" => "5", 
			"TO_CHAR" => "5", 
			"TO_DATE" => "5", 
			"TO_LABEL" => "5", 
			"TO_MULTI_BYTE" => "5", 
			"TO_NUMBER" => "5", 
			"TO_SINGLE_TYPE" => "5", 
			"TRANSLATE" => "5", 
			"TRUNC" => "5", 
			"UPPER" => "5", 
			"USERENV" => "5", 
			"VSIZE" => "5", 
			"BEFORE" => "6", 
			"EACH" => "6", 
			"KEY" => "6", 
			"PRIMARY" => "6");

// Special extensions

// Each category can specify a PHP function that returns an altered
// version of the keyword.
        
        

$this->linkscripts    	= array(
			"1" => "donothing", 
			"6" => "donothing", 
			"4" => "donothing", 
			"5" => "donothing", 
			"2" => "donothing", 
			"3" => "donothing");
}


function donothing($keywordin)
{
	return $keywordin;
}

}?>
