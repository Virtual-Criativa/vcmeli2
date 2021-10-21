<?php
namespace App\Helpers;
use App\Libraries\Mongodb;

class UniqueMailValidation
{
    public function is_unique_email(string $email): bool
    {
        $this->mongo_db = new Mongodb();
        $document = $this->mongo_db
        ->select(array())
        ->where('email', $email)
        ->get("users");
	
		if(!count((array)$document))
			return TRUE;
		
		$this->form_validation->set_message('unique_email_check', 'O email informado já existe em nosso sistema '.$email);
		return FALSE;
   
    }
}
?>