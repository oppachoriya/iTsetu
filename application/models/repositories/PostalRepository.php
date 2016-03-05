<?php
/**
 * Created by IntelliJ IDEA.
 * User: op
 * Date: 5/3/16
 * Time: 2:41 AM
 */

namespace AdsCottage\Repository;

use AdsCottage\Entity\Postal;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\ClassMetadata;

class PostalRepository extends EntityRepository implements AdsCottageRepositoryInterface
{

    private $em;

    function __construct($em, ClassMetadata $class)
    {
        parent::__construct($em, $class);
        $this->em = $em;
    }

    /**
     * @param $key
     * @return mixed
     */
    public function getRecordByKey($key)
    {
        // TODO: Implement getRecordByKey() method.
    }

    /**
     * @return mixed
     */
    public function getAllRecords()
    {
        // TODO: Implement getAllRecords() method.
    }

    /**
     * @param $params
     * @return mixed
     */
    public function addRecord($params)
    {
        // TODO: Implement addRecord() method.
    }

    /**
     * @param $key
     * @return mixed
     */
    public function removeRecordByKey($key)
    {
        // TODO: Implement removeRecordByKey() method.
    }

    /**
     * @param $params
     * @return mixed
     */
    public function updateRecord($params)
    {
        // TODO: Implement updateRecord() method.
    }

    public function getAllPlaceByPostalCode($postalCode, $limit = 25, $offset = 0 ){

    }

    public function getAllPostalCodeByPlaceName($placeName, $limit = 25, $offset = 0 ){

    }

}