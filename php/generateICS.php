<?php
	$summary = $_GET['summary'];
	$dateStart = $_GET['dateStart'];
	$dateEnd = $_GET['dateEnd'];
	$address = $_GET['address'];
	$uri = $_GET['uri'];
	$description = $_GET['description'];
	$filename = $_GET['filename'];

	$ical = "BEGIN:VCALENDAR
		VERSION:2.0
		PRODID:-//hacksw/handcal//NONSGML v1.0//EN
		CALSCALE:GREGORIAN
		BEGIN:VEVENT
		DTEND:" . dateToCal($dateEnd) . "
		UID:" . uniqid() . "
		DTSTAMP:" . dateToCal(time()) . "
		LOCATION:" . escapeString($address) . "
		DESCRIPTION:" . escapeString($description) . "
		URL;VALUE=URI:" . escapeString($uri) . "
		SUMMARY:" . escapeString($summary) . "
		DTSTART:" . dateToCal($dateStart) . "
		END:VEVENT
		END:VCALENDAR";

	header('Content-type: text/calendar; charset=utf-8');
	header('Content-Disposition: attachment; filename=' . $filename);
	echo $ical;
	exit;
?>