jQuery(document).ready(function() {
    var stringurl = url_object.urlstring;

   
	jQuery( "#slidercreate" ).submit(function( event ) {

        var slideTitle = jQuery('#slideTitle').val();
        var slideText =  jQuery('#slideText').val(); 
        var slideImage = jQuery('#image_path').val();
        var slideedit =  jQuery('#slideedit').val();

        var sFileExtension = slideImage.split('.')[slideImage.split('.').length - 1].toLowerCase();

        var validator = 1;
        
        
        
        if(!slideTitle || slideTitle == ''){
            validator = 2;
            jQuery('.slideTitle').html('Please enter image title first.');
        }else{
            jQuery('.slideTitle').html('');
        }
        
        if(slideText != ''){
            if(/(http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/.test(slideText) == false){
                  jQuery('.slideText').html('Please enter a valid URL');
                  validator = 2;
            }else{
                  jQuery('.slideText').html('');
            }
        }else{
            jQuery('.slideText').html('');
        }
        

        if((!slideImage || slideImage == '') && slideedit == ''){
            validator = 2;
            jQuery('.slideImage').html('Please select an image to upload.');
        }else if(/^(http|https):/.test(slideImage) == false){
            validator = 2;
            jQuery('.slideImage').html('Please enter valid image url.');
        }else if(sFileExtension != ''){
            if(sFileExtension != 'png' && sFileExtension != 'jpg' && sFileExtension != 'jpeg'){
                validator = 2;
                jQuery('.slideImage').html('Only png and jpg extensions are allowed.');
            }else{
                jQuery('.slideImage').html('');
            }
        }else{
            jQuery('.slideImage').html('');
        }


        if(validator == 1){
            jQuery( "#slidercreate" ).submit();

        }else{
            return false;
        }
    });

});


$j = jQuery.noConflict();
$j(document).ready(function() {

    /* user clicks button, runs below code that opens new window */
    $j('#upload_image').click(function() {

        /*Thickbox function aimed to show the media window. This function accepts three parameters:
         *
         * Name of the window: "In our case Upload a Image"
         * URL : Executes a WordPress library that handles and validates files.
         * Image Group : As we are not going to work with groups of images but just with one that why we set it false.
         */

        tb_show('Upload a Image', 'media-upload.php?referer=media_page&type=image&TB_iframe=true&post_id=0', false);


        return false;

    });


    // window.send_to_editor(html) is how WP would normally handle the received data. It will deliver image data in HTML format, so you can put them wherever you want.

        window.send_to_editor = function(html) {

        //var image_url = $j('img', html).attr('src');
		if (typeof $j(html).attr('href') === "undefined") {
    			var image_url = $j(html).attr('src');
		}else{
				var image_url = $j(html).attr('href');
		}

        $j('#image_path').val(image_url);
        tb_remove(); // calls the tb_remove() of the Thickbox plugin
        $j('#submit_button').trigger('click');
    }

});
