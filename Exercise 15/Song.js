
var availableTags = undefined;

function showAuto(value) {
    var param = "name=" + value;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "Song.php", true);
    xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            availableTags = this.responseText.split(",");
            console.log(this.responseText.split(","));
            $("#myInput").autocomplete({
                source: function(request, response) {
                    var results = $.ui.autocomplete.filter(availableTags, request.term);
                    response(results.slice(0, 10));
                }
            });
        }
    };
    xmlhttp.send(param);
}

function hackAutocomplete(){

    $.extend($.ui.autocomplete, {
        filter: function(array, term){
            var matcher = new RegExp("^" + term, "i");

            return $.grep(array, function(value){
                return matcher.test(value.label || value.value || value);
            });
        }
    });
}

hackAutocomplete();