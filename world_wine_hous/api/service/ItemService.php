<?php
/**
 * Created by IntelliJ IDEA.
 * User: asitha
 * Date: 12/7/2018
 * Time: 12:59 PM
 */

require_once  __DIR__."/../business/impl/ItemBusinessImpl.php";
require_once __DIR__ . "/../cor/Item.php";


$itemBO=new ItemBusinessImpl();
$method=$_SERVER["REQUEST_METHOD"];

switch ($method) {
    case "GET":
        echo json_encode($itemBO->getAll());
        break;

    case "POST":
        $id = $_POST["itemCode"];
        $type = $_POST["type"];
        $countries = $_POST["cuntries"];
        $brand = $_POST["brand"];
        $unitPrice = $_POST["price"];
        $size = $_POST["size"];
        $age = $_POST["age"];
        $abv = $_POST["abv"];

                $tempItem = new item($id, $type, $countries, $brand, $unitPrice, $size, $age, $abv);
                $resp=$itemBO->addItem($tempItem);
                echo $resp;
                break;
    }
