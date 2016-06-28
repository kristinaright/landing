<tr><h2>Результаты поиска</h2></tr>
<?php
	if((!empty($_GET["words"]))) {
	    $w = htmlspecialchars($_GET["words"]);
		//экранируем
		$word=mysql_escape_string($w);
		$results = searchMails($word);
		if(count($results) != 0) {
			for ($i = 0 ; $i < count($results); $i++) {
				$number = $i + 1;
				$email = $results[$i]["email"];				
				include "search_item.php";
				}
				}
			else echo "Ничего не найдено";
		}
		else echo "Не задан поисковый запрос";
?> 