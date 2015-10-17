<?php

class Activity extends DataObject{

	private static $db = array (
		'Title' => 'Varchar(100)',
		'Description' => 'Text'
		);


	public function getCMSFields() {
		$fields = FieldList::create(
			TextField::create('Title'),
			TextareaField::create('Description')
			);

		return $fields;

	}

	private static $belongs_many_many = array(
        'Events' => 'EventPage'
    );

}