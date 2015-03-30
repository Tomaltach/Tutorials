var linebreak = "<br />";

function popupHelloWorld() {
	alert("Hello World")
}
function ifElse() {
	var visitor = "principal";
	if(visitor == "teacher"){
		document.write("My dog ate my homework...");
	}else if(visitor == "principal"){
		document.write("What stink bombs?");
	} else {
		document.write("How do you do?");
	}
	document.write(linebreak + '<a href="' + document.referrer + '">Go Back</a>');
}
function whileLoop() {
	var myCounter = 0;
	document.write("While loop is beginning");
	document.write(linebreak);
	while(myCounter < 10){
		document.write("myCounter = " + myCounter);
		document.write(linebreak);
		myCounter++;
	}
	document.write("While loop is finished!");
	document.write(linebreak + '<a href="' + document.referrer + '">Go Back</a>');
}
function forLoop() {
	document.write("For loop code is beginning");
	document.write(linebreak);
	for(i = 0; i < 5; i++){
		document.write("Counter i = " + i);
		document.write(linebreak);
	}
	document.write("For loop code is finished!");	
	document.write(linebreak + '<a href="' + document.referrer + '">Go Back</a>');
}
function checkInsideTable(id){
	var elem = document.getElementById(id)
	var table = document.getElementById('age-box')
	while (elem != table && elem) {
		elem = elem.parentNode
	}
	return !!elem
}
function sportsArray() {
	var myArray = new Array();
	myArray[0] = "Football";
	myArray[1] = "Baseball";
	myArray[2] = "Cricket";
	document.write(myArray[0] + linebreak + myArray[1] + linebreak + myArray[2]);
}
function sortSportsArray() {
	var myArray = new Array();
	myArray[0] = "Football";
	myArray[1] = "Baseball";
	myArray[2] = "Cricket";
	sportsArray().myArray.sort();	
	document.write(myArray[0] + linebreak + myArray[1] + linebreak + myArray[2]);
}