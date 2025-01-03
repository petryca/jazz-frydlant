<?php
$page = 'join';
include( '../includes/header.php' );
include( 'menu.php' );

$send = false;

if( isset( $_POST['submit'] ) ) {

	if($_POST['spamq'] == '2025' || $_POST['spamq'] == '25')
	{
		$data = '';
		$data .= "First name: {$_POST['firstname']} \n";
		$data .= "Surname: {$_POST['surname']} \n";
		$data .= "Email: {$_POST['email']} \n";
		$data .= "Phone: {$_POST['phone']} \n";
		$data .= "Address: {$_POST['address']} \n";
		$data .= "Date of birth: {$_POST['dob']} \n";
		$data .= "Musical instrument: {$_POST['instrument']} \n";
		$data .= "Musical experience: {$_POST['experience']} \n";
		if( isset( $_POST['level'] ) ) $data .= "Jazz education level: {$_POST['level']} \n";
		if( isset( $_POST['band'] ) ) $data .= "Play in band: {$_POST['band']} \n";
		if( isset( $_POST['hotel'] ) ) $data .= "Accomodation needed: {$_POST['hotel']} \n";
		$data .= "Roommate: {$_POST['roommate']} \n";
		if( isset( $_POST['smoke'] ) ) $data .= "Smoker: {$_POST['smoke']} \n";

		mail ( 'abstudio.praha@gmail.com', 'Frydlant Form', $data );

		$send = true;
	}
}

?>

<?php if( $send ): ?>
<h2 class="ok">Thank You ,<br />Your application has been sent, we will be contacting you shortly.</h2>
<?php else: ?>
<h2>Application Form</h2>
<form action="form.php" method="post">
<table id="form">
<tr>
<td class="label">First name:</td>
<td><input type="text" name="firstname" class="text"></td>
</tr>
<tr>
<td class="label">Surname:</td>
<td><input type="text" name="surname" class="text"></td>
</tr>
<tr>
<td class="label">Email:</td>
<td><input type="text" name="email" class="text"></td>
</tr>
<tr>
<td class="label">Phone:</td>
<td><input type="text" name="phone" class="text"></td>
</tr>
<tr>
<td class="label">Address:</td>
<td><textarea name="address"></textarea></td>
</tr>
<tr>
<td class="label">Date of birth:</td>
<td><input type="text" name="dob" class="text"></td>
</tr>
<tr>
<td class="label">Musical instrument:</td>
<td><input type="text" name="instrument" class="text"></td>
</tr>
<tr>
<td class="label">Musical experience:</td>
<td><input type="text" name="experience" class="text"></td>
</tr>
<tr>
<td class="label">Jazz education level:</td>
<td>beginner<input type="radio" name="level" value="beginner">
intermediate<input type="radio" name="level" value="intermediate">
advanced<input type="radio" name="level" value="advanced"></td>
</tr>
<tr>
<td class="label">Play in band:</td>
<td>yes<input type="radio" name="band" value="yes">
no<input type="radio" name="band" value="no"></td>
</tr>
<tr>
<td class="label">Accomodation needed:</td>
<td>
<input type="radio" name="hotel" value="ice-hockey-club-dorm"> ice hockey club dorm<br />
<input type="radio" name="hotel" value="nepotřebuji"> no accomodation<br />
</td>
</tr>
<tr>
<td class="label">Roommate (please give name):</td>
<td><input type="text" name="roommate" class="text"></td>
</tr>
<tr>
<td class="label">Smoker:</td>
<td>yes<input type="radio" name="smoke" value="yes">
no<input type="radio" name="smoke" value="no"></td>
</tr>

<tr>
<td class="label" style="background:#ffff99"><strong>To prevent spam please answer the following  question:<br />
Enter the number of current year:</strong></td>
<td valign="bottom"><input type="text" name="spamq" class="text"></td>
</tr>

<tr>
<td  class="label" colspan="2"><input type="submit" name="submit" value="Send"> </td>
</tr>
</table>
</form>
<?php endif; ?>

<p class="lang"><a href="/czech/form.php">česky</a></p>

<div class="banner">
<img src="/media/jazz2.jpg" alt="Letní jazzová dílna Karla Velebného" width="700" height="180" />
</div>

<?php include( '../includes/footer.php' ); ?>
