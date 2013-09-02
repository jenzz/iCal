<?php
	// Returns the current season, e.g. 2013-14
	function getSeason() {
		date_default_timezone_set('UTC');
		return date('Y') . '-' . substr((date('Y')+1), 2);
	}
?>