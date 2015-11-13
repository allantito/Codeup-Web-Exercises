<?php
	var_dump($_GET);
	var_dump($_POST);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <title>My First HTML Form</title>
  <meta name="Generator" content="Cocoa HTML Writer">
  <meta name="CocoaVersion" content="1404.13">
  <style type="text/css">
  </style>
</head>
<body>
	<h2>User Login</h2>
	<form method="POST" action="/my_first_form.php">
	    <p>
	        <label for="username">Username</label>
	        <input id="username" name="username" type="text" placeholder="Enter your username">
	    </p>
	    <p>
	        <label for="password">Password</label>
	        <input id="password" name="password" type="password" placeholder="Enter your password">
	    </p>
	    <p>
			<button type="submit">Login</button>	    
		</p>
	</form>
	<h2>Compose an Email</h2>
	<form>
		<input type="checkbox" id="email_sent_copy" name="email_sent_copy" value="yes" checked>
		<label for="email_sent_copy">Do you want to save a copy to your sent folder?</label>
		<p>
			<label for="email_to">To</label><br>
			<input id="email_to" name="email_to" type="text" placeholder="Sending email to">
		</p>
		<p>
			<label for="email_from">From</label><br>
			<input id="email_from" name="email_from" type="text" placeholder="Sending from">
		</p>
		<p>
			<label for="email_subject">Subject</label><br>
			<input id="email_subject" name="email_subject" type="text" placeholder="Email Subject">
		</p>
		<p>
			<label for="email_body">Write your information below</label><br>
			<textarea id="email_body" name="email_body" rows="5" cols="40" type="text" placeholder="Content here"></textarea>
		</p>
		<p>
			<button type="submit">Send</button>	    
		</p>
	</form>
	<h2>Multiple Choice Test</h2>
	<form>
		<p>What is the capital of Texas?</p>
			<label>
			    <input type="radio" name="tx_capital_q1" value="austin">
			    Austin
			</label>
			<label>
			    <input type="radio" name="tx_capital_q1" value="san antonio">
			    San Antonio
			</label>
		<p>What is the capital of Florida?</p>
			<label>
			    <input type="radio" name="fl_capital_q2" value="tampa">
			    Tampa
			</label>
			<label>
			    <input type="radio" name="fl_capital_q2" value="tallahassee">
			    Tallahassee
			</label>
		<p>What is the capital of Virginia?</p>
			<label>
			    <input type="radio" name="va_capital_q3" value="richmond">
			    Richmond
			</label>
			<label>
			    <input type="radio" name="va_capital_q3" value="virginia beach">
			    Virginia Beach
			</label>
		<hr>
		<p>Which San Antonio-based beer have you tried?</p>
			<label><input type="checkbox" id="satx_beer1" name="satx_beer[]" value="alamo"> Alamo Brewery</label>
			<label><input type="checkbox" id="satx_beer2" name="satx_beer[]" value="pearl"> Pearl Brewery</label>
			<label><input type="checkbox" id="satx_beer3" name="satx_beer[]" value="busted sandal"> Busted Sandal Brewery</label>
		<p>
		<hr>
		<label>What is your favorite color?</label><br>
			<select id="color" name="color[]" multiple> 
				<option value="blue"> Blue</option>
				<option value="red"> Red</option>
				<option value="green"> Green</option>
			</select>
		<p>
			<button type="submit">Submit</button>	    
		</p>
	</form>
	<h2>Select Testing</h2>
	<form>
		<label for="plane">Do you have a plane</label>
			<select id="plane" name="plane">
    			<option value="0" >No</option>
    			<option value="1" selected>Yes</option>
    			<option value="2" >Maybe</option>
			</select>
		<p>
			<button type="submit">Response</button>	    
		</p>
	</form>
</body>
</html>
