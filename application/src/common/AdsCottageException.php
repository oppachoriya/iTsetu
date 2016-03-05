<?php
/**
 * Created by IntelliJ IDEA.
 * User: op
 * Date: 3/3/16
 * Time: 12:28 AM
 */

namespace AdsCottage\common;


class AdsCottageException extends \Exception
{
    public static function getExceptionMessage($type){
        $msg = "" ;
        switch ($type){
            case "DB" :
                $msg = "Error during updating information to Database." ;
                break ;
            case "ParameterMissmatch" :
                $msg = "Error during updating information to Database." ;
                break ;
            default:
                $msg = "Error during this operation. " ;

        }
        return $msg ;
    }
}