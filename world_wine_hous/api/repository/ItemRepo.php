<?php
/**
 * Created by IntelliJ IDEA.
 * User: asitha
 * Date: 12/7/2018
 * Time: 9:21 AM
 */

require_once __DIR__ . "/../cor/Item.php";

interface ItemRepo
{
public function setConnection(mysqli $connection):void ;
public function addItem(item $item):bool;
public function deleteItem(string $id):bool ;
public function searchItem(string $id):array ;
public function updateItem(item $item):bool ;
public function getAll():array ;


}