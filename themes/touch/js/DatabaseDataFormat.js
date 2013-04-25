function edit_lti(sid){
	location.href =
	'?q=node/9/submission/' + sid + '/edit&destination=admin_preview?sid=' +sid;
}function preview_lti(sid){	location.href = 		'?q=admin_preview&sid=' + sid;}function delete_lti(sid){	location.href =		'?q=node/9/submission/' + sid + '/delete&destination=database';	}

    (function ($) {
        Drupal.behaviors.touch = {
            attach: function(context, settings) {
                $('#DatabaseLTI').html('<table width="100%" cellspacing="0" cellpadding="0" id="data-entry"></table>');
                $('#data-entry').dataTable({
	                "bProcessing": true,
                        "sAjaxSource": "/drupal/API/DataBaseDataPull.php",
                        "aoColumns": [
							{ "sTitle": "LTI Name ", "sWidth": "100px" },
							{ "sTitle": "Description", "sWidth": "200px" },
                            { "sWidth": "100px" }
                         ]
                });
            }
        }
    })(jQuery);
