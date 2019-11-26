<?php
require_once"html/header.html";

?>
    <main>
        <h1>LOCATION Armenia</h1>
        <div id="map"> </div>

    </main>





<?php



require_once "html/footer.html";
?>
<script>

    function initMap() {
        var uluru = {lat: 40.1818114, lng: 44.5265036};

        var map = new google.maps.Map(document.getElementById('map'), {zoom: 8,
            center: uluru});
        var marker = new google.maps.Marker({
            position: uluru,
            map: map});
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?&callback=initMap">
</script>
