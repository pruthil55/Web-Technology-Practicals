<!DOCTYPE html>
<html>

<head>
	<title>Social Media Registration Form</title>
	<link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="SocialMediaForm.css">
</head>

<body>
	<fieldset>
		<legend>Sign Up</legend>
		<h1>Create your Account</h1>
		<div id="layout">
			<form action="formvalidation.php" method="post">
				<div class="field">
					<div class="input">
						<label for="name">Name: </label>
						<input type="" name="name" placeholder="name" autocomplete="off" pattern="^([A-Za-z]+[,.]?[ ]?|[A-Za-z]+['-]?)+$"  required>
					</div>
				</div><br>

				<div class="field">
					<div class="input">
						<label for="email">Email: </label>
						<input type="" name="email" placeholder="email" autocomplete="off"
							pattern="[0-9a-z._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
					</div>
				</div><br>

				<div class="field">
					<div class="input">
						<label for="password">Password: </label>
						<input type="password" name="password" pattern="[a-zA-Z0-9!#$@%&^*/~]{6,}" placeholder="password" 
							required>
					</div>
				</div><br>

				<div class="field">
					<div class="input">
						<label for="password">Confirm Password: </label>
						<input type="password" name="confirm-password" pattern="[a-zA-Z0-9!#$@%&^*/~]{6,}" placeholder="password" 
							required>
					</div>
				</div><br>

				<div class="field">
					<div class="input">
						<label for="date">Birthday: </label>
						<input type="date" name="date" max="2010-01-01" min="1920-01-01" required>
					</div>
				</div><br>

				<div class="field">
					<div class="input">
						<label for="telephone">Mobile No. </label>
						<input type="tel" name="telephone" placeholder="telephone" pattern="[789][0-9]{9}" autocomplete="off"  required>
					</div>
				</div><br>

				<div class="field">
					<div class="input">
						<label for="gender">Gender: </label>
						<select name="gender" required>
							<option hidden=""></option>
							<option>Male</option>
							<option>Female</option>
							<option>Other</option>
						</select>
					</div>
				</div><br>

				<div class="field">
					<div class="input">
						<button>Submit</button>
					</div>
				</div><br>

			</form>
		</div>
	</fieldset>
</body>

</html>