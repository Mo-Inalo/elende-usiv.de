

<?php

include "templates/header.php";
?>


<?php
include "templates/nav.php"
?>




<div class="containercontact" style="background: url('/elende-usiv.de/images/entfer.png')">
    <form action="https://formsubmit.co/m.inalo@hotmail.com" method="POST" class="p-md-5">

        <select name="title" required>
            <option>Title </option>
            <option>Mr </option>
            <option>Mrs</option>
            <option>Mx</option>

        </select>



        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Please insert your given name.." required>

        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Please insert your sure/last name.." required>

        <label for="tele">Phone</label>
        <input type="text" id="tele" name="tele" placeholder="Please insert your phone number.." required>

        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Please write here your message .. " style="height:200px" required></textarea>

        <input type="submit" value="Submit" style="background: rgba(9,154,18,0.45)">

    </form>
</div>

<?php
include "templates/footer.php"
?>

