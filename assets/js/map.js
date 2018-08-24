var getUrl = window.location;
var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];


var global_latitude = -1.312303;
var global_longitude = 119.075254;
var user_position;
var total_marker;
var markers = [];
var infos = [];
var temp_position;
var bounds;


//get user location
function geoFindMe() {

    map = new google.maps.Map(document.getElementById('maps'), {
        zoom: 5,
        center: {lat: global_latitude, lng: global_longitude}
    });

    add_marker();
    bounds = new google.maps.LatLngBounds();
}


function add_marker()
{
    total_marker =
        [
            {"name":"Cikini","content":"Jl. Cikini Raya No. 60 A","latitude":"-6.193548","longitude":"106.838984","city":"Jakarta","placeid":"ChIJC92vBj_0aS4RG4VNggWmctQ","icon":null},
            {"name":"Tanah Abang","content":"Pasar Tanah Abang, Food Court Blok A,Lt 8","latitude":"-6.188462","longitude":"106.815934","city":"Jakarta","placeid":"ChIJD0GBZp72aS4RclsmdPDp5yQ", "icon":null},
            {"name":"Kalibata Mall","content":"Kalibata Mall Blok 8, Jl. Pahlawan Kalibata","latitude":"-6.256782","longitude":"106.855606","city":"Jakarta","placeid":"ChIJz3tUK63zaS4RM8pODWzMqe0" ,"icon":null},
            {"name":"Kramat Jati Indah","content":"Kramat Jati Indah Ground Floor 8 -10, Jalan Raya Bogor Km 19 13510","latitude":"-6.271581","longitude":"106.867783","city":"Jakarta","placeid":"ChIJ8SmLX_byaS4RAQOO6hmA_UA" ,"icon":null},
            {"name":"Graha Cijantung","content":"Graha Cijantung Lt. III No. 5, Jl. Raya Jakarta Bogor","latitude":"-6.312738","longitude":"106.861828","city":"Jakarta","placeid":"ChIJ8W4WMJztaS4RTs2-Sq5XtK8", "icon":null},
            {"name":"Slipi Jaya","content":"Slipi Jaya Plaza, Jl. S. Parman Kav. 17-18, A-7, Basement","latitude":"-6.189217","longitude":"106.796409","city":"Jakarta","placeid":"ChIJSUWO7ZL2aS4R9vpBN8QQ8Qg","icon":null},
            {"name":"Ciledug","content":"Jl. Ciledug Raya No. 1, Larangan Utara","latitude":"-6.232925","longitude":"106.730863","city":"Tangerang","placeid":"ChIJW4DQ56XwaS4RlgYqzwK0dnM" ,"icon":null},
            {"name":"Metropolitan Mall Bekasi","content":"Metropolitan Mall Bekasi, Lt. II No. 47, Jl. Ujung Kalimalang","latitude":"-6.248297","longitude":"106.991297","city":"Bekasi","placeid":"ChIJoelFzjOMaS4R-QIDxYp_DR0","icon":null},
            {"name":"Bekasi Mall","content":"Bekasi Mall, Ground FI, Unit 30, 31, 32, Jl. Jend. Sudirman","latitude":"-6.228157","longitude":"106.983855","city":"Bekasi","placeid":"ChIJBf-HrhSMaS4RBC2kwEgemXg","icon":null},
            {"name":"Jalan Sunda","content":"Jl. Sunda No. 73","latitude":"-6.918142","longitude":"107.617849","city":"Bandung","placeid":"ChIJHXUDhS3maC4RZPaFLgRogGo","icon":null},
            {"name":"Bandung Indah Plaza","content":"Bandung Indah Plaza, Lt.II, Jl. Merdeka No. 56","latitude":"-6.908206","longitude":"107.611299","city":"Bandung","placeid":"ChIJD2g-6DfmaC4RhkFJ9TSpgrU","icon":null},
            {"name":"Jalan Dewi Sartika","content":"Jl. Dewi Sartika, No 44","latitude":"-6.925534","longitude":"107.605975","city":"Bandung","placeid":"ChIJczw4LyTmaC4RVtLvtutb_XE","icon":null},
            {"name":"Yogya Dept Store","content":"Yogya Dept. Store, Jl. KH. Mustfa No. 124","latitude":"-7.331041","longitude":"108.218870","city":"Tasikmalaya","placeid":"ChIJ____v0RXby4R55wtkflTmA8","icon":null},
            {"name":"Plaza Asia","content":"Plaza Asia, Jl. H.Z Mustofa No. 326","latitude":"-7.343064","longitude":"108.216648","city":"Tasikmalaya","placeid":"ChIJq6qqam1Xby4RoIwEufGttU8","icon":null},
            {"name":"Jalan Cimanuk","content":"Jl. Cimanuk No. 338 Garut","latitude":"-7.203634","longitude":"107.889898","city":"Garut","placeid":"ChIJ__iKdWp1hzIR9LGchCNJJKs","icon":null},
            {"name":"Sentani City Square","content":"Sentani City Square, Jl. Kemiri Raya No.202 Papua","latitude":"-2.563583","longitude":"140.500158","city":"Irian Jaya","placeid":"ChIJbSuuGwDybGgRa66OPawc9ok","icon":null},
            {"name":"Brilliant Plaza","content":"Brilliant Plaza, Jl. Sao - Sao No. 20 ","latitude":"-3.988636","longitude":"122.511696","city":"Kendari","placeid":"ChIJT2pVHcvymC0Rz4e1hE9uELw","icon":null},
            {"name":"Lippo Plaza Kendari","content":"Lippo Plaza Kendari Unit GF 01-02, Jl MT Haryono No 61-63 Kel. Bende Kec. Kedia, Kendari","latitude":"-3.992135","longitude":"122.512234","city":"Kendari","placeid":"ChIJVVVVVabtmC0Rnto-eCernsU","icon":null},
            {"name":"Plaza Surabaya","content":"Plaza Surabaya, Jl. Pemuda No. 37","latitude":"-7.264945","longitude":"112.748621","city":"Surabaya","placeid":"ChIJmUkS7WL51y0R_FbtPGnbMV0","icon":null},
//            {"name":"Tunjungan Plaza","content":"Tunjungan Plaza III, Jl. Basuki Rahmat 8-12","latitude":"-7.263402","longitude":"112.739451","city":"Surabaya","icon":null},
            {"name":"Supermall Pakuwon Indah","content":"Supermall Pakuwon Indah, Ground F1 Unit No. G.020","latitude":"-7.290167","longitude":"112.674677","city":"Surabaya","placeid":"ChIJ0V-VZkr81y0RqznaXhwZ7pM","icon":null},
            {"name":"Thamrin Plaza","content":"Thamrin Plaza, Blok 02, Lt.1, Jl. Thamrin 75 R","latitude":"3.586560","longitude":"98.691677","city":"Medan","placeid":"ChIJCQo98rsxMTARlLO6vKHqoWM","icon":null},
            {"name":"Yuki Simpang Plaza","content":"Yuki Simpang Plaza, Jl. Sisingamangaraja","latitude":"3.576010","longitude":"98.687793","city":"Medan","placeid":"ChIJ63Cp0lwwMTARtP5LhYRKvNM","icon":null},
            {"name":"Medan Mall","content":"Medan Mall, Lot 32 Lt.1, Jl. MT Haryono","latitude":"3.588103","longitude":"98.686397","city":"Medan","placeid":"ChIJB4VDHsoxMTARXiT_UrIpknY","icon":null},
            {"name":"Suzuya Plaza","content":"Medan Marelan, Suzuya Plaza Medan Marelan, Jl. Raya Marelan, Kel. Tanah Enam Ratus, Kec. Medan Marelan, Medan","latitude":"3.678266","longitude":"98.656659","city":"Medan","placeid":"ChIJVVVVVUktMTARV4tFuJDTFcs","icon":null},
            {"name":"Plaza Medan","content":"Plaza Medan Fair, Jl. Jend. Gatot Subroto Medan Lt.1 No. 1","latitude":"3.593591","longitude":"98.663153","city":"Medan","placeid":"ChIJQ5PHxEcuMTARcooodfCbnZ0","icon":null},
            {"name":"Binjai Supermall","content":"Binjai Supermal, Jl. Soekarno Hatta No.14 ","latitude":"3.609092","longitude":"98.508942","city":"Medan","placeid":"ChIJcY31Re8pMTARaogF-dJUOZM","icon":null},
            {"name":"Mall Epicentrum Boulevard","content":"Mall Epicentrum Boulevard, Jl. Dr. Masyur Medan","latitude":"3.567578","longitude":"98.649690","city":"Medan","placeid":"ChIJjVq3I9svMTAR_M5kiXwrFT4","icon":null},
            {"name":"City Check In","content":"City Check In Jln. Stasiun Kreta Api, Sebelah kanan jalan Rel Lintas Medan, Tanjung Balai  Kelurahan Kesawan, Kecamatan Medan Barat,Medan, Sumatra Utara","latitude":"3.589793","longitude":"98.680237","city":"Medan","placeid":"ChIJ_____3AwMTARG1T1ogNzWM0","icon":null},
            {"name":"Kampung Baru","content":"kampung baru Jl. B Zein Hamid No41Link IV, Kel. Titikuning Medan","latitude":"3.546904","longitude":"98.687702","city":"Medan","placeid":"ChIJTRZX4LQxMTARgwIvxIhK1BM","icon":null},
            {"name":"Jalan Merak Jingga","content":"Jl. Merak Jingga No. 8 Medan","latitude":"3.596751","longitude":"98.677123","city":"Medan","placeid":"ChIJsWfpZ8ExMTARxdZ5JthNfD4","icon":null},
            {"name":"Manhattan Time Square","content":"Manhattan Time Square Jl. Jend Gatot Subroto No.217, Kelurahan Sei Sikambing B, Kecamatan Medan Sunggal,  Lantai Upper Ground Unit No. 10","latitude":"3.591268","longitude":"98.626818","city":"Medan","placeid":"ChIJN_BpqlouMTARrH_fDOp9Zqg","icon":null},
            {"name":"Jalan Kapten Muslim","content":"Jl.Kapten Muslim no 71. Helvenia, Medan","latitude":"3.596853","longitude":"98.644621","city":"Medan","placeid":"ChIJKe69PjwuMTARL-5tUpYDz24","icon":null},
            {"name":"Mesra Indah Mall","content":"Mesra Indah Mall, Ground F1, Jl. KH Abdul Kholid No. 42","latitude":"-0.501304","longitude":"117.146564","city":"Samarinda","placeid":"ChIJVVVVVczX9S0RJRnzJ-D26aE","icon":null},
            {"name":"Mal Lembuswana","content":"Mal Lembuswana Food Court Lt2,Jl. S Parman-Moh Yamin No. 20","latitude":"-0.475314","longitude":"117.147017","city":"Samarinda","placeid":"ChIJKYtvdTd_9i0RzzjjRaqS5Zs","icon":null},
            {"name":"Ruko Lembuswana","content":"Ruko Lembusana Blok E 20-21 Jl. Letjen S. Parman","latitude":"-0.475094","longitude":"117.148038","city":"Samarinda","placeid":"ChIJaWhmiTd_9i0RFfTse_NPb_M","icon":null},
            {"name":"Ramayana Square","content":"Ramayana Square,Jl. A Yamin, Samarinda Ulu, Samarinda, Kal - Tim","latitude":"-0.469943","longitude":"117.147289","city":"Samarinda","placeid":"ChIJAQAAADB59i0R771NunlG0Qc","icon":null},
            {"name":"Palembang Square","content":"Jl. POM IX / Angkatan 45, Lt1, No. 28-32  Palembang Square","latitude":"-2.976360","longitude":"104.741592","city":"Palembang","placeid":"ChIJPSKo4OZ1Oy4Ry5rv4Gn5RTE","icon":null},
            {"name":"Jalan Gereja","content":"Jl. Gereja No.40","latitude":"-0.953174","longitude":"100.359999","city":"Padang","placeid":"ChIJRUJ08Ey51C8RofZHNFg6Ktc","icon":null},
            {"name":"Payakumbuh","content":"Payakumbuh, Jl. Jend Sudirman No.28","latitude":"-0.217640","longitude":"100.641753","city":"Padang","placeid":"ChIJzyPBk6hM1S8Ru9PkFRHmYGU","icon":null},
            {"name":"A.Yani Mega Mall","content":"A. Yani Mega Mal Lt. dasar unit BG-11 Jl. A. Yani ","latitude":"-0.051102","longitude":"109.345250","city":"Padang","placeid":"ChIJq6qqqvZaHS4RkBJ-jd2Z-RE","icon":null},
            {"name":"Simpang Flamboyan","content":"Texas Chicken Simpang Flamboyan Jl. Pahlawan No 1 Pontianak, Kalimantan Barat","latitude":"-0.041337","longitude":"109.345994","city":"Pontianak","placeid":"ChIJDUENBrFZHS4RX_iSCDf83w0","icon":null},
            {"name":"Mall Panakukang","content":"Mall Panakukang, Lt.1, Unit A1-03/A1-05, Jl. Panakukang Mas Boulevard","latitude":"-5.156998","longitude":"119.445661","city":"Makassar","placeid":"ChIJAQAAAB3jvi0RqzJekr2v3Jc","icon":null},
            {"name":"Panakukang Square","content":"Panakukang Square Jl. Adhiyaksa No.1","latitude":"-5.157726","longitude":"119.448454","city":"Makassar","placeid":"ChIJA5PuGerivi0RVLhCOcdO3jA","icon":null},
            {"name":"Karebosi Link","content":"Karebosi Link, Gedung Karebosi Link LG, Jl. Jend A. Yani","latitude":"-5.133855","longitude":"119.413089","city":"Makassar","icon":null},
            {"name":"Mitra Plaza","content":"Mitra Plaza, Jl. Pangeran Antasari No.1","latitude":"-3.326245","longitude":"114.596061","city":"Banjarmasin","placeid":"ChIJsbYrc6UCvy0RSTiXZXDW8UA","icon":null},
            {"name":"Duta Mall","content":"Duta Mall, Jl. A Yani  Simpang Ulin KM 2","latitude":"-3.322689","longitude":"114.603102","city":"Banjarmasin","placeid":"ChIJtXm_lVYh5C0R1fD7-pXXR2I","icon":null},
            {"name":"Q-Mall","content":"Q-mall Banjar Baru. Jl Ahmad yani KM36.8 lt GF & UG Unit 2 Banjar Baru - Kalsel","latitude":"-3.439150","longitude":"114.849898","city":"Banjarmasin","placeid":"ChIJ-8FVc-gj5C0RO2QK6xqHeDo","icon":null},
            {"name":"Citra Plaza","content":"Citra Plaza, Jl. Pangeran Antasari No.1","latitude":"0.510343","longitude":"101.446957","city":"Pekanbaru","placeid":"ChIJVVVVVVWp1TERpZhKGUZngVs","icon":null},
            {"name":"Mal Pekan Baru","content":"Mal Pekan Baru, Jl. Jend. Sudirman, Pekanbaru","latitude":"0.531974","longitude":"101.448476","city":"Pekanbaru","placeid":"ChIJw9WOUs6w0jERgB8zH1GoMHE","icon":null},
            {"name":"Ciputra Seraya","content":"Ciputra seraya Lt.1, Jl. Riau No. 58 ","latitude":"0.535607","longitude":"101.430338","city":"Pekanbaru","icon":null},
            {"name":"Plaza Suzuya","content":"Plaza Suzuya, Jl. Jend. Sudirman - Bagan Batu","latitude":"1.710391","longitude":"100.396369","city":"Bagan Batu","placeid":"ChIJ6WQFNPQ82TERDAIeVWJsZuI","icon":null},
            {"name":"Balikpapan Superblock","content":"Jl. Jend. Sudirman,Komp.Balikpapan Superblock","latitude":"-1.273128","longitude":"116.859455","city":"Balikpapan","placeid":"ChIJ_____2NG8S0Rg8Z1-pNM4n0","icon":null},
            {"name":"Pasar 45","content":"Jl. Jend. Sudirman No. 15 / Pasar 45","latitude":"1.490514","longitude":"124.840862","city":"Manado","placeid":"ChIJRXlKKkJ1hzIRNkXfMV8Oy_Y","icon":null},
            {"name":"Megamall Menado","content":"Megamal Manado, Lt.1 Unit GF. 05, Kawasan Megamas-Manado","latitude":"1.484362","longitude":"124.834494","city":"Manado","placeid":"ChIJTRa2SN90hzIRcCopOoIZqGI","icon":null},
            {"name":"Citymart Bitung","content":"Citymart Bitung, Jl. Yos Sudarso No.6A - Bitung Sul Sel","latitude":"1.443215","longitude":"125.187656","city":"Manado","placeid":"ChIJpy5bKZIBhzIRa91KUU9I3hU","icon":null},
            {"name":"Paris Dept Store","content":"Paris Dept. Store, Jl. A. Dampe Dolot No.1, Kotamobagu, SulUt","latitude":"0.738886","longitude":"124.308877","city":"Manado","placeid":"ChIJaw3axtA8fjIRmfgiR7Hy0m0","icon":null},
            {"name":"Sakura Mart","content":"Sakura Mart, Jl. Trans Sulawesi Lt 3, (Minahasa),Amurang - SulUt","latitude":"1.183636","longitude":"124.571799","city":"Manado","placeid":"ChIJQ7U-I7R2hzIRiPEBO2_w0Iw","icon":null},
            {"name":"IT Center","content":"IT Center Jl. Pierre Tendean Boulevard Wenang Utara - Manado","latitude":"1.486834","longitude":"124.836904","city":"Manado","placeid":"ChIJNyCL0xB1hzIRu0vaj4YouwE","icon":null},
        ];


    //loop for marker for each location
    for(var i=0; i < total_marker.length; i++)
    {
        var temp_marker = new google.maps.Marker({
            position: {lat: parseFloat(total_marker[i].latitude), lng: parseFloat(total_marker[i].longitude)},
            map: map,
            icon: baseUrl+'/assets/images/contact-us/marker.png',
            title: total_marker[i].name
        });

        (function(temp_marker, i) {
            // add click event for every marker
            google.maps.event.addListener(temp_marker, 'click', function() {
                //close another infowindow on marker click
                closeInfos();

                infowindow = new google.maps.InfoWindow({
                    content: total_marker[i].name + '<br/>' + total_marker[i].content + "<br/><a class='infowindow-link' href='https://www.google.com/maps/dir/?api=1&destination="+ total_marker[i].name +"&destination_place_id="+total_marker[i].placeid+"' target='blank'>View on Google Maps</a>"
                });
                infowindow.open(map, temp_marker);

                //keep the handle, in order to close it on next click event
                infos[0]=infowindow;
            });
        })(temp_marker, i);

        markers.push(temp_marker);


//        emptySearchList();
        //generate lists
        $(".search-list").append("<li><a href='https://www.google.com/maps/dir/?api=1&destination="+ total_marker[i].name +"&destination_place_id="+total_marker[i].placeid+"' target='blank'><p class='title-red'>"+ total_marker[i].name +"</p><p>"+ total_marker[i].content +"</p></a></li>");
    }
}

//function to close another infowindow
function closeInfos(){
   if(infos.length > 0){
      /* detach the info-window from the marker ... undocumented in the API docs */
      infos[0].set("marker", null);

      /* and close it */
      infos[0].close();

      /* blank the array */
      infos.length = 0;
   }
}





//$('#submit-location-search').on('submit', function(event) {
//
//    event.preventDefault();
//    var geocoder = new google.maps.Geocoder();
//    geocodeAddress(geocoder, map);
//    deleteCurrentLocation();
//});
//
//function geocodeAddress(geocoder, resultsMap) {
//    var address = document.getElementById('location').value + ' '+ $('#state').val();
//    console.log(address);
//
//    geocoder.geocode({'address': address}, function(results, status) {
//        if (status === 'OK') {
//            resultsMap.setCenter(results[0].geometry.location);
//            temp_position = new google.maps.Marker({
//                map: resultsMap,
//                position: results[0].geometry.location
//            });
//
//            infowindow = new google.maps.InfoWindow({
//                content: address
//            });
//            infowindow.open(map, temp_position);
//
//            markers.push(temp_position);
//        } else {
//            alert('Your location did not found. Please insert other location');
//        }
//    });
//}
//
//function deleteCurrentLocation() {
//    markers[markers.length-1].setMap(null);
//}



//$('#submit-location-search').on('submit', function(event) {
$('#state').on('change', function(event) {
    event.preventDefault();
    deleteMarkers();
    resetBounds();

    var city = $('#state').val();
    generateMarker(city);
});

function generateMarker(city) {
    emptySearchList();

    //loop for marker for each location
    if(city == 'All Location') {
        var filtered = total_marker;
    }
    else {
        var filtered = total_marker.filter(function(item){
            return item.city==city;
        });
    }

    for (var i = 0; i < filtered.length; i++) {
        var temp_marker = new google.maps.Marker({
            position: {lat: parseFloat(filtered[i].latitude), lng: parseFloat(filtered[i].longitude)},
            map: map,
            icon: baseUrl+'/assets/images/contact-us/marker.png',
            title: filtered[i].name
        });

        //extend the bounds to include each marker's position
        bounds.extend(temp_marker.position);

        (function(temp_marker, i) {
            // add click event for every marker
            google.maps.event.addListener(temp_marker, 'click', function() {
                //close another infowindow on marker click
                closeInfos();

                infowindow = new google.maps.InfoWindow({
                    content: filtered[i].name + '<br/>' + filtered[i].content + "<br/><a class='infowindow-link' href='https://www.google.com/maps/dir/?api=1&destination="+ filtered[i].name +"&destination_place_id="+filtered[i].placeid+"' target='blank'>View on Google Maps</a>"
                });
                infowindow.open(map, temp_marker);

                //keep the handle, in order to close it on next click event
                infos[0]=infowindow;
            });
        })(temp_marker, i);

        markers.push(temp_marker);


        $(".search-list").append("<li><a href='https://www.google.com/maps/dir/?api=1&destination="+ filtered[i].name +"&destination_place_id="+filtered[i].placeid+"' target='blank'><p class='title-red'>"+ filtered[i].name +"</p><p>"+ filtered[i].content +"</p></a></li>");
    }

    map.fitBounds(bounds)
}


function emptySearchList() {
    $(".search-list").empty();
}

// Sets the map on all markers in the array.
function setMapOnAll(map) {
    for (var i = 0; i < markers.length; i++) {
      markers[i].setMap(map);
    }
}

// Removes the markers from the map, but keeps them in the array.
function clearMarkers() {
    setMapOnAll(null);
}

function deleteMarkers() {
    clearMarkers();
    markers = [];
}

function resetBounds() {
    bounds = new google.maps.LatLngBounds(null);
}
