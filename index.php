<?php

require 'database/database.php';
require 'database/connection.php';

$req = $_GET['req'] ?? $_POST['req'] ?? null;
$con = new Connection();
$reg = new Registrations($con->connect());

$template = "templates/";

switch ($req) {
    case 'home':
        $title = "Event X";
        $template .= 'home.php';
        break;

    case 'register':
        $title = "Event X - Register";
        $template .= 'register.php';
        break;

    case 'attendies':
        $regList = $reg->getRegList();
        $title = "Event X - Attendies";
        $template .= 'attendies.php';
        break; 

    case 'addreg': 
        $reg->addReg($_POST['name'], $_POST['email'], $_POST['seats'], $_POST['reason']);
        header('Location: index.php?req=attendies');
        break;

    case 'update':
        $regData = $reg->getRegData($_GET['id']);
        $title = "Event X - Edit Registration";
        $template .= 'editreg.php';
        break; 
    
    case 'editreg': 
        $reg->editReg($_POST['name'], $_POST['email'], $_POST['seats'], $_POST['reason'], $_POST['id']);
        header('Location: index.php?req=attendies');
        break;

    case 'delreg': 
        $reg->delReg($_GET['id']);
        header('Location: index.php?req=attendies');
        break;

    default:
        $title = "Event X";
        $template .= 'home.php';
        break;
}

require 'common/header.php';
require $template;
require 'common/footer.php';

?>