<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/blueimp-gallery.min.css">
    <title> dcc</title>
</head>
<body>
    <div id="links">
    <a href="https://dummyimage.com/600x400/000/fff" title="Banana">
        <img src="https://dummyimage.com/75x75/000/fffg" alt="Banana">
    </a>
    <a href="https://dummyimage.com/600x400/000/fff" title="Apple">
        <img src="https://dummyimage.com/75x75/000/fff" alt="Apple">
    </a>
    <a href="https://dummyimage.com/600x400/000/fff" title="Orange">
        <img src="https://dummyimage.com/75x75/000/fff" alt="Orange">
    </a>
</div>
<!-- The Gallery as lightbox dialog, should be a child element of the document body -->

<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>
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
</body>
</html>