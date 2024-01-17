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
        echo "Alazellaz";
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

    }

}