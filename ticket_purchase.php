<?php	

session_start();

# db credentials
$servername ="localhost";
$username = "root";
$password = "";
$dbname = "movie";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection error: " . mysqli_connect_error());
}

$movie_id = $_POST['selectedMovie']; // originallyname of movie ie 'venom'  -- change to use movie id
$_SESSION['movie_id'] = $movie_id; // save movie id for later ..


// to get movie information from php
$query = "SELECT * FROM `movies` WHERE id='$movie_id'";
$result =$conn->query($query);
$row =$result->fetch_assoc();
$movie_name_1 =$row['name'];
$movie_picture_1=$row['picture'];
$movie_cast_1=$row['cast'];
$movie_detail_1=$row['detail'];
$movie_summary_1=$row['summary'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H&H Theatres - Ticketing</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>


<body>
    <div id="wrapper">
        <header>
            <h1>H&H Theatres</h1>
        </header>

        <div id="nav">
            <nav>
                <ul class="nav">
                    <li class="nav"><a href="index.html">Home</a></li>
                    <li class="nav"><a class="active" href="movies.html">Movies</a></li>
                    <li class="nav"><a href="cinema.php">Cinema</a></li>
                    <li class="nav"><a href="javascript:openModal()">Check Booking</a></li> <!--trigger js to open modal-->
                </ul>
            </nav>
        </div>

        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close">&times;</span>
                    <h3>Check Booking</h3>
                </div>
                <div class="modal-body">
                    <br>
                    <form action="check_booking.php" method="post"> <!--php script to check method, match detail and fetch data from db-->
                        <label for="check_method">Method:&nbsp;</label>
                        <select name="check_method" id="check_method">
                            <option value="email" selected>Email address</option>
                            <option value="bookid">Transaction ID</option>
                            <option value="hp">Phone number</option>
                        </select>
                        <br><br>
                        <input type="text" name="user_detail" id="user_detail" size="35" required placeholder = "enter details here">
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
            <li><a href="movies.php">Movies</a></li>
            <li><?php echo $movie_name_1;?></li>
        </ul>

        <div id="content">
            <div id="content_section">
          
                <table id="checkout_content_table">
                    <tr>
                        <td id="checkout_content_td_picture" rowspan="4">
                            <img src="<?php echo $movie_picture_1;?>">
                        </td>
                        <td id="checkout_content_td_description">
                            <table>
                                <tr>
                                    <td>
                                        Movie Details: <br>
                                        Movie: <?php echo $movie;?><br>
                                        <?php echo $movie_cast_1;?>
                                    </td>
                                    <td>
                                        <?php echo $movie_detail_1;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <p>Synopsis:</p>
                                        <?php echo $movie_summary_1;?>
                                    </td>
                                </tr>                 
                            </table>
                        </td>
                    </tr>
                    <form action="ticket_purchase_cont.php" method="post">
                    <tr>
                        <td id="ticket_purchase_table"><center>
                            <table>
                                <tr>
                                    <td>
                                        Please Choose Date and Timing for Movie: <br><br><center>Date: 
                                        <Select name = "date"></center> // drop down table for dates
                                            <option value = "2-Nov-2022">2/11/22</option>
                                            <option value = "3-Nov-2022">3/11/22</option>
                                            <option value = "4-Nov-2022">4/11/22</option>
                                        </select>
                                        <br><br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <br>
                                        <input class="ticket_timing_button" name = "timingButton" type="submit" value="1000">
                                        <input class="ticket_timing_button" name = "timingButton" type="submit" value="1300">
                                        <input class="ticket_timing_button" name = "timingButton" type="submit" value="1630">
                                        <input class="ticket_timing_button" name = "timingButton" type="submit" value="1800">
                                        <input class="ticket_timing_button" name = "timingButton" type="submit" value="2000">
                                    </td>
                                </tr>
                            </table>
                        </center></td>
                    </tr>
                    </form>

                </table>
            </div>
        </div>
    </div>
</body>
</html>