<?php

class PartnerController extends Controller
{
    function index()
    {
        require(ROOT . 'model/Partner.php');
        $partners = new Partner();
        $d['partners'] = $partners->showAllPartners();
        $this->set($d);
        $this->render("index");
    }
    function create()
    {
        if (isset($_POST["companyName"]))
        {
            require(ROOT . 'model/partner.php');
            $partner= new Partner();
            if ($partner->create($_POST["companyName"],
                $_POST["taxNumber"],
                $_POST["companyRegistrationNumber"],
                $_POST["address"],
                $_POST["bankAccount"],
                $_POST["phone"],
                $_POST["companyType"],
                $_POST["location"],
                $_POST["note"]
                ))

            {
                header("Location: " . WEBROOT . "partner/index");
            }
        }
        $this->render("create");
    }

    function delete($id)
    {
        require(ROOT . 'Models/Partner.php');
        $partner = new Partner();
        if ($partner->delete($id))
        {
            header("Location: " . WEBROOT . "Partner/index");
        }
    }


}