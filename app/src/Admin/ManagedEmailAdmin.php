<?php

use SilverStripe\Admin\ModelAdmin;
class ManagedEmailAdmin extends ModelAdmin {
    private static $menu_title = 'Managed emails';
    private static $url_segment = 'managed-emails';
    private static $managed_models = [
        ManagedEmail::class
    ];
}
