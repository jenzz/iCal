<?php

	require_once('utils.php');
	require_once('QueryPath/QueryPath.php');

	$qp = htmlqp($_POST['url']);

	echo '<ul data-role="listview" class="ui-listview">';
	foreach($qp->find('table.tStat tr') as $row) :

		$matchday = $row->branch()->find('td:nth(3)')->text();
		if(stristr($matchday, 'Spt.') === FALSE) { // only league matches
			continue;
		}

		$team = $row->branch()->find('a.verinsLinkBild')->text();
		$img = $row->branch()->find('img.verinsLinkBild')->attr('src');
		$dateStr = $row->branch()->find('td:nth(4)')->text();
		$date = parseDate($dateStr);
		$where = $row->branch()->find('td:nth(5)')->text();
		$result = $row->find('td:nth(6)')->text();

		echo '<li data-theme="c" class="ui-btn ui-btn-icon-right ui-li-has-arrow ui-li ui-li-has-icon ui-btn-up-c">
					<div class="ui-btn-inner ui-li">
						<div class="ui-btn-text">
							<a href="#detail" class="ui-link-inherit">
								<img src="' . $img . '" alt="' . $team . '" class="ui-li-icon ui-li-thumb">'
								. $team . ' (' . $where . ')<br>'
								. formatDate($date) . '<br>'
								. $result . '
							</a>
						</div>
					</div>
				</li>';

	endforeach;
	echo '</ul>';
?>