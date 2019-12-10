jQuery(document).ready(function($) {
  "use strict";

  //Contact
  var form = $('form.contactForm')
  $(form).submit(function(event) {
    event.preventDefault();
    var formData = $(form).serialize();
    console.log(formData);
    $.ajax({
      type: 'POST',
      url: 'contactform/contactForm.php',
      data: formData
    })
    .done(function(response) {
      $("#sendmessage").addClass("show");
      $("#errormessage").removeClass("show");
      $('.contactForm').find("input, textarea").val("");
    })
    .fail(function(data) {
      console.log(data);
      $("#sendmessage").removeClass("show");
      $("#errormessage").addClass("show");
      $('#errormessage').html(data);
    });
  });

});
