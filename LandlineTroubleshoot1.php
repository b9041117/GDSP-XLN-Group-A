<?php 

session_start();

	include("connection.php");
	include("functions.php");
    include("Details.php");

    $conn = mysqli_connect("localhost","root","","xln");
    
    $Customer_Key = intval($Customer_Key);
    echo $Customer_Key;
?>

<!DOCTYPE html> 
<html>
    <head>
        <link rel="stylesheet" href="troubleshooting.css">
        <script src="myScript.js"></script>
        <meta charset="UTF-8">
        <title> XLN Troubleshooting Steps</title>
    </head>
    <body>

        <div id="stickybar">
            <script src="myScript.js"></script>
            <a class="logo"><img src="https://upload.wikimedia.org/wikipedia/commons/6/6d/XLN-Logo.jpg" alt="image not loaded" height="100" width=aut0></a>
            <p class = "sales"> Sales: <br> 0808 302 9676 </p>
            <p class = "customer"> Customer Service: <br> 0344 880 7777</p>
        </div>

        <ul class="topnav">
            <li><a href="phone">Phone</a></li>
            <li><a href="news.asp">Broadband</a></li>
            <li><a href="contact.asp">Fibre</a></li>
            <li><a href="cloudvoice.asp">Cloud Voice</a></li>
            <li><a href="Mobile.asp">Mobile</a></li>
            <li><a href="WiFi.asp">WiFi</a></li>
            <li><a href="Payments.asp">Payments</a></li>
            <li><a href="Energy.asp">Energy</a></li>
        </ul>

        <br><br>

        <h1>Landline Troubleshooting</h1>

        <div id="part1" style="display: block;">

            <div class="form">
                
                <form>
                    <p id="one">Step 1: What is the issue with your landline? <br> <br> No Dial tone / Bell Not Ringing / Continuous Dial Tone / Cuts Off Unexpectedly / Other (Please Provide Description)</p>
               
                    <input type="text" placeholder="Description of problem" id="problem" required>
                    <br>
                    <br>
                    <label>Are you only able to make calls?</label><br>
                    <br>
                    <button onclick="return showHide('part1', 'part2')">Yes</button>
                    <button onclick="return showHide('part1', 'part3')">No</button>
                    <br>
                </form>
            </div>
        </div>
        
        <div id="part2" style="display: none;">
            <div class="form">
                <form>
                    <p id="two"> Have you tested the landline socket? If so, is it functional? </p></h4>
                    <a class ="socket"><img src="https://www.electricalworld.com/Images/Models/Full/2181.Png" alt="socket" height=300 width =300></a>
                    
                    <br><br>
                    <button onclick="return showHide('part2', 'part4')">Yes</button>
                    <button onclick="return showHide('part2', 'part5')">No</button>
                    <br>
                </form>
            </div>    
        </div>
        
        <div id="part3" style="display:none;">
            <div class="form">
                <form>
                    
                    <label for="numWorked">Try dialling 17070. If unsuccessful; Is 17070 number the correct number?</label>
                    <br>
                    <br>
                    <button onclick="return showHide('part3', 'part2')">Yes</button>
                    <button onclick="return showHide('part3', 'part5')">No</button>
                </form>
            </div>
        </div>
        

        <div id="part4" style="display: none;">
            <div class="form">
                <form>
                    <h1>   <br>End of troubleshooting steps.    </h1>
                    <p id ="one"> Do you require further assistance?</p>
                    <br><br>
                    <button onclick="return showHide('part4', 'part8')">Yes</button>
                    <button onclick="return showHide('part4', 'part6')">No</button>
                    <br>
                </form>
            </div>    
        </div>
        
        <div id="part5" style="display: none;">
            <div class="form">
                <form>
                    <p id ="one">Replace the micro filter, then test the socket again. <br> <br> Is it functional now?</p>
                    <br><br>
                    <button onclick="return showHide('part5', 'part4')">Yes</button>
                    <button onclick="return showHide('part5', 'part8')">No</button>
                    <br>
                </form>
            </div>    
        </div>

        <div id="part6" style="display: none;">
            <div class="form">
                <form>
                    <p id ="one"> <br> <br> End of troubleshooting steps. </p>
                    <br><br>

                    <br>
                </form>
            </div>    
        </div>

        <div id="part7" style="display: none;">
            <div class="form">
                <form>
                    <p id ="one">Test the socket with an aleternative handset. <br> <br> Is it functional now?</p>
                    <br><br>
                    <button onclick="return showHide('part2', 'part4')">Yes</button>
                    <button onclick="return showHide('part2', 'part3')">No</button>
                    <br>
                </form>
            </div>    
        </div>

        <div id="part8" style="display: none;">
            <div class="form">
                <form>
                    <p id ="one">Callout Information <br> <br></p>
                    <p>If you still require assistance an engineer will be sent to your address.</p>

                    <br>
                     <p> Please attach any photos of your issue: </p> 
                    <br><br>
                    <br>
                </form>
            </div>    
        </div>

       <div id="part9" style="display: none;">
        <div class="form">
            <form>
                <p id="one">Time Related Charges</p>
                <div class ="box">
                <form method ="post">
                <?php 

                

                ?>
                </form>   
                </div>
            </form>
        </div>
    </div> 

        <footer class="footer">
            <p id ="footer"> Footer </p>
        </footer>
    </body>
</html>