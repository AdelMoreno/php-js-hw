<?php
function exchange($USD) {
	if($USD >= 1){
	echo $USD * 112.25;
	}
	else if($USD <=1){
		echo $USD * .0089;
	}
}


echo exchange(.2);

function combine($word1, $word2){
	if(strlen($word1)<3){
		echo " Oh no you didn't";
	}
	else {
		echo " ". $word1 ."". $word2;
	}
}

echo combine("u", "missed");

$veggies = array(" celery", " cucumber", " beet");
array_push($veggies, "lettuce");
echo implode(" ",$veggies);

?>