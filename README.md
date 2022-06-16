# 2. semester

<h2>1. Analyse og design</h2>

<h3>Use case diagram for webapp'en.</h3>

![use case](https://user-images.githubusercontent.com/93712648/174123500-d58f97e6-ff85-4d59-b4bc-e94644a4e0fc.png)

<h3>Wireframes (contributor)</h3>
LINK

<img width="1432" alt="1" src="https://user-images.githubusercontent.com/93712648/174130216-4a7ff6aa-6811-4598-9314-0a95ac089982.png">
<img width="1435" alt="2" src="https://user-images.githubusercontent.com/93712648/174130227-3a837847-faba-4295-b59b-3541420325b7.png">
<img width="1436" alt="3" src="https://user-images.githubusercontent.com/93712648/174130232-9ab35cf0-287c-4b15-b311-289b90ed00f1.png">
<img width="1435" alt="4" src="https://user-images.githubusercontent.com/93712648/174130241-7b05e4ac-900d-4852-b53f-1c8ecbb4889e.png">
<img width="1436" alt="5" src="https://user-images.githubusercontent.com/93712648/174130245-ff0f0a83-fcb0-47a0-b5fa-54c3811c5e94.png">
<img width="1435" alt="6" src="https://user-images.githubusercontent.com/93712648/174130248-d67e8881-4639-4047-a486-ef74c79a7775.png">
<img width="1436" alt="7" src="https://user-images.githubusercontent.com/93712648/174130255-8c3032cb-6806-4f75-b414-dee8988fd2b5.png">


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
