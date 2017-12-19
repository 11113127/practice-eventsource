<!DOCTYPE html>
<html>
  <head>
    <title>EventSource</title>
  </head>
  <body>
    <h2>Hello</h2>
    <div id="result"></div>

    <script>
      if(typeof(EventSource) !== "undefined") {
        var source = new EventSource("service.php");

        source.onmessage = function(event) {
          document.getElementById("result").innerHTML += "<div>"+JSON.parse(event.data).HTML+"</div>";
          console.log(JSON.parse(event.data).HTML);
        };

        source.addEventListener("CSS", function(event) {
          document.getElementById("result").innerHTML += "<div>"+JSON.parse(event.data).CSS+"</div>";
          console.log(JSON.parse(event.data).CSS);
        });

        source.addEventListener("JS", function(event) {
          document.getElementById("result").innerHTML += "<div>"+JSON.parse(event.data).JS+"</div>";
          console.log(JSON.parse(event.data).JS);
        });

        source.addEventListener("Format", function(event) {
          document.getElementById("result").innerHTML += "<div>"+JSON.parse(event.data).XML+" and "+JSON.parse(event.data).JSON+"</div>";
          console.log(JSON.parse(event.data).XML+" and "+JSON.parse(event.data).JSON);
        });
      } else {
        document.getElementById("result").innerHTML = "瀏覽器未支援Event Source";
      }
    </script>
  </body>
</html>