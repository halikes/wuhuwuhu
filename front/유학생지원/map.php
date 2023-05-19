<!DOCTYPE html>
<html>
<head>
    <title>HYU ERICA</title>
    <style>
    body {
        /* display: flex; */
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .mapbox {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    #map {
        width: 1000px;
        height: 800px;
        position: relative;
    } 

    .gohome {
        position: absolute;
            top: 10px;
            left: 10px;
            z-index: 1;
            background-color: #fff;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    }
    .search-container {
            position: absolute;
            bottom: 10px;
            left: 10px;
            z-index: 1;
            background-color: #fff;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        #search-input {
            width: 100px;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0aQl1Flcfgq695fxCi_VW63P2ORvM0FI&region=KR&callback=initMap" async defer></script>
    
</head>

<body>
    <div class="gohome"> <a href="index.php">Home</a></div>
    <div class="mapbox">
        <div id="map"></div>
    </div>
    <div class="search-container">
        <input type="text" id="search-input" placeholder="search address">
    </div>
    <div id="pano"></div>
    <script src="js/map.js"></script>
    
</body>
</html>

