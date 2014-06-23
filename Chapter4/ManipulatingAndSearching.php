<?php
function say($something = NULL){
	echo $something . "<br/>";	
}
echo "<h1>Manipulating and Searching Strings</h1><hr/>
<h3>Substrings</h3>";
// substr()
$name = "Romz Vargas";
say("My first name is " . substr($name, 0, 4));
say("My last name is " . substr($name, 5));
// substr_count()
$romzSong = <<< Romz
	This is the romz amazing romz<br/>
	romz the romz in romz is romz<br/>
	romz can romz around the romz<br/>
	and kick your romzing romz
Romz;
$numRomz = substr_count($romzSong, "romz");
say();
say($romzSong);
say("<u>\"romz\" is called $numRomz times in the romz song</u>");
say();
// substr_replace()
$original = "Boom Panes";
say("Original text is $original");
say("New text is " . substr_replace($original, "Panot", 5, 5));
/*-------------------------------------------------------------------------*/
echo "<hr/><h3>Miscellaneous String Functions</h3>";
// strrev()
	say("strrev() of $original is " . strrev($original));
// str_repeat()	
	say("str_repeat() of $original is " . str_repeat($original . " ", 2));
// str_pad()
	$padded = str_pad($original, 100, ' . ');
	say("[{$padded}]");
	$padded = str_pad($original, 100, '&nbsp', STR_PAD_LEFT);
	say("[{$padded}]");
	$padded = str_pad($original, 100, '-', STR_PAD_RIGHT);
	say("[{$padded}]");
	$padded = str_pad($original, 100, '.-', STR_PAD_BOTH);
	say("[{$padded}]");
/*-------------------------------------------------------------------------*/
echo "<hr/><h3>Decomposing a String</h3>";
$orig_string = "www.romz.facebook.com";
// explode()
	echo "<h5>explode()</h5>";
	say("Original String is $orig_string");
	$exploded = explode('.',$orig_string, 3);
	say("explode($orig_string, '.', 3) contains :");
	foreach ($exploded as $rec){
		say($rec);
	}
//implode()
	echo "<h5>implode()</h5>";
	say("implode(\$exploded) is now " . implode('.',$exploded));
// join()
	echo "<h5>join()</h5>";
	say("join(\$exploded) is now " . join('.',$exploded));
// strtok()
	echo "<h5>strtok()</h5>";
	$token = strtok($orig_string, '.');
	while($token !== false){
		say($token);
		$token = strtok('.');
	}
/*-------------------------------------------------------------------------*/
echo "<hr/><h3>String Searching Functions</h3>";
// strpos() and strrpos()
	echo "<h5>strpos() and strrpos()</h5>";
	$firstromz = strpos($romzSong,"romz");
	$lastromz = strrpos($romzSong,"romz");
	say("The first romz in the romz song is in position $firstromz");
	say("The last romz in the romz song is in position $lastromz");

// strstr()
	echo "<h5>strstr()</h5>";
	$restFromRomz = strstr($romzSong,'romz');
	say($restFromRomz);
	say();
// stristr() same as strstr() but case-INsensitive
	echo "<h5>stristr()</h5>";
	$stristr = stristr($romzSong,'romz');
	say($stristr);
	say();
// strchr()	same as strstr()
	echo "<h5>strchr()</h5>";
	$strchr = strchr($romzSong,'romz');
	say($strchr);
	say();
// strrchr() find last occurrence of a character
	echo "<h5>strrchr()</h5>";
	$strrchr = strrchr($romzSong,'romz');
	say($strrchr);
	say();
// strspn() tells how much of the start of the string is composed of the characters
	echo "<h5>strspn()</h5>";
	$strspn = strspn($romzSong,'romz');
	say($strspn);
	say();
// strcspn() tells how much of the start of the string is not composed of the characters
	echo "<h5>strcspn()</h5>";
	$strcspn = strcspn($romzSong,'romz');
	say($strcspn);	
/*-------------------------------------------------------------------------*/
echo "<hr/><h3>Decomposing URLs</h3>";
	$parse_array = parse_url('http://www.facebook.com');
	print_r($parse_array);
?>