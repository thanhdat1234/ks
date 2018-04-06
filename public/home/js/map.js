
    /* ==========  START GOOGLE MAP ========== */
    
    // When the window has finished loading create our google map below
    google.maps.event.addDomListener(window, 'load', init);
    
    function init() {
   
    var uluru = { lat: 10.5141892, lng: 108.9352434 };
    var map = new google.maps.Map(document.getElementById('map-canvas'), {
        zoom: 18,
        center: uluru
    });
    var marker = new google.maps.Marker({
        position: uluru,
        map: map
    });
    var infowindow = new google.maps.InfoWindow({
        content: "<b>NHÀ NGHỈ THÁI BÌNH</b>"
    });
    infowindow.open(map, marker);
    }
    
    // ========== END GOOGLE MAP ========== //
