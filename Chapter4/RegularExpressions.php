<h1>Regular Expressions</h1>
<?php
function say($what){
	echo $what . "<br/>";
}
$romzSong = <<<Romz
	$
	This is the amazing romz song<br/>
	the romz is romz when the romz got romzromz<br/>
	then romz shoot romz's romz<br/>
	and punched his romzing romz<br/>
Romz;
say("The romz Song: ");
say($romzSong);

say(preg_match('/aeiou/', $romzSong)); // returns true if the search gets a match for aeiou
say(preg_match('/^r/', $romzSong)); // returns true if the search gets an r at the beginning of text
say(preg_match('/>$/', $romzSong)); // returns true if the search gets a > at the end of the text
say(preg_match('/^.r/', $romzSong)); // returns true if text start with a character and followed by an r
say(preg_match('/$/', $romzSong)); 

echo "<hr><h3>Character Classes</h3>";
say(preg_match('/r[aeiou]../', $romzSong)); // returns true if the search gets a match for either a,e,i,o, or u
say(preg_match('/r[^aeiou]../', $romzSong)); // returns true if the search does not get a match for either a,e,i,o, or u
say(preg_match('/[0-9]/', $romzSong)); // returns true if there is a number from 0 to 9
say(preg_match('/[a-z]/', $romzSong)); // returns true if there is a letter from a to z
say(preg_match('/[A-Z0-9]/', $romzSong)); // returns true if there is a letter from A to Z or number 0 to 9
say(preg_match('/[^.$]/', $romzSong)); // returns true if there are no words with a period or dollar sign
say(preg_match('/[$.^]/', $romzSong)); // returns all caret, period or dollar sign
say(preg_match('/[[:alpha:][:digit:]]/', $romzSong)); // returns true for a-zA-z and 0-9 the same as [:alnum:]

echo "<h5>Alternatives</h5>";
say(preg_match('/^(hot|romz)$/', $romzSong)); // returns true if there are lines with just hot or sun in it
say(preg_match('/hot|romz/', $romzSong)); // returns true if there are lines with hot or romz in it
say(preg_match('/(A-Z|0-9)$/', $romzSong)); // returns true if there are lines capital letter or number at the end

echo "<hr/><h3>Repeating Sequences</h3>";
say(preg_match('/romz?/', $romzSong)); // returns true if there is a "romz" with z repeated 0 or 1 time
say(preg_match('/romz*/', $romzSong)); // returns true if there is a "romz" with z repeated 0 or more time
say(preg_match('/romz+/', $romzSong)); // returns true if there is a "romz" with z repeated 1 or more times
say(preg_match('/(romz){2}/', $romzSong)); // returns true if there is a "romz" repeated 2 times
say(preg_match('/romz{3,15}/', $romzSong)); // returns true if there is a "romz" repeated 3 or 15 times
say(preg_match('/romz{3,}/', $romzSong));  // returns true if there is a "romz" repeated at least 3 times

echo "<hr/><h3>Subpatterns</h3>";
say(preg_match('/(romz)/', $romzSong)); // parenthesis describes a subpattern
say(preg_match('/([a-zA-Z]...)/', $romzSong, $array)); // parenthesis describes a subpattern
print_r($array);

echo "<hr/><h3>Quantifiers and Greed</h3>";
say(preg_match('/<(.*?)\/>/', $romzSong, $word)); // parenthesis describes a subpattern
print_r($word);

?>