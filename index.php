<?php include_once('includes/header.php');?>

<body>
		<section id="wrapper">
			<h1>Välkommen till Skrivarcenter AB</h1>
				<h3>Vänligen ladda upp din fil nedanför!</h3>
			<form action="printer.php" method="post" enctype="multipart/form-data">
					<br />Namn<br />
						<input type="text" name="forename" placeholder="Ditt namn" /><br />
					<br />Efternamn<br />
						<input type="text" name="aftername" placeholder="Ditt efteramn"/><br />
					<br />Email<br />
						<input type="text" name="mail" placeholder="Email adress" /><br />
					<br />Antal kopior<br />
						<input type="number" name="ccpies" placeholder="Exempel 10"/><br />
					<br />Färgtyper:<br /><br />
						Färg:<input type="radio" name="color" value="Färg" /><br />
						Svartvit<input type="radio" name="color" value="Svartvit" /><br />
					<br />Filnamn<br/>
						<input type="file" name="file" /><br /><br />
					<input type="submit" name="send" value="Skriva ut" />		
			</form>
		</section>
		<?php include_once('includes/footer.php');?>
	</body>
</html>