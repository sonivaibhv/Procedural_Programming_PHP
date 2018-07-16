<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        echo 'Fairfield Halls';
        
        $path = "../pics/";
        $doc = new DOMDocument();
        $doc->load("Events.xml");
        
        $fairfield_halls = $doc->getElementsByTagName("event");
        echo "<table border=2, width=90%>";
        echo "<tr bgcolor=grey> <td align=center>Event Type</td>";
        echo " <td align = center> Venues</td> <td  align=center> Date & Time </td>";   
        echo " <td align = center > Ticket.price each </td> <td align = center > Price 5 Tickets</td> <td> Group Disscount </td> "; 
        echo "<td align = center > Event Title</td> <td align = center> Image</td></tr>";
      
        ?>
        
        <script>

       if (window.XMLHttpRequest)

       {

          xmlhttp = new XMLHttpRequest();

       }

       else

       {

          xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

       }

       xmlhttp.open('GET','/Events.xml',false);

        xmlhttp.send();

       xmlDoc = xmlhttp.responseXML;

       document.write("<event>");

        count=1;

       var x=innerHTML= xmlDoc.getElementsByTagName("Event_Type");
     
       

        for(i=0;i<=x.length; i++ ){

       
       
       

        document.write("<tr><td><br><br><b>");

        document.write(xmlDoc.getElementsByTagName("Event_Type")[i].childNodes[0].nodeValue);

         document.write("</b></td></td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");        
         
         

        document.write(xmlDoc.getElementsByTagName("venues")[i].childNodes[0].nodeValue);

        document.write("</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");

         document.write(xmlDoc.getElementsByTagName("date")[i].childNodes[0].nodeValue);

        document.write("</p></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
        
         document.write(xmlDoc.getElementsByTagName("ticket_price")[i].childNodes[0].nodeValue);

        document.write("</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");

 document.write(xmlDoc.getElementsByTagName("price5")[i].childNodes[0].nodeValue);

        document.write("</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");

 document.write(xmlDoc.getElementsByTagName("group_disscount")[i].childNodes[0].nodeValue);

        document.write("</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");

 document.write(xmlDoc.getElementsByTagName("event_title")[i].childNodes[0].nodeValue);

        document.write("</td><td><img src='");
        
 document.write(xmlDoc.getElementsByTagName("image")[i].childNodes[0].nodeValue);
 document.write("' alt='photo of me' height='200' width='130'></td></tr>  ");
        
        }

      document.write("</event>");

    </script>
    </body>
</html>
