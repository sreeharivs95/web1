<?php
include 'connection.php';

$gid=$_GET['id'];
$select="select * from adddriving where id='$gid'";
                      $select_query=  mysql_query($select) or die(mysql_error());
                      while($row=  mysql_fetch_array($select_query))
                      {
                          $name=$row['name'];
                          $lat=$row['lat'];
                          $long=$row['laun'];
                          
                      }
                          
?>

<html>
    <head>
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript">

function InitializeMap()
{
    var latlng = new google.maps.LatLng(<?php echo $lat.",".$long; ?>);
    var myOptions = {
        zoom: 13,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("map_location"), myOptions);


var marker = new google.maps.Marker
(
    {
        position: new google.maps.LatLng(<?php echo $lat.",".$long; ?>),
        map: map,
        title: '<?php echo $name; ?>'
    }
);


    google.maps.event.addListener(marker, 'click', function () {
        // Calling the open method of the infoWindow
var infowindow = new google.maps.InfoWindow({

        content: ''

 });

  infowindow.open(map, marker);

    });


}
</script>
    </head>
    <body onload="InitializeMap()">
        <div id="map_location" style="width:100%; height:650px; ">
            
        </div>
    </body>
</html>