<?php
include_once 'Connection/connect.php' ;
include_once("Connection/set.php");
class Category
{


    private $conn;

    public function __construct()
    {
        $idcon = connecting("projet_web", "set");
        $this->conn = $idcon;
    }

    public function ajoutCategorie(CategoryVO $categorie)
    {


        $nom = $categorie->getNom();
        $chemin = $categorie->getChemin();
        $parent = $categorie->getChemin();

        $stmt = $this->conn->prepare("INSERT INTO categories(
                                                                    nom,
                                                                    chemin,
                                                                    parent) 
                                                VALUES (
                                                        :nom,
                                                        :chemin,
                                                        :parent
                                                      )");

        $stmt->bindparam(":nom", $nom);
        $stmt->bindparam(":chemin", $chemin);
        $stmt->bindparam(":parent", $parent);
       ;

        if ($stmt->execute()) {

            header("location: ../gestCommande.php");


        }
        else
        {
            echo "You Cannot insert Twice the same Data";
        }

    }



    }