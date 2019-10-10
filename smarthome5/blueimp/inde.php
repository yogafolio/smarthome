<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/blueimp-gallery.min.css">
	<title></title>
</head>
<body>
<!-- The Gallery as lightbox dialog, should be a child element of the document body -->









<script src="js/blueimp-gallery.min.js"></script>
<script>
document.getElementById('links').onclick = function (event) {
    event = event || window.event;
    var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link, event: event},
        links = this.getElementsByTagName('a');
    blueimp.Gallery(links, options);
};
</script>
<div id="links">
    <a href="http://192.168.1.9/galeri/test/thumb/DSC_0021.jpg" title="Banana">
        <img src="http://192.168.1.9/galeri/test/thumb/DSC_0021.jpg" alt="Banana" style="width: 200px;height: 200px;"">
    </a>
    <a href="http://192.168.1.9/galeri/test/thumb/DSC_0021.jpg" title="Apple">
        <img src="http://192.168.1.9/galeri/test/thumb/DSC_0020_th.jpg" alt="Apple" style="width: 200px;height: 200px;"aavav>
    </a>
    <a href="http://192.168.1.9/galeri/test/thumb/DSC_0020.jpg" title="Orange">
        <img src="http://192.168.1.9/galeri/test/thumb/DSC_0020.jpg" alt="Orange" style="width: 200px;height: 200px;">
    </a>
</div>
<div id="blueimp-gallery" class="blueimp-gallery">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>
</body>
</html>