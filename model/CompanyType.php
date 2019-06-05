<?php

class CompanyType extends Model
{
    public function getAllCompanyTypes(){
        $sql = "SELECT * FROM company_types";
        $req = database::getData()->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }
}