<?php
	date_default_timezone_set('Europe/London');

	// Returns the current season, e.g. 2013-14
	function season() {
		$now = new DateTime();
		$currentSeason = $now->format('Y');
		$nextYear = $now->add(new DateInterval('P1Y'));
		$nextSeason =  $nextYear->format('y');
		return $currentSeason . '-' . $nextSeason;
	}

	// Prints the current timezone, e.g. Europe/London (UTC +01:00)
	function timezone() {
		$now = new DateTime();
		echo $now->format('e (\U\TC P)');
	}

	// Prints the current time
	function now() {
		$now = new DateTime();
        echo $now->format('Y-m-d H:i:s');
	}

	// Parses the custom date format from kicker.de and returns a DateTime object
	function parseDate($date) {
		$date = substr($date, 4); // remove weekday prefix
		$timezone = new DateTimeZone('Europe/Berlin'); // dates are in german time zone
		$format = strlen($date) > 8 ? 'd.m.y H:i' : 'd.m.y'; // some fixtures are lacking kick-off times
		$result = DateTime::createFromFormat($format, $date, $timezone);
		return $result;
	}

	// Converts the given DateTime object into a human readable format
	// e.g. Sunday 01st September 2013 @ 14:30
	function formatDate($date) {
		$timezone = new DateTimeZone('Europe/London');
		$date->setTimeZone($timezone); // convert into BST
		return $date->format('l dS F Y @ H:i');
	}

	// Escapes a string of characters
	function escapeString($string) {
		return preg_replace('/([\,;])/','\\\$1', $string);
	}
?>