

function exchange(USD) {
	if(USD >= 1) {
		return USD * 112.25;
	}
	else if(USD < 1) {
		return USD * .0089;
	}
}
exchange(-5);

function combine(word1,word2) {
	if(word1.length < 3) {
		return "Oh no you didn't!";
	}
	else return word1 + word2;
}
combine("you", "like");

let veggies = ["celery", "cucumber", "beet"];

function woo(veg) {
	veggies.push (veg);
	return veggies.toString();
}

woo("lettuce");