jQuery(function( $ ){
	var options = { 
        url: lhtheme_contact_form_vars.ajaxUrl,  // this is part of the JS object you pass in from wp_localize_scripts.
        type: 'post',             // 'xml', 'script', or 'json' (expected server response type) 
        dataType: 'json',
        success : function(responseText, statusText, xhr, $form) {
            $('#contact-success').show();
        },
        // use beforeSubmit to add your nonce to the form data before submitting.
        beforeSubmit : function(arr, $form, options){
            arr.push( { "name" : "nonce", "value" : lhtheme_contact_form_vars.nonce });
        },

    }; 

    // you should probably use an id more unique than "form"
    $('#lhtheme_contact_form').ajaxForm(options);
});