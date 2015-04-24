// JavaScript Document
var str;
var tb;
var timer;
function searchTable(x, y){ // search string, search table id
	str = x.toLowerCase();
	tb = y;
	clearTimeout(timer);
	timer=setTimeout("doSearch()",500);
}
function doSearch(){
	total=0;
	y = document.getElementById('nfound');
	x = document.getElementById(tb).rows;
	for(i=1; i<x.length; i++){	// skip header
		s1 = x[i].cells[0].innerHTML;
		s2 = x[i].cells[1].innerHTML.toLowerCase();
		if(s1.indexOf(str)>=0 || s2.indexOf(str)>=0){
			x[i].className = null;	
			total++;
		}else{
			x[i].className = "hidden";
		}
	}
	if(total>0){
		if(str.length>0){
			y.innerHTML = total.toString() + ' match' + ((total>1)?'es':'') + ' found';
		}else{
			y.innerHTML = '';			
		}
	}else{
		y.innerHTML = 'No matches found. ';
	}
	altTable();
}