<?php
  /* Template Name: Get Involved */
  get_header();
?>

<section class="bg-gradient-2 border-bottom-0">
    <div class="container">
      <div class="card card-artist border-2 border-bright-orange p-2 p-md-5 py-5">
            <div class="row py-3">
                <div class="col-12d-flex justify-content-center align-items-center">
                  <h1 class="card-title fw-normal pb-3 text-center">SHARE YOUR STORY</h1>
                  <div id="beforeSubmit">
                    <p class="text-center pb-3" style="max-width: 1050px; margin: auto">Thank you for taking the time to share your story with us for a chance to join the Portr<span class="fw-bold text-bright-orange">AI</span>ts of Cancer gallery and help others better visualize who you really are: <b>a person</b>. Our team will review your submission and follow up with more information.</p>
                  </div>
                  <div id="thankYouMessage" style="display: none;">
                    <p class="text-center pb-3" style="max-width: 1050px; margin: auto">Thank you for your submission. Our team will review your submission and follow up with more information.</p>
                  </div>

                  <script src="//pages.arcusbio.com/js/forms2/js/forms2.min.js"></script> 
                  <form id="mktoForm_1191"></form> 
                  <script>
                    MktoForms2.loadForm("//pages.arcusbio.com", "269-UHU-480", 1191, function(form){
                      var textarea = document.querySelector("#patientPortraitsStory");
                      var textAreaCounterMessage = document.querySelector(".mktoForm .mktoFormRow:nth-child(10) .mktoClear");
                      textarea.addEventListener('input', function() {
                        // Split the value by spaces and other whitespace characters to get an array of words
                        const words = this.value.trim().split(/\s+/);
                        // Count the words, filtering out empty strings in case of multiple consecutive spaces
                        const wordCount = words.filter(word => word.length > 0).length;
                        textAreaCounterMessage.innerHTML = '<p style="font-size: 16px; text-align: right;">'+wordCount+' words</p>';
                      });
                    });

                    MktoForms2.whenReady(function (form) {
                      var form_id = form.getId();
                      form.onValidate(function() {
                          var values = form.vals();
                          var email = values.Email; // Assuming 'Email' is the field name
                          var confirmEmail = values.ConfirmEmail; // Assuming 'ConfirmEmail' is the field name

                          // Check if the email fields match
                          if (email !== confirmEmail) {
                              // If they don't match, prevent the form from submitting and show an error
                              form.submitable(false); // Prevent form submission

                              // Use the Marketo form API to show an error message for the Confirm Email field
                              var confirmEmailField = form.getFormElem().find('[name="ConfirmEmail"]').first(); // Adjust if necessary to match your field name
                              if(confirmEmailField.length) {
                                  var errorMessage = "Emails do not match."; // Customize your error message
                                  form.showErrorMessage(errorMessage, confirmEmailField);
                                  confirmEmailField[0].scrollIntoView({
                                      behavior: 'smooth',
                                      block: 'center'
                                  });
                              }
                          } else {
                              form.submitable(true); // Allow form submission if no error
                          }
                      });
                      form.onSubmit(function(){
                            dataLayer.push({
                              'event': 'marketo.submit',
                              'marketo.form_id': form_id
                            });
                      });
                      form.onSuccess(function(values, followUpUrl) {
                        dataLayer.push({
                          'event': 'marketo.success',
                          'marketo.form_id': form_id,
                          'marketo.form_values': values,
                          'marketo.follow_up_url': followUpUrl
                        });
                          // Prevent the form from redirecting to the follow-up URL
                          form.getFormElem().hide(); // Optional: Hide the form upon successful submission
                          document.getElementById('beforeSubmit').style.display = 'none'; // Show the thank-you message
                          document.getElementById('thankYouMessage').style.display = 'block'; // Show the thank-you message
                          // Prevent the default form submission behavior
                          return false;
                      });
                      
                    });
                  </script>
                </div>
            </div>
        </div>
    
    </div>
</section>

<?php get_template_part( 'template-parts/global/back-to-gallery'); ?>

<?php get_footer(); ?>