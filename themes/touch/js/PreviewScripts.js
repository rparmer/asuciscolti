

function deleteReview(id){
	var ajaxCall = new XMLHttpRequest();
	ajaxCall.onreadystatechange = function(){
		if(ajaxCall.readyState == 4) verifyResponse(ajaxCall.responseText, 'del');
	}
	ajaxCall.open("GET","ajax/reviewDelete.php?id=" + id,true);
	ajaxCall.send();
}

function reviewSubmit(){
  var sid = GetURLParameter('sid');
	var url = 	"ajax/reviewSubmit.php?" + document.getElementById("reviewForm").serialize() + "&sid=" + sid;
	var ajaxCall = new XMLHttpRequest();
	ajaxCall.onreadystatechange = function(){
		if(ajaxCall.readyState == 4) verifyResponse(ajaxCall.responseText, 'sub');
	}
	ajaxCall.open("GET",url,true);
	ajaxCall.send();
}

function verifyResponse(response,type){
	if(response != 'success') alert(response);
	else{
		switch(type){
			case 'del': 
				alert('This review has been deleted');
				break;
			case 'sub': 
				alert('Thank you for your review');
				document.getElementById("reviewForm").reset();
				break;
			default:
		}
	}
}

function disp_confirm(){
	var r=confirm("Are you sure you want to add this LTI to your classroom?")
	if (r==true){
		alert("This LTI has been added to your classroom.\n\nReturning to Marketplace.")
		location.href = './home'
	}
}

function GetURLParameter(sParam){
  var sPageURL = window.location.search.substring(1);
  var sURLVariables = sPageURL.split('&');
  for (var i = 0; i < sURLVariables.length; i++){
    var sParameterName = sURLVariables[i].split('=');
    if (sParameterName[0] == sParam)
      return sParameterName[1];
  }
  
}


(function ($) {
    Drupal.behaviors.touch = {
        attach: function(context, settings) {
          var sid = GetURLParameter('sid');
		      $.ajax({  
            type: "POST",  
            url: "/drupal/themes/touch/js/ajax/buildReviewsTable.php",  
            data: "sid=" + sid,  
            success: function(data,status,jq) {
              document.getElementById('pastReviews').innerHTML = data; 
            }  
          });  
            }
    }
})(jQuery);