<!DOCTYPE html>
<html>
<head>
    <title>HYU ERICA</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* 使父元素铺满整个视口高度 */
        }
        #map {

            width: 1000px;
            height: 800px;
        }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0aQl1Flcfgq695fxCi_VW63P2ORvM0FI&callback=initMap" async defer></script>
    <script src="map.js"></script>
</head>
<body>
    <div id="map"></div>
    <script src="js/map.js"></script>
</body>
</html>

