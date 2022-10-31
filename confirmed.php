<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Success!</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="shortcut icon" type="image/jpg" href="./logo.PNG"/>
</head>
<body>
    <div id="wrapper">
        <header>
            <img id='company_logo' src="headerv2.PNG" alt="Logo" width="300px">
            <table class="social">
                <tr>
                    <td>
                        <p>Follow us</p>
                    </td>
                    <td>
                        <a href="www.facebook.com"><img class="social" src="facebook-logo.jpg" alt="fb-logo" width="37px"></a>
                    </td>
                    <td>
                        <a href="www.instagram.com"><img class="social" src="instagram-logo.png" alt="ig-logo" width="20px"></a>
                    </td>
                </tr>
            </table>
        </header>
        <div id="nav">
            <nav>
                <ul class="nav">
                    <li class="nav"><a class="active" href="index.html">Home</a></li>
                    <li class="nav"><a href="movies.html">Movies</a></li>
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

        <div class="content">
            <!---------------------------------------------------------------content here---------------------------------------------------->
            <div class="confirmation" style="margin-top: 30px;">
                <h3 style="text-align:center;">Booking Success!</h3>
                <br>
                <p>
                <?php
                    // session_start();
                    $email = $_SESSION['email'];
                    $movie_name = $_SESSION['movie_name'];
                    $timimg = (string)$_SESSION['timing'];
                    $date = $_SESSION['date'];
                    $booking_id = $_SESSION['booking_id'];


                    $to = 'f32ee@localhost';
                    $subject = 'Your Booking @ SJ Theatre\'s';
                    $message = "Dear valued customer, \r\n\r\nWe have processed and confirmed your booking for '$movie_name' on $date. Your booking reference number is $booking_id. Below is your movie ticket. Scan the QR code below at the usher point for entry. \r\n\r\nThank you!\r\nSJ Managment Team";
                    $headers = 'From: f32ee@localhost' . "\r\n" .
                    'Reply-To: f32ee@localhost' . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();

                    mail($to, $subject, $message, $headers,
                    '-ff32ee@localhost');
                    echo "<p>An email with your e-ticket(s) and booking details has been sent to: <u><span style='color: #ffd900;'>".$to."</span></u>. Your refernce number is <span style='color: #ffd900;'>".$booking_id."</span>. Thank you for your purchase and see you soon!</p>";
                ?>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <a href="index.html"><input class="return_home" type="button" value="Return Home"></a>
                <a href="movies.html"><input class="browse" type="button" value="Continue Browsing"></a>
                


            </div>
        </div>  
        <div class="push"></div>
        <footer class="footer">
           <table>
               <tr>
                   <td><a href="tnc.html"><small><b>Terms and Conditions</b></small></a></td>
               </tr>
               <tr>
                   <td><small><i>By using our servicces, you hereby agree to these terms. When you 
                       access this website, you acknowledge that you <br>have read and agree to abide by 
                       the terms described. If you do not agree to the terms, 
                       you should exit this site. <br>&copy; SJ Groups Company</i></small>
                       
                    </td>
               </tr>
           </table>
        </footer>      

    </div>

</body>
<?php 
    session_destroy()
?>
</html>