<script>
var min_zoom = 3,
max_zoom = 19;

//Set map bounds -- are in which map can be panned
var bounds_point_A = new Array( 40.4312255099341,-122.4269664),
bounds_point_B = new Array(40.69107814,-122.2857761);


// select MIN(stop_lat),MIN(stop_lon) FROM stop_times inner join stops on stop_times.stop_id = stops.stop_id inner join trips on stop_times.trip_id = trips.trip_id WHERE trips.agency_id = 25 and trips.route_id != 161;

//40.4312255099341
//-122.4269664

//select max(stop_lat),max(stop_lon) FROM stop_times inner join stops on stop_times.stop_id = stops.stop_id inner join trips on stop_times.trip_id = trips.trip_id WHERE trips.agency_id = 25 and trips.route_id != 161;
// 40.69107814,-122.2857761

<?php

$agency_id = Array(25);

$routes_array = array(151,1886,1887,153,154,155,1888,1889,157,158,159,160,1093,1885,161);

$default_routes_bounds = array(151,1886,1887,153,154,155,1888,1889,157,158,159,160,1093,1885,161);

?>

var map_id_base = 'trilliumtransit.11e2641a',
map_id_labels = 'trilliumtransit.d575ec4e',
attribution = 'Street data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> (and) contributors, CC-BY-SA <a href="https://www.mapbox.com/map-feedback/" >Improve this map</a></div>',
default_icon_color = '575757';

// Provide your access token
var accessToken = 'pk.eyJ1IjoidHJpbGxpdW10cmFuc2l0IiwiYSI6ImVUQ2x0blUifQ.2-Z9TGHmyjRzy5GC1J9BTw';

// development
// var map_app_base = 'http://localhost:80/sctransit.com/wp-content/themes/sctransit/map/';
// var map_app_base = 'http://dev.sctransit.com/wp-content/themes/sctransit/map/';
var map_app_base = 'http://redding.map.trilliumtransit.com/';

// remote scripts
var remote_base = 'http://applications.trilliumtransit.com/GTFSMap/';
var gtfs_api_feed_name = 'redding-ca-us';

</script>