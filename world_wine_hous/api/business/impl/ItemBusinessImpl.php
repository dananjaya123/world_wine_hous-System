<?php
/**
 * Created by IntelliJ IDEA.
 * User: asitha
 * Date: 12/7/2018
 * Time: 1:33 PM
 */
require_once __DIR__."/../ItemBusiness.php";
require_once __DIR__."/../../db/DBConnction.php";
require_once __DIR__."/../../cor/Item.php";
require_once __DIR__."/../../repository/impl/ItemRepoImpl.php";

class ItemBusinessImpl implements ItemBusiness
{

    public function addItem(item $item): bool
    {
       $connection=(new DBConnction())->getDBConnection();
       $itemRepo=new ItemRepoImpl();
       $itemRepo->setConnection($connection);
       return $itemRepo->addItem($item);

    }

    public function deleteItem(string $id): bool
    {
        // TODO: Implement deleteItem() method.
    }

    public function searchItem(string $id): array
    {
        // TODO: Implement searchItem() method.
    }

    public function updateItem(item $item): bool
    {
        // TODO: Implement updateItem() method.
    }

    public function getAll(): array
    {
       $connection =(new DBConnction())->getDBConnection();
       $itemRepo=new ItemRepoImpl();
       $itemRepo->setConnection($connection);
       return $itemRepo->getAll();
    }
}