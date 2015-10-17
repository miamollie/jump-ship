<?php

class ActivitiesPage extends Page {
	private static $has_many = array (
		'Activities' => 'Activity'
		);

	public function getCMSFields() {
		$fields = parent::getCMSFields();
		$fields->addFieldToTab('Root.Activities', GridField::create(
			'Activities',
			'Activities on this page',
			$this->Activities(),
			GridFieldConfig_RecordEditor::create()
			));

		return $fields;
	}


}



class ActivitiesPage_Controller extends Page_Controller {

}