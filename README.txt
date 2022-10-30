confirmation.html
----------------------------------	
this is the summary page, need to change to php, display all the session variables, ie, seat, movie name, personal paritculars etc. Clicking on pay should trigger a php file to run an INSERT into the db booking table and send out an email. The php file should display "confirmation email has been sent to _____" and maybe a booking id for reference. Then maybe can allow user to return to home via a button.



movies.html
-----------------------------------
this page displays all the movie showing and coming soon in small posters for selection. Selecting the book button of each poster leads to individual movie's page.



movie1.html
-----------------------------------
having a html page for each movie is not very ideal, maybe can have php generate this page dynamically based on which movie was clicked on in movies.html
this page should contian, the movie's write up, large poster and movie timings


personal_detail.html
----------------------------------
this is a user detail input form page, takes in user detail add to session variables



check_booking.php
----------------------------------
incomplete page, suppose to fetch booking detail data from database based on the info keyed in.

ie 
SELECT * 
FROM BOOKING
WHERE email = $email

if got multiple booking should show multiple booking infos

