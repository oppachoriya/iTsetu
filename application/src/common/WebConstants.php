<?php
/**
 * Created by IntelliJ IDEA.
 * User: op
 * Date: 23/2/16
 * Time: 1:46 AM
 */

namespace AdsCottage\Common;

/**
 * Class WebConstants
 * @package AdsCottage\Common
 */
class WebConstants
{

    /**
     *
     */
    const IMG_PATH = "img/";
    /**
     *
     */
    const CRON_PATH = "scripts/cron/";
    /**
     *
     */
    const DB_PATH = "scripts/db/";
    /**
     *
     */
    const DOC_PATH = "doc/";
    /**
     *
     */
    const LOGS_PATH = "logs/";
    /**
     *
     */
    const UPLOAD_PATH = "uploads/";
    /**
     *
     */
    const TMP_PATH = "tmp/";

    /**
     *
     */
    const JS_PATH = "js/";
    /**
     *
     */
    const CSS_PATH = "css/";
    /**
     *
     */
    const FONTS_PATH = "fonts/";

    /**
     *
     */
    const APP_NAME = "Ads Cottage";
    /**
     *
     */
    const APP_BASELINE = "";

    /**
     *
     */
    const APP_LOGO_PATH = self::IMG_PATH . "logo.png";
    /**
     *
     */
    const APP_FAVICON_ICON_PATH = "favicon.ico";

    /**
     *
     */
    const COMPANY_NAME = "ITSetu Media Lab Pvt. Ltd.";
    /**
     *
     */
    const COMPANY_ADDRESS = "Ram kunj, Uday Nagar Colony, NH-86, Vidisha (Madhya Pradesh) India.";
    /**
     *
     */
    const COMPANY_EMAIL = "care@itsetu.com";
    /**
     *
     */
    const COMPANY_FAX = "+91 8600378752";
    /**
     *
     */
    const COMPANY_PHONE = "+91 7769871184";
    /**
     *
     */
    const COMPANY_WEB = "www.itsetu.com";


    /**
     * @return array
     */
    public static function getApplicationJavascriptFileList()
    {
        $jsFilePaths = [
            'js/jquery.js',
            'js/bootstrap.js',
            'js/bootstrap.min.js',
            'js/ads-cottage.js'
        ];
        return $jsFilePaths;
    }


    /**
     * @return array
     */
    public static function getApplicationCSSFileList()
    {
        $cssFilePaths = [
            'css/bootstrap.css',
            'css/bootstrap.min.css',
            'css/modern-business.css',
            'css/ads-cottage.css',
            'font-awesome/css/font-awesome.min.css',
            'css/responsive.css',
            'css/animate.min.css',
            'css/main.css'
        ];
        return $cssFilePaths;
    }

}