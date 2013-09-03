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
		$timezone = 'Europe/Berlin'; // dates are in german time zone
		return DateTime::createFromFormat('d.m.y H:i', $date, new DateTimeZone($timezone));
	}

	// Converts the given DateTime object into a human readable format
	// e.g. Sunday 01st September 2013 @ 14:30
	function formatDate($date) {
		$date->setTimeZone(new DateTimeZone('Europe/London')); // convert into BST
		return $date->format('l dS F Y @ H:i');
	}

	// Escapes a string of characters
	function escapeString($string) {
		return preg_replace('/([\,;])/','\\\$1', $string);
	}
?>