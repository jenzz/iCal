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