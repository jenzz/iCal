<?php

	require_once('utils.php');
	require_once('QueryPath/QueryPath.php');

	$season = getSeason();
	$leagueUrls = array('eng1' => 'http://www.kicker.de/news/fussball/intligen/england/barclays-premier-league/' . $season . '/vereine-liste.html',
						'ger1' => 'http://www.kicker.de/news/fussball/bundesliga/spieltag/1-bundesliga/' . $season . '/vereine-liste.html',
						'ger2' => 'http://www.kicker.de/news/fussball/2bundesliga/vereine/2-bundesliga/' . $season . '/vereine-liste.html',
						'ger3' => 'http://www.kicker.de/news/fussball/3liga/vereine/3-liga/' . $season . '/vereine-liste.html',
						'esp1' => 'http://www.kicker.de/news/fussball/intligen/spanien/liga-bbva/' . $season . '/vereine-liste.html',
						'ita1' => 'http://www.kicker.de/news/fussball/intligen/italien/serie-a-tim/' . $season . '/vereine-liste.html',
						'fra1' => 'http://www.kicker.de/news/fussball/intligen/frankreich/ligue-1-orange/' . $season . '/vereine-liste.html',
						'cl' => 'http://www.kicker.de/news/fussball/chleague/vereine/champions-league/' . $season . '/vereine-liste.html',
						'eu' => 'http://www.kicker.de/news/fussball/uefa/vereine/europa-league/' . $season . '/vereine-liste.html');
	$qp = htmlqp($leagueUrls[$_POST["league"]]);
	
	echo '<ul data-role="listview" class="ui-listview">';
	foreach($qp->find('table.tStat tr.fest') as $row) :
	
		$team = $row->branch()->find('a.verinsLinkBild')->text();
		$imgUrl = $row->branch()->find('img.verinsLinkBild')->attr('src');
		$fixturesUrl = $row->find('a.link:contains(Termine)')->attr('href');
		
		echo '<li data-theme="c" class="ui-btn ui-btn-icon-right ui-li-has-arrow ui-li ui-li-has-icon ui-btn-up-c">
					<div class="ui-btn-inner ui-li">
						<div class="ui-btn-text">
								<a href="http://www.kicker.de'.$fixturesUrl.'" class="ui-link-inherit">
											<img src="'.$imgUrl.'" alt="'.$team.'" class="ui-li-icon ui-li-thumb">'.$team.'
										</a>
									</div>
									<span class="ui-icon ui-icon-arrow-r ui-icon-shadow"></span>
								</div>
							</li>';
	endforeach;	
	echo '</ul>';

?>