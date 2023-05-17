<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Darren & Stefenie</title>

    <!-- Site Type, Name, Title, and Description to be displayed -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="You are invited to the wedding of Darren & Stefenie" />
    <meta property="og:description" content="Darren & Stefenie" />

    <!-- Website to visit when clicked in fb or WhatsApp-->
    <meta property="og:url" content="https://savethedate.wesbite/DarrenStefenie" />
    <meta property="og:site_name" content="Carlwinsona">

    <!-- Image to display -->
    <meta property="og:image" content="images/ds1.jpg" />
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <meta property="og:image:type" content="image/jpeg">

    <link rel="icon" type="image/x-icon" href="images/dsLogo.png">

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- <script type="text/javascript" src="https://unpkg.com/scrollreveal"></script> -->

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> -->

    <style>
        .wish-row {
          margin-bottom: 10px;
          border-radius: 10px;
          border-style: solid;
          border-width: 2px;
          border-color: #4D3B33;

        }
        .names {
          font-family: "Sahitya";
          font-size: 20px;
          font-weight: bold;
          text-align: center;
          color: #4D3B33;
        }
        .wishes {
          font-family: "Sahitya";
          font-weight: 400;
          font-size: 20px;
          text-align: center;
          color: #4D3B33;
        }

        @media (max-width: 770px) {
            .wish-row {
              margin-bottom: 10px;
              border-radius: 10px;
              border-style: solid;
              border-width: 2px;
              border-color: #4D3B33;
            }
            .names {
              font-size: 16px;
            }
            .wishes {
              font-size: 14px;
            }
        }
    </style>

</head>

<body>
    <!--=======Scroll to top button=======-->
    <div class="scrollToTop-btn flex-center">
        <i class="fas fa-arrow-up"></i>
    </div>

    <audio id="music" loop>
        <source src="You're Still The One - Music Travel Love ft. Dave Moffatt (Shania Twain Cover).mp3" type="audio/mpeg">
    </audio>

    <div class="sound">
        <i class="fas fa-volume-up" id="playButton" onclick="pauseAudio()" style="display: none"></i>
        <i class="fas fa-volume-mute" id="pauseButton" onclick="playAudio()"></i>
    </div>

    <div class="home" id="myHome">
        <video id="myVideoDesktop" class="videoDesktop" src="videos/rustic-bg.mp4" autoplay muted loop playsinline></video>
    </div>

    <!-- <div class="BGoverlay" id="backgroundBlur"></div> -->


    <section class="main" id="main-section">
        <!-- <div class="main-overlay"></div> -->
        <div class="content">
            <div class="top-area">
                <!-- <h1 class="invite">You are Invited to the Wedding of</h1> -->
                <!-- <h1 class="gelaran"><u> Miss Wyona Primus Kayau</u></h1> -->
                <h1 class="intro">You Are Invited To The Wedding Of</h1>
                <h1 class="name" style="margin-top: 50px;">Darren</h1>
                <h1 class="name"> & </h1>
                <h1 class="name" style="margin-bottom: 50px;">Stefenie</h1>
                <!-- <h1 class="name">Darren & Stefenie</h1> -->
                <!-- <h1 class="save">Save the date!</h1> -->
            </div>
            <div class="bottom-area">
                <p class="date">27 . 05 . 23</p>
                <p class="day">(SATURDAY)</p>
                <!-- <p class="location">Tambunan, Sabah, Malaysia</p> -->

                <div class="countdownContainer slide-from-bottom">
                    <div class="countdownContent">
                        <p class="countdown" id="countdownDays"></p>
                        <p class="countdownText">Days</p>
                    </div>
                    <div class="countdownContent">
                        <p class="countdown" id="countdownHours"></p>
                        <p class="countdownText">Hours</p>
                    </div>
                    <div class="countdownContent">
                        <p class="countdown" id="countdownMinutes"></p>
                        <p class="countdownText">Minutes</p>
                    </div>
                    <div class="countdownContent">
                        <p class="countdown" id="countdownSeconds"></p>
                        <p class="countdownText">Seconds</p>
                    </div>
                </div>

                <a href="#Invitation" id="close">Open Invitation</a>
            </div>
        </div>
    </section>

    <section class="circle-section" id="Invitation">
        <img class="imgCircle" src="images/ds-1.jpg" alt="">
        <h1 class="bride">Darren</h1>
        <h1 class="groom">Stefenie</h1>
    </section>

    <section class="quote-section">
        <h1 class="quote">
            Therefore what God has joined together,
        </h1>
        <h1 class="quote">
            let no man separate
        </h1>
        <p class="gospel">Mark 10:9</p>

        <div class="logo">
            <img src="images/dsLogo.png" alt="">
        </div>
    </section>

    <section class="wedding-card" id="wedCard-section">
        <h1 class="top-text">TOGETHER WITH OUR FAMILIES</h1>
        <div class="top">
            <div class="left">
                <img class="photo" src="images/ds3.jpg" alt="">
            </div>
            <div class="right">
                <h1 class="name-text1">Stefenie</h1>
                <h2 class="fullname1">Stefenie Jurimin</h2>
                <p class="born-text1">The eldest daughter of:</p>
                <h2 class="parent-text1">Mr. Jurimin Kondorid</h2>
                <h2 class="plus-text1">&</h2>
                <h2 class="parent-text1">Mrs. Dorothea Nandu</h2>
            </div>
        </div>
        <div class="bottom">
            <div class="left">
                <h1 class="name-text2">Darren</h1>
                <h2 class="fullname2">Darren Tan Chong Chiang</h2>
                <p class="born-text2">Third son of:</p>
                <h2 class="parent-text2">Mr. Tan Chong Chiang</h2>
                <h2 class="plus-text2">&</h2>
                <h2 class="parent-text2">Mrs. Helen Victor</h2>
            </div>
            <div class="right">
                <img class="photo" src="images/ds2.jpg" alt="">
            </div>
        </div>
        <h2 class="bottom-text">We request the pleasure of your company at the celebration of our wedding.</h2>

    </section>

    <!-- <section class="midImage">
        <div class="overlay">
            <div class="topGradient"></div>
            <div class="bottomGradient"></div>
        </div>
    </section> -->

    <section class="schedule">
        <div class="title-area">
            <h1>Our Wedding Tentative</h1>

            <h2>Bride's Side</h2>
            <h2>SATURDAY, MAY 27, 2023</h2>

        </div>

        <div class="content-area">
            <div class="content mass">
                <div class="content-overlay">
                    <div class="top">
                        <p class="title">WEDDING CEREMONY</p>
                        <p class="title"><i class="fas fa-clock"></i> 10:00am</p>
                        <!-- <i class="fas fa-church"></i> -->
                        <p>
                            <i class="fas fa-church"></i> 
                            Dewan Paroki Holy Cross Catholic Church Toboh, Tambunan, Sabah.
                        </p>
                        <p>
                            <i class="fas fa-dove"></i> 
                            Come and witness as we exchange our marriage vows and unite in Holy Matrimony, creating a lasting bond with the foundation of Christ
                        </p>
                        <!-- <p><i class="fas fa-tshirt"></i> Dress Code: Traditional Costumes (Black with gold lace)</p> -->
                    </div>

                    <div class="bottom">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.051350482125!2d116.38802167389682!3d5.705721732128235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x323c81bd013f3e29%3A0xe356a1224e79aaa1!2sDewan%20Paroki%20Holy%20Cross%20Catholic%20Church%20Toboh!5e0!3m2!1sen!2smy!4v1683819046629!5m2!1sen!2smy"
                            width="100%" height="100%" style="border:0; border-radius: 10px;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <!-- <div class="content chineseTea">
                <div class="content-overlay">
                    <div class="top">
                        <p class="title">CHINESE TEA CEREMONY</p>
                        <p class="title"><i class="fas fa-clock"></i> 4.00pm</p>
                        <p><i class="fas fa-landmark"></i> The Stone Garden, Tambunan, Sabah.</p>
                        <p><i class='fas fa-coffee'></i> As part of the bride’s Chinese Tradition, Chinese tea ceremony are joined both bride and 
                            groom wherein tea are served to our families, including our parents, aunts, uncles, and 
                            grandparents as a symbol of honor and gratitude to our beloved. This is also an act of 
                            welcoming the groom side of the family and thereby unifying both families.</p>
                        <p><i class="fas fa-tshirt"></i> Dress Code: Traditional Costumes (Black with gold lace)</p>
                        

                    </div>

                    <div class="bottom">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15880.898632559267!2d116.3753629!3d5.6806335!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf1268eb6f6180695!2sTambunan%20Village%20Resort%20Centre!5e0!3m2!1sen!2smy!4v1664345211763!5m2!1sen!2smy"
                            width="100%" height="100%" style="border:0; border-radius: 10px;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div> -->
            <!-- <div class="content mogongoi">
                <div class="content-overlay">
                    <div class="top">
                        <p class="title">MOGONGOI</p>
                        <p class="title"><i class="fas fa-clock"></i> 2:30pm</p>
                        <p><i class="fas fa-landmark"></i> Tambunan Village Resort Centre</p>
                        <p><i class='fas fa-glass-whiskey'></i> "MOGONGOI" ritual in Dusun language means to officially invite the bride to join the groom 
                            as a new member of the family. This is one of the most significant part of our Dusun wedding 
                            ceremony which includes riddles, traditional food and drinks, shared by both bride’s and groom’s family. </p>
                        <p><i class="fas fa-tshirt"></i> Dress Code: Traditional Costumes (Black with gold lace)</p>
                       
                    </div>

                    <div class="bottom">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15880.898632559267!2d116.3753629!3d5.6806335!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf1268eb6f6180695!2sTambunan%20Village%20Resort%20Centre!5e0!3m2!1sen!2smy!4v1664345211763!5m2!1sen!2smy"
                            width="100%" height="100%" style="border:0; border-radius: 10px;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div> -->
            <div class="content reception">
                <div class="content-overlay">
                    <div class="top">
                        <p class="title">WEDDING RECEPTION</p>
                        <p class="title"><i class="fas fa-clock"></i> 4:00pm</p>
                        <p>
                            <i class="fas fa-landmark"></i>
                            </i> The Stone Garden, Tambunan, Sabah.</p>
                        <p>
                            <i class="fas fa-glass-cheers"></i> 
                            It brings us great joy to celebrate our love with cherished family and friends, both near and far. We invite you to relish in an evening of dinner, drinks, and plenty of dancing!
                        </p>
                        <!-- <p><i class="fas fa-tshirt"></i> Dress Code: Modern Traditional Attire (Black with gold lace)</p> -->
                        <!-- fas fa-wine-bottle -->
                        <!-- fas fa-glass-cheers -->
                    </div>
                    <div class="bottom">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.3546284295735!2d116.36185757389667!3d5.661746132579564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x323c86d0e8aafb3d%3A0xce474b71539f864c!2sThe%20Stone%20Garden!5e0!3m2!1sen!2smy!4v1683819005423!5m2!1sen!2smy"
                            width="100%" height="100%" style="border:0; border-radius: 10px;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="title-area">
            <h1></h1>

            <h2>Groom's Side</h2>
            <h2>SATURDAY, JUNE 3, 2023</h2>
        </div>
        <div class="content-area">
        <div class="content reception">
                <div class="content-overlay">
                    <div class="top">
                        <p class="title">WEDDING RECEPTION</p>
                        <p class="title"><i class="fas fa-clock"></i> 4:00pm</p>
                        <p>
                            <i class="fas fa-landmark"></i>
                            </i> Kg Pasir Putih, Keningau, Sabah.</p>
                        <p>
                            <i class="fas fa-glass-cheers"></i> 
                            Join us in celebrating the groom's side at our joyous wedding reception! Come relish in dinner, drinks, and dancing with cherished family and friends, near and far.
                        </p>
                        <!-- <p><i class="fas fa-tshirt"></i> Dress Code: Modern Traditional Attire (Black with gold lace)</p> -->
                        <!-- fas fa-wine-bottle -->
                        <!-- fas fa-glass-cheers -->
                        <p class="title">R.S.V.P</p>
                        <div style="display: flex; align-items: center; justify-content: center;"> 
                            <a class="text2" href="https://wa.me/601155567074">
                                <i class="fab fa-whatsapp" style="font-size:18px; margin-right: 10px; color:#4D3B33;"></i>
                            </a>
                            <a class="text2" href="tel:+601155567074">
                                <i class="fas fa-phone-alt" style="font-size:14px; margin-right: 10px; color:#4D3B33;"></i>
                            </a>
                            <p class="text2">Darren: 011 5556 7074 </p>
                        </div>
                        <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                            <a class="text2" href="https://wa.me/60198309669">
                                <i class="fab fa-whatsapp" style="font-size:18px; margin-right: 10px; color:#4D3B33;"></i>
                            </a>
                            <a class="text2" href="tel:+60198309669">
                                <i class="fas fa-phone-alt" style="font-size:14px; margin-right: 10px; color:#4D3B33;"></i> 
                            </a>
                            <p class="text2">Helen Victor: 019 830 9669</p>
                        </div>
                    </div>
                    <div class="bottom">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3972.3132492239592!2d116.16621007389517!3d5.369105335503035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNcKwMjInMDguOCJOIDExNsKwMTAnMDcuNiJF!5e0!3m2!1sen!2smy!4v1684338356394!5m2!1sen!2smy"
                            width="100%" height="100%" style="border:0; border-radius: 10px;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <iframe name="hiddenFrame" class="hide"></iframe>

    <section class="rsvp">
        <div class="content rsvp-content">
            <div class="rsvp-overlay">
                <h1 class="title">Reservation</h1>
                <p class="text1">Kindly fill in your details to confirm your attendance or contact us directly.</p>

                <div style="display: flex; align-items: center; justify-content: center;"> 
                    <p class="text2">Darren: 011 5556 7074 </p>
                    <a class="text2" href="https://wa.me/601155567074">
                        <i class="fab fa-whatsapp" style="font-size:26px; margin-left: 10px; color:#4D3B33;"></i>
                    </a>
                    <a class="text2" href="tel:+601155567074">
                        <i class="fas fa-phone-alt" style="font-size:22px; margin-left: 10px; color:#4D3B33;"></i>
                    </a>
                </div>
                <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <p class="text2">Stefenie: 014 358 4077</p>
                    <a class="text2" href="https://wa.me/60143584077">
                        <i class="fab fa-whatsapp" style="font-size:26px; margin-left: 10px; color:#4D3B33;"></i>
                    </a>
                    <a class="text2" href="tel:+6014358407">
                        <i class="fas fa-phone-alt" style="font-size:22px; margin-left: 10px; color:#4D3B33;"></i> 
                    </a>
                </div>

                <form class="rsvpForm" action="insert.php" method="POST" target="hiddenFrame" id="myForm">
                    <label class="formText">Name / Family Name: </label>
                    <input class="inputCombine" id="name" type="text" name="username" required>

                    <br><br>

                    <label class="formText">Contact No: </label>
                    <input class="inputCombine" type="tel" id="phoneNo" name="phone" maxlength="11" required>

                    <br><br>

                    <label class="formText"> Will you attend: </label>

                    <br>

                    <input type="radio" name="attend" value="Yes" onclick="radioAttend()" required> <label class="radioText"
                        for="">Yes</label>
                    &emsp;
                    <input type="radio" name="attend" value="No" onclick="radioNotAttend()"> <label
                        class="radioText" for="">No</label>

                    <br id="br1" style="display:none;">
                    <br id="br2" style="display:none;">

                    <div id="totalGuest" style="display:none;">
                        <label class="formText">Number of persons: </label>

                        <br>

                        <input type="radio" name="totalAttend" value="1" onclick="radio1()" checked> <label
                            class="radioText" for="">1</label> &emsp;
                        <input type="radio" name="totalAttend" value="2" onclick="radio2()"> <label
                            class="radioText" for="">2</label> &emsp;
                        <input type="radio" name="totalAttend" value="3" onclick="radio3()"> <label
                            class="radioText" for="">3</label> &emsp;
                        <input type="radio" name="totalAttend" value="4" onclick="radio4()"> <label
                            class="radioText" for="">4</label> &emsp;
                        <input type="radio" name="totalAttend" value="5" onclick="radio5()"> <label
                            class="radioText" for="">5</label>

                        <input class="inputCombine" id="guest1" type="text" name="guest1">
                        <input class="inputCombine" id="guest2" type="text" name="guest2" style="display:none;">
                        <input class="inputCombine" id="guest3" type="text" name="guest3" style="display:none;">
                        <input class="inputCombine" id="guest4" type="text" name="guest4" style="display:none;">
                        <input class="inputCombine" id="guest5" type="text" name="guest5" style="display:none;">
                    </div>

                    <br><br>

                    <label class="formText">Wishes: </label>
                    <textarea name="wish" id="wish" cols="50" rows="4" required></textarea>

                    <br><br>

                    <input class="inputSend" type="submit" value="Send" name="submit">
                </form>
            </div>
        </div>

        <div class="content-wish-container">
            <div class="wish-overlay">
                <h1 class="title-wish">Wishes</h1>
                <div class="wishes-content">
                    <?php
                        $conn = mysqli_connect("localhost", "root", "", "savethedate"); 
                        //"u993605839_carlwinsona", "Carlwinsona@1996", "u993605839_carlwinsona")
                        // Check connection
                        if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                        }
                        $sql = "SELECT id, username, wish FROM rsvp";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                        echo "<div class='wish-row'><h1 class='names'>" . $row["username"] . "</h1> 
                        <h2 class='wishes'>". $row["wish"]. "</h2></div>";
                        // echo "<h2 class='wishes'>" . $row["wish"]. "</h2>";
                        }
                        } else { echo "0 results"; }
                        $conn->close();
                    ?>
                </div>
            </div>
        </div>

        <!-- <div class="content-wish-container">
            <div class="wish-overlay">
                <h1 class="title-wish">Wishes</h1>
                <div class="wishes-content">
                   
                </div>
            </div>
        </div> -->
    </section>

    <!-- <section class="gift">
        <div class="gift-content">
            <h1>Wedding Gift</h1>
            <p>Your presence at our wedding is the greatest present of all. Therefore, we humbly request no physical 
                gift necessary. However, if you wish to honour us with a gift, an e-cash gift would be highly appreciated.</p>
            <button onclick="showCard()">Send us an e-cash wedding gift</button>
            <div class="cardContainer" id="card-container" style="display:none;">
                <h2 class="bankName">Maybank</h2>
                <h2 class="bankNo" id="bankNum">510108111833</h2>
                <h2 class="name">Winna Primus Kayau</h2>
                <div class="copyButton" onclick="copyBank()">Copy Number</div>
            </div>
        </div>
    </section> -->

    <!-- <section class="video-section">
        <h1 class="video-text">Hope to see you on our big day!</h1>
        <h2 class="video-text">In the mean time, please enjoy our short prewedding clip.</h2>
        <div class="iframe-container">       
                <iframe width="853" height="480" src="https://www.youtube.com/embed/fpH0Va4BVdw" title="SAVE THE DATE | Carlwinsona’s Forever After" 
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen></iframe>
        </div>
        <p class="hashtag">#carlwinsona’sforeverafter</p>
    </section> -->

    <section class="lastImg-section">
        <!-- <div class="top-overlay"></div> -->
        <div class="overlay">
            <p class="intro">See You on Our Big Day</p>
            <h1 class="intro">Love,</h1>
            <h1 class="names">Darren & Stefenie</h1>
        </div>
    </section>

    <section class="footer">
        <div class="logos">
            <img src="images/logo2.png" alt="">
        </div>

        <h1 class="developer">SAVETHEDATE.WEBSITE BY CW</h1>
    </section>

    <!-- <script src="https://unpkg.com/scrollreveal"></script> -->
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <script type="text/javascript" src="main.js"></script>

</body>

</html>