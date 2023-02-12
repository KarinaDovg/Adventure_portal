<?php


$sub = filter_var(trim($_POST['sub']),
FILTER_SANITIZE_STRING);

$mysql = new mysqLi('localhost', 'root', 'root', 'tours-bd');
$result = $mysql->query("SELECT * FROM `count-bd` WHERE `country`= '$sub' ");


$mysql->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="stylesheet" href="/css/style.css">
  <title>Tours</title>
</head>
<body>
  <div class="header-bg">
  </div>
  <div class="container">
    <div class="header__inner">
      <a href="http://localhost:8888/index1.php" class="header__logo"><img src="/img/Vector.svg" alt="logo1"></a>
    </div>
  </div>
	<div id="planning_tours" class="planning_tours">
		<div class="container_tours">
				<h1>Existing offers</h1>
        <table>
          <tr class="border_tour">
            <td>Country</td>
            <td>Hotel class</td>
            <td>Hotel name</td>
            <td>Hotel type</td>
            <td>Hotel rating</td>
            <td>Nights</td>
            <td>Food</td>
            <td>Currency</td>
          </tr>
        <?php
          while($tour = $result->fetch_assoc()){
            ?>
              <tr>
                <td><?php echo $tour['country']?></td>
                <td><?php echo $tour['hotel_class']?></td>
                <td><?php echo $tour['hotel_name']?></td>
                <td><?php echo $tour['hotel_type']?></td>
                <td><?php echo $tour['hotel_rating']?></td>
                <td><?php echo $tour['nights']?></td>
                <td><?php echo $tour['food']?></td>
                <td><?php echo $tour['currency']?></td>
              </tr>
            <?php
          }
        ?>
        </table>
				<span class="phone" >Leave your phone and we will call you back</span>
				<input class="phone_number" type="text" name="phone">
				<button class="send">Send</button>
		</div>
	</div>
</body>
</html>