// Find all YouTube or Vimeo videos
var $allVideos = $("iframe[src^='http://player.vimeo.com'], iframe[src^='http://www.youtube.com']"),

// The element that is fluid width
    $fluidEl = $(".fullproject");

// Figure out and save aspect ratio for each video
$allVideos.each(function() {
    $(this)
        .data('aspectRatio', this.height / this.width)

        // and remove the hard coded width/height
        .removeAttr('height')
        .removeAttr('width');
});

// When the window is resized
$(window).resize(function() {

    //if the window size hits the xlarge layout, video should stay at 1000px
    //otherwise 90%
    if ($(window).width() >= 1520){
        var newWidth = 1000;
    } else {
        var newWidth = $fluidEl.width()*.9;
    }

    // Resize all videos according to their own aspect ratio
    $allVideos.each(function() {

        var $el = $(this);
        $el

            .width(newWidth)
            .height(newWidth * $el.data('aspectRatio'));

    });

// run resize function to fix all videos on page load
}).resize();