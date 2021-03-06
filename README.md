# 2. semester eksamensopgave - Systemudvikling og Softwarekonstruktion

<h2>1. Analyse og design</h2>

<h3>Use case diagram for webapp'en.</h3>

![use case](https://user-images.githubusercontent.com/93712648/174123500-d58f97e6-ff85-4d59-b4bc-e94644a4e0fc.png)

For at få adgang til profil-siden på denne webapp, hvor brugeren (user/contributor) har adgang til alle funktioner, skal brugeren først logge ind. Hvis brugeren har et login, kan der straks logges ind. Hvis ikke, skal brugeren først oprette et login. 

Når brugeren logger ind med forkerte oplysninger, melder systemet fejl. Desuden skal passwordet bekræftes i databasen, før brugeren får adgang. 

Fra brugerens profilside er der adgang til at: Se egne hacks (my hacks), se andres hacks (all hacks), lave et hack (create hack), gemme et hack (save hack) og bedømme et hack (rate hack).



<h3>Wireframes (contributor)</h3>
<a href="https://www.figma.com/proto/4Qh4LO264MYrTCj1ktGnsA/IKEA-Hacks---Contributor?node-id=14%3A2&starting-point-node-id=14%3A2" target="_blank">Se klikbar prototype her</a><br><br>

<img width="1432" alt="1" src="https://user-images.githubusercontent.com/93712648/174130216-4a7ff6aa-6811-4598-9314-0a95ac089982.png">1. Brugeren får mulighed for at 1) logge ind 2) oprette en bruger.
<br>
<br>
<img width="1435" alt="2" src="https://user-images.githubusercontent.com/93712648/174130227-3a837847-faba-4295-b59b-3541420325b7.png">2. Brugeren udfylder sin e-mailadresse samt adgangskode for at logge ind.
<br>
<br>
<img width="1436" alt="3" src="https://user-images.githubusercontent.com/93712648/174130232-9ab35cf0-287c-4b15-b311-289b90ed00f1.png">3. Hvis brugeren ikke allerede har et login, kan brugeren nu oprette sig et login.
<br>
<br>
<img width="1435" alt="4" src="https://user-images.githubusercontent.com/93712648/174130241-7b05e4ac-900d-4852-b53f-1c8ecbb4889e.png">4. Når brugeren er logget ind, vil brugeren se profilsiden. Fra profilsiden kan brugeren se sine seneste hacks, gemte hacks, oprette et hack samt gå til oversigten over alle hacks i systemet.
<br>
<br>
<img width="1436" alt="5" src="https://user-images.githubusercontent.com/93712648/174130245-ff0f0a83-fcb0-47a0-b5fa-54c3811c5e94.png">5. Når brugeren klikker ind på en artikel/et hack, får brugeren mulighed for at se flere oplysninger. Det gælder fx en beskrivelse samt et billede hvor det oprindelige IKEA-møbel er tagget. Derudover får brugeren også mulighed for at bedømme denne artikel samt gemme den til sin egen liste. Til sidst kan brugeren se flere hacks fra samme bruger, hvilket vil give god mening, hvis man godt kan lide den pågælende brugers stil, smag og styling.
<br>
<br>
<img width="1435" alt="6" src="https://user-images.githubusercontent.com/93712648/174130248-d67e8881-4639-4047-a486-ef74c79a7775.png">6. På oversigten over alle artikler/hacks, kan brugeren se de seneste hacks samt have mulighed for at finde hacks der matcher brugerens præferencer. For at finde netop disse artikler, kan brugeren finde frem til hacks med søgning på fritekst eller ved at navigere i tags og kategorier. Det vil sige, at der er god mulighed for at finde relevante hacks der igen matcher brugerens præferencer. Når der er foretaget en søgning, vises det pågældende resultat og systemet finder også lignende hacks.
<br>
<br>
<img width="1436" alt="7" src="https://user-images.githubusercontent.com/93712648/174130255-8c3032cb-6806-4f75-b414-dee8988fd2b5.png">7. Til sidst har brugeren mulighed for at påbegynde arbejdet med et hack. Det oprettes fra profilsiden. For at artiklen kan gemmes som kladde, skal der som minimum udfyldes en titel. Herefter kan artiklen gemmes så mange gange det ønskes. Når opslaget er færdiggjort og titel, kategori, tags, beskrivelse og billede er udfyldt, kan dette hack gøres offfentligt tilgængeligt på portalen. Der kan efterfølgende ændres i indholdet uden problemer.

<h3>Wireframes (administrator)</h3>
<a href="https://www.figma.com/proto/9PXVOB1noPOAKl3R8q4gbD/IKEA-Hacks---Administrator?node-id=14%3A2&starting-point-node-id=14%3A2" target="_blank">Se klikbar prototype her</a><br><br>

<img width="1437" alt="21" src="https://user-images.githubusercontent.com/93712648/174131073-7dc0a9d5-4722-4224-9189-8684d71c836f.png">1. Som medarbejder på systemet, bruger man en anden URL for at tilgå backenden. Når administratoren tilgår siden, skal han trykke log ind.
<br>
<br>
<img width="1437" alt="22" src="https://user-images.githubusercontent.com/93712648/174131080-39287a5d-b54c-42c7-8074-6bc29b6dd7a4.png">2. Medarbejderen skal logge ind med sin mail samt den dertil knyttede adgangskode.
<br>
<br>
<img width="1437" alt="23" src="https://user-images.githubusercontent.com/93712648/174131090-e47b89c1-facc-47b1-a0a1-02dc95bfae04.png">3. Fra profilsiden kan medarbejderen se kategorier og nyeste hacks, samt tilgå oversigten over alle hacks. Derudover kan medarbejderen også vedligeholde kategorier og underkategorier ved at tilføje og slette. Det kan opstå fejl, trends stopper og nye kommer til. Derfor er det vigtigt, at dette kan håndteres nemt på platformen.
<br>
<br>
<img width="1437" alt="24" src="https://user-images.githubusercontent.com/93712648/174131098-8dfd3d3c-3dec-4586-a7cc-acbef5e2be34.png">4. Når medarbejderen skal oprette en ny kategori, skal der udfyldes en titel, et tag, en forældre hvis det er en underkategori samt en beskrivelse af kategorien og et billede til at fuldende det visuelle udtryk.
<br>
<br>
<img width="1438" alt="25" src="https://user-images.githubusercontent.com/93712648/174131109-247c234c-fba6-42a4-9bd6-fcf2c208ab92.png">5. Ligesom en almindelig bruger/contributor, har medarbejderen også adgang til det samlede overblik over hacks med kategorisøgning samt fritekst søgning. Fra denne oversigt har medarbejderen mulighed for at se opslag og evt. foretage en handling, hvis det er påkrævet.
<br>
<br>
<img width="1437" alt="26" src="https://user-images.githubusercontent.com/93712648/174131115-0dbc5cb5-5967-4acd-90e4-1908c7ca7d3b.png">6. Hvis et hack ikke lever op til retningslinjerne eller det er sket fejl i oprettelsen, har medarbejderen mulighed for at slette et opslag. Det skal dog kun bruges i nødstilfælde og i forbindelse med at der modereres på artiklerne.

<br><br>
<h2>2. Design database</h2>

ER diagram med entiteter, relationer og kardinaliteter.
![erd](https://user-images.githubusercontent.com/93712648/174136607-7502ac43-8e98-4019-8ac2-c262a1c10706.png)


I vores database, IKEADB, har vi behov for 4 tabeller: user, article, maincat og subcat. Disse 4 tabeller udgør databasens entiteter. Ovenstående ER Diagram viser relationen mellem databasens entiteter. Multipliciteten eller kardinaliteterne forklares således: 

**User > article**
En user (contributor) kan have nul eller flere artikler.
 
**Article > user**
En artikel kan kun have én user (contributor). 

**Article > maincat**
En artikel kan kun have én hovedkategori (maincat).

**Maincat > article**
En hovedkategori kan have nul eller flere artikler.

**Article > subcat**
En artikel kan have nul eller flere underkategorier (subcat). 

**Subcat > article**
En underkategori (subcat) kan have nul eller flere artikler.


<h3>Kriterier for oprettelse af en post i databasen</h3>

<h4>User</h4>
Før en user kan oprettes, skal samtlige felter (kolonner) i tabellen være udfyldt.

<h4>Article</h4>
Før en artikel kan oprettes men ikke publiceres, skal følgende kriterier være opfyldt: article_name skal være udfyldt.

Før en artikel kan publiceres, skal samtlige felter (kolonner) i tabellen være udfyldt.

<h4>Hovedkategori</h4>
Før en hovedkategori (maincat) kan oprettes, skal samtlige felter (kolonner) i tabellen være udfyldt.

<h4>Underkategori</h4>
Før en underkategori (subkat) kan oprettes, skal samtlige felter (kolonner) i tabellen være udfyldt.

<br><br>
<h2>3. Oprettelse af database samt tabeller</h2>

```php
<?php
//Create database
$servername = "localhost";
$username = "root";
$password = "";
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
```

<br><br>
<h2>4. Udfyld database</h2>

![Blank diagram - Page 1](https://user-images.githubusercontent.com/93712648/174152252-feb5c957-5077-41b6-a9c7-76462c822439.png)
<br><br>
<h2>5. Databasefunktioner</h2>


<h3>Vis over- og underkategorier</h3>

```php
SELECT mainnav.maincat_name, subcat.subcat_name  
FROM mainnav  
JOIN subcat
ON mainnav.maincat_name = subcat.subcat_name
```

<h3>Vis overkategorier og antal underkategorier der er hhv. oprettet og synlige for online brugere</h3>

```php
SELECT * FROM maincat, subcat;
```

<h3>Vis underkategorier og antallet af indlæg der registreret under dem hver især</h3>

```php
SELECT maincat.maincat_name, subcat.subcat_name, COUNT(*) FROM campers GROUP BY maincat.maincat_name, subcat.subcat_name;
```

<h3>Søg efter indlæg skrevet om varen, Malm</h3>

```php
SELECT *
FROM `article`
WHERE `article` LIKE '%malm%'
```

<h3>Vis information om contributors</h3>

```php
SELECT * FROM users;
```

<h3>Vis information om contributors indlæg</h3>

```php
SELECT * FROM articles;
```
