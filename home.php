<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TRIPORA</title>

    <link rel="shortcut icon" href="favicon.png" type="minorproject/image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background: #f9f9f9;
            background-image: url(bAckground2.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
        
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }
        
        .card {
            background: white;
            border-radius: 0px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            /* display: flex; */
            flex-direction: column;
        }
        
        .card img {
            width: 200%;
            height: 200px;
            object-fit: cover;
        }
        
        h3 {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            padding-top: 5px;
        }
    </style>


    <style>
        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: rgba(0, 0, 0, 0.746);
            padding: 10px 30px;
            color: white;
        }
        
        .navbar-left {
            display: flex;
            align-items: center;
        }
        
        .navbar-left img {
            height: 50px;
            margin-right: 250px;
        }
        
        .nav-links {
            display: flex;
            gap: 20px;
        }
        
        .nav-links a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            margin-right: 30px;
        }
        
        .nav-links a.active {
            font-weight: bold;
        }
        
        .navbar-right {
            font-size: 18px;
        }
        
        .footerblock {
            background-color: rgb(25, 23, 23);
            color: white;
        }
    </style>
</head>

<body>

    <div class="navbar">
        <div class="navbar-left">
            <a href="home.php"><img src="favicon.png" alt="Logo"></a>
            <div class="nav-links">
                <a href="home.php" class="active" style=" font-family: fantasy;font-weight: lighter;">H O M E</a>
                <a href="#destination" style=" font-family: fantasy;">DESTINATIONS</a>
                <a href="#contactus" style=" font-family: fantasy;">CONTACT US</a>
            </div>
        </div>
        <div class="navbar-right" style="font-family: cursive">
            Collect moments, not things
        </div>
    </div>
    <br>
    <img src="homeimag3.jpg" alt=" " srcset=" " width="100% ">


    <br><br>
    <h1 id="destination" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; ">DESTINATIONS</h1>
    <hr>
    <br><br>
    <div class="grid ">

        <div class="card ">
            <a href="RAJASHTAN.php" target="_blank "><img src="rajasthan.jpg " alt="img "></a>
            <h3>RAJASTHAN</h3>
        </div>

        <div class="card ">
            <a href="KERALA.php" target="_blank "><img src="kerala.jpg " alt="img "></a>
            <h3>KERALA</h3>
        </div>

        <div class="card ">
            <a href="MAHARASHTRA.php " target="_blank "><img src="maharashtra.jpg " alt="img "></a>
            <h3>MAHARASHTRA</h3>
        </div>

        <div class="card ">
            <a href="TAMILNADU.php " target="_blank "><img src="tamilnadu1.jpg " alt="img "></a>
            <h3>TAMIL NADU</h3>
        </div>

        <div class="card ">
            <a href="HIMACHAL.php " target="_blank "><img src="himachal.webp " alt="img "></a>
            <h3>HIMACHAL PRADESH</h3>
        </div>

        <div class="card ">
            <a href="UTTARPRADESH.php " target="_blank "><img src="uttar.jpg " alt="img "></a>
            <h3>UTTAR PRADESH</h3>

        </div>




    </div>
    <br><br><br><br><br><br><br><br>
    <hr>

    <body style="margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #fff; ">

        <footer id="contactus" style="background-color: #1e293b; color: white; padding: 40px 20px 20px; margin: 0; ">
            <div style="max-width: 1200px; margin: auto; display: flex; flex-wrap: wrap; justify-content: space-between; gap: 30px; ">

                <div style="flex: 1 1 200px; ">
                    <h3 style="margin-bottom: 15px; ">Tripora</h3>
                    <p>Your trusted companion for unforgettable journeys. Discover new places and book your next adventure with us.</p>
                </div>

                <div style="flex: 1 1 200px; ">
                    <h4 style="margin-bottom: 15px; ">Quick Links</h4>
                    <ul style="list-style: none; padding: 0; margin: 0; ">
                        <li><a href="home.php " style="color: #cbd5e1; text-decoration: none; ">Home</a></li>
                        <li><a href="# " style="color: #cbd5e1; text-decoration: none; ">Destinations</a></li>
                        <li><a href="# " style="color: #cbd5e1; text-decoration: none; ">Tours</a></li>
                        <li><a href="# " style="color: #cbd5e1; text-decoration: none; ">Contact</a></li>
                    </ul>
                </div>

                <div style="flex: 1 1 200px; ">
                    <h4 style="margin-bottom: 15px; ">Contact Us</h4>
                    <p>Email: info@tripora.com</p>
                    <p>Phone: +123 456 7890</p>
                    <p>Location: 123 Beach Road, Wanderland</p>
                </div>

                <div style="flex: 1 1 200px; ">
                    <h4 style="margin-bottom: 15px; ">Follow Us</h4>
                    <div style="display: flex; gap: 15px; margin-top: 10px; ">
                        <a href="# "><i class="fab fa-facebook " style="font-size: 24px; color: #1877F2; "></i></a>
                        <a href="# "><i class="fab fa-google " style="font-size: 24px; color: #DB4437; "></i></a>
                        <a href="# "><i class="fab fa-twitter " style="font-size: 24px; color: #1DA1F2; "></i></a>
                        <a href="# "><i class="fab fa-instagram " style="font-size: 24px; color: #E1306C; "></i></a>
                        <a href="# "><i class="fab fa-youtube " style="font-size: 24px; color: #FF0000; "></i></a>

                    </div>
                </div>

            </div>

            <div style="text-align: center; color: #94a3b8; font-size: 14px; margin-top: 30px; ">
                &copy; 2025 Tripora. All rights reserved.
            </div>
        </footer>

    </body>


</body>

</html>