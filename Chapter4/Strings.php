<?php
function say($what = NULL){
	echo $what . "<br/>";
}
echo "<h1>Strings</h1><hr/>
<h3>Quoting String Constants</h3>";
$a = "Romz";
say("$a is interpolated directly");
say("{$a} is interpolated with curly braces");
$b = <<<Romzsays
<br/>
The words typed here<br/>
are created using the<br/>
Here Documents<br/>
Romzsays;
say($b);
print($a); // takes only one argument
print($b); // passes that argument to the browser
printf('%.2f',12.13541);
say();
printf('%03.2d', 7.123);
say();
/*----------------------------------------------------------------*/
echo "<hr/><h3>print_r</h3>";
$anArray = array(1,2,4,5,6,7);
	print_r($anArray);
say();
	print_r(true);
say();
	print_r(false);
say();
	print_r(null);
/*----------------------------------------------------------------*/
echo "<hr/><h3>var_dump</h3>";

	var_dump($anArray);
say();
	var_dump(true);
say();
	var_dump(false);
say();
	var_dump(null);
/*----------------------------------------------------------------*/
echo "<hr/><h3>Accessing Individual Characters</h3>";
for($i=0 ; $i<strlen($a) ; $i++){
	printf('The %dth letter is %s <br/>', $i, $a{$i});
}
/*----------------------------------------------------------------*/
echo "<hr/><h3>Cleaning Strings</h3>";
say(trim($b)); // not really seen but this removes whitespace in the beginning and end of a string
say(ltrim($b)); // not really seen but this removes whitespace in the beginning of a string
say(rtrim($b)); // not really seen but this removes whitespace in the end of a string
/*----------------------------------------------------------------*/
echo "<hr/><h3>Changing Case</h3>";
$c = "romz vargas";
say(strtolower($c)); // makes string all lower case
say(strtoupper($c)); // all upper case
say(ucfirst($c)); // first letter of the string is upper
say(ucwords($c)); // first letter of every word is upper
/*----------------------------------------------------------------*/
echo "<hr/><h3>Encoding and Escaping</h3>";
$d = <<<Romzsays
	this
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br/>
	<u>'sentence'</u>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br/>
	<b>"has"</b>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br/>
	whitespaces
Romzsays;
$double_quotes = strip_tags($d);
say($d);
say($double_quotes);
/*----------------------------------------------------------------*/
echo("<hr><h3>The translation table used by htmlentities()</h3>");
$table = get_html_translation_table(HTML_ENTITIES);
foreach ($table as $rec){
	say ($rec);	
}
/*----------------------------------------------------------------*/
echo("<hr><h3>The translation table used by htmlspecialchars()</h3>");
$table = get_html_translation_table(HTML_SPECIALCHARS);
foreach ($table as $rec){
	say ($rec);	
}
/*----------------------------------------------------------------*/
echo("<hr><h3>The meta tags used by 'http://www.facebook.com'</h3>");
$meta_tags = get_meta_tags('http://www.facebook.com');
foreach ($meta_tags as $tags){
	say($tags);
}
/*----------------------------------------------------------------*/
echo("<hr><h3>RAW Encoded and Decoded form of 'http://www.facebook.com'</h3>");
$encoded = rawurlencode('http://www.facebook.com');
$decoded = rawurldecode($encoded);
say($encoded);
say($decoded);
/*----------------------------------------------------------------*/
echo("<hr><h3>URL Encoded and Decoded</h3>");
$baseURL = 'http://www.google.com/search=';
$whatToSearch = '"Cats and Dogs" are fighting everytime';
$urlNOW = $baseURL . urlencode($whatToSearch);
$urlDECODE = urldecode($urlNOW);
say("\$baseURL is <u>{$baseURL}</u>");
say("\$whatToSearch is <u>{$whatToSearch}</u>");
say("Encoded URL is <u>" . $urlNOW . "</u>");
say("Decoded URL is <u>" . $urlDECODE . "</u>");
/*----------------------------------------------------------------*/
echo("<hr><h3>addslashes and stripslashes</h3>");
$statement = "This\\ is full \\ of \ \\ \ backslashes \\";
say($statement);
say("<b>addslashes()</b> is used --> " . addslashes($statement));
say("<b>stripslashes()</b> is used --> " . stripslashes($statement));
/*----------------------------------------------------------------*/
echo("<hr><h3>Comparing Strings</h3>");
	echo "<h5>Using Comparison Operators</h5>";
		$str1 = "Boom";
		$str2 = "Panes";
		$str3 = "bOoM1";
		$str4 = "pAnES1";
		$strnum1 = 3;
		$strnum2 = "3";

		say($strnum1 == $strnum2 ? 
		"$strnum1 == $strnum2 is TRUE" :
		"$strnum1 == $strnum2 is FALSE");
		say($strnum1 === $strnum2 ? 
		"$strnum1 === $strnum2 is TRUE" :
		"$strnum1 === $strnum2 is FALSE");

		say();
		say($str1 <= $str2 ? 
		"$str1 <= $str2 is TRUE" :
		"$str1 <= $str2 is FALSE");	// checks first letter of the strings
		say($str1 >= $str2 ? 
		"$str1 >= $str2 is TRUE" :
		"$str1 >= $str2 is FALSE"); // compares the letters if they are greater or less than

		say();
		say($str1 <= $strnum2 ? 
		"$str1 <= $strnum2 is TRUE" :
		"$str1 <= $strnum2 is FALSE");	// gives unexpected results
		say($strnum1 >= $str2 ? 
		"$strnum1 >= $str2 is TRUE" :
		"$strnum1 >= $str2 is FALSE");	// due to comparing string and int

		say();
		say("The strcmp() of $str1 and $str2 is " . strcmp($str1, $str2));	// returns a negative number if the first letter of the first word is less than the 2nd word
		say("The strcasecmp() of $str2 and $str1 is " . strcasecmp($str2, $str1));	// that number indicates the number of places in between the first word of the two strings

		say();
		say("The strncmp() of $str1 and $str3 is " . strncmp($str1, $str3, 7));	// same as strcmp() but Case sensitive and up to the 3rd argument's character
		say("The strncasecmp() of $str2 and $str4 is " . strncasecmp($str2, $str4, 7));	// that number indicates the number of places in between the first word of the two strings

	echo "<h5>Approximate Equality</h5>";
	$sound1 = "Rows";
	$sound2 = "Rose";
	
	say((soundex($sound1) == soundex($sound2))?
		"The soundex() of $sound1 and $sound2 are the same"
		: "The soundex() of $sound1 and $sound2 are not the same");	
	
	say((metaphone($sound1) == metaphone($sound2))?
		"The metaphone() of $sound1 and $sound2 are the same"
		: "The metaphone() of $sound1 and $sound2 are not the same");	
	
	$similar_text = similar_text($sound1, $sound2, $percent);
	say("$sound1 and $sound2 have $similar_text characters in common which is $percent%");

	say("$sound1 and $sound2 have a similarity of " . levenshtein($sound1, $sound2) . " characters");
?>