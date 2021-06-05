$('#contactForm').on('submit', function(e) {
    e.preventDefault(); //Prevents default submit
    var form = $(this); 
    var post_url = form.attr('action'); 
    var post_data = form.serialize(); //Serialized the form data for process.php
    $('#loader', form).html('<img src="../img/loader.gif" /> Please Wait...');
    $.ajax({
        type: 'POST',
        url: 'process.php', // Your form script
        data: post_data,
        success: function(msg) {
            $(form).fadeOut(500, function(){
                form.html(msg).fadeIn();
            });
        }
    });
});