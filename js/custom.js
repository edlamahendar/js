// Wait for the DOM to be ready
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='education']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      FirstName: "required",
      LastName: "required",
      wantToapply:"required",
      sbirthDay:{
        required: true,
    },
      ParentName:"required",
        PhoneNumber:{
            required: true,
            minlength:10,
            maxlength:10
                  },
      Adddress:"required",
      Email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        Email: true
      }
	  
      
    },
    // Specify validation error messages
      messages: {
      FirstName: "Please enter your firstname",
      LastName: "Please enter your lastname",
	    wantToapply: "Please enter Class you want to apply for",
      sbirthDay: "Please enter Student's birth Day",
      ParentName: "Please enter your Parent Name",
      PhoneNumber: "Please enter your Phone Number",
      Adddress: "Please enter your Adddress",
      Email: "Please enter a valid email address"
    },

    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
    
  });
});


$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})