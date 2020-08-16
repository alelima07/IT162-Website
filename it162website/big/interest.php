<?php include "includes/header.php";?>

    <h2>Interest Form</h2>
    <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "alelima07@gmail.com";  //place your/your client's email address here
        $toName = "Alessandra Lima"; //place your client's name here
        $website = "Interest Form";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
       <p class="clear-recaptcha"></p>
       

<?php include "includes/footer.php";?>