document.addEventListener("copy", function () {

	var bodyElement = document.body;
	var selection = getSelection();
	var title = document.title;
	var href = document.location.href;
	var copyright = "<br><br> "+ params.source +": <a href='"+ href +"'>" + href + "</a><br>" + title;
	(params.first_param != null && params.first_param != undefined) ? copyright += "<br><br>" + params.first_param + "<br>" : '';
	(params.second_param != null && params.second_param != undefined) ? copyright += "<br>" + params.second_param + "<br>" : '';
	(params.third_param != null && params.third_param != undefined) ? copyright += "<br>" + params.third_param + "<br>" : '';
	var text = selection + copyright;
	var divElement = document.createElement('div');
	divElement.style.position = 'absolute';
	divElement.style.left = '-99999px';
	divElement.innerHTML = text;
	bodyElement.appendChild(divElement);
	selection.selectAllChildren(divElement);
	setTimeout(function() { bodyElement.removeChild(divElement); }, 0);
});


