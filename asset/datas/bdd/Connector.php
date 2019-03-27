<?php
//php 7.3.0

require('dbinfo.php');

class Connector
{

    /*The class Connector is going to handle the db connection and queries.
    *Takes the no parameters for the __construct method.
    *
    *The selectCat method use the cat passed on parameter to return
    *an array containing all the products from this categorie.
    */

    private $conn;


    public function __construct()
    {
        $this->setConn($this->buildConnector(SERVER, BD, USER, PASS));
    }


    public function buildConnector($srv, $db, $usr, $pass)
    {
        return new PDO("mysql:host=".$srv.";dbname=".$db, $usr, $pass);
    }

    public function selectCat($cat)
    {
        //query the db on passed categorie
        try {
            $sql = "SELECT name, path, description, unitPrice, taste, thirsty, bitterness, alcohol, "
            ." fermentation, sixPackPrice, kegPrice, country, cat FROM categorie WHERE cat LIKE :cat";
            $prep = $this->conn->prepare($sql);
            $prep->bindValue(':cat','%'. $cat . '%', PDO::PARAM_STR);
            $prep->execute();
            $myArray = $prep->fetchAll();
        }catch(PDOException $e){
            return $e;
        }

        return $myArray;
    }


    public function close()
    {
        //close the db connection
        $this->conn->close();
        return "Connection has been closed.";
    }

    /**
     * @return PDO
     */
    public function getConn()
    {
        return $this->conn;
    }

    /**
     * @param PDO $conn
     */
    public function setConn($conn)
    {
        $this->conn = $conn;
    }

}
