$(document).delegate("#home", "pageinit", function() {

	$("div[data-role='collapsible']").live('expand', function() {
		var div = $(this);
		var resultDiv = div.find('div.teams');
		
		if(!resultDiv.html()) {
			$.ajax({
				type: 'POST',
				url: 'php/loadTeamsForLeague.php',
				data: 'league=' + div.data('url'),
				dataType: 'html',
				beforeSend: function() { resultDiv.html('<img src="img/ajax-loader.gif" />'); },
				success: function(data) { resultDiv.html(data); }
			});
		}
	});

	$("div.teams").delegate("a[href='#detail']", 'click', function() {
		var link = $(this);
		team = link.text();
		fixturesUrl = link.data('fixtures-url');
	});
});

$(document).delegate("#detail", "pagebeforeshow", function() {

	var resultDiv = $('div.fixtures');
	$("span#team").text(team);

	$.ajax({
		type: 'POST',
		url: 'php/loadFixturesForTeam.php',
		data: 'url=' + fixturesUrl,
		dataType: 'html',
		beforeSend: function() { resultDiv.html('<img src="img/ajax-loader.gif" />'); },
		success: function(data) { resultDiv.html(data); }
	});
});