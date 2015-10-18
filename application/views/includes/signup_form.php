<h1> Create an aCcount </h1>

<fielset>
	<legend>Personal Info!</legend>

	<?php
	echo form_open('login/create_member');
	echo form_input('first_name', set_value('first_name', 'First Name'));
	echo form_input('last_name', set_value('last_name', 'Last Name'));
	echo form_input('email', set_value('email_address', 'Last Name'));

	?>

</fieldset>

<fieldset>
	<legend>Login Info</legend>

	<?php
	echo form_input

	?>
</fieldset>