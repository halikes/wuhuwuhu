let map;
let maxZoomService;
let infoWindow;

function initMap() {
    
    // 创建地图实例，设置初始中心位置和缩放级别
    const ERICA = {lat: 37.2964, lng: 126.8351};
    const map = new google.maps.Map(document.getElementById('map'), {
        center: ERICA,
        zoom: 16,
        tilt: 60
    });
    infoWindow = new google.maps.InfoWindow();
    maxZoomService = new google.maps.MaxZoomService();

    // 搜索
    var searchInput = document.getElementById('search-input');
    var searchBox = new google.maps.places.SearchBox(searchInput);

    map.addListener('bounds_changed', function () {
        searchBox.setBounds(map.getBounds());
    });

    var markers = [];

    searchBox.addListener('places_changed', function () {
        var places = searchBox.getPlaces();

        if (places.length === 0) {
            return;
        }

        markers.forEach(function (marker) {
            marker.setMap(null);
        });
        markers = [];

        var bounds = new google.maps.LatLngBounds();
        places.forEach(function (place) {
            if (!place.geometry) {
                console.log('Place geometry not found');
                return;
            }

            markers.push(new google.maps.Marker({
                map: map,
                title: place.name,
                position: place.geometry.location
            }));

            if (place.geometry.viewport) {
                bounds.union(place.geometry.viewport);
            } else {
                bounds.extend(place.geometry.location);
            }
        });

        map.fitBounds(bounds);
    });
    // 3D
    const panorama = new google.maps.StreetViewPanorama(
        document.getElementById("pano"),
        {
          position: fenway,
          pov: {
            heading: 34,
            pitch: 10,
          },
        }
      );
    
      map.setStreetView(panorama);

      
}

window.initMap = initMap;

