
	<h2>Add New User</h2>
	<?php if($msg){ echo $msg; } ?>
	<form action="./user/add" method="post">
	
		<p>
			<label for="name">Name:</label>
			<input type="text" name="name" id="name" class="text" />
		</p>
		<p>
			<label for="email">E-mail:</label>
			<input type="text" name="email" id="email" class="text" />
		</p>
		<p>
			<label for="password">Password:</label>
			<input type="text" name="password" id="password" class="text" />
		</p>
		<p>
			<label for="status">Status:</label>
			<select name="status" id="status">
				<option value="1">Enabled</option>
				<option value="0">Disabled</option>
			</select>
		</p>
		<p>
			<label></label>
			<input type="submit" class="button submit" value="Create" />
		</p>
	
	</form>