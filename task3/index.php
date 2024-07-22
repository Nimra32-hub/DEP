<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>E-Commerce Website</title>
</head>

<body>
    <nav id="nav">
        <div class="navTop">
            <div class="navItem">
                <h2>Services</h2>
            </div>
            <div class="navItem">
                <!-- <div class="search">
                    <input type="text" placeholder="Search..." class="searchInput">
                    <img src="./img/search.png" width="20" height="20" alt="" class="searchIcon">
                </div> -->
            </div>
            <div class="navItem">
                <span class="limitedOffer">Limited Offer!</span>
            </div>
        </div>
        <div class="navBottom">
            <h3 class="menuItem">Bluncher Shoes</h3>
            <h3 class="menuItem"> Brogue Shoes</h3>
            <h3 class="menuItem">Creeper Shoes</h3>
            <h3 class="menuItem">Buck Shoes</h3>
            <h3 class="menuItem">Buckled Shoes</h3>
        </div>
    </nav>
    <div class="slider">
        <div class="sliderWrapper">
            <div class="sliderItem">
                <img src="./img/img1.jpg" alt="" class="sliderImg" style="border-radius: 299px;">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">Bluncher</br> NEW</br> SEASON</h1>
                
                <a href="#product">
                    <button class="buyButton">BUY NOW!</button>
                </a>
            </div>
            <div class="sliderItem">
                <img src="./img/blazer2.png" alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">Brogue</br> NEW</br> SEASON</h1>
             
                <a href="#product">
                    <button class="buyButton">BUY NOW!</button>
                </a>
            </div>
            <div class="sliderItem">
                <img src="./img/blazer.png" alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">Creeper</br> NEW</br> SEASON</h1>
                
                <a href="#product">
                    <button class="buyButton">BUY NOW!</button>
                </a>
            </div>
            <div class="sliderItem">
                <img src="./img/crater.png" alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">Buck</br> NEW</br> SEASON</h1>
                
                <a href="#product">
                    <button class="buyButton">BUY NOW!</button>
                </a>
            </div>
            <div class="sliderItem">
                <img src="./img/shoe2.png" alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">Buckled</br> NEW</br> SEASON</h1>
                
                <a href="#product">
                    <button class="buyButton">BUY NOW!</button>
                </a>
            </div>
        </div>
    </div>
   
    <div class="features">
        <div class="feature">
            <img src="./img/shipping.png" alt="" class="featureIcon">
            <span class="featureTitle">FREE SHIPPING</span>
            <span class="featureDesc">Free worldwide shipping on all orders.</span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="./img/return.png" alt="">
            <span class="featureTitle">30 DAYS RETURN</span>
            <span class="featureDesc">No question return and easy refund in 14 days.</span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="./img/gift.png" alt="">
            <span class="featureTitle">GIFT CARDS</span>
            <span class="featureDesc">Buy gift cards and use coupon codes easily.</span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="./img/contact.png" alt="">
            <span class="featureTitle">CONTACT US!</span>
            <span class="featureDesc">Keep in touch via email and support system.</span>
        </div>
    </div>

    <div class="product" id="product">
        <img src="./img/whh.png" alt="" class="productImg">
        <div class="productDetails">
            <h1 class="productTitle">Services</h1>
            <h2 class="productPrice">3000rs</h2>
            <p class="productDesc">Lorem ipsum dolor sit amet consectetur impal adipisicing elit. Alias assumenda
                dolorum
                doloremque sapiente aliquid aperiam.</p>
            <div class="colors">
                <div class="color"></div>
                <div class="color"></div>
                <div class="color"></div>
                <div class="color"></div>
            </div>
            <h3>Sizes.</h3>
            <div class="sizes">
                
                <div class="size">09</div>
                <div class="size">10</div>
                <div class="size">11</div>
                <div class="size">12</div>
            </div>
            <button class="productButton">BUY NOW!</button>
        </div>
        <form action="" method="post">
        <div class="payment" >
            <h1 class="payTitle">Personal Information</h1>
            <label>Name.</label>
            <input type="text" placeholder="Name" name="name" class="payInput">
            <label>Phone Number</label>
            <input type="number" placeholder="Phone Number"name="phone" class="payInput">
            <label>Address</label>
            <input type="text" placeholder="Address" name="address"class="payInput">
            <label>Shoes Name</label>
            <input type="text" placeholder="Shoes name" name="shoe_name"class="payInput"><br>
            <label>Shoes Color</label><br>
            <select name="shoe_color">
                  <option>Black</option>
                  <option>Red</option>
                  <option>Yellow</option>
                  <option>Blue</option>
              </select><br>
            <label>Size</label><br>
            <select name=" size"><br>
            <option>09</option>
            <option>10</option>
            <option>11</option>
            <option>12</option> 
        </select>


            <!-- <h1 class="payTitle">Card Information</h1>
            <div class="cardIcons">
                <img src="./img/visa.png" width="40" alt="" class="cardIcon">
                <img src="./img/master.png" alt="" width="40" class="cardIcon">
            </div>
            <input type="password" class="payInput" placeholder="Card Number"> -->
            <!-- <div class="cardInfo">
                <input type="text" placeholder="mm" class="payInput sm">
                <input type="text" placeholder="yyyy" class="payInput sm">
                <input type="text" placeholder="cvv" class="payInput sm">
            </div> -->
            <button class="payButton" onclick="chnge()"name="submit">Submit!</button>
            <span class="close">X</span>
        </div>
    </form>
 
    </div>
    <div class="gallery">
        <div class="galleryItem">
            <h1 class="galleryTitle">Be Yourself!</h1>
            <img src="./img/boy1.jpg" alt="" class="galleryImg">
        </div>
        <div class="galleryItem">
            <img src="./img/boy3.jpg"
                alt="" class="galleryImg">
            <h1 class="galleryTitle">This is the First Day of Your New Life</h1>
        </div>
        <div class="galleryItem">
            <h1 class="galleryTitle">Just Do it!</h1>
            <img src="./img/boy2.jpg"
                alt="" class="galleryImg">
        </div>
    </div>
    <div class="newSeason">
        <div class="nsItem">
            <img src="./img/boys4.webp"
                alt="" class="nsImg">
        </div>
        <div class="nsItem">
            <h3 class="nsTitleSm">WINTER NEW ARRIVALS</h3>
            <h1 class="nsTitle">New Season</h1>
            <h1 class="nsTitle">New Collection</h1>
            <a href="#nav">
                <button class="nsButton">CHOOSE YOUR STYLE</button>
            </a>
        </div>
        <div class="nsItem">
            <img src="./img/boys5.jpg"
                alt="" class="nsImg">
        </div>
    </div>
    <footer>
        <div class="footerLeft">
            <div class="footerMenu">
                <h1 class="fMenuTitle">About Us</h1>
                <ul class="fList">
                    <li class="fListItem">Company</li>
                    <li class="fListItem">Contact</li>
                    <li class="fListItem">Careers</li>
                    <li class="fListItem">Affiliates</li>
                    <li class="fListItem">Stores</li>
                </ul>
            </div>
            <div class="footerMenu">
                <h1 class="fMenuTitle">Useful Links</h1>
                <ul class="fList">
                    <li class="fListItem">Support</li>
                    <li class="fListItem">Refund</li>
                    <li class="fListItem">FAQ</li>
                    <li class="fListItem">Feedback</li>
                    <li class="fListItem">Stories</li>
                </ul>
            </div>
            <div class="footerMenu">
                <h1 class="fMenuTitle">Products</h1>
                <ul class="fList">
                    <li class="fListItem">Air Force</li>
                    <li class="fListItem">Air Jordan</li>
                    <li class="fListItem">Blazer</li>
                    <li class="fListItem">Crater</li>
                    <li class="fListItem">Hippie</li>
                </ul>
            </div>
        </div>
        <div class="footerRight">
            <div class="footerRightMenu">
                <h1 class="fMenuTitle">Subscribe to our newsletter</h1>
                <div class="fMail">
                    <input type="text" placeholder="your@email.com" class="fInput">
                    <button class="fButton">Join!</button>
                </div>
            </div>
            <div class="footerRightMenu">
                <h1 class="fMenuTitle">Follow Us</h1>
                <div class="fIcons">
                    <img src="./img/facebook.png" alt="" class="fIcon">
                    <img src="./img/twitter.png" alt="" class="fIcon">
                    <img src="./img/instagram.png" alt="" class="fIcon">
                    <img src="./img/whatsapp.png" alt="" class="fIcon">
                </div>
            </div>
            <div class="footerRightMenu">
                <span class="copyright"> All rights reserved. 2024.</span>
            </div>
        </div>
    </footer>
    <script src="./app.js"></script>
</body>

</html>
<?php
// echo"hey how are you<br>";
$severname="localhost";
$username="root";
$password="";
$database="e-com";
// $conn=mysqli_connect($severname,$username,$password,$database);
$conn = mysqli_connect($severname,$username,$password,$database) or die("not connected");
?>
   <?php
if (isset($_POST['submit'])) {
    $sname = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $shoe_name = $_POST['shoe_name'];
    $shoe_color = $_POST['shoe_color'];
    $size = $_POST['size'];
 
    $sql = $sql = "INSERT INTO `comm`(`Name`, `Phone Number`, `Address`, `Shoe Name`, `Shoe Color`, `Sizes`) VALUES ('$sname',  '$phone', '$address','$shoe_name','$shoe_color','$size')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>confirm('Your Order has been Done')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    ;
}
?>