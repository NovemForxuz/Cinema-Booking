<?php	

session_start();
$movie_id = $_SESSION['movie_id'];
// $timing = $_GET['timingButton'];
// $_SESSION['timing'] = $timing;

# db credentials
$servername ="localhost";
$username = "root";
$password = "";
$dbname = "movie";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}




$query_ = "SELECT * FROM MOVIE WHERE movie_id=$movie_id"; // formulate query
$result_ = $conn->query($query_); // point db to query
$row_ = $result_->fetch_assoc();
# format of MOVIE table: `movie_id`, `movie_name`, `duration`, `language`, `genre`, `distributor`, `release_date`, `image_dir`, `synopsis`, `rating`, `cast`, `director`
# store all attr of the movie into variables to populate html codes below
$movie_name = $row_['movie_name'];
$duration = $row_['duration'];
$language = $row_['language'];
$genre = $row_['genre'];
$distributor = $row_['distributor'];
$release_date = $row_['release_date'];
$image_dir = $row_['image_dir'];
$synopsis = $row_['synopsis'];
$rating = $row_['rating'];
$cast = $row_['cast'];
$director = $row_['director'];

$_SESSION['movie_name'] = $movie_name;




// Function to add retrieved information into an array. FOR 'availability' table only
function resultToArray($result) 
{
    $rows = array();
    while($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
    return $rows;
}

// Retrieve availability table from database (360 variables)
$queryAvail = "SELECT * FROM `availability` WHERE movie_id='$movie_id'";
$resultAvail = $conn->query($queryAvail);
$rowAvail = resultToArray($resultAvail);

### Retrieve availability table from database (24 variables) 
if(isset($_GET['date']))
{
	$date = $_GET['date'];
	$_SESSION['date'] = $date;
	$timing = $_GET['timingButton'];
	$_SESSION['timing'] = $timing;
	$queryBoxes = "SELECT * FROM `availability` WHERE movie_id='$movie_id' AND dayofweek='$date' AND timing='$timing'";
	$resultBoxes = $conn->query($queryBoxes);
	$rowBoxes = resultToArray($resultBoxes);
}



// When checkout button is clicked, check if email & name is input, then submit ticket purchase order
if(isset($_POST['checkoutButton'])) // fetching value from php
{	

	$booking_id = time();
	$_SESSION['booking_id'] = $booking_id;
	$timing = $_SESSION['timing'];
	$date = $_SESSION['date'];
	$queryBoxes = "SELECT * FROM `availability` WHERE movie_id='$movie_id' AND dayofweek='$date' AND timing='$timing'"; 
	$resultBoxes = $conn->query($queryBoxes);
	$rowBoxes = resultToArray($resultBoxes);

	if(!empty($_POST['emailBox']) and !empty($_POST['nameBox']) and !empty($_POST['phoneBox']))
	{		
		$email = $_POST['emailBox'];
		$name = $_POST['nameBox'];
		$phone = $_POST['phoneBox'];
		$payment = $_POST['payment'];
		$_SESSION['email'] = $email;
		$_SESSION['name'] = $name;
		$_SESSION['phone'] = $phone;
		$_SESSION['payment'] = $payment;
		include 'send_email.php';
		if(!empty($_POST['seating']))
			{
			foreach($_POST['seating'] as $selected)
			{
				$queryUpdate = "UPDATE `availability` SET bookingstatus = '1' WHERE movie_id='$movie_id' AND dayofweek='$date' AND timing='$timing' AND seatcode ='$selected'";
				$result = $conn->query($queryUpdate);
				$queryOrders = "INSERT INTO ticketorders (booking_id, title, movie_id, email, phone, seat, dayofweek, timing, nameCustomer, payment) VALUES ($booking_id, '".$movie_name."', '".$movie_id."', '".$email."', '".$phone."', '".$selected."', '".$date."', '".$timing."', '".$name."', '".$payment."')";
				$result = $conn->query($queryOrders);				
			}
			echo "<script>alert('Tickets successfully purchased! Please check your email. Thank you! - Management Team');</script>";
			header("Location: confirmed.php");
			}

		if(empty($_POST['seating']))
		{
			echo "<script>alert('Error - no seat selected!')</script>";
		}

	}
	else 
    {
		echo "<script>alert('Please fill in Name and Email Field!')</script>";
	}

}


$result_->free();
$conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H&H Theatres - Home</title>
    <link rel="stylesheet" href="stylesheet.css">
	<link rel="shortcut icon" type="image/jpg" href="./logo.PNG"/>
	<script type="text/javascript" src="./book_form_check.js"></script>
	<script> 
		//For calculating number of seats checked and total price		
		function calculateSeat() {
			var quan = 0;
			var seats = document.getElementsByName("seating[]");
			for (var i = 0, length = seats.length; i < length; i++)
			{
				if (seats[i].checked)
				{
					quan +=1;
				}
			}
			var sub_total = quan*10
			var total = quan*10+1.50

			document.getElementById("quantity").innerHTML = quan;
			document.getElementById("total1").innerHTML = "$" + (sub_total.toFixed(2));
			document.getElementById("total2").innerHTML = "$" + (total.toFixed(2));
		}
		function calculatePrice() {
			calculateSeat();
		}
		setInterval(calculatePrice, 50);
	</script>
</head>

<body>
	<div id="wrapper">
		<header>
            <img id='company_logo' src="header_img/header.png" alt="Logo" width="300px">
            <table class="social">
                <tr>
                    <td>
                        <p>Follow us&nbsp;</p>
                    </td>
                    <td>
                        <a href="https://www.facebook.com" target="_blank"><img class="social" src="facebook-logo.PNG" alt="fb-logo" width="23px"></a>
                    </td>
                    <td>
                        <a href="https://www.twitter.com" target="_blank"><img class="social" src="twitter-logo.png" alt="tt-logo" width="30px"></a>
                    </td>
                    <td>
                        <a href="https://www.instagram.com" target="_blank"><img class="social" src="Instagram-logo.png" alt="ig-logo" width="30px"></a>
                    </td>
                </tr>
            </table>
        </header>
		<div id="nav">
			<nav>
				<ul class="nav">
					<li class="nav"><a href="index.html">Home</a></li>
					<li class="nav"><a class="active" href="movies.html">Movies</a></li>
					<li class="nav"><a href="cinema.html">Cinema</a></li>
					<li class="nav"><a href="javascript:openModal()">Check Booking</a></li> <!--trigger js to open modal-->
				</ul>
			</nav>
		</div>
        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close">&times;</span>
                    <h3>Check Booking</h3>
                </div>
                <div class="modal-body">
                    <br>
                    <form action="check_booking.php" method="post" style="text-align: center;"> <!--php script to check method, match detail and fetch data from db-->
                        <label for="check_method">Method:&nbsp;</label>
                        <select name="check_method" id="check_method">
                            <option value="email" selected>E-mail</option>
                            <option value="hp">Phone</option>
							<option value="bookid">Ref no.</option>
                        </select>
                        <br><br>
                        <input type="text" name="user_detail" id="user_detail" size="25" required placeholder = "enter details here">
                        <input type="submit" value="Check" id="user_detail_submit">
                    </form>
                </div>
            </div>
        </div>
		<script>
		// Get the modal
		var modal = document.getElementById("myModal");

		// Get the button that opens the modal
		var btn = document.getElementById("myBtn");

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

		// When the user clicks the button, open the modal 
		function openModal() {
			modal.style.display = "block";
		}
		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
			modal.style.display = "none";
		}
		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
		</script>

		<ul class="breadcrumb">
			<li><a href="index.html">Home</a></li>
			<li><a href="movies.html">Movies</a></li>
			<li><?php echo $movie_name;?></li>
		</ul>

		<div id="content">

			<div class="mini_wrapper_selected_mov">
				<h2 class="_title">Seat Selection & Checkout</h2>
                <div class="selected_mov">
                    <div id="selected_mov_img">
                        <img src="<?php echo $image_dir ?>" alt="movie poster" width="70px">
                    </div>
                    <div id="selected_info">
						<b><p><?php echo $movie_name ?></p></b>
						<p style="font-size: 10px; color: #AAA;"><?php echo $rating?></p>
						<p style="font-size: 12px;"><?php echo $date." ".$timing." hrs"; ?></p>
						<p style="font-size: 12px;"><?php echo $duration?> mins</p>
                    </div>
                </div>
				<br>
				<hr class="subsection_divider">

				<div class="checkout_content_table">
					<h3 class="subsection">Select Seats</h3>
					<table id="checkout_content_table" style="color: #FFF;">
						<form action= "<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
						<!--<form action="confirm.php" method="post">-->
							<tr>	
								<td id="checkout_content_td_seating"><center>
									<table>
										<div class="screen"></div>
										<h3>SCREEN</h3>
										<?php

											
											echo '<tr>';
											echo	'<span>A</span>';
												for($x = 0; $x <= 5; $x++) 
												{
													if ($rowBoxes[$x]['bookingstatus'] == '0') //check availability of seats in phpmyadmin 0 or 1, 0 = vacant & 1 = occupied
													{
														echo '<input class="empty" type="checkbox" name="seating[]" value="'.$x.'">';
													}
													else 
													{
														echo '<input class="booked" type="checkbox" name="seating[]" value="booked" disabled>';
													}

													if ($x == '1' || $x == '3' ) // blocked out seats
													{
														echo '<input class="transparent_box" type="checkbox" disabled>';
													}
												}
											echo	'<span>A</span><br>';
											echo	'</tr>';

											echo '<tr>';
											echo	'<span>B</span>';
												for($x = 6; $x <= 11; $x++) 
												{
													if ($rowBoxes[$x]['bookingstatus'] == '0') 
													{
														echo '<input class="empty" type="checkbox" name="seating[]" value="'.$x.'">';
													}
													else 
													{
														echo '<input class="booked" type="checkbox" name="seating[]" value="booked" disabled>';
													}

													if ($x == '7' || $x == '9' ) 
													{
														echo '<input class="transparent_box" type="checkbox" disabled>';
													}
												}
											echo	'<span>B</span><br>';
											echo	'</tr>';

											echo '<tr>';
											echo	'<span>C</span>';
												for($x = 12; $x <= 17; $x++) 
												{
													if ($rowBoxes[$x]['bookingstatus'] == '0') 
													{
														echo '<input class="empty" type="checkbox" name="seating[]" value="'.$x.'">';
													}
													else 
													{
														echo '<input class="booked" type="checkbox" name="seating[]" value="booked" disabled>';
													}

													if ($x == '13' || $x == '15' ) 
													{
														echo '<input class="transparent_box" type="checkbox" disabled>';
													}
												}
											echo	'<span>C</span><br>';
											echo	'</tr>';

											echo '<tr>';
											echo	'<span>D</span>';
												for($x = 18; $x <= 23; $x++) 
												{
													if ($rowBoxes[$x]['bookingstatus'] == '0') 
													{
														echo '<input class="empty" type="checkbox" name="seating[]" value="'.$x.'">';
													}
													else 
													{
														echo '<input class="booked" type="checkbox" name="seating[]" value="booked" disabled>';
													}

													if ($x == '19' || $x == '21' ) 
													{
														echo '<input class="transparent_box" type="checkbox" disabled>';
													}
												}
											echo	'<span>D</span><br>';
											echo	'</tr>';

										?>
									</table><br>
									Empty<input class="empty" type="checkbox">
									Selected<input class="empty" type="checkbox" checked disabled>
									Booked<input class="booked" type="checkbox" value="booked" disabled>
									<br><br>


								</center></td>
								
										
							</tr>
							<tr>
								<td>
									<hr class="subsection_divider">
									<h3 class="subsection">Your Cart</h3>
								</td>
							</tr>
							<tr>
								<td id="checkout_content_td_payment"><center>
									<table class="sub_summary" style="color: #FFF;">
										<tr>
											<th><p>Ticket</p></th>
											<th><p>Price</p></th>
											<th><p>Quantity</p></th>
											<th><p>Sub-total</p></th>
										</tr>
										<tr class="linebtm">
											<td><?php echo $movie_name?></td>
											<td>$10.00</td>
											<td id = "quantity" name = "quantityBox"></td>
											<td id = "total1" name = "totalBox"></td>
										</tr>
										<tr class="linetop">
											<td>Booking Fee</td>
											<td>$1.50</td>
											<td>1</td>
											<td>$1.50</td>
										</tr>
										<tr class="total">
											<td colspan="3" id="total_text"><b>Total:<b></td>
											<td id = "total2"></td>
										</tr>
									</table>
									<br><br>
									
									<div class="notification">
										<p id="email_alert"></p>
										<p id="phone_alert"></p>
										<p id="name_alert"></p>
									</div>
									
									<table class="user_detail" style="color: #FFF;">
										<tr>
											<td>*E-mail:&nbsp;</td>
											<td><input type="email" name="emailBox" required class="user_input" onchange="valEmail(this)"></td>
										</tr>
										<tr>
											<td>*Phone:&nbsp;</td>
											<td><input type="text" name="phoneBox" required class="user_input" onchange="valPhone(this)"></td>
										</tr>
										<tr>
											<td>*Name:&nbsp;</td>
											<td><input type="text" name="nameBox" required class="user_input" onchange="valName(this)"></td>
										</tr>

									</table>
							

									<br><br>
									<p>Payment type:</p>
									<input type="radio" name="payment" value="visa" checked> Visa
									<input type="radio" name="payment" value="paypal"> Paypal
									<input type="radio" name="payment" value="master"> Mastercard
									<br><br><input class="ticket_purchase_button" name = "checkoutButton" type="submit" value="Check Out">
								</center></td>
							</tr>
						</form>
					</table>
				</div>
			</div>	
		</div>
	</div>
</body>
</html>        