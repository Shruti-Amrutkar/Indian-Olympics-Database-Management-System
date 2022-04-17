<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chronicle</title>
    <link rel="stylesheet" href="chronicle.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,900;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="table.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
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
    <center>
    <h1>Athlete Data</h1>
        <h2>Indian Olympics</h2>
        <img src="img/ringOly-removebg-preview.png">
 
        <section>
            <p>The Olympic symbol comprises five rings of five different colours- (left to right)- blue, yellow, black, green and red. The rings symbolise the union of the five continents, the participation of the athletes at these Games and express the activity of the Olympic movement.

                 The five-coloured rings represent the five inhabited continents of the world. These are- Africa, the Americas, Asia, Europe and Oceania. No ring colour represents a particular continent.
                
                 “These five rings represent the five parts of the world now won over to the cause of olympism and ready to accept its fecund rivalries. What is more, the six colors thus combined reproduce those of all nations without exception,”- Pierre de Coubertin, Founder of the Olympic Movement and the designer of the symbol.
                
                As per Rule number eight of the Olympic charter, the meaning of these rings is as follows:
                
                “The Olympic symbol expresses the activity of the Olympic Movement and represents the union of the five continents and the meeting of athletes from throughout the world at the Olympic Games.”</p>
        </section>
        <div class="container">
            <form action="" method="POST">
            <div class="text-left">
            <label for="Athlete_Name">Athlete Name</label>
            <input type="text" class="form-control" name="Athlete_Name" placeholder="Enter the Athlete_Name" required/>
            </div>
                <input type="submit" name="search" class="btn" value="Search">  
            </form>
            <table>
                        <tr>
                            <th class="text-center">Sr.No</th>
                            <th class="text-center">Year</th>
                            <th class="text-center">Held_in_Countries</th>
                            <th class="text-center">Athlete Name</th>
                            <th class="text-center">Athlete ID</th>
                            <th class="text-center">Event Name</th>
                            <th class="text-center">Medal Type</th>
                            <th class="text-center">Gender</th>
                            <th class="text-center">Country Name</th>
                        </tr> <br>
                    <?php
                    
                    if(isset($_POST['search']))
                    {
                        $Athlete_Name = $_POST['Athlete_Name'];

                        $query = "SELECT * FROM `medalhistory` where Athlete_Name='$Athlete_Name' ";
                        $query_run = mysqli_query($conn,$query);

                        while($row = mysqli_fetch_array($query_run))
                        {
                            ?>
                            <tr>
                                <td class="py-2"> <?php echo $row['Sr. No.']; ?> </td>
                                <td class="py-2"> <?php echo $row['year']; ?> </td>
                                <td class="py-2"> <?php echo $row['held_in_countries']; ?> </td>
                                <td class="py-2"> <?php echo $row['Athlete_Name']; ?> </td>
                                <td class="py-2"> <?php echo $row['Athlete_ID']; ?> </td>
                                <td class="py-2"> <?php echo $row['Event_Name']; ?> </td>
                                <td class="py-2"> <?php echo $row['Medal_Type']; ?> </td>
                                <td class="py-2"> <?php echo $row['Gender']; ?> </td>
                                <td class="py-2"> <?php echo $row['Country_Name']; ?> </td>
                            </tr>

                            <?php
                        }
                    }

                    ?>


            </table>

        </div>
    </center> 
    <section>
    <div class="footer-basic">
        <footer>
            
            <ul class="list-inline">
                <li class="list-inline-item"><a href="index.php">Home </a> |</li>
                <li class="list-inline-item"><a href="athlete.php">Athlete </a>|</li>
                <li class="list-inline-item"><a href="Cdatabase.php">Chronicle </a>|</li>
                <li class="list-inline-item"><a href="contact.php">Contact Us </a>|</li>
                <li class="list-inline-item"><a href="#">Privacy Policy </a></li>
            </ul>
            <div class="copy">
             <p class="copyright social list-inline-item">Made by © Vidyesh Thakare <a href="https://www.linkedin.com/in/vidyesh-thakare-6a0860194/" target="_blank"><ion-icon name="logo-linkedin"></ion-icon></a> |</p>
             <p class="copyright social list-inline-item">Vipul Chaudhari <a href="https://www.linkedin.com/in/vipul-chaudhari-18a58a1aa/" target="_blank"><ion-icon name="logo-linkedin"></ion-icon></a> |</p>
             <p class="copyright social list-inline-item">Shruti Amrutkar <a href="http://www.linkedin.com/in/shruti-amrutkar-3074a7201/" target="_blank"><ion-icon name="logo-linkedin"></ion-icon></a> </p>
            </div>
        </footer>
    </div>
</section>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>