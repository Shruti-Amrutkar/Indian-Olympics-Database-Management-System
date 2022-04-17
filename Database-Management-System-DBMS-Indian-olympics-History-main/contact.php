<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact US</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>
<nav id="navbar">
        <div id="logo">
            <img src="img/Logo.png" alt="Brand Logo">
        </div>
        <ul>
            <li class="item"><a href="index.php">Home</a></li>
            <li class="item"><a href="athlete.php" target="_blank">Athlete</a></li>
            <li class="item"><a href="Cdatabase.php" target="_blank">Chronicle</a></li>
            <li class="item"><a href="contact.php" target="_blank">Contact Us</a></li>
            
        </ul>

    </nav>
    <div class="container">
        <div style="text-align:center">
            <h1 class="h-pre center">Contact Us</h1>
             </section>
         
        </div>
        <div class="row">
          <div class="column">
            <img src="img/conatact us.png" style="width:70%">
          </div>
          <div class="column">
            <form action="/action_page.php">
              <label for="fname">First Name</label>
              <input type="text" id="fname" name="firstname" placeholder="Your name..">
              <label for="lname">Last Name</label>
              <input type="text" id="lname" name="lastname" placeholder="Your last name..">
              <label for="country">Country</label>
              <select required="country" name="country">
                <option value="">Select your country</option>
                <option value="australia">India</option>
                <option value="australia">Australia</option>
                <option value="canada">Canada</option>
                <option value="usa">USA</option>
              </select>
              <label for="subject">Subject</label>
              <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
              <a href="contact.php">Submit</a>            
            </form>           
          </div>
        </div>
      </div>
      <section>
        <div class="footer-basic">
            <footer>
               
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="index.php">Home </a> </li>
                    <li class="list-inline-item"><a href="athlete.php">Athlete</a></li>
                    <li class="list-inline-item"><a href="Cdatabase.php">Chronicle </a></li>
                    <li class="list-inline-item"><a href="contact.php">Contact Us </a></li>
                    <li class="list-inline-item"><a href="#">Privacy Policy </a></li>
                </ul>
                <div class="copy">
                 <p class="copyright social list-inline-item">Made by © Vidyesh Thakare <a href="https://www.linkedin.com/in/vidyesh-thakare-6a0860194/" target="_blank"><ion-icon name="logo-linkedin"></ion-icon></a> </p>
                 <p class="copyright social list-inline-item">Vipul Chaudhari <a href="https://www.linkedin.com/in/vipul-chaudhari-18a58a1aa/" target="_blank"><ion-icon name="logo-linkedin"></ion-icon></i></a> </p>
                 <p class="copyright social list-inline-item">Shruti Amrutkar <a href="http://www.linkedin.com/in/shruti-amrutkar-3074a7201/"target="_blank"><ion-icon name="logo-linkedin"></ion-icon></i></a> </p>
                </div>
            </footer>
        </div>
    </section>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>