<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="./js/jquery-3.2.1.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdLVfnGnD_s4ZHQrvNNlVcn-DUwMLj2is&callback=initMap"
            async defer></script>
    <script>

        var uluru;
        var infowindow;
        var contentString; 
        var rtNm = [];
        var arrmsg1 = [];
        var arrmsg2 = [];
        
        

        function initMap() {
            // ajax로 php호출 

        $.ajax({
            url:'access.php',
            datatype:'xml',
            async:false,
            success:function (response) {

                // console.log(response);
                
                $(response).find("itemList").each(function (index) {

                    rtNm[index]=$(this).find("rtNm").text();
                    arrmsg1[index]=$(this).find("arrmsg1").text();
                    arrmsg2[index]=$(this).find("arrmsg2").text();
                    // $("#info").html(rtNm);
                    // console.log(rtNm[index]);
                    // console.log(arrmsg1[index]);
                    // console.log(arrmsg2[index]);
                    str = ''; 
                        for (var index = 0; index < rtNm.length ; index++){
                            str += '<tr><th>'+ rtNm[index]+ '</th><tr>' + '<tr><td>' + arrmsg1[index]+'</td></tr>' + '<tr><td>' + arrmsg2[index] + '</td><tr>' 
                        }
                    contentString= '<div id="content">'
                        + '<table>' + str+'</table>'
                    contentString+='</div>';
            // console.log(contentString); 
                    
                    
                });
            }

        });

            uluru={lat:37.5377076472,lng: 126.9864583325}
            map= new google.maps.Map(document.getElementById('map'),{
                center:uluru,
                zoom: 20
            });
            

            marker= new google.maps.Marker({
                position: uluru ,
                map: map
            });

            infowindow = new google.maps.InfoWindow({
                content:contentString
            });
            marker.addListener('click', function() {
                infowindow.open(map, marker);
            });
        }
        
      

    </script>
    <style>
        #map {
            height: 100%;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        h1 {padding-left: 10px;}
        form {margin-left: 20px; margin-bottom: 20px; width: ;}
            input {height: 30px; width: 15%; padding: 0 10px;}
            button {height: 35px; float:left; position: absolute; left:18%; top:8.5%;}
            input,button {display: inline-block; }
        #content{
            text-align: center; 
        }
    </style>
</head>
<body>
<h1>해방촌 정류장 정보</h1>
<div id="info">
    <form method="get" action="access.php?">
        <input type="text" id="areaName" name="buslocation">
        <button onclick="send()">전송</button>
    </form>
    
</div>
<div id="map"></div>
<script>
</script>
<table>
    <tr>
        <th></th>
        <th></th>
    </tr>
    <tr>
        <td></td>
    </tr>
    <tr>
        <td></td>
    </tr>
    <tr>
        <td></td>
    </tr>
    <tr>
        <td></td>
    </tr>
</table>
</body>
</html>

