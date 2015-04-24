// JavaScript Document
window.onload=function(){
	x = document.getElementById('content');
//	y = document.getElementById('sponsor');
//	if(x.offsetHeight>850){
//		y.style.display = 'inline';
//	}
	x.innerHTML = x.innerHTML.replace(/\(at\)/g, '@');
	altTable();
}
function altTable(){
	x = document.getElementsByTagName('table');
	for(j =0 ; j< x.length ; j++){
		if(x[j].className.indexOf('alt')>=0){
			y = x[j].getElementsByTagName('tr');
			k = 1;
			for(i = 1; i < y.length; i++){
				if(y[i].className=='hidden'){
					continue;
				}else{
					if(k%2==1){
						y[i].className = 'odd';
					}else{
						y[i].className = 'even';
					}
					k++;
				}
			}
		}
	}	
}