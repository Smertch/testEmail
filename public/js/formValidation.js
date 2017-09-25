/**
 * Created by smertch on 25.09.17.
 */
// Wait for the DOM to be ready
$(function() {
    // Initialize form validation on the registration form.
    // It has the name attribute "registration"
    $("form[name='registration']").validate({
        // Specify validation rules
        rules: {
            // The key name on the left side is the name attribute
            // of an input field. Validation rules are defined
            // on the right side
            userName: "required",
            msg: "required",
            CaptchaCode: "required",
            email: {
                required: true,
                // Specify that email should be validated
                // by the built-in "email" rule
                email: true
            }
        },
        // Specify validation error messages
        messages: {
            userName: "Please enter your name",
            lastname: "Please enter your lastname",
            email: "Please enter a valid email address",
            CaptchaCode: "Enter symbols with a picture"
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function(form) {
            form.submit();
        }
    });
});