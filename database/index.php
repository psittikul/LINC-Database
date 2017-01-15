<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>LINC Database</title>
    </head>
    <body>
        <div id="header">
            <img src="linc-logo-blue.jpg"></img>
        </div>
        <div id ="sidebar">
            <ul>
                <li>Dashboard</li>
                <li><a href="clients.php">Clients</a></li>
                <li>Customers</li>
                <li>Ambassadors</li>
                <li>Interviewers & Contacts</li>
                <li>Archive</li>
            </ul>
        </div>
        <div id="formSection">
            <div id="employeeForm">
                <form method="post" action="index.php" enctype="multipart/form-data" >
                    <h3>Employee</h3>
                    First Name  <input type="text" name="empFirstName" id="empFirstName"/></br>
                    Last Name <input type="text" name="empLastName" id="empLastName"/></br>
                    Email <input type="email" name="empEmail" id="empEmail"/></br>
                    Phone <input type="tel" name="empPhone" id="empPhone"/></br>
                    Address <input type="text" name="empAddress" id="empAddress"/></br>
                    City <input type="text" name="empCity" id="empCity"/></br>
                    State <input type="text" name="empState" id="empState"/></br>
                    Referral Date <input type="date" name="referralDate" id="referralDate"/></br>
                    Referring Company 
                    <select name="company">
                        <option disabled selected value>
                            -- select an option -- 
                        </option>
                        <option value="air">Air Products, Inc.</option>
                        <option value="braun">B. Braun, Inc.</option>
                        <option value="desales">DeSales</option>
                    </select></br>
                    Services</br>
                    <input type="checkbox" value="CT" name="CT"/> CT</br>
                    <input type="checkbox" value="DC" name="DC"/> DC</br>
                    <input type="checkbox" value="CT-6" name="CT-6"/> CT-6</br>
                    <input type="checkbox" value="RA" name="RA"/> Relocation Assistance</br>
                    <input type="checkbox" value="PH1" name="PH1"/> PreHire Tier 1</br>
                    <input type="checkbox" value="PH2" name="PH2"/> PreHire Tier 2</br>
                    <input type="checkbox" value="PH3" name="PH3"/> PreHire Tier 3</br>
                    </br></br>
                    <input type="submit" name="submit" value="Submit" />
                </form>
            </div>
            <div id="partnerForm">
                <h3>Spouse/Partner</h3>
                First Name <input type="text" name="spFirstName" id="spFirstName"/></br>
                Last Name <input type="text" name="spLastName" id="spLastName"/></br>
                Email <input type="email" name="spEmail" id="spEmail"/></br>
                Phone <input type="tel" name="spPhone" id="spPhone"/></br>
                
            </div>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
