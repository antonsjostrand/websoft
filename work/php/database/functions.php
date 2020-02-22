<?php

/**
 * Open the database file and catch the exception it it fails
 *
 * @var array $dsn with connection details
 *
 * @return object database connection
 */
function connectDatabase(array $dsn)
{
    try {
        $db = new PDO(
            $dsn["dsn"],
            $dsn["username"],
            $dsn["password"]
        );

        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Failed to connect to the database using DSN:<br>\n";
        print_r($dsn);
        throw $e;
    }

    return $db;
}

/**
 * Select everything from the specified table * that contains the specified value
 * 
 * @var object $db - database that is connected to
 *
 * @var string $value - variable that specifies a value used in the where statement
 * 
 */

 function selectAll($db, $value){

    try{
        $like = "%$value%";

        $query = "SELECT * FROM tech 
        WHERE id = ?  
        OR name LIKE ?
        OR type LIKE ?
        OR manufacturer LIKE ?;
        ";
        
        $stmt = $db->prepare($query);
        $stmt->execute([$value, $like, $like, $like]);

        $res = $stmt->fetchAll();
        
    }catch(PDOException $e) {
        echo "Error executing the query:<br>\n";
        print_r($query);
        throw $e;
    }

    return $res;

 }