<?php
    session_start();

    # db credentials
    $servername ="localhost";
    $username = "root";
    $password = "";
    $dbname = "movie";

    # get user selection of movie: movie_id
    $movie_id = (int)$_GET['movie'];
    $_SESSION['movie_id'] = $movie_id;

    # connect to db and fetch movie detail of "movied_id"
    $db = mysqli_connect($servername, $username, $password, $dbname); // connect to db server
    if(!$db) {
        die("Connection error:" . mysqli_connect_error());
    }
    $query = "SELECT * FROM MOVIE WHERE movie_id=$movie_id"; // formulate query
    $result = $db->query($query); // point db to query
    $row = $result->fetch_assoc();

    # format of MOVIE table: `movie_id`, `movie_name`, `duration`, `language`, `genre`, `distributor`, `release_date`, `image_dir`, `synopsis`, `rating`, `cast`, `director`
    # store all attr of the movie into variables to populate html codes below
    $movie_name = $row['movie_name'];
    $duration = $row['duration'];
    $language = $row['language'];
    $genre = $row['genre'];
    $distributor = $row['distributor'];
    $release_date = $row['release_date'];
    $image_dir = $row['image_dir'];
    $synopsis = $row['synopsis'];
    $rating = $row['rating'];
    $cast = $row['cast'];
    $director = $row['director'];

    $result->free();
    $db->close();
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SJ Theatres - Movies</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="shortcut icon" type="image/jpg" href="./logo.PNG"/>
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
            <li><a href="movies.html">Movie</a></li>
            <li><?php echo $movie_name ?></li>
        </ul>

        <div class="content">
            <!---------------------------------------------------------------content here---------------------------------------------------->
            <?php
                # `movie_id`, `movie_name`, `duration`, `language`, `genre`, `distributor`, `release_date`, `image_dir`, `synopsis`, `rating`, `cast`, `director`
            ?>
            <div class="mini_wrapper">
                <h2 class="movie_title"><?php echo $movie_name ?></h2>
                <p class="rating">(<?php echo $rating?>)</p>
                <hr class="movie_title">
                <br>
                <div class="individual_mov">
                    <div id="img">
                        <img src="<?php echo $image_dir ?>" alt="movie poster">
                    </div>
                    <div id="info">
                        <div id="details">
                            <h3>Details</h3>
                            <table class="individual_mov">
                                <tr>
                                    <td rowspan="2" class="label">Cast: </td>
                                    <td rowspan="2" class="detail"><?php echo $cast ?></td>
                                    <td class="label">Release:</td>
                                    <td class="detail"><?php echo $release_date ?></td>
                                </tr>
                                <tr>
                                    <td class="label">Running Time: </td>
                                    <td class="detail"><?php echo $duration ?> mins</td>
                                </tr>
                                <tr>
                                    <td class="label">Director: </td>
                                    <td class="detail"><?php echo $director ?></td>
                                    <td class="label">Distributor: </td>
                                    <td class="detail"><?php echo $distributor ?></td>
                                </tr>
                                <tr>
                                    <td class="label">Genre: </td>
                                    <td class="detail"><?php echo $genre ?></td>
                                    <td class="label">Language: </td>
                                    <td class="detail"><?php echo $language ?></td>
                                </tr>
                            </table>
                        </div>
                        <div id="synopsis">
                            <h3>Synopsis</h3>
                            <p><?php echo $synopsis ?></p>
                        </div>
                    </div>
                </div>
                <div class="booking">
                    <!-------------------------BOOKNG CODES HERER-------------------------->
                    <form class="booking" action="ticket_purchase_cont.php" method="get">
                        <table class="booking">
                        <tr>
                            <td>
                                Please Choose Date and Timing for Movie: <br><br>Date: 
                                <Select name = "date"> // drop down table for dates
                                    <option value = "14-Dec-2021">14/12/21</option>
                                    <option value = "15-Dec-2021">15/12/21</option>
                                    <option value = "16-Dec-2021">16/12/21</option>
                                </select>
                                <br><br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <br>
                                <input class="ticket_timing_button" name = "timingButton" type="submit" value="1000">
                                <input class="ticket_timing_button" name = "timingButton" type="submit" value="1400">
                                <input class="ticket_timing_button" name = "timingButton" type="submit" value="1600">
                                <input class="ticket_timing_button" name = "timingButton" type="submit" value="1800">
                                <input class="ticket_timing_button" name = "timingButton" type="submit" value="2000">
                            </td>
                        </tr>
                        </table>
                    </form>
                </div>

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
</html>