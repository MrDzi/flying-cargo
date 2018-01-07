function initMap() {
	var uluru = { lat: 44.8660358, lng: 20.3441814 };
	var map = new google.maps.Map(document.getElementById("map"), {
		zoom: 14,
		center: uluru
	});
	var marker = new google.maps.Marker({
		position: uluru,
		map: map
	});
}
