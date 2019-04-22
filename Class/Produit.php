<?php
include_once 'Connection/connect.php' ;
include_once("Connection/set.php");
class Produit
{


    private $conn;

    public function __construct()
    {
        $idcon = connecting("projet_web", "set");
        $this->conn = $idcon;
    }

    public function ajoutProduit(ProduitVO $ajout)
    {

        $id = $ajout->getId();
        $nom = $ajout->getNom();
        $desc = $ajout->getDesc();
        $prix = $ajout->getPrix();
        $quant = $ajout->getQuant();
        $categorie = $ajout->getCategorie();
        $image = $ajout->getImage();
        $stmt = $this->conn->prepare("INSERT INTO produits(
                                                                    nom,
                                                                    description,
                                                                    prix,quantite,
                                                                    categorie,
                                                                    image) 
                                                VALUES (
                                                        :nom,
                                                        :desc,
                                                        :prix,
                                                        :quant,
                                                        :categorie,
                                                        :image)");

        $stmt->bindparam(":nom", $nom);
        $stmt->bindparam(":desc", $desc);
        $stmt->bindparam(":prix", $prix);
        $stmt->bindparam(":quant", $quant);
        $stmt->bindparam(":categorie", $categorie);
        $stmt->bindparam(":image", $image);

        if ($stmt->execute()) {

            header("location: ../gestProduit.php");


        }
        else
        {
            echo "You Cannot insert Twice the same Data";
        }

    }


    public function ListProduit()
    {
        $result = $this->conn->query("SELECT * FROM produits");

        $res = array();
        if ($result->rowCount() > 0) {
            // output data of each row
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

                array_push($res, $row);


            }
        } else {
            echo "0 results";
        }
        return $res ;
    }

    public function ListCategorie()
    {
        $result = $this->conn->query("SELECT * FROM categories");

        $res = array();
        if ($result->rowCount() > 0) {
            // output data of each row
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

                array_push($res, $row);


            }
        } else {
            echo "0 results";
        }
        return $res ;
    }

    public function rechercheProduit($name)
    {
        $result = $this->conn->query("SELECT * FROM produits WHERE nom='".$name."';");

        $res = array();
//        if ($result->rowCount() > 0 ) {
//            // output data of each row
//            while($row = $result->fetchAll(PDO::FETCH_ASSOC)) {
//             $res = array_push($res,$result->fetchAll(PDO::FETCH_ASSOC)) ;
//            }
//        } else {
//            echo "0 results";
//        }
        return $result->fetchAll(PDO::FETCH_ASSOC) ;
    }
    }