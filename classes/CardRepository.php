<?php

// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern
class CardRepository
{
    private DatabaseManager $databaseManager;

    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function create(): void
    {
        if (isset($_POST['submit'])) {
            // Retrieve the values from the form
            $name = $_POST['bookName'];
            $type = $_POST['bookType'];

            // Create an SQL query to insert a new record into the "books" table
            $query = "INSERT INTO books (name, type) VALUES (:name, :type)";
            $statement = $this->databaseManager->connection->prepare($query);

            // Bind parameters
            $statement->bindParam(':name', $name);
            $statement->bindParam(':type', $type);

            // Execute the query
            $statement->execute();
        }
    }

    // Get one
    public function find(): array
    {

    }

    // Get all
    public function get(): array
    {
        // TODO: Create an SQL query
        $query = "SELECT * FROM books";
        // TODO: Use your database connection (see $databaseManager) and send your query to your database.
        $statement = $this->databaseManager->connection->prepare($query);
        // TODO: fetch your data at the end of that action.
        $statement->execute();
        // TODO: replace dummy data by real one
        return $statement->fetchAll();
        
        // We get the database connection first, so we can apply our queries with it
        // return $this->databaseManager->connection-> (runYourQueryHere)
    }

    public function update(): void
    {

    }

    public function delete(): void
    {
       //$query = DELETE FROM 'books' WHERE id = //find way to get id of selected item
    }

}