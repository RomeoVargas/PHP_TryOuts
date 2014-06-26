<html>
	<body><center>
		<form method='POST' action='filter_handler.php'>
			<select name='user_level'>
				<option>Admin</option>
				<option>Staff</option>
			</select><br/>
			<input type='text' name='username' placeholder='Username'><br/>
			<input type='text' name='full_name' placeholder='Full Name'><br/>
			<input type='submit'>
		</form>
		<h1>For Cross-Site Scripting</h1>
			<form method='POST' action='Cross_Site_Scripting.php'>
				<input type='text' name='input1' placeholder='Character to be escaped'><br/>
				<input type='submit'>
			</form>
		<h1>For Escape Output</h1>
			<form method='POST' action='Escape_Output.php'>
				<input type='text' name='input2' placeholder='Character to be escaped'><br/>
				<input type='submit'>
			</form>
		<h1>For Filenames</h1>
			<form method='POST' action='Filenames.php'>
				<input type='text' name='input3' placeholder='Character to be escaped'><br/>
				<input type='submit'>
			</form>
		<h1>For Session Fixation</h1>
			<form method='POST' action='SessionFixation.php'>
				<input type='password' name='input4' placeholder='Enter Password'><br/>
				<input type='submit'>
			</form>
	</body>
</html>