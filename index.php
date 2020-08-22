

<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="./main.js"></script>
<script type="text/javascript" src="./llqrcode.js"></script>

<div class="heading">
    <form action="generate.php" method="post">
        <input type="text" name="text" id="generate-input" placeholder="Generate QR code">
        <button type="submit" id="send-generate" >Generate</button>
    </form>
</div>

<div class="cam" >
    <div style="display:block" id="result">

    </div>
    <div class="selector" style="background:#000" id="webcamimg" onclick="setwebcam()" align="left" >

    </div>
    <div class="selector" id="qrimg" onclick="setimg()" align="right" >

    </div>
    <div id="mainbody">
        <div id="outdiv">

        </div>
    </div>
    <canvas id="qr-canvas" width="800" height="600">

    </canvas>
    <div id="scan-loading">
        <p>Show Qr Code to camera</p>
    </div>
</div>

<script type="text/javascript">load();</script>
<script src="./jquery-1.11.2.min.js"></script>
