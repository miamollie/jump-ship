<?php

// Class defining an activity
class Activity extends DataObject{

	// Attributes of Activity Class
	private static $db = array (
		'Title' => 'Varchar(100)',
		'Description' => 'Text'
		);

	//Define CMS Update-able Fields
	public function getCMSFields() {
		$fields = FieldList::create(
			TextField::create('Title'),
			TextareaField::create('Description')
			);

		return $fields;

	}

	//Link Activity to Events
	private static $belongs_many_many = array(
        'Events' => 'EventPage'
    );

}