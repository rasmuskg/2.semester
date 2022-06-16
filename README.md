# 2. semester

<h2>1. Analyse og design</h2>

<h3>Use case diagram for webapp'en.</h3>

![use case](https://user-images.githubusercontent.com/93712648/174123500-d58f97e6-ff85-4d59-b4bc-e94644a4e0fc.png)

<h3>Wireframes (contributor)</h3>
LINK

<img width="1440" alt="1" src="https://user-images.githubusercontent.com/93712648/174129466-e22b5e86-81c0-47ca-937f-a50f9be6e839.png">
<img width="1440" alt="2" src="https://user-images.githubusercontent.com/93712648/174129519-1ca3b7b0-1751-47ea-acdb-ef6fc593b396.png">
<img width="1440" alt="3" src="https://user-images.githubusercontent.com/93712648/174129539-125084cf-b339-412a-9db5-745cc20f7276.png">
<img width="1440" alt="4" src="https://user-images.githubusercontent.com/93712648/174129753-0dd40e5b-5154-4bec-9e6d-93a4bebe91e6.png">
<img width="1440" alt="5" src="https://user-images.githubusercontent.com/93712648/174129756-c49362f7-6a4c-4ebe-ae0d-49915464d91e.png">
<img width="1440" alt="6" src="https://user-images.githubusercontent.com/93712648/174129761-f5dbc803-b390-469f-b284-3e9a9af069ae.png">
<img width="1440" alt="7" src="https://user-images.githubusercontent.com/93712648/174129767-1efa1ffd-0524-4c6c-9a68-23ac0884ab24.png">

<h2>2. Design database</h2>

ER diagram med entiteter, relationer og kardinaliteter.
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


<h2>3. Implementer database</h2>
