<form action="ex31_1.php" method="post">
	<input placeholder="enter no.1" name="x1" /><br>

	<input placeholder="enter no.2" name="x2" /><br>

	<input type="text" name="x3" value="hello" readonly="readonly" /><br>

	<input type="hidden" name="x4" value="hello123" readonly="readonly" /><br>

	<input type="password" name="x5" placeholder="enter password" /><br>

	male<input type="radio" name="x6" value="1" />
	female<input type="radio" name="x6" value="2" /><br>

	<input type="checkbox" name="x7[]" value="php" />PHP
	<input type="checkbox" name="x7[]" value="java" />JAVA<br>

	<textarea name="x8" placeholder="enter message"></textarea><br>

	<select name="x9">
		<option>please select country</option>
		<option value="in">india</option>
		<option value="us">usa</option>
		<option value="lon">london</option>
	</select><br>

	<!-- select with multiple option -->
	<select name="x10[]" multiple="multiple">
		<option>please select country</option>
		<option value="in">india</option>
		<option value="us">usa</option>
		<option value="lon">london</option>
	</select><br>


	<input type="submit"/> <input type="button" /> 
	<input type="reset" />

	

</form>
