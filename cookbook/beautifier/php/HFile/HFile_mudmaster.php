<?php
global $BEAUT_PATH;
if (!isset ($BEAUT_PATH)) return;
require_once("$BEAUT_PATH/Beautifier/HFile.php");
  class HFile_mudmaster extends HFile{
   function HFile_mudmaster(){
     $this->HFile();	
/*************************************/
// Beautifier Highlighting Configuration File 
// Mud Master Script
/*************************************/
// Flags

$this->nocase            	= "0";
$this->notrim            	= "0";
$this->perl              	= "0";

// Colours

$this->colours        	= array("blue", "brown", "gray");
$this->quotecolour       	= "blue";
$this->blockcommentcolour	= "green";
$this->linecommentcolour 	= "green";

// Indent Strings

$this->indent            	= array();
$this->unindent          	= array();

// String characters and delimiters

$this->stringchars       	= array();
$this->delimiters        	= array("#", "$", "%", "&", "+", ",", "-", ".", " ", "/", "(", ")", "0", "1", "2", "3", "4", "5", "6", "7", "8", "9", ":", ";", "<", "=", ">", "[", "\\", "]", "^", "_", "|", "~", "`", "@");
$this->escchar           	= "";

// Comment settings

$this->linecommenton     	= array("");
$this->blockcommenton    	= array("");
$this->blockcommentoff   	= array("");

// Keywords (keyword mapping to colour number)

$this->keywords          	= array(
			"action" => "1", 
			"alias" => "1", 
			"array" => "1", 
			"assign" => "1", 
			"autoaccept" => "1", 
			"barback" => "1", 
			"barfore" => "1", 
			"baritem" => "1", 
			"baritemback" => "1", 
			"baritemfore" => "1", 
			"barseparator" => "1", 
			"bell" => "1", 
			"CacheSize" => "1", 
			"call" => "1", 
			"calldll" => "1", 
			"changes" => "1", 
			"char" => "1", 
			"chat" => "1", 
			"chatall" => "1", 
			"chatback" => "1", 
			"chatcommands" => "1", 
			"chatfore" => "1", 
			"chatgroup" => "1", 
			"chatgroupremove" => "1", 
			"chatgroupset" => "1", 
			"chatignore" => "1", 
			"chatname" => "1", 
			"chatport" => "1", 
			"chatprivate" => "1", 
			"chatserve" => "1", 
			"chattransfers" => "1", 
			"chatversions" => "1", 
			"clearlist" => "1", 
			"cr" => "1", 
			"debugdepth" => "1", 
			"default" => "1", 
			"dir" => "1", 
			"disableaction" => "1", 
			"disablealias" => "1", 
			"disablebaritem" => "1", 
			"disableevent" => "1", 
			"disablegag" => "1", 
			"disablegroup" => "1", 
			"disablehighlight" => "1", 
			"disablemacro" => "1", 
			"disablesub" => "1", 
			"dll" => "1", 
			"dnd" => "1", 
			"doevents" => "1", 
			"downloadpath" => "1", 
			"echo" => "1", 
			"editaction" => "1", 
			"editalias" => "1", 
			"editbaritem" => "1", 
			"editevent" => "1", 
			"editgag" => "1", 
			"edithighlight" => "1", 
			"editmacro" => "1", 
			"editsub" => "1", 
			"edit" => "1", 
			"emote" => "1", 
			"emoteall" => "1", 
			"emotegroup" => "1", 
			"empty" => "1", 
			"enableaction" => "1", 
			"enablealias" => "1", 
			"enablebaritem" => "1", 
			"enableevent" => "1", 
			"enablegag" => "1", 
			"enablegroup" => "1", 
			"enablehighlight" => "1", 
			"enablemacro" => "1", 
			"enablesub" => "1", 
			"event" => "1", 
			"filecancel" => "1", 
			"filedelete" => "1", 
			"filestatus" => "1", 
			"fireevent" => "1", 
			"freelibrary" => "1", 
			"gag" => "1", 
			"grep" => "1", 
			"groupactions" => "1", 
			"groupaliases" => "1", 
			"grouparrays" => "1", 
			"groupbaritems" => "1", 
			"groupchat" => "1", 
			"groupemote" => "1", 
			"groupevents" => "1", 
			"grouplists" => "1", 
			"groupmacros" => "1", 
			"groupsubs" => "1", 
			"groputablist" => "1", 
			"groupvariables" => "1", 
			"help" => "1", 
			"highlight" => "1", 
			"if" => "1", 
			"ignore" => "1", 
			"ignorealiases" => "1", 
			"information" => "1", 
			"itemadd" => "1", 
			"itemdelete" => "1", 
			"killall" => "1", 
			"killgroup" => "1", 
			"listadd" => "1", 
			"listdelete" => "1", 
			"listitems" => "1", 
			"lists" => "1", 
			"loadlibrary" => "1", 
			"logpath" => "1", 
			"logstatus" => "1", 
			"loop" => "1", 
			"macro" => "1", 
			"math" => "1", 
			"message" => "1", 
			"msp" => "1", 
			"nodefault" => "1", 
			"openport" => "1", 
			"pace" => "1", 
			"pause" => "1", 
			"peekconnections" => "1", 
			"ping" => "1", 
			"playmidi" => "1", 
			"playwav" => "1", 
			"presubstitute" => "1", 
			"promptoverwrite" => "1", 
			"read" => "1", 
			"remark" => "1", 
			"requestconnects" => "1", 
			"resetevent" => "1", 
			"savescrollback" => "1", 
			"scriptpath" => "1", 
			"sendaction" => "1", 
			"sendalias" => "1", 
			"sendarray" => "1", 
			"sendbaritem" => "1", 
			"sendevent" => "1", 
			"sendfile" => "1", 
			"sendgag" => "1", 
			"sendgroup" => "1", 
			"sendhighlight" => "1", 
			"sendlist" => "1", 
			"sendmacro" => "1", 
			"sendsub" => "1", 
			"sendvariable" => "1", 
			"session" => "1", 
			"sessionaddress" => "1", 
			"sessionname" => "1", 
			"sessionpath" => "1", 
			"sessionport" => "1", 
			"setbackcolor" => "1", 
			"setCWD" => "1", 
			"seteventtime" => "1", 
			"setforecolor" => "1", 
			"setIP" => "1", 
			"showme" => "1", 
			"showmismatcherrors" => "1", 
			"snoop" => "1", 
			"soundpath" => "1", 
			"speedwalk" => "1", 
			"startchatserver" => "1", 
			"suball" => "1", 
			"substitute" => "1", 
			"subword" => "1", 
			"tabadd" => "1", 
			"tabdelete" => "1", 
			"tablist" => "1", 
			"textin" => "1", 
			"unaction" => "1", 
			"unalias" => "1", 
			"unarray" => "1", 
			"unbaritem" => "1", 
			"unchat" => "1", 
			"undo" => "1", 
			"unevent" => "1", 
			"ungag" => "1", 
			"unhighlight" => "1", 
			"unmacro" => "1", 
			"unsubstitute" => "1", 
			"unvariable" => "1", 
			"updatebaritem" => "1", 
			"updatestatusbar" => "1", 
			"uploadpath" => "1", 
			"variable" => "1", 
			"version" => "1", 
			"volumebits" => "1", 
			"volumedefault" => "1", 
			"volumemax" => "1", 
			"while" => "1", 
			"write" => "1", 
			"writegroup" => "1", 
			"zap" => "1", 
			"Abs" => "4", 
			"AnsiBold" => "4", 
			"AnsiReset" => "4", 
			"Asc" => "4", 
			"BackBlack" => "4", 
			"BackCyan" => "4", 
			"BackGreen" => "4", 
			"BackMagenta" => "4", 
			"BackRed" => "4", 
			"BackWhite" => "4", 
			"BackYellow" => "4", 
			"CharColor" => "4", 
			"Chr" => "4", 
			"CommandCount" => "4", 
			"CommandToList" => "4", 
			"ConCat" => "4", 
			"Connected" => "4", 
			"CWD" => "4", 
			"Day" => "4", 
			"EventTime" => "4", 
			"Exists" => "4", 
			"FileExists" => "4", 
			"ForeBlack" => "4", 
			"ForeCyan" => "4", 
			"ForeGreen" => "4", 
			"ForeMagenta" => "4", 
			"ForeRed" => "4", 
			"ForeWhite" => "4", 
			"ForeYellow" => "4", 
			"GetCount" => "4", 
			"GetArray" => "4", 
			"GetItem" => "4", 
			"Hour" => "4", 
			"InList" => "4", 
			"IP" => "4", 
			"IPP" => "4", 
			"IsEmpty" => "4", 
			"IsNumber" => "4", 
			"Left" => "4", 
			"Len" => "4", 
			"Lower" => "4", 
			"LTrim" => "4", 
			"Math" => "4", 
			"Mid" => "4", 
			"Minute" => "4", 
			"Month" => "4", 
			"NumActions" => "4", 
			"NumAliases" => "4", 
			"NumArrays" => "4", 
			"NumBars" => "4", 
			"NumEvents" => "4", 
			"NumGags" => "4", 
			"NumHighlights" => "4", 
			"NumLists" => "4", 
			"NumMacros" => "4", 
			"NumTabs" => "4", 
			"NumSubstitutes" => "4", 
			"NumVars" => "4", 
			"PadLeft" => "4", 
			"PadRight" => "4", 
			"PreTranslate" => "4", 
			"ProcedureCount" => "4", 
			"Random" => "4", 
			"ReadableTime" => "4", 
			"Right" => "4", 
			"RTrim" => "4", 
			"Second" => "4", 
			"StripAnsi" => "4", 
			"StrStr" => "4", 
			"TextColor" => "4", 
			"Time" => "4", 
			"TimeToDay" => "4", 
			"TimeToDayOfWeek" => "4", 
			"TimeToHour" => "4", 
			"TimeToMinute" => "4", 
			"TimeToMonth" => "4", 
			"TimeToSecond" => "4", 
			"TimeToYear" => "4", 
			"Upper" => "4", 
			"Val" => "4", 
			"Var" => "4", 
			"Version" => "4", 
			"Word" => "4", 
			"WordColor" => "4", 
			"WordCount" => "4", 
			"Year" => "4", 
			"@" => "4", 
			"-" => "3", 
			"+" => "3", 
			"=" => "3", 
			"$" => "3");

// Special extensions

// Each category can specify a PHP function that returns an altered
// version of the keyword.
        
        

$this->linkscripts    	= array(
			"1" => "donothing", 
			"4" => "donothing", 
			"3" => "donothing");
}


function donothing($keywordin)
{
	return $keywordin;
}

}?>
