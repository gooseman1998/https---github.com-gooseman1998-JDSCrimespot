<?php include 'inc/header.php'; ?>

		<div class="login">
			<form action="inbox.php" method="post">
				<label> Wat voor gebruiker bent u? </label>
				<select>
				  <option value="EersteLijn">EersteLijn</option>
				  <option value="Manager">Manager</option>
				  <option value="Medewerker">Medewerker</option>
				</select> <br>
				<input type="submit" name="submit" class="button">
			</form>
		</div>
	



<?php include 'inc/footer.php';?>