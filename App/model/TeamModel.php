<?php
// model

    function connexion(){
        return  new PDO('mysql:dbname=matsh_ticket;host=localhost', 'root', '');
    }

    // afficher la liste de teams
    function affiche(){
        $pdo = connexion();
        // return $pdo->query('SELECT * FROM sqaud')->fetchAll(PDO::FETCH_OBJ);
        $squads = $pdo->query('SELECT * FROM sqaud')->fetchAll(PDO::FETCH_OBJ);
        return $squads;
    }

    function create(){
        $name = $_POST["name"];
        $description = $_POST["description"];

        $pdo = connexion();
        $sql = $pdo -> prepare('INSERT INTO sqaud VALUES (null,?,?)');
        return $sql -> execute([$name,$description]);
    }

    function info($id){
        $pdo = connexion();
        $sqlstate = $pdo->prepare('SELECT * FROM sqaud WHERE id = ?');
        $sqlstate->execute([$id]);
        // selectionner un seul team
        return $sqlstate -> fetch(PDO::FETCH_OBJ);
    }
    // function edit(){
    //     $pdo = connexion();
        
    // }

    function delete($id){
        $pdo = connexion();
        $sqlstate = $pdo->prepare('DELETE FROM sqaud WHERE id = ?');
        return $sqlstate->execute([$id]);
    }
   