<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv='cache-control' content='no-cache'>
    <!-- Actualiser Page -->
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
     <!-- CSS -->
    <link rel="stylesheet" href="Style_Home.css">
    <link rel="stylesheet" href="Style_HomePhone.css">
    <link rel="stylesheet" href="style_nav.css">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <!-- icons -->
    <link rel="Logo Alaman.png" sizes="76x76" href="photo/Logo Alaman.png">
	<link rel="icon" type="image/png" sizes="96x96" href="photo/Logo Alaman.png">
    <!-- Title -->
    <title>EL-AMEN Clinic</title>
</head>
<body>
            <!--Start ... Code HTml For Navbar part One -->

<header>
        <div class="container">
            <input type="checkbox" name="" id="check">
            
            <div class="logo-container">
                <img class="logo-img" src="photo/Logo Alaman.png" alt="logo">
                <h3 class="logo"><span>ElAMEN</span>Clinic</h3>
            </div>

            <div class="nav-btn">
                <div class="nav-links">
                    <ul>
                        <li class="nav-link" style="--i: .6s">
                            <a href="index_Home.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
                        </li>
                        <li class="nav-link" style="--i: .85s">
                            <a ><i class="fa fa-server" aria-hidden="true"></i>Services<i class="fas fa-caret-down"></i></a>
                            <div class="dropdown">
                                <ul>
                                    <li class="dropdown-link">
                                        <a href="../Services/Radiology SMI/Index_RSMI.html">Radiology Medical imaging</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="../Services/Cardiology/index_Car.html">Cardiology </a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="../Services/Cardiology/index_Car.html">Vascular Medicine and Call Vascular </a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="../Services/Cardiology/index_Car.html">Emergency Intensive Care </a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="../Services/laboratory/index_labo.html">Medical Analysis Laboratory </a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="../Services/Dentaire/index_chir.html">Dental Surgery </a>
                                    </li>
                                    <div class="arrow"></div>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-link" style="--i: 1.1s">
                            <a ><i class="fa fa-user-md" ></i>Doctors<i class="fas fa-caret-down"></i></a>
                            <div class="dropdown">
                                <ul>
                                    <li class="dropdown-link">
                                        <a >Dr Zair</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a >Dr El Hadj Hamed</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a >Dr Amar</a>
                                    
                                    </li><li class="dropdown-link">
                                        <a >Dr Zidane Wahiba</a>
                                    
                                    </li><li class="dropdown-link">
                                        <a >Dr Adjal</a>
                                    
                                    </li><li class="dropdown-link">
                                        <a >Dr Medjrouni</a>
                                    
                                    </li><li class="dropdown-link">
                                        <a >Dr Gacem</a>
                                    
                                    </li>
                                    <div class="arrow"></div>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-link1" style="--i: 1.35s">
                            <a  href="../../Date_rdv/index_rdv.php"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Make An Appoinement</a>
                        </li>
<?php
if ( isset($_SESSION["email_pat"]) && isset($_SESSION['pre_pat']) && isset($_SESSION['nom_pat']) && isset($_SESSION['ID_pat'])) {  
?>
                        <li class="nav-link" style="--i: 1.1s">
                            <a href="#"><i class="fa fa-user" ></i> <?php echo $_SESSION['nom_pat'] ?><i class="fas fa-caret-down"></i></a>
                            <div class="dropdown">
                                <ul>
                                    <li class="dropdown-link">
                                        <a href="profi.php" >My Profile</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="logout.php" >Log Out</a>
                                    </li>
                                    <div class="arrow"></div>
                                </ul>
                            </div>
                        </li>
                        <?php }else {?>
                    </ul>
                </div>
                
                <div class="log-sign" style="--i: 1.8s">
                    <a href="../registation/login/public HTML/index_login.php" class="btn transparent">Log in</a>
                    <a href="../registation/sigup/public HTML/index_singup.php" class="btn solid">Sign up</a>
                    <?php } ?>
                </div>

            </div>
           
            <div class="hamburger-menu-container">
                <div class="hamburger-menu">
                    <div></div>
                </div>
            </div>
        </div>
        
</header>
            <!--end ... Code HTml For Navbar part One -->

<!-- ________________________________________________________________________________________________________ -->

            <!-- start ...Code For Clinic EL-AMEN + log-sign part Two -->

    <section>
        <div class="clinic">
            <h4 class="elamen">EL-AMEN</h4><h4 class="datc"> Diagnostic And Treatment Clinic</h4>
         </div> 
    </section>
            <!-- end ...Code For Clinic EL-AMEN + log-sign part Two -->

<!-- ________________________________________________________________________________________________________ -->

        <!-- Start ... Code For Photos around a clinic part Three -->
<section class="section-mobile-photos">
    <div class="img-slider">
        <div class="slide  active">
          <div  class="info " id="img01">
            <h2><samp>EL-AMEN</samp> Diagnostic And treatment Clinic</h2>
            <p>The clinic is open from Saturday to Thursday and from 8:00 a.m. to 4:00 p.m.</p>
          </div>
        </div>
        <div class="slide">
          <div  class="info " id="img02">
            <h2><samp>EL-AMEN</samp> Diagnostic And treatment Clinic</h2>
            <p>The clinic provides the best doctors and nurses
                high professional skills and competences to ensure
                your care.</p>
          </div>
        </div>
        <div class="slide">
          <div class="info " id="img03">
            <h2><samp>EL-AMEN</samp> Diagnostic And treatment Clinic</h2>
            <p>We provide you equipped rooms .</p>
          </div>
        </div>
        <div class="slide">
          <div class="info" id="img04">
            <h2><samp>EL-AMEN</samp> Diagnostic And treatment Clinic</h2>
            <p>We provide you equipped rooms .</p>
          </div>
          <div class="info" id="img04a">
            <h2><samp>EL-AMEN</samp> Diagnostic And treatment Clinic</h2>
            <p>A specialized dentist equipped with various means the latest technology</p>
          </div>
        </div>
        <div class="slide">
          <div class="info" id="img05">
            <h2><samp>EL-AMEN</samp> Diagnostic And treatment Clinic</h2>
            <p>Various medical laboratories perform various analyzes of Covid 19 cases</p>
          </div>
          <div class="info" id="img05a">
            <h2><samp>EL-AMEN</samp> Diagnostic And treatment Clinic</h2>
            <p>Various medical laboratories perform various analyzes of Covid 19 cases</p>
          </div>
          <div class="info" id="img05b">
            <h2><samp>EL-AMEN</samp> Diagnostic And treatment Clinic</h2>
            <p>Various medical laboratories perform various analyzes of Covid 19 cases</p>
          </div>
        </div>
        <div class="slide">
            <div class="info" id="img06">
                <h2><samp>EL-AMEN</samp> Diagnostic And treatment Clinic</h2>
              <p>Our doctors do the best works and keep me healthy.</p>
            </div>
        </div>
        <div class="slide">
            <div class="info" id="img07">
                <h2><samp>EL-AMEN</samp> Diagnostic And treatment Clinic</h2>
            </div>
        </div>
        <div class="slide">
            <div class="info" id="img08">
                <h2><samp>EL-AMEN</samp> Diagnostic And treatment Clinic</h2>
              
            </div>
        </div>
        <div class="slide">
            <div class="info" id="img09">
                <h2><samp>EL-AMEN</samp> Diagnostic And treatment Clinic</h2>
              
            </div>
        </div>


        <div class="navigation">
          <div class="btn active"></div>
          <div class="btn"></div>
          <div class="btn"></div>
          <div class="btn"></div>
          <div class="btn"></div>
          <div class="btn"></div>
          <div class="btn"></div>
          <div class="btn"></div>
          <div class="btn"></div>
          <div class="btn"></div>
          <div class="btn"></div>
          <div class="btn"></div>

        </div>
    </div>
</section> 
        <!-- end ... Code For Photos around a clinic part Three -->
<!-- ________________________________________________________________________________________________________ -->

      <!-- start ... Code For Information Part Four -->
<section class="info-your">
  <div class="over">
     <div class="info-your-css">
         <h1>Your health matters to us</h1>
         <h3><i class="fa mn fa-heartbeat" aria-hidden="true"></i>Health</h3>
            <p>
                Prevention is better than cure
            </p>
            <a href="../../Date_rdv/index_rdv.php"><h4 class="book"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>Book Your appointement now online</h4></a>
     </div>
   </div>
</section>
      <!-- end ... Code For Information Part Four -->

<!-- ________________________________________________________________________________________________________ -->

        <!-- start ... Code For Google Maps clinic Part Six -->
<section class="maps">
    <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805.1106010982883!2d1.2589025953801245!3d36.180121112594954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12840b87314b7425%3A0xf1e6dd98c856aff0!2z2LTYsdi02KfYsSDYstmK2YYg2KfZhNiv2YrZhiDZhNi12YbYp9i52Kkg2KfZhNmF2LTYsdmI2KjYp9iqINin2YTYutin2LLZitip!5e0!3m2!1sen!2sdz!4v1629815214694!5m2!1sen!2sdz"
         width="600" height="650" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
    <div class="map-text" >
        <h2><i class="fa fa-hospital-o" aria-hidden="true"></i>Clinic <samp>EL-AMEN</samp> </h2>
        <p><i class="fa fa-check-circle" aria-hidden="true"></i>Since September 2018, Al-Aman Clinic has been providing its patients with the best teams of doctors, supported by the most modern equipment</p>
        <h6><i class="fa fa-location-arrow" aria-hidden="true"></i>Hay Ladjraf R.R.N° 19 Chattia-Chlef-Algiers</h6>
    </div>
</section>

         <!-- end ... Code For Google Maps clinic Part Six -->
<!-- ________________________________________________________________________________________________________ -->

        <!-- start ... Code for Our Specialist part Siven -->
<section id="home" class="our-sprcia">
    <div >
        <h1 class="heading1" >Our Specialist</h1>
        <p>The clinical specialist provides the appropriate information tools for use in the field
            (case study reports, presentations, review of clinical data, etc.) and contributes to
            the training of company employees and healthcare professionals with new medical devices</p>
        <!-- <span class="span1">hhhhhh</span> -->
        <div class="specialist-bor">
            <div  class="specialist-info">
                <img style="height: 150px;" src="photo/IMG-SPS01.jpg" alt="img">
                <h2>Electrocardiography</h2>
                <p>is the process of producing an electrocardiogram (ECG or EKG). 
                    It is a graph of voltage versus time of the electrical activity 
                    of the heart using electrodes placed on the skin.</p>
            </div>
            <div id="bor" class="specialist-info">
                <img src="photo/IMG-SPE02.gif" alt="img">
                <h2>Transthoracic Doppler Echocardiography</h2>
                <p>is an ultrasound of the heart. It is a medical imaging 
                    technique using ultrasound. Echocardiography quickly found 
                    its place among the medical applications of ultrasound.</p>

            </div>
            <div id="bors" class="specialist-info">
                <img src="photo/IMG-SPE03.png" alt="Photo">
                <h2>Transesophageal Echocardiography</h2>
                <p>It is primarily an ultrasound (ultrasound imaging method).
                     The ultrasound probe used is in the form of a flexible 
                     tube which passes through the mouth, then the pharynx and finally the esophagus.</p>
            </div>

            <div  id="bor" class="specialist-info ">
                <img style="height: 100px;" src="photo/IMG-SPE04.jpg" alt="Photo">
                <h2>Stress Echocardiography</h2>
                <p> is an echocardiography modality consisting in visualizing and analyzing the modifications 
                    of the contraction of the cardiac muscle during a stress constituted by an effort or by injection of certain drugs.</p>
            </div>
            <div class="specialist-info">
                <img styl="height: 100px;" src="photo/IMG-SPE051.jpg" alt="Photo">
                <h2>Holter ECG 48H</h2>
                <p>The Holter ECG is a 24-hour EKG recorder. This is a test to show you have a heart rhythm disorder. 
                    It can also be used to monitor the effectiveness of medical treatment. The holter is more complete 
                    than a simple electrocardiogram because it lasts 24 hours</p>
            </div>
            <div id="bor" class="specialist-info">
                <img src="photo/IMG-SPE06.jpg" alt="Photo">
                <h2>Tension Holter (ABPM)</h2>
                <p>The 24-hour ambulatory blood pressure measurement (ABPM), or blood pressure Holter,
                     is a small device for recording blood pressure, worn on the belt and connected to a cuff placed around the arm.</p>
            </div>
            <div id="bor" class="specialist-info">
                <img src="photo/IMG-SPE07.jpg" alt="Photo">
                <h2>Stress test</h2>
                <p>is an examination consisting of recording an ECG during the course of a calibrated physical exercise.
                     It helps to diagnose coronary artery disease (coronary artery disease). It can be associated with the 
                     measurement and analysis of ventilatory volumes and flows. It is then useful in the evaluation of certain diseases</p>
            </div>
            <div id="bor" class="specialist-info">
                <img src="photo/IMG-SPE08.jpg" alt="Photo">
                <h2>Vascular Doppler</h2>
                <p>The Doppler effect measures the movement of red blood cells inside the vessels,
                     it allows to visualize the circulation of the blood in the arteries and in the veins</p>
            </div>
            <div id="bor" class="specialist-info">
                <img src="photo/IMG-SPE09.jpg" alt="Photo">
                <h2>Anesthesia Consultation</h2>
                <p>The pre-anesthetic consultation is a privileged moment for the exchange of information between
                     the patient and the anesthetist, which must lead to the construction of an anesthetic strategy
                      best suited to the patient. Information from the doctor to the patient must meet the patient's
                       expectations and allow a partnership up to the patient's consent.</p>
            </div>
            <div id="bor" class="specialist-info">
                <img src="photo/IMG-SPE10.jpg" alt="Photo">
                <h2>Cardiological Emergencies</h2>
                <p>is a branch of medicine that deals with disorders of the heart as well as parts of the circulatory system.
                     The field includes medical diagnosis and treatment of congenital heart defects, coronary heart disease,</p>
            </div>

        </div>   
    </div>
</section>
        <!-- end ... Code for Our Specialist part Siven -->
<!-- ________________________________________________________________________________________________________ -->

         <!-- Start ... Code for Our Services part heght --> 
<section>
   <h1>Our Services</h1>
     <div class="our-serv">
            <div class="service-disponible">
                   <img src="photo/IMG-SRV01.jpg" alt="photo">
                           <h2>Radiology Specialized Medical imaging</h2>
                            <p>A branch of medicine concerned with the use of 
                                radiant energy (such as x-rays) or radioactive
                                 materials in the diagnosis and treatment of disease</p>
                            <a href="../Services/Radiology SMI/Index_RSMI.html">Read More ..</a>
            </div>
               <div class="service-disponible">
                   <img src="photo/IMG-SRV02.jpg" alt="photo">
                           <h2>Cardiology</h2>
                            <p>Medical specialty that deals with the heart and blood vessels, in particular their diseases.</p>
                            <a href="../Services/Cardiology/index_Car.html">Read More ..</a>
                       
               </div>
               <div class="service-disponible">
                   <img src="photo/IMG-SRV03.jpg" alt="photo">
                           <h2>Vascular Medicine and Call Vascular</h2>
                            <p>A medical specialty focusing on the functioning and conditions of the circulatory system,
                                 namely the veins, arteries, microcirculation (small vessels) and the lymphatic system.
                                  The doctor specializing in this area is also sometimes called an angiologist.</p>
                            <a href="../Services/Cardiology/index_Car.html">Read More ..</a>
                      
                      
               </div>
               <div class="service-disponible">
                   <img src="photo/IMG-SRV04.jpg" alt="photo">
                    
                           <h2>Emergency Intensive Care</h2>
                            <p>Is a department of the hospital which provides emergency care for acute failure.It 
                                is the middle structure between the intensive care units (resuscitation) and the continuous monitoring units,</p>
                            <a href="../Services/Cardiology/index_Car.html">Read More ..</a>
                
               </div>
               <div class="service-disponible" style="margin-bottom: 16%;">
                   <img src="photo/IMG-SRV05.jpg" alt="photo">
                      
                           <h2>Medical analysis laboratory</h2>
                            <p>A medical biology laboratory (abbreviated as LBM), or, formerly, medical analysis laboratory (LAM),
                                 is a place where various biological fluids of human origin are sampled and analyzed under the 
                                 responsibility of medical biologists, who interpret them. results in order to participate in the diagnosis.</p>
                            <a href="../Services/laboratory/index_labo.html">Read More ..</a>
                       
                           
               </div>
               <div class="service-disponible">
                   <img src="photo/IMG-SRV06.jpg" alt="photo">
                           <h2>Dental Surgery</h2>
                            <p>The dental surgeon takes medical care of the mouth, teeth, gums but also of the jawbones.
                                 It relaxes, repairs and also ensures the beauty of the smile. In addition, he treats cavities
                                  and more serious infections of the oral cavity and installs prostheses.</p>
                            <a href="../Services/Dentaire/index_chir.html">Read More ..</a>
                       
                           
               </div>
       </div> 
</section>        
         <!-- end ... Code for Our Services part heght -->
<!-- ________________________________________________________________________________________________________ -->
          
            <!-- start ... code For quetion part ten  -->
<section id="question" style="margin: 10% 0 10% 0;">
    <div class="your-question">
        <h2>To inquire or request assistance, file out the form</h2>
        <div class="your-asked">
            <div>
                <form action="meesage.php" method="POST">
                    <input type="text" id="fname" name="fname" placeholder="First Name"> 
                    <input type="text" id="last" name="last" placeholder="last Name" > <br>
                    <input type="tel" name="phone" placeholder="Phone" id="phone" pattern="[0-9]{2}[0-9]{8}">
                    <input type="text" id="email" name="email" placeholder="Email"> <br>
                    <textarea name="message" id="message" style="width: 350px; height: 150px;"></textarea> <br>
                    <button type="submit" name="message" value="submit" >Send a Message</button>
                </form>
            </div>  
        </div>
    </div>
</section>
            <!-- end ... code For quetion part ten  -->
<!-- ________________________________________________________________________________________________________ -->
            <!-- start ... code For Contact part elevne  -->
<section id="contact" class="section-contact">
    <div class="overlay">
        <div class="contact-inner">
            <h2>Contact</h2>
            <p>To submit an inquiry or request a specific date for you to register 
                on a privat website betweena or communicat with us vis social communication 
                sites, e-mail, or on fax</p>
            
                <p>
                    Tef: <a href="tel:+213541151859" >+213 (0) 541151859</a> or <a href="tel:+21327735041">+213 (0) 27735041</a> <br>
                    <a href="mailto:nabilchu2000@yahoo.fr"><i class="fa fa-envelope" aria-hidden="true"></i>nabilchu2000@yahoo.fr</a> 
                </p>
                <p >Days worked from Saturday -- Thursday / 8.00 -- 16.00</p>
        </div>
    </div>
</section>            
            <!-- end ... code For Contact part eleven  -->
<!-- ________________________________________________________________________________________________________ -->

            <!-- start ... code  for More Details parti Twelve   -->
<section>
    <div class="information">
        <div class="information-clinic">
            <img src="photo/Logo Alaman.png" alt="Logo">
            <h2>El AMEN Clinic </h2>
            <p>El AMEN Clinic is a modern and advanced medical and 
                surgical clinic located in Chattia-Chlef-Algiers
            </p>
        </div>

        <div class="information-clinic">

            <h4>Our Doctor</h4><br>
            <a >Doctor Zair</a> <br>
            <a >Doctor El Hadj Hamed</a> <br>
            <a >Doctor Amar</a> <br>
            <a >Doctor Zidane Wahiba</a> <br>
            <a >Doctor Adjal</a> <br>
            <a >Doctor Medjrouni</a> <br>
            <a >Doctor Gacem</a> <br>

        </div>

        <div class="information-clinic">
            <h4>More Details</h4>
            <a href="index_Home.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a> <br>
            <a href=""><i class="fa fa-user-o" aria-hidden="true"></i>About Clinic</a>
            <p>Work Days</p>
            <ul>
                <li><i class="fa mn fa-clock-o" aria-hidden="true"></i>Saturday</li>
                <li><i class="fa mn fa-clock-o" aria-hidden="true"></i>Sunday</li>
                <li><i class="fa mn fa-clock-o" aria-hidden="true"></i>Monday</li>
                <li><i class="fa mn fa-clock-o" aria-hidden="true"></i>Tuesday</li>
                <li><i class="fa mn fa-clock-o" aria-hidden="true"></i>Wednesday</li>
                <li><i class="fa mn fa-clock-o" aria-hidden="true"></i>Thursday</li>
            </ul>
            <!-- <p>7/7Days 24/24H</p> -->
        </div>
        <div class="information-clinic">
            <h4>Call Us</h4>
            <a href="tel:0541151855" ><i class="fa fa-mobile" aria-hidden="true"></i>0541151855</a> <br>
           <a href="tel:027735041" ><i class="fa fa-volume-control-phone" aria-hidden="true"></i>027735041</a> <br>
            <a href="tel:027731662"><i class="fa fa-fax" aria-hidden="true"></i>027731662</a> <br> <br><br>
            <a href="mailto:nabilchu2000@yahoo.fr"><i class="fa fa-envelope" aria-hidden="true"></i>nabilchu2000@yahoo.fr</a> <br><br>
            <p><i class="fa fa-map-marker" aria-hidden="true"></i>Hay Ladjraf R.R.N° 19 Chattia-Chlef-Algiers</p>
        </div>
        <div class="social-networking">
            <a class="fas" href="https://web.facebook.com/Clinique-EL-Amen-724588171357692"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <!-- <a class="fas" href=""><i class="fa fa-twitter-square" aria-hidden="true"></i></a> -->
        </div>
        <p class="para" >El-AMEN. All rights reserved. <?php echo date("Y");?> &#169</p>
    </div>
</section>
            <!-- end ... code  for More Details parti Twelve   -->
<!-- ________________________________________________________________________________________________________ -->

 <script src="main.js"></script> 

</body>
</html>