

/* To display the good sign */
function thumbup(){

	document.getElementById("bad").style.visibility="hidden";
	document.getElementById("good").style.visibility="visible";
};
	

/* To display the bad sign */
function thumbdown(){

	document.getElementById("good").style.visibility="hidden";
	document.getElementById("bad").style.visibility="visible";
};
	


function thumbupfunction() {
	var x = document.getElementById('image');
	if (x.style.visibility === 'hidden') {
	  x.style.visibility = 'visible';
	} else {
	  x.style.visibility = 'hidden';
	}
  }