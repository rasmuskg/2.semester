# 2. semester


![use case](https://user-images.githubusercontent.com/93712648/174123500-d58f97e6-ff85-4d59-b4bc-e94644a4e0fc.png)

<h2>2. Design Database</h2>
![erd](https://user-images.githubusercontent.com/93712648/174128253-895c958a-a58b-4215-b1de-9aa25836a68b.png)


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

<h2>Kriterier for oprettelse af en post i databasen</h2>

<h3>User</h3>
Før en user kan oprettes, skal samtlige felter (kolonner) i tabellen være udfyldt.

<h3>Article</h3>
Før en artikel kan oprettes men ikke publiceres, skal følgende kriterier være opfyldt: article_name skal være udfyldt.

Før en artikel kan publiceres, skal samtlige felter (kolonner) i tabellen være udfyldt.

<h3>Hovedkategori</h3>
Før en hovedkategori (maincat) kan oprettes, skal samtlige felter (kolonner) i tabellen være udfyldt.

<h3>Underkategori</h3>
Før en underkategori (subkat) kan oprettes, skal samtlige felter (kolonner) i tabellen være udfyldt.
