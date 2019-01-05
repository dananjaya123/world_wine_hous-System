<?php
/**
 * Created by IntelliJ IDEA.
 * User: asitha
 * Date: 12/7/2018
 * Time: 10:58 AM
 */

require_once __DIR__."/../ItemRepo.php";
require_once __DIR__."/../../cor/Item.php";

class ItemRepoImpl implements ItemRepo{
    private $connection;

    /**
     * ItemRepoImpl constructor.
     */
    public function __construct()
    {
        $this->connection=(new DBConnction())->getDBConnection();
    }
    public function setConnection(mysqli $connection): void
    {
        $this->connection=$connection;
    }

    public function addItem(item $item): bool{
    $result=$this->connection->
    query("INSERT INTO item values (
          '{$item->getItemCode()}',
          '{$item->getType()}',
          '{$item->getCountries()}',
          '{$item->getBrand()}',
          '{$item->getUnitPrice()}',
          '{$item->getSize()}',
          '{$item->getAge()}',
          '{$item->getABV()}')");
    if ($result>0){
        return true;
    }else{
        return false;
    }

    }

    public function deleteItem(string $id): bool
    {
        // TODO: Implement deleteItem() method.
    }

    public function updateItem(item $item): bool
    {
        // TODO: Implement updateItem() method.
    }

    public function getAll(): array
    {
        $resultset= $this->connection->query("SELECT * FROM item");
        return $resultset->fetch_all();
    }

    public function searchItem(string $id): array
    {

    }
}