<?php

// Model Class: Will Contain reference to list of events?
class EventHolder extends Page {
	private static $allowed_children = array ('EventPage');
}


// Corresponding Controller: Liason between model and http and final template
class EventHolder_Controller extends Page_Controller {

}