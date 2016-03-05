<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use AdsCottage\Common\WebConstants ;
use AdsCottage\common\CommonDetail ;

/**
 * Class AC_Controller
 */
class AC_Controller extends CI_Controller {


    /**
     * @var string
     */
    private $appVersion  ;
    /**
     * @var string
     */
    private $appName ;
    /**
     * @var string
     */
    private $appBaseLine ;
    /**
     * @var string
     */
    private $appLogo ;
    /**
     * @var string
     */
    private $appFaviconIcon ;
    /**
     * @var string
     */
    private $appPoweredBy ;
    /**
     * @var string
     */
    private $appLastUpdatedOn ;

    /**
     * @var array
     */
    private $appMetaHeaderList  ;
    /**
     * @var array
     */
    private $appCssList  ;
    /**
     * @var array
     */
    private $appJSList  ;
    /**
     * @var array
     */
    private $appNavigationLinks ;
    /**
     * @var array
     */
    private $appWidgetLinks ;
    /**
     * @var array
     */
    private $appFooterLinks ;
    /**
     * @var array
     */
    private $appContactDetails ;
    /**
     * @var null
     */
    private $userInfo ;

    /**
     * @return null
     */
    public function getUserInfo()
    {
        return $this->userInfo;
    }

    /**
     * @return string
     */
    public function getAppVersion()
    {
        return $this->appVersion;
    }

    /**
     * @return string
     */
    public function getAppName()
    {
        return $this->appName;
    }

    /**
     * @return string
     */
    public function getAppBaseLine()
    {
        return $this->appBaseLine;
    }

    /**
     * @return string
     */
    public function getAppLogo()
    {
        return $this->appLogo;
    }

    /**
     * @return string
     */
    public function getAppFaviconIcon()
    {
        return $this->appFaviconIcon;
    }

    /**
     * @return string
     */
    public function getAppPoweredBy()
    {
        return $this->appPoweredBy;
    }

    /**
     * @return string
     */
    public function getAppLastUpdatedOn()
    {
        return $this->appLastUpdatedOn;
    }

    /**
     * @return array
     */
    public function getAppMetaHeaderList()
    {
        return $this->appMetaHeaderList;
    }

    /**
     * @return array
     */
    public function getAppCssList()
    {
        return $this->appCssList;
    }

    /**
     * @return array
     */
    public function getAppJSList()
    {
        return $this->appJSList;
    }

    /**
     * @return array
     */
    public function getAppNavigationLinks()
    {
        return $this->appNavigationLinks;
    }

    /**
     * @return array
     */
    public function getAppWidgetLinks()
    {
        return $this->appWidgetLinks;
    }

    /**
     * @return array
     */
    public function getAppFooterLinks()
    {
        return $this->appFooterLinks;
    }

    /**
     * @return array
     */
    public function getAppContactDetails()
    {
        return $this->appContactDetails;
    }

    /**
     * @return array
     */
    public function getPageData()
    {
        $pageData['appVersion'] = self::getAppVersion() ;
        $pageData['appName'] = self::getAppName() ;
        $pageData['appBaseLine'] = self::getAppBaseLine() ;
        $pageData['appLogo'] = self::getAppLogo() ;
        $pageData['appFaviconIcon'] = self::getAppFaviconIcon() ;
        $pageData['appPoweredBy'] = self::getAppPoweredBy() ;
        $pageData['appLastUpdatedOn'] = self::getAppLastUpdatedOn() ;
        $pageData['appMetaHeaderList'] = self::getAppMetaHeaderList() ;
        $pageData['appCssList'] = self::getAppCssList() ;
        $pageData['appJSList'] = self::getAppJSList() ;
        $pageData['appNavigationLinks'] = self::getAppNavigationLinks() ;
        $pageData['appWidgetLinks'] = self::getAppWidgetLinks() ;
        $pageData['appFooterLinks'] = self::getAppFooterLinks() ;
        $pageData['appContactDetails'] = self::getAppContactDetails() ;
        $pageData['userInfo'] = self::getUserInfo() ;

        return $pageData;
    }



    /**
     * AC_Controller constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->appVersion   = "1.0.0"; //getenv('APP_VERSION');
        $this->appName      = WebConstants::APP_NAME ;
        $this->appBaseLine  = WebConstants::APP_BASELINE ;
        $this->appLogo = WebConstants::APP_LOGO_PATH ;
        $this->appFaviconIcon = WebConstants::APP_FAVICON_ICON_PATH;
        $this->appPoweredBy = WebConstants::COMPANY_NAME .' <a href="' .WebConstants::COMPANY_WEB.'" target="_blank" > '
            . WebConstants::COMPANY_WEB.'</a>';
        $this->appLastUpdatedOn   = getenv('APP_LAST_UPDATE');
        $this->appCssList      = WebConstants::getApplicationCSSFileList() ;
        $this->appJSList       = WebConstants::getApplicationJavascriptFileList() ;


        $this->appMetaHeaderList    = CommonDetail::getApplicationMetaTagList() ;
        $this->appNavigationLinks = CommonDetail::getApplicationNavigationLinksDetails();
        $this->appWidgetLinks = CommonDetail::getApplicationWidgetLinks();
        $this->appFooterLinks = CommonDetail::getApplicationFooterLinks();
        $this->appContactDetails = CommonDetail::getApplicationContactDetails();
        $this->userInfo     = NULL ;

    }


}
