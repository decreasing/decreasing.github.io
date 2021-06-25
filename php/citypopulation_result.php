<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <style type="text/css">
		body{
			background-image: url('icon/citypopulation.png');  /* fallback for old browsers */
			background-repeat: no-repeat;
  			background-attachment: fixed;
  			background-size: 100% 100%; 
			font-family:'Alegreya Sans SC', sans-serif;
		}
		.form-page{
			display: block;
  			border:  solid;
  			width: 650px;
			padding: 25px;
			margin-left: auto;
			margin-right: auto; 
		
		}		
		.items-alignment{
			padding-top: 150px;
		}

	</style>

<title>City Population</title>
</head>
<body>
<br><br><br><br><br><br><br><br><br>
<div class="items-alignment">
	<div class="form-page" style="background-color:#119efa">
	    <H1 align="center" style="background-color:#8DCCF5; color: black;font-family: 'Bebas Neue', cursive;; word-spacing:15px;font-size: 4em;;font-weight: 1000px">RESULT</H1>
	    <br>
		<div align="center" style="background-color:#8DCCF5">
			
		<div class="form-group form-control-sm col-xs-12 col-md-5">
			<form action="citypopulation.php" method="post">
				<?php
				if (isset($_POST['citya_popu']) and isset($_POST['citya_growth']) and isset($_POST['cityb_popu']) and isset($_POST['cityb_growth'])) {
					$citya_popu = $_POST['citya_popu'];
					$citya_growth = $_POST['citya_growth'];
					$cityb_popu = $_POST['cityb_popu'];
					$cityb_growth = $_POST['cityb_growth'];


						$citya_result = intval((($citya_popu * $citya_growth) / 100) + $citya_popu);
						$cityb_result = intval((($cityb_popu * $cityb_growth) / 100) + $cityb_popu);
						for ($i = 1; $citya_result < $cityb_result; $i++)
						{
							$citya_result = intval((($citya_result * $citya_growth) / 100) + $citya_result);
							$cityb_result = intval((($cityb_result * $cityb_growth) / 100) + $cityb_result);
						}

						echo "<img src='icon/p1.png' width='33 height='33'>","<span style='color: black; font-size: 25px; font-weight:bold'> City A: ",number_format($citya_result), "<br></span>";
						echo "<img src='icon/p1.png' width='33 height='33'>","<span style='color: black; font-size: 25px; font-weight:bold'> City B: ", number_format($cityb_result), "<br><br></span>";

						echo "<span style='color:black; font-size: 20px; font-family: 'Montserrat', sans-serif; font-weight:200'> The population of City A will be greater than or the same City B in ", $i, " year(s). <br><br>";

				}

				?>	
				<button type="submit" class="btn btn-success btn-sm">Back</button>
			</form>
		</div>
	</div>
</div>
<br><br><br><br><br><br><br><br>

</body>
</html>