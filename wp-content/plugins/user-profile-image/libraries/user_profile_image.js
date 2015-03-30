jQuery(function() {
var wp_media_post_id = wp.media.model.settings.post.id;

jQuery('button#select-profile-image').on('click',function(e){
     e.preventDefault();
     console.log('click');    
    // var set_to_post_id = $(this).attr('data-postid');
    var set_to_post_id = null;
     var custom_uploader;

//     tb_show('Upload a file', 'media-upload.php?referer=&amp;TB_iframe=true&amp;post_id=0', false);
    
         

             //If the uploader object has already been created, reopen the dialog
             if (custom_uploader) {
                    custom_uploader.uploader.uploader.param('post_id',set_to_post_id);
                 custom_uploader.open();
                 return;
             } else {
                    wp.media.model.settings.post.id = set_to_post_id;
               }


             //Extend the wp.media object
             custom_uploader = wp.media.frames.file_frame = wp.media({
                 title: 'Choose File',
                 button: {
                     text: 'Choose File'
                 },
                 multiple: false
             });

             //When a file is selected, grab the URL and set it as the text field's value
             custom_uploader.on('select', function() {
    
                 attachment = custom_uploader.state().get('selection').first().toJSON();
                 if(console) console.log(attachment);
                 jQuery('.selected-profile-tn').html('<img src="'+attachment.sizes.profile_image.url+'" />');
                 jQuery('input[name=user_profile_image]').val(attachment.id);
                 //$('input.pack-file',$uploader).val(attachment.id);
                    //$uploader.addClass('active');
                    //$('.file-name',$uploader).html(attachment.filename);
                    //$('.file-icon',$uploader).attr('src',     attachment.icon);
                    //$('.add-file-uploader').addClass('active');
                   
                    wp.media.model.settings.post.id = wp_media_post_id;
               });

             //Open the uploader dialog
             custom_uploader.open();

         });    



         });