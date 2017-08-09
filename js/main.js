//
$(document).ready(function(){
  $("a").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;

      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 1000, function(){
        window.location.hash = hash;
      });
    }
  });
});



//google map api
function initMap() {
    var map;
    map = new google.maps.Map(document.getElementById('map'), {
        center: {
            lat: 51.9658019,
            lng: 17.507154000000014
        },
        zoom: 16,
        scrollwheel: false,
        disableDoubleClickZoom: true
    });

    var markers = [
        ['WUSP', 51.965808, 17.507175]
    ];

    for (var i = 0; i < markers.length; i++) {
        var draftMarker = markers[i];
        var myLatLng = new google.maps.LatLng(draftMarker[1], draftMarker[2]);
        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            animation: google.maps.Animation.DROP,
            icon: "img/marker.png",
            title: draftMarker[0]
        });
    }
};
