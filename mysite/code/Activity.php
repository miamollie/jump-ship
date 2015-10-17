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

		$fields->addFieldToTab('Root.Activities, Root.EventHolder.EventPage', CheckboxSetField::create(
            'Activities',
            'Selected Activities',
            $this->Parent()->Activities()->map('ID','Title')
        ));

		return $fields;

	}

	private static $has_one = array (
        'ActivitiesPage' => 'ActivitiesPage',
    );

    private static $belongs_many_many = array (
        'Events' => 'EventPage'
    );

}