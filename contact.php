

<?php

include "templates/header.php";
?>


<?php
include "templates/nav.php"
?>




<div class="containercontact" style="background: url('/images/entfer.png')">

    <div class=" px-5 py-3 m-5">
        <h3 style = "text-align: justify" class="Elendeauswahl">
            Thank you very much for your message! We appreciate your interest and are grateful for the time you have 
            taken to get in touch with us. Your inquiry is of great importance to us.

            Our team will reach out to you as soon as possible to address your questions or discuss your concerns. 
            Please have some patience as we want to ensure providing you with the best possible support.
            
            <br>
          

        </h3>

    </div>

    <form action="https://formsubmit.co/musicelend@hotmail.com" method="POST" class="p-md-5" style="max-width: 1000px ; margin-left: auto; margin-right: auto"">

        <select name="title" required>
            <option>Select a Title </option>
            <option>Mr </option>
            <option>Mrs</option>
            <option>Mx</option>
            <option>Dr</option>
            <option>Prof</option>
            <option>Prof Dr</option>
            <option>Other ..</option>
        </select>



        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Please insert your given name.." required>

        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Please insert your sure/last name.." required>

        <label for="tele">Phone</label>
        <input type="text" id="tele" name="tele" placeholder="Please insert your phone number.." required>

        <label for="email">E-Mail</label>
        <input type="text" id="email" name="email" placeholder="Please insert your E-Mail .." required>

        <label for="address">Address</label>
        <input type="text" id="address" name="address" placeholder="Please insert your Address ..">

        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Please write here your message .. " style="height:200px" required></textarea>

        <input type="submit" value="Submit" style="background: rgba(44,44,44,0.78)">

    </form>
</div>

<?php
include "templates/footer.php"
?>

