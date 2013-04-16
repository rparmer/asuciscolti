

function deleteReview(id){
	var ajaxCall = new XMLHttpRequest();
	ajaxCall.onreadystatechange = function(){
		if(ajaxCall.readyState == 4) verifyResponse(ajaxCall.responseText, 'del');
	}
	ajaxCall.open("GET","ajax/reviewDelete.php?id=" + id,true);
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

function edit_lti(sid){
    location.href = 
    '?q=node/9/submission/' + sid + '/edit&destination=admin_preview?sid=' +sid;
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
function reviewSubmit(){
(function ($) {
	$.ajax({  
			type: "POST",  
			url: "/drupal/themes/touch/js/ajax/reviewSubmit.php",  
			data: $("#reviewForm").serialize() + "&sid=" + GetURLParameter('sid'),  
			success: function(data,status,jq) {
				if(data != 'success'){
					alert(data); 
				}else{
					alert('Thank you for your review');
					$('input:text').val(function(){return ''});
					$('input:radio').val(function(){return ''});
					$('textarea').val(function(){return ''});
				}
			}  
	});  
	})(jQuery);
	return false;
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
