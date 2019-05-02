<?php

use SilverStripe\ORM\DataExtension;
class KiaOraExtension extends DataExtension
{
    private static $allowed_actions = ['kiaora'];
    public function kiaora($request)
    {
        return 'Kia ora!!';
    }
}
