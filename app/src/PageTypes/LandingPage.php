<?php
use SilverStripe\Forms\ToggleCompositeField;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;

class LandingPage extends Page

{
  private static $description = 'For each main section of the website';

  private static $db = [
  'SpecialContentHeadline' => "Varchar(64)",
  "SpecialContent" => "HTMLText"
];

public function getCMSFields() {
  $fields = parent::getCMSFields();

  $fields->addFieldsToTab(
    'Root.SpecialContent',
[
        TextField::create('SpecialContentHeadline'),
        HTMLEditorField::create('SpecialContent')
]    
  );

  return $fields;
}

}
