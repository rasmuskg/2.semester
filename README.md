# 2. semester


![use case](https://user-images.githubusercontent.com/93712648/174123500-d58f97e6-ff85-4d59-b4bc-e94644a4e0fc.png)
![erd](https://user-images.githubusercontent.com/93712648/174124480-adf3b7d3-5784-4b08-96a5-78f0fdb42a02.png)

I vores database, IKEADB, har vi behov for 4 tabeller: user, article, maincat og subcat. Disse 4 tabeller udgør databasens entiteter. Ovenstående ER Diagram viser relationen mellem databasens entiteter. Multipliciteten eller kardinaliteterne forklares således: 

**User > Article**
En user (contributor) kan have nul eller flere artikler.
 
**Article > User**
En artikel kan kun have én user (contributor). 

