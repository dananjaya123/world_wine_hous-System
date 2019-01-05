<?php
/**
 * Created by IntelliJ IDEA.
 * User: asitha
 * Date: 12/7/2018
 * Time: 1:31 PM
 */

interface ItemBusiness
{
    public function addItem(item $item):bool;
    public function deleteItem(string $id):bool ;
    public function searchItem(string $id):array ;
    public function updateItem(item $item):bool ;
    public function getAll():array ;
}