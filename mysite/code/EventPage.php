<?php


class EventPage extends Page {
	// Restrict page creation in tree for CMS User
	private static $can_be_root = false;
 	//Define Dynamic Page Variable for CMS User
	private static $db = array (
		'Date' => 'Date',
		'Teaser' => 'Text',
		'Price' => 'Currency'
		);

	//Link Event to Activities
	private static $many_many = array(
		'Activities' => 'Activity'
		);

	//Use API to allow update of variables via CMS
	public function getCMSFields() {
		$fields = parent::getCMSFields();

		//Event Details
		$fields->addFieldToTab('Root.Main', DateField::create('Date','Date of Event')
			->setConfig('showcalendar', true)
			, 'Content');
		$fields->addFieldToTab('Root.Main', TextareaField::create('Teaser'), 'Content');
		$fields->addFieldToTab('Root.Main', CurrencyField::create('Price','Price of Event'), 'Content');

		// Event Activities
		$activitiesField = new GridField(
            'Activities',
            'Activities',
            $this->Activities(),
            GridFieldConfig_RelationEditor::create()
        );
        $fields->addFieldToTab('Root.Activities', $activitiesField);
        return $fields;

		return $fields;
	}

}



class EventPage_Controller extends Page_Controller {

}

