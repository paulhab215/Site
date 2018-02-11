// SERVICES
weatherApp.service('cityService', function() {
    this.city = "78727";
});

weatherApp.service('weatherService', ['$resource', function($resource) {
   
    this.GetWeather = function(city, days) {
        var weatherAPI = $resource("http://api.openweathermap.org/data/2.5/forecast/daily", { callback: "JSON_CALLBACK" }, { get: { method: "JSONP" }});
    
    key = '90672998528bf2b76431cb704b8e1533';

        weatherResult = weatherAPI.get({ q: city, cnt: days, APPID: key});
        console.log(weatherResult);
        return weatherResult
    };
    
}]);