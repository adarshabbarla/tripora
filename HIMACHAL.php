<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>Himachal pradesh</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background: #f9f9f9;
        }
        
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }
        
        .card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        
        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        
        .card-content {
            padding: 15px;
        }
        
        .card h3 {
            margin: 0 0 10px;
        }
        
        .price {
            color: teal;
            font-weight: bold;
        }
        
        .book-btn {
            margin-top: 10px;
            padding: 10px 15px;
            background-color: teal;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 4px;
            align-self: flex-start;
        }
        
        .price-btn {
            display: flex;
            gap: 150px;
        }
        
        .list {
            display: flex;
            gap: 5px;
            text-align: justify;
            cursor: pointer;
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
    <div class="navbar" style="background-color: #1e293b;">
        <div class="navbar-left">
            <a href="home.php"><img src="favicon.png" alt="Logo"></a>
            <div class="nav-links">
                <a href="home.php" class="active" style=" font-family: fantasy; font-weight: lighter;">H O M E</a>
                <!-- <a href="#destination" style=" font-family: fantasy;">DESTINATIONS</a> -->
                <a href="#contactus" style=" font-family: fantasy;">CONTACT US</a>
            </div>
        </div>
        <div class="navbar-right" style="font-family: cursive">
            Collect moments, not things
        </div>
    </div>
    <br>

    <h1>HIMACHAL PRADESH TOURIST SPOTS</h1>
    <div class="grid">

        <div class="card">
            <img src="KAPALEESHWARARTEMPLE-TAMIL.jpg" alt="IMG">
            <div class="card-content">
                <h3>KAPALEESHWARAR TEMPLE</h3>
                <p>Kapaleeshwarar Temple is a historic Hindu temple in Chennai dedicated to Lord Shiva, known for its stunning Dravidian architecture and spiritual significance.</p>
                <hr>
                <div class="list">
                    <ul>
                        <li>Round Trip Flights</li>
                        <br>
                        <li>Airport Transfers</li>
                    </ul>
                    <ul>
                        <li>4 Star Hotel</li>
                        <br>
                        <li>Selected Meals</li>
                    </ul>
                </div>
                <div class="price-btn">
                    <p class="price">₹18,759</p>
                    <a href="booking.php"><button  class="book-btn">Book Now</button></a>
                </div>
            </div>
        </div>

        <div class="card">
            <img src="SHIMLA-HIMACHAL.cms" alt="IMG">
            <div class="card-content">
                <h3>SHIMLA</h3>
                <p>Shimla is a picturesque hill station in India, known for its colonial charm, scenic views, and cool climate.</p>
                <hr>
                <div class="list">
                    <ul>
                        <li>Round Trip Flights</li>
                        <br>
                        <li>Airport Transfers</li>
                    </ul>
                    <ul>
                        <li>4 Star Hotel</li>
                        <br>
                        <li>Selected Meals</li>
                    </ul>
                </div>
                <div class="price-btn">
                    <p class="price">₹12,899</p>
                    <a href="booking.php"><button  class="book-btn">Book Now</button></a>
                </div>
            </div>
        </div>

        <div class="card">
            <img src="MANALI-HIMACHAL.jpg" alt="IMG">
            <div class="card-content">
                <h3>MANALI</h3>
                <p>Manali is a picturesque hill station in Himachal Pradesh, known for its snow-capped mountains, adventure sports, and scenic beauty.</p>
                <hr>
                <div class="list">
                    <ul>
                        <li>Round Trip Flights</li>
                        <br>
                        <li>Airport Transfers</li>
                    </ul>
                    <ul>
                        <li>4 Star Hotel</li>
                        <br>
                        <li>Selected Meals</li>
                    </ul>
                </div>
                <div class="price-btn">
                    <p class="price">₹16,980</p>
                    <a href="booking.php"><button  class="book-btn">Book Now</button></a>
                </div>
            </div>
        </div>

        <div class="card">
            <img src="DALHOUSIE-HIMACHAL.webp" alt="IMG">
            <div class="card-content">
                <h3>DALHOUSIE</h3>
                <p>Dalhousie is a serene hill station in Himachal Pradesh, India, known for its colonial charm and stunning views of the Himalayas.</p>
                <hr>
                <div class="list">
                    <ul>
                        <li>Round Trip Flights</li>
                        <br>
                        <li>Airport Transfers</li>
                    </ul>
                    <ul>
                        <li>4 Star Hotel</li>
                        <br>
                        <li>Selected Meals</li>
                    </ul>
                </div>
                <div class="price-btn">
                    <p class="price">₹25,899</p>
                    <a href="booking.php"><button  class="book-btn">Book Now</button></a>
                </div>
            </div>
        </div>

        <div class="card">
            <img src="DARAMSHALA-HIMACHAL.avif" alt="IMG">
            <div class="card-content">
                <h3>DARAMSHALA</h3>
                <p>Dharamshala, nestled in Himachal Pradesh, is a serene hill town known for its Tibetan culture, stunning mountain views, and as the home of the Dalai Lama.</p>
                <hr>
                <div class="list">
                    <ul>
                        <li>Round Trip Flights</li>
                        <br>
                        <li>Airport Transfers</li>
                    </ul>
                    <ul>
                        <li>4 Star Hotel</li>
                        <br>
                        <li>Selected Meals</li>
                    </ul>
                </div>
                <div class="price-btn">
                    <p class="price">₹32,999</p>
                    <a href="booking.php"><button  class="book-btn">Book Now</button></a>
                </div>
            </div>
        </div>

        <div class="card">
            <img src="KULLU-HIMACHAL.jpg" alt="IMG">
            <div class="card-content">
                <h3>KULLU</h3>
                <p>Kullu is a beautiful valley in Himachal Pradesh, India, known for its scenic mountains, rivers, and vibrant culture.</p>
                <hr>
                <div class="list">
                    <ul>
                        <li>Round Trip Flights</li>
                        <br>
                        <li>Airport Transfers</li>
                    </ul>
                    <ul>
                        <li>4 Star Hotel</li>
                        <br>
                        <li>Selected Meals</li>
                    </ul>
                </div>
                <div class="price-btn">
                    <p class="price">₹12,899</p>
                    <a href="booking.php"><button  class="book-btn">Book Now</button></a>
                </div>
            </div>
        </div>


    </div>
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
                        <li><a href="# " style="color: #cbd5e1; text-decoration: none; ">Home</a></li>
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