<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kadilab cam</title>
    <style>
           
            #videoElement {
                width: 730px;
                height: 550px;
                background-color: #666;
                margin-left : 17%;
            }
</style>
</head>
<body>

      <video autoplay="true" id="videoElement"></video>
      

      <script>
        var video = document.querySelector("#videoElement");

        if (navigator.mediaDevices.getUserMedia) {
        navigator.mediaDevices.getUserMedia({ video: true })
            .then(function (stream) {
            video.srcObject = stream;
            })
            .catch(function (err0r) {
            console.log("Something went wrong!");
            });
    }    
</script>
</body>
</html>