<?php
$page = 'join';
include( '../includes/header.php' );
include( 'menu.php' );

$send = false;

if( isset( $_POST['submit'] ) ) {

	if($_POST['spamq'] == '2025' || $_POST['spamq'] == '25')
	{

		$data = '';
		$data .= "Jméno: {$_POST['firstname']} \n";
		$data .= "Příjmení: {$_POST['surname']} \n";
		$data .= "Email: {$_POST['email']} \n";
		$data .= "Tel: {$_POST['phone']} \n";
		$data .= "Adresa: {$_POST['address']} \n";
		$data .= "Datum narození: {$_POST['dob']} \n";
		$data .= "Nástroj: {$_POST['instrument']} \n";
		$data .= "Hud. vzdělání: {$_POST['experience']} \n";
		if( isset( $_POST['level'] ) ) $data .= "Stupeň jazzové vyspělosti: {$_POST['level']} \n";
		if( isset( $_POST['band'] ) ) $data .= "Hraji v kapele: {$_POST['band']} \n";
		if( isset( $_POST['hotel'] ) ) $data .= "Ubytování: {$_POST['hotel']} \n";
		if( isset( $_POST['payment-type'] ) ) $data .= "Kursovné uhradím: {$_POST['payment-type']} \n";
		$data .= "Z účtu: {$_POST['account']} \n";
		$data .= "Datum platby: {$_POST['pay-date']} \n";
		$data .= "Var. symbol: {$_POST['pay-symbol']} \n";
		$data .= "Ubytování s kým: {$_POST['roommate']} \n";
		if( isset( $_POST['smoke'] ) ) $data .= "Kuřák: {$_POST['smoke']} \n";

		mail ( 'abstudio.praha@gmail.com', 'Frydlant Form', $data, $headers );

		$send = true;

	}
}

?>

<?php if( $send ): ?>
<h2 class="ok">Děkujeme ,<br />Vaše přihláška byla úspěšně odeslána, budeme Vás co nejdříve kontaktovat.</h2>
<?php else: ?>
<h2>Přihláška</h2>
<form action="form.php" method="post">
<table id="form">
<tr>
<td class="label">Jméno:</td>
<td><input type="text" name="firstname" class="text" /></td>
</tr>
<tr>
<td class="label">Příjmení:</td>
<td><input type="text" name="surname" class="text" /></td>
</tr>
<tr>
<td class="label">Email:</td>
<td><input type="text" name="email" class="text" /></td>
</tr>
<tr>
<td class="label">Tel:</td>
<td><input type="text" name="phone" class="text" /></td>
</tr>
<tr>
<td class="label">Adresa:</td>
<td><textarea name="address"></textarea></td>
</tr>
<tr>
<td class="label">Datum narození:</td>
<td><input type="text" name="dob" class="text" /></td>
</tr>
<tr>
<td class="label">Nástroj:</td>
<td><input type="text" name="instrument" class="text" /></td>
</tr>
<tr>
<td class="label">Hud. vzdělání:</td>
<td><input type="text" name="experience" class="text" /></td>
</tr>
<tr>
<td class="label">Stupeň jazzové vyspělosti:</td>
<td>začátečník<input type="radio" name="level" value="začátečník" />
mírně pokročilý<input type="radio" name="level" value="mírně-pokročilý" />
pokročilý<input type="radio" name="level" value="pokročilý" /></td>
</tr>
<tr>
<td class="label">Hraji v kapele:</td>
<td>ano<input type="radio" name="band" value="ano" />
ne<input type="radio" name="band" value="ne" /></td>
</tr>
<tr>
<td class="label">Ubytování požaduji:</td>
<td>
<input type="radio" name="hotel" value="Sportovní-ubytovna-HC-Frýdlant"> Sportovní ubytovna HC Frýdlant<br />
<input type="radio" name="hotel" value="Restaurace-Beseda"> Restaurace Beseda<br />
<input type="radio" name="hotel" value="Ubytovna-Slovanka"> Ubytovna Slovanka<br />
<input type="radio" name="hotel" value="Základní-škola-Bělíkova"> Základní škola Bělíkova<br />
<input type="radio" name="hotel" value="Sokolovna"> Sokolovna<br />
<input type="radio" name="hotel" value="Ubytování-nepotřebuji"> ubytování nepotřebuji
</td>
</tr>

<tr>
<td class="label">Ubytování s kým: (uveďte jméno)</td>
<td><input type="text" name="roommate" class="text" /></td>
</tr>

<tr>
<td class="label">Kuřák:</td>
<td>ano<input type="radio" name="smoke" value="ano" />
ne<input type="radio" name="smoke" value="ne" /></td>
</tr>

<tr>
<td class="label">Kursovné uhradím:</td>
<td>
<input type="radio" name="payment-type" value="převodem"> převodem z účtu<br />
<input type="radio" name="payment-type" value="v-hotovosti"> v hotovosti (občané ČR POUZE pouze po předchozí dohodě)
</td>
</tr>
<tr>
<td  class="label" colspan="2">
V případě platbou převodem z účtu prosíme o vyplnění následujících udajů pro identifikaci platby:
</td>
</tr>
<tr>
<td class="label">Platím z účtu čislo:</td>
<td><input type="text" name="account" class="text" /></td>
</tr>
<tr>
<td class="label">Datum platby:</td>
<td><input type="text" name="pay-date" class="text" /></td>
</tr>
<tr>
<td class="label">Var. symbol (datum narození):</td>
<td><input type="text" name="pay-symbol" class="text" /></td>
</tr>

<tr>
<td class="label" style="background:#ffff99"><strong>Abychom zabránili<br />
zasílání spamu, odpovězte na tuto otázku:<br />
Uveďte číslem letošní letopočet:</strong></td>
<td valign="bottom"><input type="text" name="spamq" class="text" /></td>
</tr>

<tr>
<td  class="label" colspan="2"><input type="submit" name="submit" value="Odeslat" /></td>
</tr>
</table>
</form>
<?php endif; ?>

<p class="lang"><a href="/english/form.php">english</a></p>

<div class="banner">
<img src="/media/jazz2.jpg" alt="Letní jazzová dílna Karla Velebného" width="700" height="180" />
</div>

<?php include( '../includes/footer.php' ); ?>
