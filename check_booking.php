<?php
    # db credentials
    $servername ="localhost";
    $username = "root";
    $password = "";
    $dbname = "movie";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Bookings</title>
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
                    <li class="nav"><a href="index.html">Home</a></li>
                    <li class="nav"><a href="movies.html">Movies</a></li>
                    <li class="nav"><a href="cinema.html">Cinema</a></li>
                    <li class="nav"><a class="active" href="javascript:openModal()">Check Booking</a></li> <!--trigger js to open modal-->
                </ul>
            </nav>
        </div>

        <div class="confirmation">
            <h2 style="text-align:center;">Bookings</h2>
            <?php

                $method = $_POST['check_method'];

                if ($method == 'email') {
                    $attr = 'email';
                    echo "checking with ".$attr.": ";
                    $email = $_POST['user_detail'];
                    echo "<u><span style='color: #ffd900;'>".$email."</span></u><br>";
                    $query = "SELECT * FROM ticketorders
                    WHERE email='$email'
                    GROUP BY booking_id";
                }


                if ($method == 'hp') {
                    $attr = 'phone no.';
                    echo "checking with ".$attr.": ";
                    $phone = $_POST['user_detail'];
                    $phone = (string)$phone;
                    echo $phone."<br>";
                    $query = "SELECT * FROM ticketorders
                    WHERE phone='$phone'
                    GROUP BY booking_id";
                }
                
                if ($method =='bookid') {
                    $attr = 'booking no.';
                    echo "checking with ".$attr.": ";
                    $bookid = $_POST['user_detail'];
                    $bookid = (int)$bookid;
                    echo $bookid."<br>";
                    $query = "SELECT * FROM ticketorders
                    WHERE booking_id='$bookid'
                    GROUP BY booking_id";
                }

                $db = mysqli_connect($servername, $username, $password, $dbname);
                if(!$db) {
                    die("Connection error:" . mysqli_connect_error());
                }
                // else {
                //     echo "connection success!";
                // }

                $result = $db->query($query);
                $num_results = $result->num_rows;

                if ($num_results < 1){
                    echo "<br><p>No records found!</p>";
                }
                else {
                    echo "<p>".$num_results." record(s) found: </p>";
                    $i = 0;
                    for ($i=0; $i <$num_results; $i++) {

                        $row = $result->fetch_assoc(); // fetches row iteratively
                        echo "<hr><p>".($i+1).". "; // .$row['timestamp'];
                        echo "<br /><span class='c'>Movie: </span>";
                        echo stripslashes($row['title']);
                        echo "<br /><span class='c'>Date: </span>";
                        echo stripslashes($row['dayofweek']);
                        echo "<br /><span class='c'>Time : </span>";
                        echo stripslashes($row['timing']);
                        echo "<br /><span class='c'>Seats : </span>";
                        
                        if ($method=='email'||$method=='hp'){$booking_id = $row['booking_id'];}
                        else {$booking_id = $bookid;}
                        $query2 = "SELECT * FROM ticketorders WHERE booking_id='$booking_id'";
                        $result2 = $db->query($query2);
                        $num_results2 = $result2->num_rows;
                        for ($j=0; $j <$num_results2; $j++) {
                            $row2 = $result2->fetch_assoc();
                            echo "&nbsp;".$row2['seat']."&nbsp;";
                        }
                        echo "<br><span class='c'>Booking ID: </span>";
                        echo htmlspecialchars(stripslashes($row['booking_id']));
                        echo "<hr>";
                        echo "</p>";
                    }
                }

                $result->free();
                $db->close();
                // echo $row;
                // // if (count($row))
                // $book_id = $row['book_id'];
                // $time = $row['date_time'];
                // echo "<p>time of purchase: ".$time;"</p>"
            ?>

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
</html>