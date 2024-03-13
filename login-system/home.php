<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav class="nav">
        <div class="logo">
            <h1>GoKart</h1>
        </div>

        <div class="item">
            <a class="home-btn" href="/">Home</a>
            <a href="/">Rent Car</a>
            <a href="/">Contact Us</a>
            <a href="/">About Us</a>
            <a href="/">Blog</a>
        </div>

        <div class="btn">
            <input class="login" type="button" value="Log in" onclick="redirect()">
            <input type="button" value="Sign Up">
        </div>
    </nav>
     <script>
        function redirect() {
            // Redirect to another page
            window.location.href = "login.php";
        }
    </script>
    <div class="home">
        <div class="main-sec">
            <div class="left">
                <p class="txt1">Easy And Fast Way To <span style="color: #0043ff8c;">Rent</span> Your Car</p>
                <p></p>
                <div class="btn">
                    <input class="car" type="button" value="Rent Car">
                </div>
            </div>

            <div class="right">
                <img src="" alt="">
            </div>
        </div>
    </div>

    <section class="loc-sec">
        <div class="main-sec">
            <div class="pick">
                <label for="location">Pick Up Location</label>
                <p><i class="fa-solid fa-location-dot"></i> Mumbai,India</p>
            </div>

            <div class="pick">
                <label for="location">Pick Up Location</label>
                <p><i class="fa-solid fa-location-dot"></i> Surat,India</p>
            </div>

            <div class="pick">
                <label for="location">Pick Up Date</label>
                <p><i class="fa-solid fa-calendar-days"></i> 14-02-2024</p>
                <!-- <input type="date" name="date" id=""> -->
            </div>

            <div class="pick">
                <label for="location">Return Date</label>
                <p><i class="fa-solid fa-calendar-days"></i> 16-02-2024</p>
            </div>

            <div class="pick">
                <input type="button" value="Search Car">
            </div>
        </div>
    </section>

    <section class="car-sec">
        <div class="txt">
            <p class="txt1">Latest <span>Inventory</span></p>
            <p class="txt2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, ipsa!</p>
        </div>

        <div class="main-sec">
            <div class="box">
                <img style="width: 365px;"
                    src="user_10001.png"
                    alt="">
                <div class="details">

                    <p class="car-name">Verna</p>

                    <div class="review">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star-half-stroke"></i>
                        <p>( 10k Reviews )</p>
                    </div>

                    <div class="feature">
                        <p><i class="fa-solid fa-chair"></i> 6 Seat</p>
                        <p><i class="fa-solid fa-charging-station"></i> 6 Seat</p>
                        <p><i class="fa-solid fa-car-battery"></i> 6 Seat</p>
                        <p><i class="fa-solid fa-cable-car"></i> 6 Seat</p>
                        <p><i class="fa-solid fa-car-side"></i> 6 Seat</p>
                        <p><i class="fa-solid fa-caravan"></i> 6 Seat</p>
                    </div>

                    <div class="price">
                        <p>*1,036</p>
                        <button>Book Now</button>
                    </div>
                </div>
            </div>

            <div class="box">
                <img style="width: 365px;"
                    src="user_10230.png"
                    alt="">
                <div class="details">

                    <p class="car-name">Kushaq</p>

                    <div class="review">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star-half-stroke"></i>
                        <p>( 1.2k Reviews )</p>
                    </div>

                    <div class="feature">
                        <p><i class="fa-solid fa-chair"></i> 6 Seat</p>
                        <p><i class="fa-solid fa-charging-station"></i> 6 Seat</p>
                        <p><i class="fa-solid fa-car-battery"></i> 6 Seat</p>
                        <p><i class="fa-solid fa-cable-car"></i> 6 Seat</p>
                        <p><i class="fa-solid fa-car-side"></i> 6 Seat</p>
                        <p><i class="fa-solid fa-caravan"></i> 6 Seat</p>
                    </div>

                    <div class="price">
                        <p>*1,578</p>
                        <button>Book Now</button>
                    </div>
                </div>
            </div>

            <div class="box">
                <img style="width: 365px;"
                    src="user_21034.png"
                    alt="">
                <div class="details">

                    <p class="car-name">Camry</p>

                    <div class="review">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star-half-stroke"></i>
                        <p>( 10k Reviews )</p>
                    </div>

                    <div class="feature">
                        <p><i class="fa-solid fa-chair"></i> 6 Seat</p>
                        <p><i class="fa-solid fa-charging-station"></i> 6 Seat</p>
                        <p><i class="fa-solid fa-car-battery"></i> 6 Seat</p>
                        <p><i class="fa-solid fa-cable-car"></i> 6 Seat</p>
                        <p><i class="fa-solid fa-car-side"></i> 6 Seat</p>
                        <p><i class="fa-solid fa-caravan"></i> 6 Seat</p>
                    </div>

                    <div class="price">
                        <p>*1,375</p>
                        <button>Book Now</button>
                    </div>
                </div>
            </div>

            <div class="box">
                <img style="width: 365px;"
                    src="user_23451.png"
                    alt="">
                <div class="details">

                    <p class="car-name">WagonR</p>

                    <div class="review">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star-half-stroke"></i>
                        <p>( 10k Reviews )</p>
                    </div>

                    <div class="feature">
                        <p><i class="fa-solid fa-chair"></i> 6 Seat</p>
                        <p><i class="fa-solid fa-charging-station"></i> 6 Seat</p>
                        <p><i class="fa-solid fa-car-battery"></i> 6 Seat</p>
                        <p><i class="fa-solid fa-cable-car"></i> 6 Seat</p>
                        <p><i class="fa-solid fa-car-side"></i> 6 Seat</p>
                        <p><i class="fa-solid fa-caravan"></i> 6 Seat</p>
                    </div>

                    <div class="price">
                        <p>*1,060</p>
                        <button>Book Now</button>
                    </div>
                </div>
            </div>

            <div class="box">
                <img style="width: 365px;"
                    src="user_32540.png"
                    alt="">
                <div class="details">

                    <p class="car-name">S-Cross</p>

                    <div class="review">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star-half-stroke"></i>
                        <p>( 10k Reviews )</p>
                    </div>

                    <div class="feature">
                        <p><i class="fa-solid fa-chair"></i> 6 Seat</p>
                        <p><i class="fa-solid fa-charging-station"></i> 6 Seat</p>
                        <p><i class="fa-solid fa-car-battery"></i> 6 Seat</p>
                        <p><i class="fa-solid fa-cable-car"></i> 6 Seat</p>
                        <p><i class="fa-solid fa-car-side"></i> 6 Seat</p>
                        <p><i class="fa-solid fa-caravan"></i> 6 Seat</p>
                    </div>

                    <div class="price">
                        <p>*1,245</p>
                        <button>Book Now</button>
                    </div>
                </div>
            </div>

            <div class="box">
                <img style="width: 365px;"
                    src="user_34052.png"
                    alt="">
                <div class="details">

                    <p class="car-name">Brezza</p>

                    <div class="review">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star-half-stroke"></i>
                        <p>( 10k Reviews )</p>
                    </div>

                    <div class="feature">
                        <p><i class="fa-solid fa-chair"></i> 6 Seat</p>
                        <p><i class="fa-solid fa-charging-station"></i> 6 Seat</p>
                        <p><i class="fa-solid fa-car-battery"></i> 6 Seat</p>
                        <p><i class="fa-solid fa-cable-car"></i> 6 Seat</p>
                        <p><i class="fa-solid fa-car-side"></i> 6 Seat</p>
                        <p><i class="fa-solid fa-caravan"></i> 6 Seat</p>
                    </div>

                    <div class="price">
                        <p>*1,245</p>
                        <button>Book Now</button>
                    </div>
                </div>
            </div>
            <div class="btn">
                <input type="button" value="View All">
            </div>
        </div>
    </section>

    <section class="support-sec">
        <div class="txt">
            <p class="txt1">Why <span>Choose</span> Us</p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. At, cupiditate!</p>
        </div>

        <div class="main-sec">
            <div class="box">
                <i class="fa-solid fa-phone"></i>
                <div class="txt-sec">
                    <p class="txt1">24 Hour Support</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore doloremque sequi animi ab
                        corporis, necessitatibus eum cum vel rerum nisi.</p>
                </div>
            </div>

            <div class="box">
                <i class="fa-solid fa-flag-checkered"></i>
                <div class="txt-sec">
                    <p class="txt1">Best Price</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore doloremque sequi animi ab
                        corporis, necessitatibus eum cum vel rerum nisi.</p>
                </div>
            </div>

            <div class="box">
                <i class="fa-solid fa-certificate"></i>
                <div class="txt-sec">
                    <p class="txt1">Verified License</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore doloremque sequi animi ab
                        corporis, necessitatibus eum cum vel rerum nisi.</p>
                </div>
            </div>

            <div class="box">
                <i class="fa-regular fa-circle-xmark"></i>
                <div class="txt-sec">
                    <p class="txt1">Free Cancelation</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore doloremque sequi animi ab
                        corporis, necessitatibus eum cum vel rerum nisi.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="achie-sec">
        <div class="txt">
            <p class="txt1">Our <span>Achievement</span></p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, provident.</p>
        </div>

        <div class="main-sec">
            <div class="box">
                <p class="txt1">4000+</p>
                <p>Active Member</p>
            </div>

            <div class="box">
                <p class="txt1">3000+</p>
                <p>Car Color</p>
            </div>

            <div class="box">
                <p class="txt1">6000+</p>
                <p>Car Model</p>
            </div>

            <div class="box">
                <p class="txt1">10k</p>
                <p>Positive Rating</p>
            </div>
        </div>
    </section>

    <section class="start-sec">
        <div class="main-sec">
            <div class="left">
                <p class="txt1">Ready To Get Start?</p>
                <p class="txt2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus ipsa eos neque quo consectetur totam perferendis aut quos sequi expedita.</p>
                <div class="btn">
                    <button>Contact Us</button>
                </div>
            </div>

            <div class="right">
                <img src="verna.png" alt="">
            </div>
        </div>
    </section>

    <footer class="foot-sec">
        <div class="logo">
            <h1>DeveloperGTM</h1>
        </div>

        <div class="copy">
            <p>Copyright &copy; 2024 Design By DeveloperGTM</p>
        </div>

        <div class="item">
            <a href="/">Website Terms</a>
            <a href="/">Contact Us</a>
            <a href="/">Privacy Policy</a>
        </div>
    </footer>
</body>

</html>


<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>