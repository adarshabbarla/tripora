<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>Rajaasthan</title>
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
            margin-left: 20px;
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


    <h1 style="text-align: center;">RAJASTHAN TOURIST SPOTS</h1>
    <div class="grid">

        <div class="card">
            <img src="AMBERFORT-RAJASTHAN.jpg" alt="IMG">
            <div class="card-content">
                <h3>AMBERFORT</h3>
                <p>Located high on a hill, it is the principal tourist attraction in Jaipur.</p>
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
                    <p class="price">₹19,899</p>
                    <a href="booking.php"><button  class="book-btn">Book Now</button></a>
                </div>
            </div>
        </div>

        <div class="card">
            <img src="LAKEPICHOLA-RAJASTHAN.jpg" alt="IMG">
            <div class="card-content">
                <h3>LAKE PICHOLA</h3>
                <p>Lake Pichola, situated in Udaipur city in the Indian state of Rajasthan, is an artificial fresh water lake.</p>
                <hr>
                <div class="list">
                    <ul>
                        <li>Round Trip Flights</li>
                        <br>
                        <li>Airport Transfers</li>
                    </ul>
                    <ul>
                        <li>5 Star Hotel</li>
                        <br>
                        <li>Selected Meals</li>
                    </ul>
                </div>
                <div class="price-btn">
                    <p class="price">₹29,070</p>
                    <a href="booking.php"><button  class="book-btn">Book Now</button></a>
                </div>
            </div>
        </div>

        <div class="card">
            <img src="MEHRANGARHFORT-RAJASTHAN.jpg" alt="IMG">
            <div class="card-content">
                <h3>MEHRANGARH FORT</h3>
                <p>Mehrangarh is a historic fort located in Jodhpur, Rajasthan.</p>
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
                    <p class="price">₹17,099</p>
                    <a href="booking.php"><button  class="book-btn">Book Now</button></a>
                </div>
            </div>
        </div>

        <div class="card">
            <img src="GOLDENFORT-RAJASTHAN.jpg" alt="IMG">
            <div class="card-content">
                <h3>GOLDEN TEMPLE</h3>
                <p>The Golden Temple in Amritsar is a stunning Sikh shrine known for its golden architecture and peaceful atmosphere.</p>
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
                    <p class="price">₹29,000</p>
                    <a href="booking.php"><button  class="book-btn">Book Now</button></a>
                </div>
            </div>
        </div>

        <div class="card">
            <img src="CITYPALACE-RAJASTHAN.jpg" alt="IMG">
            <div class="card-content">
                <h3>CITY PALACE</h3>
                <p>City Palace is a magnificent royal complex in Udaipur, Rajasthan, known for its stunning architecture and rich history.</p>
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
                    <p class="price">₹15,999</p>
                    <a href="booking.php"><button  class="book-btn">Book Now</button></a>
                </div>
            </div>
        </div>

        <div class="card">
            <img src="Pushkarlake-Rajasthan.jpg" alt="IMG">
            <div class="card-content">
                <h3>PUSHKAR LAKE</h3>
                <p>Pushkar Lake is a sacred Hindu pilgrimage site in Rajasthan, surrounded by ghats and temples.</p>
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
                    <p class="price">₹14,089</p>
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