// functions running on page load
changeDivHeight("background-div", getDivHeight(".resume-body")) ;

//function running 3 sec after page loads
setTimeout(function(){
	changeDivHeight("background-div", getDivHeight(".resume-body")) ;
}, 3000);

//function running 6 sec after page loads
setTimeout(function(){
	changeDivHeight("background-div", getDivHeight(".resume-body")) ;
}, 6000);

// functions running on page resize
let doc = document.getElementsByTagName("BODY")[0];
doc.onresize = function() {
	changeDivHeight("background-div", getDivHeight(".resume-body")) ;
	changeNaveOpacity();
}

//change navigation bar opacity 
function changeNaveOpacity(){
	let navbar = document.getElementById('nav');
	let screenWidth = window.innerWidth;
	if (screenWidth < 992) {
		navbar.classList.remove("opacity-75");
		navbar.classList.add("opacity-100");
	}else{
		navbar.classList.add("opacity-75");
		navbar.classList.remove("opacity-100");
	}
}

//get height of a html element 
function getDivHeight(divClass) {
	var div = document.querySelector(divClass);
	var divHeight = div.offsetHeight;
	// remove the 110px space added on margin-top with css
	return divHeight-115;
}
// change height of div
function changeDivHeight(divClass, newDivHeight) {
	var div = document.getElementById(divClass);
	var newHeight = newDivHeight+"px"
	div.style.height = newHeight;
}