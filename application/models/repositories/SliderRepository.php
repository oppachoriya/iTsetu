<?php
/**
 * Created by IntelliJ IDEA.
 * User: op
 * Date: 2/3/16
 * Time: 11:43 PM
 */

namespace AdsCottage\Repository;


use AdsCottage\common\AdsCottageException;
use AdsCottage\common\ErrorConstants;
use AdsCottage\Entity\Slider;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\ClassMetadata;


class SliderRepository extends EntityRepository implements AdsCottageRepositoryInterface

{
    private $em;

    function __construct($em, ClassMetadata $class)
    {
        parent::__construct($em, $class);
        $this->em = $em;
    }

    public function getRecordByKey($key)
    {
        return $this->em->getRepository(Slider::class)->find($key);
    }

    public function getAllRecords()
    {
        return $this->em->getRepository(Slider::class)->findAll();
    }

    public function addRecord($params)
    {
        $id = null;

        $sliderObj = null;

        if ($params instanceof Slider) {
            $sliderObj = $params;
        } else {
            $sliderObj = new Slider();
            if ($params['img_path']) {
                $sliderObj->setPath($params['img_path']);
            }
            if ($params['heading_text']) {
                $sliderObj->setPath($params['heading_text']);
            }
            if ($params['description_text']) {
                $sliderObj->setPath($params['description_text']);
            }
            if ($params['type']) {
                $sliderObj->setPath($params['type']);
            }
            if ($params['animation_img_path']) {
                $sliderObj->setPath($params['animation_img_path']);
            }
            if ($params['button_text']) {
                $sliderObj->setPath($params['button_text']);
            }
            if ($params['landing_url']) {
                $sliderObj->setPath($params['landing_url']);
            }
            if ($params['start_date']) {
                $sliderObj->setPath($params['start_date']);
            }
            if ($params['end_date']) {
                $sliderObj->setPath($params['end_date']);
            }
            if ($params['is_active']) {
                $sliderObj->setActive($params['is_active']);
            }

            if ($sliderObj != null) {
                $this->em->persist($sliderObj);
                $this->em->flush();
                $this->em->clear();
                $id = $sliderObj->getId();
            } else {
                throw new AdsCottageException(AdsCottageException::getExceptionMessage(ErrorConstants::PARAMETER_MISSMATCH));
            }
            return $id;
        }
    }

    public function removeRecordByKey($key)
    {
        $sliderObj = $this->getRecordByKey($key);
        if ($sliderObj) {
            $this->em->remove($sliderObj);
            $this->em->flush();
            $this->em->clear();
        }
    }

    public function updateRecord($params)
    {
        $isSuccess = true ;
        $sliderObj = null;

        if ($params instanceof Slider) {
            $sliderObj = $params;
        } else {
            $sliderObj = $this->getRecordByKey($sliderObj->getId());
            if ($params['img_path']) {
                $sliderObj->setPath($params['img_path']);
            }
            if ($params['heading_text']) {
                $sliderObj->setPath($params['heading_text']);
            }
            if ($params['description_text']) {
                $sliderObj->setPath($params['description_text']);
            }
            if ($params['type']) {
                $sliderObj->setPath($params['type']);
            }
            if ($params['animation_img_path']) {
                $sliderObj->setPath($params['animation_img_path']);
            }
            if ($params['button_text']) {
                $sliderObj->setPath($params['button_text']);
            }
            if ($params['landing_url']) {
                $sliderObj->setPath($params['landing_url']);
            }
            if ($params['start_date']) {
                $sliderObj->setPath($params['start_date']);
            }
            if ($params['end_date']) {
                $sliderObj->setPath($params['end_date']);
            }
            if ($params['is_active']) {
                $sliderObj->setActive($params['is_active']);
            }

            if ($sliderObj != null) {
                $this->em->persist($sliderObj);
                $this->em->flush();
                $this->em->clear();
            } else {
                $isSuccess = false ;
                throw new AdsCottageException(AdsCottageException::getExceptionMessage(ErrorConstants::PARAMETER_MISSMATCH));
            }
        }

        return $isSuccess;
    }

}