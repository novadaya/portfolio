<?php
include('time.php');

/* $hostname_connLivecode = "localhost";
$database_connLivecode = "car_prince";
$username_connLivecode = "car_prince";
$password_connLivecode = "jelszo";
$connLivecode = mysql_pconnect($hostname_connLivecode, $username_connLivecode, $password_connLivecode) or trigger_error(mysql_error(),E_USER_ERROR);

mysql_select_db($database_connLivecode, $connLivecode); */

$car_make2 = $_POST["car_make1"];
$car_model2 = $_POST["car_model1"];
$color2 = $_POST["color1"];
$year2 = $_POST["year1"];
$nafta2 = $_POST["nafta1"];
$valto2 = $_POST["valto1"];
$name2 = $_POST["name1"];
$phone2 = $_POST["phone1"];
$email2 = $_POST["email1"];

// ADABÁZISBA BETESZI A CUCCOST!!!

/* $query = "INSERT INTO autovasarlas (";
$query .= " car_make, car_model, color, year, nafta, valto, name, phone, email, date";
$query .= ") VALUES (";
$query .= " '{$car_make2}','{$car_model2}','{$color2}','{$year2}','{$nafta2}','{$valto2}','{$name2}', '{$phone2}', '{$email2}', '{$date}'";
$query .= ")";

$result = mysql_query($query, $connLivecode) or die(mysql_error());
echo "created"; */

// EMAIL KÜLDÉS A MEGRENDELŐNEK

/* $messageToSend = "<html><head>
<style type='text/css'>
body {
 padding-top: 0 !important;
 padding-bottom: 0 !important;
 padding-top: 0 !important;
 padding-bottom: 0 !important;
 margin:0 !important;
 width: 100% !important;
 -webkit-text-size-adjust: 100% !important;
 -ms-text-size-adjust: 100% !important;
 -webkit-font-smoothing: antialiased !important;
}
.tableContent img {
 border: 0 !important;
 display: block !important;
 outline: none !important;
}
a{
color:#cccccc;
}

p, h2,li{
color:#ffffff;
margin:0;
}

div,p,ul,h2{
margin:0;
}
h2{
color:#DAB679; 
font-size:21px;
font-weight:normal;
}
p{

}
a.link1{
font-weight:bold;
color:#DAB679;
font-size:13px;
text-decoration:none;font-weight:bold;
}
a.link2{
padding:8px 20px;
border-radius:5px;
-moz-border-radius:5px;
-webkit-border-radius:5px;
color:#DAB679;
font-size:13px;
font-weight:bold;
text-decoration:none;
border:1px solid #DAB679;
font-weight:bold;
background:#1B150C;
}

@media only screen and (max-width:480px)
      
{
      
table[class='MainContainer'], td[class='cell'] 
  {
      width: 100% !important;
      height:auto !important; 
  }
td[class='specbundle'] 
  {
      width: 100% !important;
      float:left !important;
      font-size:13px !important;
      line-height:17px !important;
      display:block !important;
      padding-bottom:5px !important;
  }	
td[class='specbundle2'] 
  {
      width: 100% !important;
      float:left !important;
      font-size:14px !important;
      line-height:18px !important;
      display:block !important;
      padding-bottom:45px !important;
  }
      
td[class='spechide'] 
  {
      display:none !important;
  }
      img[class='banner'] 
  {
            width: 100% !important;
            height: auto !important;
  }
      td[class='left_pad'] 
  {
          padding-left:15px !important;
          padding-right:15px !important;
  }
       
}
  
@media only screen and (max-width:540px) 

{
      
table[class='MainContainer'], td[class='cell'] 
  {
      width: 100% !important;
      height:auto !important; 
  }
td[class='specbundle'] 
  {
      width: 100% !important;
      float:left !important;
      font-size:13px !important;
      line-height:17px !important;
      display:block !important;
      padding-bottom:5px !important;
  }	
td[class='specbundle2'] 
  {
      width: 100% !important;
      float:left !important;
      font-size:14px !important;
      line-height:18px !important;
      display:block !important;
      padding-bottom:45px !important;
  }
      
td[class='spechide'] 
  {
      display:none !important;
  }
      img[class='banner'] 
  {
            width: 100% !important;
            height: auto !important;
  }
      td[class='left_pad'] 
  {
          padding-left:15px !important;
          padding-right:15px !important;
  }
      
}

</style>
<script type='colorScheme' class='swatch active'>
{
  'name':'Default',
  'bgBody':'000000',
  'link':'DAB679',
  'color':'ffffff',
  'bgItem':'000000',
  'title':'DAB679'
}
</script>

</head>
<body paddingwidth='0' paddingheight='0' bgcolor='#d1d3d4'  style=' margin:0 0 0 0; padding-top: 0; padding-bottom: 0; padding-top: 0; padding-bottom: 0; background-repeat: repeat; width: 100% !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased;' offset='0' toppadding='0' leftpadding='0'>
    
  <table width='100%' border='0' cellspacing='0' cellpadding='0' class='tableContent' align='center' bgcolor='#DAB679' style='font-family:Georgia, times, sans-serif;'>
<tbody>
  <tr>
    <td><table width='600' border='0' cellspacing='0' cellpadding='0' align='center' style='font-family:Georgia, times, sans-serif;' bgcolor='#000000' class='MainContainer'>
<tbody>
  <tr>
    <td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
<tbody>
  <tr>
    <td valign='top' width='20' align='left'>&nbsp;</td>
    <!--  =========================== The header ===========================  -->                
              
              
              <!--  =========================== The body ===========================  -->
    <td valign='top' align='center' width='560'>
            <table width='100%' border='0' cellspacing='0' cellpadding='0'>
<tbody>
  <tr>
    <td class='movableContentContainer'>
        <div class='movableContent' style='border: 0px; padding-top: 0px; position: relative;'>
          
          </div>
          <div class='movableContent' style='border: 0px; padding-top: 0px; position: relative;'>
              <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' >
                      <tr><td height='25'></td></tr>
                        <tr>
                          <td>
                            <div class='contentEditableContainer contentImageEditable'>
                              <div class='contentEditable' align='center' >
                              
                                <img class='banner' src='http://princecars.hu/email/PCG-logo-kicsi2.png' alt='Prince Cars' data-default='placeholder' data-max-width='200' width='200' height='200' border='0' align='center'>
                              </div>
                            </div>
                          </td>
                        </tr>  
                    </table>
          </div>    
          
          
          <div class='movableContent' style='border: 0px; padding-top: 0px; position: relative;'>
              <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' >
                      <tr><td height='10'>&nbsp;</td></tr>
                      <tr>
                        <td align='left' valign='top'>
                          <div class='contentEditableContainer contentTextEditable'>
                            <div class='contentEditable' >
                              <h2 >Tisztelt $name2!</h2>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr><td height='15'>&nbsp;</td></tr>
                      <tr>
                        <td align='left' valign='top'>
                          <div class='contentEditableContainer contentTextEditable'>
                            <div class='contentEditable' >
                              <p style='font-size:13px;'>Köszönjük, hogy minket választott! Kollégánk hamarosan felveszi Önnel a kapcsolatot. 
                              </p>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </table>
          </div>
          
          <div class='movableContent' style='border: 0px; padding-top: 0px; position: relative;'>
              <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' >
                      <tr><td height='35'>&nbsp;</td></tr>
                      <tr><td><img class='banner' src='http://princecars.hu/email/line.png' alt='featured image' data-default='placeholder' data-max-width='560' height='23' width='560' border='0'></td></tr>
                      <tr><td height='25'>&nbsp;</td></tr>
                    </table>
          </div>
          
          <h2 align='center'>Autó vásárlási szándékát az alábbi paraméterekkel regisztráltuk:</h2>
          
          
          
          
          <div class='movableContent' style='border: 0px; padding-top: 0px; position: relative;'>
              <table width='100%' border='0' cellspacing='0' cellpadding='0'>
<tbody>
  <tr>
    <td height='40'></td>
  </tr>
  <tr>
    <td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
<tbody>
  <tr>
    <td valign='top' width='280' class='specbundle2'><table width='100%' border='0' cellspacing='0' cellpadding='0'>
<tbody>
  <tr>
    <td valign='top' width='25'>&nbsp;</td>
    <td><table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' >
          

            <tr><td height='12'></td></tr>

            <tr>
              <td valign='top' style='padding-right:30px;'>
                <div class='contentEditableContainer contentTextEditable'>
                  <h2>Márka</h2>
                    <ul style='padding-left: 20px;'>
                      <li style='font-size:18px;line-height:30px;'>
                        $car_make2
                      </li>
                      </ul>
                     <h2>Típus</h2>
                    <ul style='padding-left: 20px;'>
                      <li style='font-size:18px;line-height:30px;'>
                        $car_model2
                      </li>
                      </ul>
                     <h2>Szín</h2>
                    <ul style='padding-left: 20px;'>
                      <li style='font-size:18px;line-height:30px;'>
                        $color2
                      </li>
                      </ul>
                </div>
              </td>
            </tr>
          </table></td>
  </tr>
</tbody>
</table>
</td>
    <td valign='top' width='280' class='specbundle2'><table width='100%' border='0' cellspacing='0' cellpadding='0'>
<tbody>
  <tr>
    <td valign='top' width='25'>&nbsp;</td>
    <td valign='top'><table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' >
            

            <tr><td height='12'></td></tr>

            <tr>
              <td valign='top' style='padding-right:30px;'>
                <div class='contentEditableContainer contentTextEditable'>
                  <div class='contentEditable' >
                  <h2>Évjárat</h2>
                    <ul style='padding-left: 20px;'>
                      <li style='font-size:18px;line-height:30px;'>
                        $year2
                      </li>
                      </ul>
                     <h2>Üzemanyag</h2>
                    <ul style='padding-left: 20px;'>
                      <li style='font-size:18px;line-height:30px;'>
                        $nafta2
                      </li>
                      </ul>
                     <h2>Váltó típusa</h2>
                    <ul style='padding-left: 20px;'>
                      <li style='font-size:18px;line-height:30px;'>
                        $valto2
                      </li>
                      </ul>
                  </div>
                </td>
            </table></td>
  </tr>
</tbody>
</table>
</td>
  </tr>
</tbody>
</table>
</td>
  </tr>
</tbody>
</table>

          </div>
          <div class='movableContent' style='border: 0px; padding-top: 0px; position: relative;'>

              <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' >
        <tr><td height='35'>&nbsp;</td></tr>
        <tr><td><img class='banner' src='http://princecars.hu/email/line.png' alt='featured image' data-default='placeholder' data-max-width='560' height='23' width='560'></td></tr>
        <tr><td height='25'>&nbsp;</td></tr>
      </table>
          </div>
            
      </td></tr>
      <tr>
        <td>
          
          <div class='movableContent' style='border: 0px; padding-top: 0px; position: relative;'>
              <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
      <tr>
        <td >
          <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' >
            <tr>
              <td width='205'></td>
              <td width='75' align='center'>
                <div class='contentEditableContainer contentFacebookEditable'>
                  <div class='contentEditable'>
                    <a target='_blank' href='#'><img src='http://princecars.hu/email/facebook.png' alt='facebook link' data-default='placeholder' data-max-width='60' width='60' height='60' data-customIcon='true'></a>
                  </div>
                </div>
              </td>
              <td width='75' align='center'>
                <div class='contentEditableContainer contentTwitterEditable'>
                  <div class='contentEditable'>
                    <a target='_blank' href='#'><img src='http://princecars.hu/email/twitter.png' alt='twitter link' data-default='placeholder' data-max-width='60' data-customIcon='true' width='60' height='60' ></a>
                  </div>
                </div>
              </td>
              <td width='205'></td>
            </tr>
          </table>
        </td>
      </tr>    
    </table>
          </div>
          <div class='movableContent' style='border: 0px; padding-top: 0px; position: relative;'>
          
          <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
      <tr><td height='28'></td></tr>
      <tr>
        <td valign='top' align='center'>
          <div class='contentEditableContainer contentTextEditable'>
            <div class='contentEditable' >
              <H2>PRINCE CARS-GOLD KFT.</h2>
            </div>
          </div>
          <div class='contentEditableContainer contentTextEditable'>
            <div class='contentEditable' >
              <p style='color:#CCCCCC;font-size:11px;line-height: 15px;font-style:italic;'>4220 HAJDÚBÖSZÖRMÉNY, HÉTVEZÉR 57.</p>
            </div>
          </div>
          <div class='contentEditableContainer contentTextEditable'>
            <div class='contentEditable' >
              <a target='_blank' href='[FORWARD]' style='color:#CCCCCC; font-size:11px;line-height: 20px;font-style:italic;'>WWW.PRINCECARS.HU</a><br/>
              <a target='_blank' href='[UNSUBSCRIBE]' style='color:#CCCCCC; font-size:11px;line-height: 20px;font-style:italic;'>INFO@PRINCECARS.HU</a>
            </div>
          </div>
        </td>
      </tr>
    </table>
          
          
              <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
      <tr><td height='28'></td></tr>
    <tr>
      <td valign='top' align='center'>
        <div class='contentEditableContainer contentTextEditable'>
          <div class='contentEditable' >
            <p style='color:#A8B0B6; font-size:9px;line-height: 16px;'>Ezt az üzenetet azért küldtük, mert használta az autó választó eszközünket <br>
Többet szeretne tudni a felhasználási feltételekről? Kérjük látogasson el erre az oldalra. <br>

Nem szeretne több hírlevelet kapni tőlünk? Akkor kattintson erre a linkre. <br>

©2016 Prince Cars-Gold Kft. All rights reserved.

            </p>
          </div>
        </div>
      </td>
      </tr>
    </table>
          </div>
          <div class='movableContent' style='border: 0px; padding-top: 0px; position: relative;'>
              
          </div>
          <div class='movableContent' style='border: 0px; padding-top: 0px; position: relative;'>
              <tr><td height='28'></td></tr>
          </div>
    </td>
  </tr>
</tbody>
</table>

    </td>
    <td valign='top' width='20'>&nbsp;</td>
  </tr>
</tbody>
</table>
</td>
  </tr>
</tbody>
</table>
</td>
  </tr>
</tbody>
</table>";
  
  $messageToSend .= "</body></html>";
  $headers  = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
  $headers .= "From: Prince Cars-Gold Kft.<megrendeles@princecars.hu>" . "\r\n";
  mail("$email2","Autó vásárlás",$messageToSend,$headers);
  
  ----------------------EMAIL KÜLDÉS AZ ELADÓNAK -------------------------------------------

  $myMail = "megrendeles@princecars.hu ; info@princecars.hu";
  $messageToSend = "<html><head>
<style type='text/css'>
body {
 padding-top: 0 !important;
 padding-bottom: 0 !important;
 padding-top: 0 !important;
 padding-bottom: 0 !important;
 margin:0 !important;
 width: 100% !important;
 -webkit-text-size-adjust: 100% !important;
 -ms-text-size-adjust: 100% !important;
 -webkit-font-smoothing: antialiased !important;
}
.tableContent img {
 border: 0 !important;
 display: block !important;
 outline: none !important;
}
a{
color:#cccccc;
}

p, h2,li{
color:#ffffff;
margin:0;
}

div,p,ul,h2{
margin:0;
}
h2{
color:#DAB679; 
font-size:21px;
font-weight:normal;
}
p{

}
a.link1{
font-weight:bold;
color:#DAB679;
font-size:13px;
text-decoration:none;font-weight:bold;
}
a.link2{
padding:8px 20px;
border-radius:5px;
-moz-border-radius:5px;
-webkit-border-radius:5px;
color:#DAB679;
font-size:13px;
font-weight:bold;
text-decoration:none;
border:1px solid #DAB679;
font-weight:bold;
background:#1B150C;
}

@media only screen and (max-width:480px)
      
{
      
table[class='MainContainer'], td[class='cell'] 
  {
      width: 100% !important;
      height:auto !important; 
  }
td[class='specbundle'] 
  {
      width: 100% !important;
      float:left !important;
      font-size:13px !important;
      line-height:17px !important;
      display:block !important;
      padding-bottom:5px !important;
  }	
td[class='specbundle2'] 
  {
      width: 100% !important;
      float:left !important;
      font-size:14px !important;
      line-height:18px !important;
      display:block !important;
      padding-bottom:45px !important;
  }
      
td[class='spechide'] 
  {
      display:none !important;
  }
      img[class='banner'] 
  {
            width: 100% !important;
            height: auto !important;
  }
      td[class='left_pad'] 
  {
          padding-left:15px !important;
          padding-right:15px !important;
  }
       
}
  
@media only screen and (max-width:540px) 

{
      
table[class='MainContainer'], td[class='cell'] 
  {
      width: 100% !important;
      height:auto !important; 
  }
td[class='specbundle'] 
  {
      width: 100% !important;
      float:left !important;
      font-size:13px !important;
      line-height:17px !important;
      display:block !important;
      padding-bottom:5px !important;
  }	
td[class='specbundle2'] 
  {
      width: 100% !important;
      float:left !important;
      font-size:14px !important;
      line-height:18px !important;
      display:block !important;
      padding-bottom:45px !important;
  }
      
td[class='spechide'] 
  {
      display:none !important;
  }
      img[class='banner'] 
  {
            width: 100% !important;
            height: auto !important;
  }
      td[class='left_pad'] 
  {
          padding-left:15px !important;
          padding-right:15px !important;
  }
      
}

</style>
<script type='colorScheme' class='swatch active'>
{
  'name':'Default',
  'bgBody':'000000',
  'link':'DAB679',
  'color':'ffffff',
  'bgItem':'000000',
  'title':'DAB679'
}
</script>

</head>
<body paddingwidth='0' paddingheight='0' bgcolor='#d1d3d4'  style=' margin:0 0 0 0; padding-top: 0; padding-bottom: 0; padding-top: 0; padding-bottom: 0; background-repeat: repeat; width: 100% !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased;' offset='0' toppadding='0' leftpadding='0'>
    
  <table width='100%' border='0' cellspacing='0' cellpadding='0' class='tableContent' align='center' bgcolor='#DAB679' style='font-family:Georgia, times, sans-serif;'>
<tbody>
  <tr>
    <td><table width='600' border='0' cellspacing='0' cellpadding='0' align='center' style='font-family:Georgia, times, sans-serif;' bgcolor='#000000' class='MainContainer'>
<tbody>
  <tr>
    <td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
<tbody>
  <tr>
    <td valign='top' width='20' align='left'>&nbsp;</td>
    <!--  =========================== The header ===========================  -->                
              
              
              <!--  =========================== The body ===========================  -->
    <td valign='top' align='center' width='560'>
            <table width='100%' border='0' cellspacing='0' cellpadding='0'>
<tbody>
  <tr>
    <td class='movableContentContainer'>
        <div class='movableContent' style='border: 0px; padding-top: 0px; position: relative;'>
          
          </div>
          <div class='movableContent' style='border: 0px; padding-top: 0px; position: relative;'>
              <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' >
                      <tr><td height='25'></td></tr>
                        <tr>
                          <td>
                            <div class='contentEditableContainer contentImageEditable'>
                              <div class='contentEditable' align='center' >
                              
                                <img class='banner' src='http://princecars.hu/email/PCG-logo-kicsi2.png' alt='Prince Cars' data-default='placeholder' data-max-width='200' width='200' height='200' border='0' align='center'>
                              </div>
                            </div>
                          </td>
                        </tr>  
                    </table>
          </div>    
          
          
          <div class='movableContent' style='border: 0px; padding-top: 0px; position: relative;'>
              <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' >
                      <tr><td height='10'>&nbsp;</td></tr>
                      <tr>
                        <td align='left' valign='top'>
                          <div class='contentEditableContainer contentTextEditable'>
                            <div class='contentEditable' >
                              <h2 >Autó megrendelés érkezett!</h2>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr><td height='15'>&nbsp;</td></tr>
                      <tr>
                        <td align='left' valign='top'>
                          <div class='contentEditableContainer contentTextEditable'>
                            <div class='contentEditable' >
                              <p style='font-size:13px;'>Megrendelő adatai:</p></br>
                              <p></p></br>
                              <p style='font-size:13px;'>Név: $name2</p></br>
                              <p style='font-size:13px;'>Telefonszám: $phone2 </p></br>
                              <p style='font-size:13px;>Email cím: $email2</p>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </table>
          </div>
          
          <div class='movableContent' style='border: 0px; padding-top: 0px; position: relative;'>
              <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' >
                      <tr><td height='35'>&nbsp;</td></tr>
                      <tr><td><img class='banner' src='http://princecars.hu/email/line.png' alt='featured image' data-default='placeholder' data-max-width='560' height='23' width='560' border='0'></td></tr>
                      <tr><td height='25'>&nbsp;</td></tr>
                    </table>
          </div>
          
          <h2 align='center'>Ilyen autót keres:</h2>
          
          
          
          
          <div class='movableContent' style='border: 0px; padding-top: 0px; position: relative;'>
              <table width='100%' border='0' cellspacing='0' cellpadding='0'>
<tbody>
  <tr>
    <td height='40'></td>
  </tr>
  <tr>
    <td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
<tbody>
  <tr>
    <td valign='top' width='280' class='specbundle2'><table width='100%' border='0' cellspacing='0' cellpadding='0'>
<tbody>
  <tr>
    <td valign='top' width='25'>&nbsp;</td>
    <td><table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' >
          

            <tr><td height='12'></td></tr>

            <tr>
              <td valign='top' style='padding-right:30px;'>
                <div class='contentEditableContainer contentTextEditable'>
                  <h2>Márka</h2>
                    <ul style='padding-left: 20px;'>
                      <li style='font-size:18px;line-height:30px;'>
                        $car_make2
                      </li>
                      </ul>
                     <h2>Típus</h2>
                    <ul style='padding-left: 20px;'>
                      <li style='font-size:18px;line-height:30px;'>
                        $car_model2
                      </li>
                      </ul>
                     <h2>Szín</h2>
                    <ul style='padding-left: 20px;'>
                      <li style='font-size:18px;line-height:30px;'>
                        $color2
                      </li>
                      </ul>
                </div>
              </td>
            </tr>
          </table></td>
  </tr>
</tbody>
</table>
</td>
    <td valign='top' width='280' class='specbundle2'><table width='100%' border='0' cellspacing='0' cellpadding='0'>
<tbody>
  <tr>
    <td valign='top' width='25'>&nbsp;</td>
    <td valign='top'><table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' >
            

            <tr><td height='12'></td></tr>

            <tr>
              <td valign='top' style='padding-right:30px;'>
                <div class='contentEditableContainer contentTextEditable'>
                  <div class='contentEditable' >
                  <h2>Évjárat</h2>
                    <ul style='padding-left: 20px;'>
                      <li style='font-size:18px;line-height:30px;'>
                        $year2
                      </li>
                      </ul>
                     <h2>Üzemanyag</h2>
                    <ul style='padding-left: 20px;'>
                      <li style='font-size:18px;line-height:30px;'>
                        $nafta2
                      </li>
                      </ul>
                     <h2>Váltó típusa</h2>
                    <ul style='padding-left: 20px;'>
                      <li style='font-size:18px;line-height:30px;'>
                        $valto2
                      </li>
                      </ul>
                  </div>
                </td>
            </table></td>
  </tr>
</tbody>
</table>
</td>
  </tr>
</tbody>
</table>
</td>
  </tr>
</tbody>
</table>

          </div>
          <div class='movableContent' style='border: 0px; padding-top: 0px; position: relative;'>

              <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' >
        <tr><td height='35'>&nbsp;</td></tr>
        <tr><td><img class='banner' src='http://princecars.hu/email/line.png' alt='featured image' data-default='placeholder' data-max-width='560' height='23' width='560'></td></tr>
        <tr><td height='25'>&nbsp;</td></tr>
      </table>
          </div>
            
      </td></tr>
      <tr>
        <td>
          
          <div class='movableContent' style='border: 0px; padding-top: 0px; position: relative;'>
              <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
      <tr>
        <td >
          
          </div>
          <div class='movableContent' style='border: 0px; padding-top: 0px; position: relative;'>
     
          </div>
          <div class='movableContent' style='border: 0px; padding-top: 0px; position: relative;'>
              
          </div>
          <div class='movableContent' style='border: 0px; padding-top: 0px; position: relative;'>
              <tr><td height='28'></td></tr>
          </div>
    </td>
  </tr>
</tbody>
</table>

    </td>
    <td valign='top' width='20'>&nbsp;</td>
  </tr>
</tbody>
</table>
</td>
  </tr>
</tbody>
</table>
</td>
  </tr>
</tbody>
</table>";
  
  $messageToSend .= "</body></html>";
  $headers  = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
  $headers .= "From: Prince Cars-Gold Kft.<megrendeles@princecars.hu>" . "\r\n";
  mail("$myMail","Autó megrendelés érkezett",$messageToSend,$headers); */
  
  echo "KÖSZÖNJÜK A MEGRENDELÉST";
?>