<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use AdsCottage\common\CommonDetail ;
use AdsCottage\common\HomePageConstants ;
use AdsCottage\common\ElementConstants ;

class Home extends AC_Controller {

    function __construct()
    {
        parent::__construct();
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $data = parent::getPageData() ;
        $data['title'] = 'AdsCottage | An ITSetu Product' ;
        $data['featureList'] = CommonDetail::getProjectFeatureListData() ;
        $data['joinUs'] = CommonDetail::getJoinMeDetails(ElementConstants::HOME_PAGE_JOIN_ME) ;
        $this->load->library('twig');
        $this->twig->display('Home/home', $data);
        //phpinfo();
    }
}
