<?php
/**
 * Created by IntelliJ IDEA.
 * User: op
 * Date: 2/3/16
 * Time: 11:44 PM
 */

namespace AdsCottage\Repository;


interface AdsCottageRepositoryInterface
{
    public function getRecordByKey($key) ;
    public function getAllRecords();
    public function addRecord($params) ;
    public function removeRecordByKey($key) ;
    public function updateRecord($params) ;
}