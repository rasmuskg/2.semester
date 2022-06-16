<?php
//Create database
$servername = "localhost";
$username = "root";
$password = "";
/* Her oprettes forbindelsen, dette er dog flyttet efterfølgende til filen addConnect.php */
$dbconnect = new mysqli($servername, $username, $password);
/* Check if connection is established */
if ($dbconnect->connect_error) {
    die("Connection failed: " . $dbconnect->connect_error);
/* Create database */
$sql = "CREATE DATABASE IKEADB";
if ($dbconnect->query($sql) === TRUE) {
    echo "Database created";
}
else
{
    echo "Error while establishing to database: " . $dbconnect->error;
}
$dbconnect->close();
?>

<?php
//Table creation
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "IKEADB";
//Establishing connection to database with name of database
$dbconnect = new mysqli($servername, $username, $password, $dbname);
/* Another check if connection to database is established */
if ($dbconnect->connect_error) {
    die("Connection failed: " . $dbconnect->connect_error);
/* Create table */
$user = "CREATE TABLE USER (
    user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_firstname VARCHAR(30) NOT NULL,
    user_lastname VARCHAR(30) NOT NULL,
    user_email VARCHAR(30) NOT NULL,
    user_passw CHAR(128),
    ROLE VARCHAR(9)
    )";

$article = "CREATE TABLE ARTICLE (
    article_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    article_name VARCHAR(30) NOT NULL,
    article_maincat VARCHAR(30) NOT NULL,
    article_subcat VARCHAR(30) NOT NULL,
    article_image VARCHAR(30) NOT NULL,
    article_creator VARCHAR(30) NOT NULL,
    article_created VARCHAR(30) NOT NULL,
    article_status VARCHAR(30) NOT NULL,
    article_description VARCHAR(128) NOT NULL
    )";

$maincat = "CREATE TABLE USER (
    maincat_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    maincat_name VARCHAR(30) NOT NULL,
    maincat_created VARCHAR(30) NOT NULL,
    maincat_image VARCHAR(30) NOT NULL
    )";

$subcat = "CREATE TABLE USER (
    subcat_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    subcat_name VARCHAR(30) NOT NULL,
    subcat_parent VARCHAR(30) NOT NULL,
    subcat_image VARCHAR(30) NOT NULL,
    subcat_created VARCHAR(30) NOT NULL
    )";    

$tables = [$user, $article, $maincat, $subcat];


foreach($tables as $k => $sql){
    $query = @$conn->query($sql);

    if(!$query)
       $errors[] = "Table $k : Creation failed ($conn->error)";
    else
       $errors[] = "Table $k : Creation done";
}


foreach($errors as $msg) {
   echo "$msg <br>";
}
$dbconnect->close();
?>
