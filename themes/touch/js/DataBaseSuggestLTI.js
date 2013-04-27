  
	
    (function ($) {
        Drupal.behaviors.touch = {
            attach: function(context, settings) {
                $('#SuggestedLTI').html('<table width="100%" cellspacing="0" cellpadding="0" id="data-entry"></table>');
                $('#data-entry').dataTable({
	                "bProcessing": true,
		
                       "sDom": '<"inline"l><"floatright"f>rt<ip>',
						"sAjaxSource": "/drupal/API/DataBaseSuggestLTIPull.php",
                        "aoColumns": [
						{ "sTitle": "LTI Name ", "sWidth": "40px" },
						{ "sTitle": "URL", "sWidth": "50px" },
						{ "sTitle": "Description", "sWidth": "50px" },
                        { "sWidth": "18px" }
                         ]
                });

            }
        }
    })(jQuery);
