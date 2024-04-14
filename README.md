DataGraffix is a project concerning data visualization on a web application.
The application uses XAMPP's technologies to set up a local web server and the files should be stored in the \xaamp\htdocs directory.

The web application takes advantage of the JavaScript Chart.js library to draw charts on the website. 
The Graphs.php file is a part of the web page used to draw graphs based on the data stored in XAMPP's MariaDB dbms.
The data is stored in an Excel file in dbms.
The Connection.php file creates a PDO connection between the application and the dbms.
Query.php applies a query to the data, retrieves them and transfers them to the client side.

Create.php allows the user to enter their own data via the keyboard and then create their own charts.
Upload.php similarly allows the user to enter their own data by uploading an Excel file and then proceed to create their own charts.
