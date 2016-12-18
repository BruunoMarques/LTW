function startSearch(value){
	var inputvalue = value.data.val.val();
	var keypressed = value.key;
	var actualinput;
	if(keypressed == 'Enter'){
		var actualinput = inputvalue;
	}
	else if (keypressed == 'Backspace'){
		var actualinput = inputvalue;
	}
	else{
	var actualinput = inputvalue +""+ keypressed;	
	}
	processInput(actualinput);
}


function processInput(input){
	var urlset = "api/search.php?searchval="+ input ;	
	console.log(urlset);
	$.ajax({
		type:"get",
		url: urlset 
	}).done(function(data){
		var dataparse = JSON.parse(data);
		var Slist = $("#restdisplay");
		if(typeof dataparse == "string"){
			$("li").remove();
			Slist.before('<p><li>'+dataparse+'</li></p>');
		}
		else{
			$("li").remove();
			Slist.before('<p>');
			
			for (var i = 0; i < dataparse.length;i+=2){
				console.log(dataparse);
				$url = "templates/restaurant_page.php?id="+ dataparse[i+1];
				if( (i+1)%4 == 0 && i >= 3) Slist.before('<p>');
				Slist.before('<li><button type="submit" formaction="'+$url +'">'+ dataparse[i]+' </li>');
				if((i+1) % 4 == 0 && i >= 3) Slist.before('</p>');
			}
			Slist.before('</p>');
		}
	}).fail(function(){
		windom.alert("No connection to server");
		
	});
	
}

function triggerEvent(){
	var searchtrig =$("#searchBar #search");
	searchtrig.keydown({val: searchtrig},startSearch);
	
}

$(document).ready(triggerEvent);