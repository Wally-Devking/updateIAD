<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Afri-Fest East</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/Afri-fest-logo-black.png" >
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-villa-agency.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  

  <div class="contact-page section">
    <div class="container">
      <div class="row">
                  <div class="col-lg-7">
          <form id="contact-form" action="mail.php" method="post">
            <div class="row">
                <div class="col-lg-12">
                    <fieldset>
                        <label for="name">Full Name</label>
                        <input type="text" name="name" id="name" placeholder="" autocomplete="on" required>
                    </fieldset>
                </div>
                <div class="col-lg-12">
                    <fieldset>
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="" required>
                    </fieldset>
                </div>
                <div class="col-lg-12">
                    <fieldset>
                        <label for="message">Message</label>
                        <textarea name="message" id="message" placeholder=""></textarea>
                    </fieldset>
                </div>
                <div class="col-lg-12">
                    <fieldset>
                        <button type="submit" id="form-submit" class="orange-button">Send Message</button>
                    </fieldset>
                </div>
            </div>
        </form>
        </div>
        <br />
      


  

<script>
$(document).ready(function() {
    $('#contact-form').submit(function(e) {
        e.preventDefault(); // Prevent default form submission

        // Collect form data
        var formData = {
            name: $('#name').val(),
            email: $('#email').val(),
            subject: $('#subject').val(),
            message: $('#message').val()
        };

        // Send AJAX request
        $.ajax({
            type: 'POST',
            url: './mail.php',
            data: formData,
            dataType: 'json', // Expect JSON response from server
            success: function(response) {
                // Handle success
                if (response.status === "Success") {
                    alert(response.message)
                    // Clear the form fieldsalert(response.message);
                    $('#contact-form')[0].reset();
                } else {
                    alert('Error sending message. Please try again later.');
                }
            },
            error: function(xhr, status, error) {
                // Handle error
                alert('Error sending message. Status: ' + status + ', Error: ' + error);
                console.error(xhr.responseText);
            }
        });
    });
});

</script>
  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

  </body>
</html>