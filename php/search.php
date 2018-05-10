

<?php

// Reference:
// Our API code modified from stackoverflow.
$servername = "cpanel3";
$username = "bigorental_yiranli6";
$password = "Kate1996&";
$dbname = "bigorental_bigorepo"; 


$doc = new DOMDocument("1.0");
$node = $doc->createElement("markers");
$parnode = $doc->appendChild($node);

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$area = $_GET["area"];
$bed = $_GET["bed"];
$bath = $_GET["bath"];
$water = $_GET["water"];
$electricity = $_GET["electricity"];
$internet = $_GET["internet"];
$private = $_GET["private"];


if($private == 3)
{
    if($electricity == "both" && $water == "both" && $internet != "both"){
    $sql = "(SELECT address, price, bednum, bathnum, plan, water, electricity, internet,amenity, areanum, company, lat, lng FROM Apartment WHERE areanum = $area AND internet = '$internet' AND bednum = $bed AND bathnum = $bath)";
    $temp2 = "(SELECT address, price, bednum, bathnum, plan, water, electricity, internet,amenity, areanum, company, lat, lng FROM Private_Apartment WHERE areanum = $area AND internet = '$internet' AND bednum = $bed AND bathnum = $bath)";}
    
    else if($water != "both" && $internet == "both" && $electricity == "both"){
    $sql = "(SELECT address, price, bednum, bathnum, plan, water, electricity, internet,amenity, areanum, company, lat, lng FROM Apartment WHERE areanum = $area AND water = '$water' AND bednum = $bed AND bathnum = $bath)";
    $temp2 = "(SELECT address, price, bednum, bathnum, plan, water, electricity, internet,amenity, areanum, company, lat, lng FROM Private_Apartment WHERE areanum = $area AND water = '$water' AND bednum = $bed AND bathnum = $bath)";}
    
    else if($water == "both" && $internet == "both" && $electricity != "both"){
    $sql = "(SELECT address, price, bednum, bathnum, plan, water, electricity, internet,amenity, areanum, company, lat, lng FROM Apartment WHERE areanum = $area AND electricity = '$electricity' AND bednum = $bed AND bathnum = $bath)";
    $temp2 = "(SELECT address, price, bednum, bathnum, plan, water, electricity, internet,amenity, areanum, company, lat, lng FROM Private_Apartment WHERE areanum = $area AND electricity = '$electricity' AND bednum = $bed AND bathnum = $bath)";}
    
    else if($water != "both" && $internet != "both" && $electricity == "both"){
    $sql = "(SELECT address, price, bednum, bathnum, plan, water, electricity, internet,amenity, areanum, company, lat, lng FROM Apartment WHERE areanum = $area AND water = '$water' AND internet = '$internet' AND bednum = $bed AND bathnum = $bath)";
    $temp2 = "(SELECT address, price, bednum, bathnum, plan, water, electricity, internet,amenity, areanum, company, lat, lng FROM Private_Apartment WHERE areanum = $area AND water = '$water' AND internet = '$internet' AND bednum = $bed AND bathnum = $bath)";}
    
    else if($water != "both" && $internet == "both" && $electricity != "both"){
    $temp2 = "(SELECT address, price, bednum, bathnum, plan, water, electricity, internet,amenity, areanum, company, lat, lng FROM Private_Apartment WHERE areanum = $area AND water = '$water' AND electricity = '$electricity' AND bednum = $bed AND bathnum = $bath)";
    $sql = "(SELECT address, price, bednum, bathnum, plan, water, electricity, internet,amenity, areanum, company, lat, lng FROM Apartment WHERE areanum = $area AND water = '$water' AND electricity = '$electricity' AND bednum = $bed AND bathnum = $bath)";}
    
    else if($water == "both" && $internet != "both" && $electricity != "both"){
    $temp2 = "(SELECT address, price, bednum, bathnum, plan, water, electricity, internet,amenity, areanum, company, lat, lng FROM Private_Apartment WHERE areanum = $area AND electricity = '$electricity'AND internet = '$internet' AND bednum = $bed AND bathnum = $bath)";
    $sql = "(SELECT address, price, bednum, bathnum, plan, water, electricity, internet,amenity, areanum, company, lat, lng FROM Apartment WHERE areanum = $area AND electricity = '$electricity' AND internet = '$internet' AND bednum = $bed AND bathnum = $bath)";}
    
    else if($water == "both" && $internet == "both" && $electricity == "both"){
    $sql = "(SELECT address, price, bednum, bathnum, plan, water, electricity, internet,amenity, areanum, company, lat, lng FROM Apartment WHERE areanum = $area AND bednum = $bed AND bathnum = $bath)
        ";
    $temp2 = "(SELECT address, price, bednum, bathnum, plan, water, electricity, internet,amenity, areanum, company, lat, lng FROM Private_Apartment WHERE areanum = $area AND bednum = $bed AND bathnum = $bath)
        ";}
        
    else{
    $temp2 = "(SELECT address, price, bednum, bathnum, plan, water, electricity, internet,amenity, areanum, company, lat, lng FROM Private_Apartment WHERE areanum = $area AND water = '$water' AND electricity = '$electricity' AND internet = '$internet' AND bednum = $bed AND bathnum = $bath)";
    $sql ="(SELECT address, price, bednum, bathnum, plan, water, electricity, internet,amenity, areanum, company, lat, lng FROM Apartment WHERE areanum = $area AND water = '$water' AND electricity = '$electricity' AND internet = '$internet'AND bednum = $bed AND bathnum = $bath)";}

}

else if($private == 0)
{
    if($electricity == "both" && $water == "both" && $internet != "both"){
    $sql = "(SELECT address, price, bednum, bathnum, plan, water, electricity, internet,amenity, areanum, company, lat, lng FROM Apartment WHERE areanum = $area AND internet = '$internet' AND bednum = $bed AND bathnum = $bath)";}
    
    else if($water != "both" && $internet == "both" && $electricity == "both"){
    $sql = "(SELECT address, price, bednum, bathnum, plan, water, electricity, internet,amenity, areanum, company, lat, lng FROM Apartment WHERE areanum = $area AND water = '$water' AND bednum = $bed AND bathnum = $bath)";}
    
    else if($water == "both" && $internet == "both" && $electricity != "both"){
    $sql = "(SELECT address, price, bednum, bathnum, plan, water, electricity, internet,amenity, areanum, company, lat, lng FROM Apartment WHERE areanum = $area AND electricity = '$electricity' AND bednum = $bed AND bathnum = $bath)";}
    
    else if($water != "both" && $internet == "both" && $electricity != "both"){
    $sql = "(SELECT address, price, bednum, bathnum, plan, water, electricity, internet,amenity, areanum, company, lat, lng FROM Apartment WHERE areanum = $area AND water = '$water' AND electricity = '$electricity' AND bednum = $bed AND bathnum = $bath)";}
    
    else if($water != "both" && $internet != "both" && $electricity == "both"){
    $sql = "(SELECT address, price, bednum, bathnum, plan, water, electricity, internet,amenity, areanum, company, lat, lng FROM Apartment WHERE areanum = $area AND water = '$water' AND internet = '$internet' AND bednum = $bed AND bathnum = $bath)";}
    
    else if($water == "both" && $internet == "both" && $electricity == "both"){
    $sql = "(SELECT address, price, bednum, bathnum, plan, water, electricity, internet,amenity, areanum, company, lat, lng FROM Apartment WHERE areanum = $area AND bednum = $bed AND bathnum = $bath)
        ";}
    
    else{
    $sql ="(SELECT address, price, bednum, bathnum, plan, water, electricity, internet,amenity, areanum, company, lat, lng FROM Apartment WHERE areanum = $area AND water = '$water' AND electricity = '$electricity' AND internet = '$internet'AND bednum = $bed AND bathnum = $bath)";
    }

}

else
{
    if($electricity == "both" && $water == "both" && $internet != "both"){
    $temp2 = "(SELECT address, price, bednum, bathnum, plan, water, electricity, internet,amenity, areanum, company, lat, lng FROM Private_Apartment WHERE areanum = $area AND internet = '$internet' AND bednum = $bed AND bathnum = $bath)";}
    
    else if($water != "both" && $internet == "both" && $electricity == "both"){
    $temp2 = "(SELECT address, price, bednum, bathnum, plan, water, electricity, internet,amenity, areanum, company, lat, lng FROM Private_Apartment WHERE areanum = $area AND water = '$water' AND bednum = $bed AND bathnum = $bath)";}
    
    else if($water == "both" && $internet == "both" && $electricity != "both"){
    $temp2 = "(SELECT address, price, bednum, bathnum, plan, water, electricity, internet,amenity, areanum, company, lat, lng FROM Private_Apartment WHERE areanum = $area AND electricity = '$electricity' AND bednum = $bed AND bathnum = $bath)";}
    
    else if($water != "both" && $internet != "both" && $electricity == "both"){
    $temp2 = "(SELECT address, price, bednum, bathnum, plan, water, electricity, internet,amenity, areanum, company, lat, lng FROM Private_Apartment WHERE areanum = $area AND water = '$water' AND internet = '$internet' AND bednum = $bed AND bathnum = $bath)";}
    
    else if($water != "both" && $internet == "both" && $electricity != "both"){
    $temp2 = "(SELECT address, price, bednum, bathnum, plan, water, electricity, internet,amenity, areanum, company, lat, lng FROM Private_Apartment WHERE areanum = $area AND water = '$water' AND electricity = '$electricity' AND bednum = $bed AND bathnum = $bath)";}
    
    else if($water == "both" && $internet != "both" && $electricity != "both"){
    $temp2 = "(SELECT address, price, bednum, bathnum, plan, water, electricity, internet,amenity, areanum, company, lat, lng FROM Private_Apartment WHERE areanum = $area AND electricity = '$electricity'AND internet = '$internet' AND bednum = $bed AND bathnum = $bath)";}
    
    else if($water == "both" && $internet == "both" && $electricity == "both"){
    $temp2 = "(SELECT address, price, bednum, bathnum, plan, water, electricity, internet,amenity, areanum, company, lat, lng FROM Private_Apartment WHERE areanum = $area AND bednum = $bed AND bathnum = $bath)
        ";}
        
    else{
    $temp2 = "(SELECT address, price, bednum, bathnum, plan, water, electricity, internet,amenity, areanum, company, lat, lng FROM Private_Apartment WHERE areanum = $area AND water = '$water' AND electricity = '$electricity' AND internet = '$internet' AND bednum = $bed AND bathnum = $bath)";}
}

$cnt=1;

if($private == 3 || $private == 0){
    $result = $conn->query($sql);
    echo "<h1>Apartment Properties Rental</h1>";
    echo "<br>";
    if ($result->num_rows > 0) {
        echo "<table><tr><th>No.</th><th>Address</th><th>Area Number</th><th>Bedroom Number</th><th>Bathroom Number</th><th>Room Plan</th><th>Price</th><th>Amenity</th><th>Water Covered?</th><th>Electricity Covered?</th><th>Internet Covered?</th><th>Company</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $address=$row['address'];
            $areanum=$row['areanum'];
            $bednum=$row['bednum'];
            $bathnum=$row['bathnum'];
            $plan=$row['plan'];
            $price=$row['price'];
            $amenity=$row['amenity'];
            $water=$row['water'];
            $electricity=$row['electricity'];
            $internet=$row['internet'];
            $company=$row['company'];
            $id=$cnt;
            $cnt=$cnt+1;
            
            echo "<tr data-id='$id'><td class='data'><div data-id='$id'>$id</div></td><td class='data'><div data-id='$id'>$address</div></td><td class='data'><div data-id='$id'>$areanum</div></td><td class='data'><div data-id='$id'>$bednum</div></td>"
                        . "<td class='data'><div data-id='$id'>$bathnum</div></td><td class='data'><div data-id='$id'>$plan</div></td>"
                        . "<td class='data'><div data-id='$id'>$price</div></td><td class='data'><div data-id='$id'>$amenity</div></td><td class='data'><div data-id='$id'>$water</div></td>"
                        . "<td class='data'><div data-id='$id'>$electricity</div></td><td class='data'><div data-id='$id'>$internet</div></td><td class='data'><div data-id='$id'>$company</div></td>"
                        . "<td><a href='pre_schedule_zliu93.php?address=$address&areanum=$areanum&bednum=$bednum&bathnum=$bathnum&plan=$plan&price=$price&amenity=$amenity&water=$water&electricity=$electricity&internet=$internet&company=$company'>
                                  Schedule
                                </a></td>"
                        . "</tr> ";
        }
        echo "</table><br><br>";
    } 
    else {
        echo "No apartment satisfies your filter<br><br>";
    }


header("Content-type: text/xml");
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()){
  // ADD TO XML DOCUMENT NODE
    $node = $doc->createElement("marker");
    $newnode = $parnode->appendChild($node);
    $newnode->setAttribute("addresses", $row['address']);
    $newnode->setAttribute("prices", $row['price']);
    $newnode->setAttribute("lats", $row['lat']);
    $newnode->setAttribute("lngs", $row['lng']);
}
}


if($private == 3 || $private == 1){
    $result2 = $conn->query($temp2);
    echo "<h1>Private Apartment Properties Rental</h1>";
    echo "<br>";
    if ($result2->num_rows > 0) {
        echo "<table><tr><th>No.</th><th>Address</th><th>Area Number</th><th>Bedroom Number</th><th>Bathroom Number</th><th>Room Plan</th><th>Price</th><th>Amenity</th><th>Water Covered?</th><th>Electricity Covered?</th><th>Internet Covered?</th><th>Company</th></tr>";
        // output data of each row
        while($row = $result2->fetch_assoc()) {
            $address=$row['address'];
            $areanum=$row['areanum'];
            $bednum=$row['bednum'];
            $bathnum=$row['bathnum'];
            $plan=$row['plan'];
            $price=$row['price'];
            $amenity=$row['amenity'];
            $water=$row['water'];
            $electricity=$row['electricity'];
            $internet=$row['internet'];
            $company=$row['company'];
            $id=$cnt;
            $cnt=$cnt+1;
            echo "<tr data-id='$id'><td class='data'><div data-id='$id'>$id</div></td><td class='data'><div data-id='$id'>$address</div></td><td class='data'><div data-id='$id'>$areanum</div></td><td class='data'><div data-id='$id'>$bednum</div></td>"
                        . "<td class='data'><div data-id='$id'>$bathnum</div></td><td class='data'><div data-id='$id'>$plan</div></td>"
                        . "<td class='data'><div data-id='$id'>$price</div></td><td class='data'><div data-id='$id'>$amenity</div></td><td class='data'><div data-id='$id'>$water</div></td>"
                        . "<td class='data'><div data-id='$id'>$electricity</div></td><td class='data'><div data-id='$id'>$internet</div></td><td class='data'><div data-id='$id'>$company</div></td>"
                        . "<td><a href='pre_schedule_zliu93.php?address=$address&areanum=$areanum&bednum=$bednum&bathnum=$bathnum&plan=$plan&price=$price&amenity=$amenity&water=$water&electricity=$electricity&internet=$internet&company=$company'>
                                  Schedule
                                </a></td>"
                        . "</tr> ";
        }
        echo "</table>";
    } 
    else {
        echo "No Private Apartment satisfies your filter";
    }
    


header("Content-type: text/xml");
$result2 = $conn->query($temp2);
while ($row = $result2->fetch_assoc()){
  // ADD TO XML DOCUMENT NODE
    $node = $doc->createElement("marker");
    $newnode = $parnode->appendChild($node);
    $newnode->setAttribute("addresses", $row['address']);
    $newnode->setAttribute("prices", $row['price']);
    $newnode->setAttribute("lats", $row['lat']);
    $newnode->setAttribute("lngs", $row['lng']);

}
}
echo $doc->saveXML();
$xml = simplexml_load_string($doc, "SimpleXMLElement", LIBXML_NOCDATA);
$json = json_encode($xml);
$array = json_decode($json,TRUE);

?>
<!DOCTYPE html>
<html>
<body>
      <head>
    <style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>
  </head>
  <body>
    <h3>Apartment Addresses On Map</h3>
    <div id="map"></div>
    <script>
      function initMap() {
        var uiuc = {lat: 40.104047, lng: -88.227068};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: uiuc
        });
        var marker = new google.maps.Marker({
          position: uiuc,
          map: map
        });
      }
      function scroll(id_num) {
          var elmnt = document.getElementById(id_num);
          elmnt.scrollIntoView();
      }
      
      function addMarkers() {
        console.log("ok");
        var uiuc = {lat: 40.104047, lng: -88.227068};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: uiuc
        });
        var infoWindow = new google.maps.InfoWindow;
        var markers = document.getElementsByTagName('marker');
        console.log(markers);
        var address1 = markers[0].getAttribute('addresses');
        console.log(address1);
        var cnt=1;
        Array.prototype.forEach.call(markers, function(markerElem) {
            var address = markerElem.getAttribute('addresses');
            var price= markerElem.getAttribute('prices');
            console.log(parseFloat(markerElem.getAttribute('lats')));
            console.log(parseFloat(markerElem.getAttribute('lngs')));
            var point = new google.maps.LatLng(
                parseFloat(markerElem.getAttribute('lats')),
                parseFloat(markerElem.getAttribute('lngs')));
            var infowincontent = document.createElement('div');
            var strong = document.createElement('strong');
            var id=cnt.toString();
            var id_format=id.concat(". ");
            strong.textContent = id_format.concat(address);
            infowincontent.appendChild(strong);
            infowincontent.appendChild(document.createElement('br'));

            var text = document.createElement('text');
            var price_str=price.toString();
            var symbol="Highest Price: $";
            text.textContent = symbol.concat(price_str);
            infowincontent.appendChild(text);
           
            var marker = new google.maps.Marker({
                map: map,
                position: point,
            });
            marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
            });
            cnt=cnt+1;
        });
    }

    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIYlQRr9wqfONgwSLU37qslT9x5tWd0ow&callback=addMarkers">
    </script>
  </body>
</html>
