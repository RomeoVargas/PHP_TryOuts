<h1>Regular Expressions</h1>
<?php
function say($what = NULL){
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
/*----------------------------------------------------------------------------------------------------------------------------*/
	say(preg_match('/aeiou/', $romzSong)); // returns true if the search gets a match for aeiou
	say(preg_match('/^r/', $romzSong)); // returns true if the search gets an r at the beginning of text
	say(preg_match('/>$/', $romzSong)); // returns true if the search gets a > at the end of the text
	say(preg_match('/^.r/', $romzSong)); // returns true if text start with a character and followed by an r
	say(preg_match('/$/', $romzSong)); 
/*----------------------------------------------------------------------------------------------------------------------------*/
	echo "<hr><h3>Character Classes</h3>";
	say(preg_match('/r[aeiou]../', $romzSong)); // returns true if the search gets a match for either a,e,i,o, or u
	say(preg_match('/r[^aeiou]../', $romzSong)); // returns true if the search does not get a match for either a,e,i,o, or u
	say(preg_match('/[0-9]/', $romzSong)); // returns true if there is a number from 0 to 9
	say(preg_match('/[a-z]/', $romzSong)); // returns true if there is a letter from a to z
	say(preg_match('/[A-Z0-9]/', $romzSong)); // returns true if there is a letter from A to Z or number 0 to 9
	say(preg_match('/[^.$]/', $romzSong)); // returns true if there are no words with a period or dollar sign
	say(preg_match('/[$.^]/', $romzSong)); // returns all caret, period or dollar sign
	say(preg_match('/[[:alpha:][:digit:]]/', $romzSong)); // returns true for a-zA-z and 0-9 the same as [:alnum:]
/*----------------------------------------------------------------------------------------------------------------------------*/
	echo "<h5>Alternatives</h5>";
	say(preg_match('/^(hot|romz)$/', $romzSong)); // returns true if there are lines with just hot or sun in it
	say(preg_match('/hot|romz/', $romzSong)); // returns true if there are lines with hot or romz in it
	say(preg_match('/(A-Z|0-9)$/', $romzSong)); // returns true if there are lines capital letter or number at the end
/*----------------------------------------------------------------------------------------------------------------------------*/
	echo "<hr/><h3>Repeating Sequences</h3>";
	say(preg_match('/romz?/', $romzSong)); // returns true if there is a "romz" with z repeated 0 or 1 time
	say(preg_match('/romz*/', $romzSong)); // returns true if there is a "romz" with z repeated 0 or more time
	say(preg_match('/romz+/', $romzSong)); // returns true if there is a "romz" with z repeated 1 or more times
	say(preg_match('/(romz){2}/', $romzSong)); // returns true if there is a "romz" repeated 2 times
	say(preg_match('/romz{3,15}/', $romzSong)); // returns true if there is a "romz" repeated 3 or 15 times
	say(preg_match('/romz{3,}/', $romzSong));  // returns true if there is a "romz" repeated at least 3 times
/*----------------------------------------------------------------------------------------------------------------------------*/
	echo "<hr/><h3>Subpatterns</h3>";
	say(preg_match('/(romz)/', $romzSong)); // parenthesis describes a subpattern
	say(preg_match('/([a-zA-Z]...)/', $romzSong, $array)); // parenthesis describes a subpattern
	print_r($array);
/*----------------------------------------------------------------------------------------------------------------------------*/
	echo "<hr/><h3>Quantifiers and Greed</h3>";
	say(preg_match('/<(.*?)\/>/', $romzSong, $word)); // adding a ? at the end of a quantifier search for a word instead a whole line
	print_r($word);
/*----------------------------------------------------------------------------------------------------------------------------*/
	echo "<hr/><h3>Noncapturing Groups</h3>";
	say(preg_match('/(?:romz)(.*)/', $romzSong, $word)); // using the ?: syntax makes the array capture the complement of the pattern after :?
	print_r($word);
/*----------------------------------------------------------------------------------------------------------------------------*/
	echo "<hr/><h3>Backreferences</h3>";
	say(preg_match('/(romz)*\1/', $romzSong, $word)); // uses the \number pattern to backreference
	print_r($word);
/*----------------------------------------------------------------------------------------------------------------------------*/
	echo "<hr/><h3>Trailing Options</h3>";
	say(preg_match('/(ROMZ)*\1/i', $romzSong, $word)); // /i flag makes the search case-sensitive
	print_r($word);
	say();
	say(preg_match('/(ROMZ)*\1/s', $romzSong)); // /s flag makes the . pertain to any character including \n
	say(preg_match('/(ROMZ)*\1/x', $romzSong)); // /x flag remove whitespaces and comments from the pattern
	say(preg_match('/(ROMZ)*\1/m', $romzSong)); // /m flag makes the caret(^) match after and ($) match before the newline(\n)
	say(preg_match('/(ROMZ)*\1/e', $romzSong)); // /e flag makes the replacement string(PHP codes) turn into an actual replacement string via eval()
	say(preg_match('/(ROMZ)*\1/U', $romzSong)); // /U flag makes the * and + match as little as possible --> it will now be the same as *? and +?
	say(preg_match('/(ROMZ)*\1/u', $romzSong)); // /u flag makes the pattern treated as UTF-8
	say(preg_match('/(ROMZ)*\1/X', $romzSong)); // /X flag causes a backslash followed by a character with no meaning emit an error
	say(preg_match('/(ROMZ)*\1/A', $romzSong)); // /A flag makes the string anchored as if the start of the pattern is (^)
	say(preg_match('/(ROMZ)*\1/D', $romzSong)); // /D flag causes the $ to match only the end of the line
	say(preg_match('/(ROMZ)*\1/S', $romzSong)); // /S flag causes the expression parser to carefully examine the structure of the pattern
/*----------------------------------------------------------------------------------------------------------------------------*/
	echo "<hr/><h3>Inline Options</h3>";
	say(preg_match('/(?i:(ROMZ)*\1)/', $romzSong, $word)); // same as before but uses ? to indicate the flag and : for the subpattern
	print_r($word);
	say();
	say(preg_match('/(?-i:(ROMZ)*\1)/', $romzSong, $word)); // - turns the flag off
	print_r($word);
/*----------------------------------------------------------------------------------------------------------------------------*/
	echo "<hr/><h3>Lookahead and Lookbehind</h3>";
$input = <<< input
name = 'Tim O\'Reilly';
input;
say("Input is : {$input}");
$neg_lookbehind = <<< pattern
'	# opening quote
	(	# begin capturing
		.*?		# the string
		(?<! \\\\) 	# skip escaped quotes -- negative lookbehind the preceding text must not be like this
	)	# end capturing
'	# closing quote
pattern;

$pos_lookbehind = <<< pattern
'	# opening quote
	(	# begin capturing
		.*?		# the string
		(?<= \\\\) 	# skip escaped quotes -- positive lookbehind the preceding text must be like this
	)	# end capturing
'	# closing quote
pattern;

$neg_lookahead = <<< pattern
'	# opening quote
	(	# begin capturing
		.*?		# the string
		(?! \\\\) 	# skip escaped quotes -- negative lookahead the next text must not be like this
	)	# end capturing
'	# closing quote
pattern;

$pos_lookahead = <<< pattern
'	# opening quote
	(	# begin capturing
		.*?		# the string
		(?= \\\\) 	# skip escaped quotes -- positive lookahead the next text must be like this
	)	# end capturing
'	# closing quote
pattern;
	say (preg_match( "($neg_lookbehind)x", $input, $match)
		?"(neg_lookbehind)x of \"$input\" is {$match[1]}"
		:"There is no match for (neg_lookbehind)x of \"$input\"");
say();
	say (preg_match( "($pos_lookbehind)x", $input, $match)
		?"(pos_lookbehind)x of \"$input\" is {$match[1]}"
		:"There is no match for (pos_lookbehind)x of \"$input\"");
say();
	say (preg_match( "($neg_lookahead)x", $input, $match)
		?"(neg_lookahead)x of \"$input\" is {$match[1]}"
		:"There is no match for (neg_lookahead)x of \"$input\"");
say();
	say (preg_match( "($pos_lookahead)x", $input, $match)
		?"(pos_lookahead)x of \"$input\" is {$match[1]}"
		:"There is no match for (pos_lookahead)x of \"$input\"");
/*----------------------------------------------------------------------------------------------------------------------------*/
	echo "<hr/><h3>Functions</h3>";
		echo "<h5>Matching</h5>";
$string = <<< END
13 dogs<br/>
12 rabbits<br/>
8 cows<br/>
1 goat<br/>
END;
	preg_match_all('/(\d+) (\S+)/', $string, $m1, PREG_PATTERN_ORDER);
	preg_match_all('/(\d+) (\S+)/', $string, $m2, PREG_SET_ORDER);
	print_r($m1);
	say();
	print_r($m2);

	echo "<h5>Replacing</h5>";
	say(preg_replace('/romz/','nikki',$romzSong,3)); //changed the romz characters by nikki, 3 times
	$replacewith = array('cool', 'kicked', 'stabbed');
	$replacewhat = array('/amazing/','/punched/', '/shoot/');
	say(preg_replace($replacewhat,$replacewith,$romzSong)); // replaced $replacewhat with $replacewith

	say(preg_replace($replacewhat,array(),$romzSong)); // deleted all the matches in $replacewhat

	$names = array("Romz Vargas", "Tan Magay", "Keith Samson", "Lemuel Castro");
	print_r(preg_replace('/(\w)\w* (\w+)/', '\1. \2<br/>', $names)); // \1 pertains to the (\w) which is a letter of the 1st word and /2 is (\w*) the 2nd word in the text
	say();
	echo preg_replace('/(\w)\w+\s+(\w+)/', '$2, $1.', 'Fred Flintstone');
	say();
	$string = 'It was 5C outside, 20C inside';
	echo preg_replace('/(\d+)C\b/e', '$1*9/5+32', $string); // the /e flag treats the pattern as PHP code .. $1 is the pattern inside ()
	say();
	$name = 'Fred';
	$age = 35;
	$string = '$name is $age';
	echo preg_replace('/\$(\w+)/e', '$$1', $string); // $$1 pertains to the value of each variable
	say();
	function titlecase($s)	// the $s argument is the word passed which is the first word of the text
	{
		return ucfirst(strtolower($s[0]));
	}
	$string = 'goodbye cruel world';
	$new = preg_replace_callback('/^(\w+)/', 'titlecase', $string); // titlecase function is called
	echo $new;

	echo "<h5>Splitting</h5>";
	$ops = preg_split('{\d*([+*/−])\d*}', '3+5*9/2<br/>', PREG_SPLIT_DELIM_CAPTURE, -1); // PREG_SPLIT_DELIM_CAPTURE (parts of the string captured are returne)
	$ops2 = preg_split('{\d*([+*/−])\d*}', '3+5*9/2<br/>', PREG_SPLIT_NO_EMPTY, -1); // PREG_SPLIT_NO_EMPTY (empty chunks are not returned)
	print_r($ops);
	say();
	print_r($ops2);

	echo "<h5>Filtering an Array with Regular Expressions</h5>";
	$numbers = preg_grep('/^([a-zA-Z]*)$/',$replacewith);	
	print_r($numbers);
	
	echo "<h5>Quoting for Regular Expressions</h5>";
	$toFind = '/usr/local/etc/rsync.conf';
	$re = preg_quote($toFind, '/');
	say($re);
	echo preg_quote('$5.00 (five bucks)');

?>