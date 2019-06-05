<?php
/**
 * Created by PhpStorm.
 * User: matraiv
 * Date: 2019.06.04.
 * Time: 14:45
 */

class CompanyTypeController extends Controller
{
    function index(){
        require (ROOT . 'model/CompanyType.php');
        $companyTypes = new CompanyType();
        $d['companyTypes'] = $companyTypes->getAllCompanyTypes();
        $this->set($d);
        $this->render('default');
    }
}