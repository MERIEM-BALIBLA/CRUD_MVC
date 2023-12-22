<?php
// controller
    // namespace Appcontoller;

    require_once 'model/TeamModel.php';
    function readAction(){
        // lier model avec controller
        $squads = affiche();
        // lier view avec controller 
        require_once 'view/Team/TeamList.php';
    }

    function createAction(){
        require_once 'view/Team/create.php';
    }

    function insertAction(){
        create();
        header("Location: index.php");

    }

    function editAction(){
        $id = $_GET['id'];
        $squad = info($id);
        require_once 'view/Team/edit.php';
    }
    // function updateAction(){
    //     var_dump($_POST);
    //     edit();
    // }
   
    function deleteAction(){
        $id = $_GET['id'];
        require_once 'view/Team/delete.php';
    }

    function destroyAction(){
        $id = $_GET['id'];
        delete($id);
        header("Location: index.php");
    }