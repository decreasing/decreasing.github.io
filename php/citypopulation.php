<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    
    <meta charset="utf-8">
    <title>City Population</title>
      </head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
	<style type="text/css">
	table, td 
	{
		border: 3px solid black;
		border-collapse: collapse;
		padding: 10px;
		background: #8DCCF5;
		color: black ;
	}
	body
	{
		background-image: url('icon/citypopulation.png');
  		background-repeat: no-repeat;
  		background-attachment: fixed; 
  		background-size: 100% 100%;
	}
	.menu 
	{
		background-color: #119efa;
		color: black;
		font-family: 'Bebas Neue', cursive;
		font-size: 2vw;
		font-weight: bold;
	}
	.items-alignment
	{
		padding-top: 150px;
	}
	</style>
 	<body>
 		<br>
 		<div class="items-alignment">
 		<form action="citypopulation_result.php" method="post">
 			<table align="center">
 				<br><br><br><br><br><br><br>
 				<tr>
 					<td class="menu" colspan="2"> City Population Calculator</td> <!--<img src="icons/city_population_resources/p1.png" width="40" height="40">-->
 				</tr>
 				<tr>
 					<td> Enter City A Population: </td>
 					<td> <input type="number" placeholder="Enter City A Population here..." name="citya_popu" value="<?php if 
					(isset($_POST['citya_popu'])) { echo $_POST['citya_popu']; } ?>" required></td>
 				</tr>
 				<tr>
 					<td> City A Growth Rate:</td>
 					<td><input type="number" placeholder="Enter City A Growth Rate here..." name="citya_growth" value="<?php if 
					(isset($_POST['citya_growth'])) { echo $_POST['citya_growth']; } ?>" required></td>
 				</tr>
 				<tr>
 					<td> City B Population:</td>
 					<td><input type="number" placeholder="Enter City B Population here..." name="cityb_popu" value="
					<?php if (isset($_POST['cityb_popu'])) { echo $_POST['cityb_popu']; } ?>" required> </td>
 				</tr>
				<tr>
 					<td>City B Growth Rate: </td>
 					<td><input type="number" placeholder="Enter City B Growth Rate here..." name="cityb_growth" value="<?php if 
					(isset($_POST['cityb_growth'])) { echo $_POST['cityb_growth']; } ?>"required></td>
 				</tr>
				 <tr>
				<td colspan="2" align="center"><br>
				<button type="submit" class="btn btn-success btn-sm">Submit</button>
				
				</tr>

				</table>
			</form>
		</div>	
		<br><br><br><br>
	</body>
</html>
