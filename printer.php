
<?php include_once('includes/header.php');?>

<body>
		<section id="wrapper">
			<h1>Välkommen till Skrivarcenter AB</h1>

				<?php
				if ($_POST['send']) {
					$name = $_POST['forename'];
					$aftername = $_POST['aftername'];
					$email = $_POST['mail'];
					$numberCopies = $_POST['ccpies'];
					$color = $_POST['color'];
					echo "<h3>Tack $name för ditt beställning </h3><br />";
					echo "<h3 style='color: #7B93E8';>Din beställning </h3><br />";
					echo "Ditt namn: $name <br />";
					echo "Ditt efternamn: $aftername <br />";
					echo "Din email: $email <br />";
					echo "Antal kopior: $numberCopies <br />";
					echo "Färgtyp: $color <br />";
				}
				?>
				<?php
				if ($_FILES["file"]["error"] > 0)
				  {
				  echo "Error: " . $_FILES["file"]["error"] . "<br />";
				  }
				else
				  {
				  echo "Uppladd: " . $_FILES["file"]["name"] . "<br />";
				  echo "Typ: " . $_FILES["file"]["type"] . "<br />";
				  echo "Storlek: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
				  echo "Lagrad i: " . $_FILES["file"]["tmp_name"];
				  }
				  echo "<br />";
				  echo "<a href='../skrivacenter/index.php'>Gå tillbaka här!</a>";
				?>
		</form>
		</section>
		<?php include_once('includes/footer.php');?>
	</body>
</html>