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
        $this->conn = $this->buildConnector(SERVER, DB, USER, PASS);
    }


    public function buildConnector($srv, $db, $usr, $pass)
    {
        //Create the mysql connection that is used to query the database
        if (mysqli_connect_errno()) die("Could not connect to the database " . $db . " : ") . mysqli_connect_error();
        else return mysqli_connect($srv, $usr, $pass, $db);
    }

    public function selectCat($cat)
    {
        //query the db on passed categorie
        $myArray = Array();
        $sql = "SELECT * FROM categorie WHERE cat LIKE '%" . $cat . "%'";
        $data = mysqli_query($this->conn, $sql);
        while ($row = $data->fetch_assoc()) {
            array_push($myArray, $row);
        }
        return $myArray;
    }


    public function close()
    {
        //close the db connection
        $this->conn->close();
        return "Connection has been closed.";
    }

}
