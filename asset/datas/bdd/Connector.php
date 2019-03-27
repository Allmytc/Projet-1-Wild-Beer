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
            $prep = $this->getConn()->prepare($sql);
            $prep->bindValue(':cat','%'. $cat . '%', PDO::PARAM_STR);
            $prep->execute();
            $myArray = $prep->fetchAll();
        }catch(PDOException $e){
            return $e;
        }

        return $myArray;
    }

    public function addBeer($biere)
    {
        $sql = "INSERT INTO categorie (name, path, description, unitPrice, taste, thirsty, bitterness,"
            . "alcohol,  fermentation, sixPackPrice, kegPrice, country, cat) VALUES (:name, :path, :desc, :unitPrice,"
            . ":taste, :thirsty, :bitterness, :alcohol, :fermentation, :sixPackPrice, :kegPrice, :country, :cat)";
        try{
            $prep = $this->getConn()->prepare($sql);

            /*
            foreach ($biere as $key => $col) {
                $template = "':$key'";
                $prep->bindValue($template, $col, PDO::PARAM_STR);
            }
            */


            $prep->bindValue(':name', $biere['name'], PDO::PARAM_STR);
            $prep->bindValue(':path', $biere['path'], PDO::PARAM_STR);
            $prep->bindValue(':desc', $biere['desc'], PDO::PARAM_STR);
            $prep->bindValue(':unitPrice', $biere['unitPrice'], PDO::PARAM_STR);
            $prep->bindValue(':taste', $biere['taste'], PDO::PARAM_STR);
            $prep->bindValue(':thirsty', $biere['thirsty'], PDO::PARAM_STR);
            $prep->bindValue(':bitterness', $biere['bitterness'], PDO::PARAM_STR);
            $prep->bindValue(':alcohol', $biere['alcohol'], PDO::PARAM_STR);
            $prep->bindValue('fermentation', $biere['fermentation'], PDO::PARAM_STR);
            $prep->bindValue(':sixPackPrice', $biere['sixPackPrice'], PDO::PARAM_STR);
            $prep->bindValue(':kegPrice', $biere['kegPrice'], PDO::PARAM_STR);
            $prep->bindValue(':country', $biere['country'], PDO::PARAM_STR);
            $prep->bindValue(':cat', $biere['cat'], PDO::PARAM_STR);
            // not done at all no error but no insert either.
            $prep->execute();
            return $prep->fetchAll();
        }catch (PDOException $e){
            return $e;
        }
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
