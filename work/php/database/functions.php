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
 * Select everything from the database table  * tech.
 * 
 * @var object $db - database object
 */
function selectAll($db){

    try{

        $query = "SELECT * FROM tech;";

        $stmt = $db->prepare($query);
        $stmt->execute();

        $res = $stmt->fetchAll();

    }catch(PDOException $e) {
        echo "Error executing the query:<br>\n";
        print_r($query);
        throw $e;
    }

    return $res;

}

/**
 * Select everything from the row with the   * specified ID.
 * 
 * @var object $db
 * @var int $id
 * 
 */
function selectId($db, $id){
    
    try{
        $query = "SELECT * FROM tech 
        WHERE id = ?";
        
        $stmt = $db->prepare($query);
        $stmt->execute([$id]);

        $res = $stmt->fetch();
        
    }catch(PDOException $e) {
        echo "Error executing the query:<br>\n";
        print_r($query);
        throw $e;
    }

    return $res;
}

/**
 * Select everything from the specified table * that contains the specified value
 * 
 * @var object $db - database that is connected to
 *
 * @var string $value - variable that specifies a value used in the where statement
 * 
 */

 function selectWildcard($db, $value){

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

 /**
  * Insert a new row into the tech table
  *
  * @var object $db - database object
  * @var string $name - name of the product
  * @var string $type - type of the product
  * @var string $manufacturer - manufacturer * of the product
  *
  */
 function insertTech($db, $manufacturer, $name, $type){
    
    try{
        $query = "INSERT INTO tech (manufacturer, name, type) VALUES (?, ?, ?)";
        
        $stmt = $db->prepare($query);
        $stmt->execute([$name, $type, $manufacturer]);
        
    }catch(PDOException $e) {
        echo "Error executing the query:<br>\n";
        print_r($query);
        throw $e;
    }

 }

 /**
  * Function to update a specific row in the * database table tech
  *
  * @var object $db
  * @var int $id
  * @var string $manufacturer
  * @var string $name
  * @var string $type
  *
  */
 function updateTech($db, $id, $manufacturer, $name, $type){

    try{
        $query = "UPDATE tech SET manufacturer = ?, name = ?, type = ? WHERE id = ?";
        
        $stmt = $db->prepare($query);
        $stmt->execute([$manufacturer, $name, $type, $id]);
        
    }catch(PDOException $e) {
        echo "Error executing the query:<br>\n";
        print_r($query);
        throw $e;
    }

 }

 /**
  * Function used to delete a row in the database with the help of ID
  *
  * @var object $db - database object
  * @var int $id - id of the to row to delete
  */
function delete($db, $id){
    try{
        $query = "DELETE FROM tech WHERE id = ?";
        
        $stmt = $db->prepare($query);
        $stmt->execute([$id]);
        
    }catch(PDOException $e) {
        echo "Error executing the query:<br>\n";
        print_r($query);
        throw $e;
    }
}
