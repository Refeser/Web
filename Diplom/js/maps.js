function initialize() {     
	var myLatlng = new google.maps.LatLng(-34.397, 150.644);
	var myOptions = {
		zoom: 8,
		center: myLatlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	}
	var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions); 
}

var marker = new google.maps.Marker({
	position: myLatlng,
	map: map,
	title:"Отсюда" 
});

var contentString = '<div id="content">Тут всё то про что должно быть рассказано</div>';
var infowindow = new google.maps.InfoWindow({
	content: contentString
});
var marker = new google.maps.Marker({
	position: myLatlng,
	map: map,
	title: 'Uluru (Ayers Rock)'
});
google.maps.event.addListener(marker, 'click', function() {
	infowindow.open(map,marker);
});

google.maps.event.addListener(marker, 'click', function() {   infowindow.open(map,marker); });

