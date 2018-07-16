<?php
function exchange($USD) {
	echo $USD * 112.25;
}

echo exchange(2);

function combine($word1, $word2){
	echo $word1 ."". $word2;
}

echo combine("you", "missed");

$veggies = array("celery", "cucumber", "beet");
echo implode("",$veggies);