"use strict";

@@include("webp.js");
@@include("hamburger.js");




jQuery(function($) {
    //video frame
    $('#videoPlayBtn').click(function(){
        $('.second-block__video').addClass('full')
        $('#videoPlayBtn').hide()
        $('.second-block__lefttext').hide()
        $('.js-videoWrapper').show()
            let iframe = $('.js-videoIframe')
            let src = iframe.data('src')
            iframe.attr('src', src)
            var target =   $('.second-block')
            $('html, body').animate({scrollTop: $(target).offset().top}, 100);

        $('.close-video-btn').click(function(){
            $('.second-block__video').removeClass('full')
            $('#videoPlayBtn').show()
            $('.second-block__lefttext').show()

            $('.js-videoWrapper').hide()

                iframe.attr('src', ' ')
        })    
    })


    ///modal email
    let joinBtns =  $('.joinBtn')
    let modal = $('.modal')
    let modalWindow = $('.modal__window')

    joinBtns.each(function(){
        $(this).on('click', function(e){
            e.preventDefault()
            modal.show()

            modal.click(function(e){
                if ( !$(e.target).closest(modalWindow).length ) {

                    modal.hide()

                  }
            })
           
            
        })
    })
   
    //validation mail 
    let pattern = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    let mail = $('#email');
    let message = $('#message');
    
    mail.blur(function(){
     if(mail.val() != ''){
    if(mail.val().search(pattern) == 0){
    $('#submit').attr('disabled', false);
    mail.removeClass('error').addClass('ok');
    }else{
    $('#submit').attr('disabled', true);
    mail.addClass('error');
    }
    }else{
    mail.addClass('error');
    $('#submit').attr('disabled', true);
    }

    });
    


/// ajax sending
$( 'form[name="contact-form"]' ).on( 'submit', function() {
    var form_data = $( this ).serializeArray();
     
    form_data.push( { "name" : "security", "value" : ajax_nonce } );
 
    // Here is the ajax petition.
    $.ajax({
        url : ajax_url, 
        type : 'POST',
        data : form_data,
        beforeSend: function( xhr ) {
            $('#submit').val('Sending...')
        },
        success : function( response ) {
            $('.alert').text(response).show()
            $('input').val('')
            $('textarea').val('')
            $('#submit').val('Send')
            $('#send_form').hide()

        },
        fail : function( err ) {
            $('.alert').text(err).show()
            $('#submit').val('Send')

        }
    });
     
    return false;
});







});
