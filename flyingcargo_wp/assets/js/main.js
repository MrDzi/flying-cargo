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

$(document).ready(function() {

	$('#trackingNumbersButton').on('click', trackPackages);
    $('#trackingNumbers').on('keyup', function(event) {
        event.which === 13 && trackPackages();
    });

    function trackPackages() {
        var trackingValue = $('#trackingNumbers').val();
        window.open("https://www.fedex.com/apps/fedextrack/index.html?cntry_code=rs&tracknumbers=" + trackingValue, "_blank");
    }

});
