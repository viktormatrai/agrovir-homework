<?php

class Partner extends Model
{

    public function showAllPartners()
    {
        $sql = "SELECT * FROM partners
                 INNER JOIN company_types ct on partners.company_type_id = ct.id
                 INNER JOIN locations l on partners.location_id = l.id";
        $req = database::getData()->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }

    public function create($companyName,
                           $taxNumber,
                           $companyRegistrationNumber,
                           $address,
                           $bankAccount,
                           $phone,
                           $companyType,
                           $location,
                           $note)
    {
        $sql = "INSERT INTO partners (company_name, tax_number, 
                                      company_registration_number, address, 
                                      bank_account_number, phone_number, company_type_id, location_id, note) 
                VALUES (:company_name, :tax_number, :company_registration_number, 
                        :address, :bank_account_number, :phone_number, 
                        (SELECT id FROM company_types WHERE type LIKE :company_type),
                        (SELECT id FROM locations WHERE location LIKE :location),
                        :note)";
        $req = Database::getData()->prepare($sql);
        try{
        $result = $req->execute([
            'company_name' => $companyName,
            'tax_number' => $taxNumber,
            'company_registration_number' => $companyRegistrationNumber,
            'address' => $address,
            'bank_account_number' => $bankAccount,
            'phone_number' => $phone,
            'company_type' => $companyType,
            'location' => $location,
            'note' => $note
        ]);
        print_r($result);
        print_r("dsadssdad");
        return $result;
        } catch ( Exception $e)
            {print_r($e);}
    }

    public function edit($companyName,
                         $taxNumber,
                         $companyRegistrationNumber,
                         $address,
                         $bankAccount,
                         $phone,
                         $companyType,
                         $location)
    {
        $sql = "UPDATE partners SET company_name = :company_name, 
                                    tax_number = :tax_number , 
                                    company_registration_number = :company_registration_number,
                                    address = :address,
                                    bank_account_number = :bank_account_number,
                                    phone_number = :phone_number,
                WHERE id = {$_POST['id']}";
        $req = Database::getData()->prepare($sql);
        return $req->execute([
            'company_name' => $companyName,
            'tax_number' => $taxNumber,
            'company_registration_number' => $companyRegistrationNumber,
            'address' => $address,
            'bank_account_number' => $bankAccount,
            'phone_number' => $phone,
            'company_type_id' => $companyType,
            'location_id' => $location,
        ]);
    }

    public function delete($id)
    {
        $sql = 'DELETE FROM partners WHERE id = ?';
        $req = Database::getData()->prepare($sql);
        return $req->execute([$id]);
    }
}