<?php
 include_once 'header.php';
?>

  <section>
    <div class="user-logged">
  <?php 
                 if (isset($_SESSION["useruid"])) {
                        echo  "<p>Hello " . $_SESSION["useruid"] . "</p>";
                 }
                ?>
    </div>
    <div id="navigation">
      <div big-block>
        <div class="latest-updates">
            <ul>
                  <div class="new">                     
                          <p>Big news:</p>                    
                  </div> <!-- Separate the paragraph -->
              
                  <a href="#">
                        <li>Afeganistan shooters in war</li>
                    <p>Lots of shooting going on<br>in Afegan's ground's</p>
                  </a>  
              
                  <a href="#">
                  <li>Mexican Cartel's makes another<br> victim</li>
                  <p>Lots of shooting going on<br>in MEXICO CITY</p>
                </a> 
                  <a href="#">
                        <li>Brasil favela's are on fire</li>
                    <p>Lots of shooting going on<br>in Brasilian ground's</p>
                </a> 
                  <a href="WomanDecapitaded.html">
                        <li>Asian Woman gets head<br> cutt off</li>
                  <p>Lots of decapitations going on<br>in Asian's ground's</p>
                </a> 
                  <a href="#">
                        <li>The war begun in Mar Del Plata</li>
                  <p>Lots of shooting going on<br>in Mar Del Plata's ground's</p>
                </a> 
                        
            </ul>
          </div><!--Latest updates End -->
       </div><!--Navigation End-->
      </div> <!--Big block End-->
  </section>


   <?php
   include_once 'usersforum.php';
   include_once 'linkstopage.php';
   include_once 'contentfeed.php';
   include_once 'footer.php';
   ?>