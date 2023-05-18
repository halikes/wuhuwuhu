let map;
let maxZoomService;
let infoWindow;

function initMap() {
    
    // 创建地图实例，设置初始中心位置和缩放级别
    var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 37.2964, lng: 126.8351},
        zoom: 16,
        // gestureHandling: 'greedy'
    });
    infoWindow = new google.maps.InfoWindow();
    maxZoomService = new google.maps.MaxZoomService();

    // 在地图上添加学校标记
    var schoolMarker = new google.maps.Marker({
        position: {lat: 37.2964, lng: 126.8351},
        map: map,
        title: 'Hangyang University Erica'
    });

    // 添加更多的地图标记
    var marker1 = new google.maps.Marker({
        position: {lat: 37.2964, lng: -122.42},
        map: map,
        title: '标记1'
    });

    var marker2 = new google.maps.Marker({
        position: {lat: 37.2964, lng: 126.8351},
        map: map,
        title: '标记2'
    });

    // // 自定义标记图标
    // var marker = new google.maps.Marker({
    //     position: {lat: 37.2964, lng: 126.8351},
    //     map: map,
    //     title: '标记',
    //     icon: 'marker.png' // 指定图标图片路径
    // });

    // 添加信息窗口
    var infowindow = new google.maps.InfoWindow({
        content: '这是一个标记的信息'
    });

    // 点击标记时显示信息窗口
    marker.addListener('click', function() {
    infowindow.open(map, marker);
    });

    marker1.addListener('click', function() {
        // 点击标记1时的操作
        // 可以显示详细信息、导航到该地点等
    });

    marker2.addListener('click', function() {
        // 点击标记2时的操作
        // 可以显示详细信息、导航到该地点等
    });

    // 添加缩放控件
    var zoomControl = new google.maps.ZoomControl();
    map.controls[google.maps.ControlPosition.RIGHT_BOTTOM].push(zoomControl);

    // 添加导航控件
    var directionsService = new google.maps.DirectionsService();
    var directionsRenderer = new google.maps.DirectionsRenderer();
    directionsRenderer.setMap(map);
    var origin = new google.maps.LatLng(37.2964, 126.8351);
    var destination = new google.maps.LatLng(37.2964, 126.8351);
    var request = {
        origin: origin,
        destination: destination,
        travelMode: google.maps.TravelMode.WALKING
    };
    directionsService.route(request, function(result, status) {
        if (status == google.maps.DirectionsStatus.OK) {
            directionsRenderer.setDirections(result);
        }
    });

    // 3D 无效代码
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

