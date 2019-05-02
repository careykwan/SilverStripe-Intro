<?php

use SilverStripe\Control\Email\Email;
use SilverStripe\ORM\DataObject;
class ManagedEmail extends DataObject
{
    private static $db = [
        'Label' => 'Varchar(255)',
        'FromAddress' => 'Varchar(255)',
        'ToAddress' => 'Varchar(255)',
        'Subject' => 'Varchar(255)',
        'Body' => 'HTMLText'
    ];

    private static $summary_fields = ['Label', 'Subject'];

    public function send()
    {
        $email = Email::create();
        $email->addTo($this->ToAddress);
        $email->addFrom($this->FromAddress);
        $email->Subject = $this->Subject;
        $email->Body = $this->Body;

        $email->send();

    }
    public function validate() {
        $valid = parent::validate();

        if(!$this->FromAddress) {
            $result->addError('The "From" address is required');
        }
        return $valid;
    }
}
