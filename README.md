# OmniCompare - SaaS comparison
### Overview
First bigger personal project, compares SaaS (for now online meetings services) based on a survey where users can select from price range, wanted features and others.

#### Used technologies 
Developed locally with XAMPP, using Apache server and MySql. Frontend: html5, css3, bootstrap4, scss, JavaScript. Backend: php, mysql.

#### Running the Project
Live version: [link to Heroku](https://omnicompare-ul.herokuapp.com/index.php)
From the repo:
Using XAMPP:
1.Copy the project in your htdocs dir.
2.Start XAMPP and Start Apache & MySql.
3.Go to PhpMyAdmin and run backend/saas_db.sql to creat and populate the database.
4.Open the includes/connect_to_db.php file and change hostname to localhost, username to root, password to "" and database to saas_db. You should now be able to connect to this database.
5.Open http://localhost/SaaS/index.php :)



TO DO
* Make image size smaller so it loads faster
* Make the carrousel responsive for 800x1280 
* ~~Validate form~~
* don't show price in cards if its null
* make cards same size (card-body)
* ~~make form required~~
* make the form validation on first 2 not like moms spaghetti 
* ~~error message on form if not number~~
* take me home when clicking on the logo
* ~~make the links on index work~~
* on half screen the caroousel text is too big
