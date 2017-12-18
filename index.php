<!DOCTYPE html>
<html>
<head>
	<title>EventSource</title>
</head>
<body>
    <h3>Hello</h3>
    <div id="result"></div>

    <script>
        if(typeof(EventSource) !== "undefined") {
            var source = new EventSource("service.php");
            source.onmessage = function(event) {
                document.getElementById("result").innerHTML += "<div>"+JSON.parse(event.data).hello+"</div>";
                console.log(JSON.parse(event.data).hello)
            };
        } else {
            document.getElementById("result").innerHTML = "瀏覽器未支援Event Source";
        }
    </script>
</body>
</html>