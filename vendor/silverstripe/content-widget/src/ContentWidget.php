<?php

namespace SilverStripe\ContentWidget;

use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\Widgets\Model\Widget;

/**
 * Content Widget
 */
class ContentWidget extends Widget
{
    private static $db = [
        "HTML" => "HTMLText",
    ];

    private static $title = "HTML Content";

    private static $cmsTitle = "HTML Content";

    private static $description = "Custom HTML content widget.";

    private static $table_name = 'ContentWidget';

    /**
     * @return FieldList
     */
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->push(TextField::create("Title"));
        $fields->push(HTMLEditorField::create("HTML", "Content"));

        return $fields;
    }
}
