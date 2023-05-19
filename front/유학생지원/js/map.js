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

