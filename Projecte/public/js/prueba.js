/// YouTube Player API Reference for iframe Embeds ///
/// https://developers.google.com/youtube/iframe_api_reference ///
var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;
function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
        height: '720',
        width: '1280',
        videoId: 'M7lc1UVf-VE',
        playerVars: {
            'autoplay': 1
        },
        events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
        }
    });
}

function onPlayerReady(event) {
    event.target.playVideo();
}

var done = false;
function onPlayerStateChange(event) {
    if (event.data == YT.PlayerState.BUFFERING) {
        console.log(player.getCurrentTime());
    }
    if (event.data == YT.PlayerState.PLAYING && !done) {
        done = true;
    }
}
//////////////////////////////////////////////////

let $form = $("#searchVideo");

$form.submit(function(e) {
    e.preventDefault();

    let search = $form.children("#searchBar").val();

    let key = "AIzaSyBsWcqtCv82R3xB1FjcCw1SSDE_avou5IE";
    $.get("https://www.googleapis.com/youtube/v3/search?part=snippet&maxResults=20&q=" + search + "&type=video&key=" + key, function(videos) {
        $("#videos").text("");
        videos.items.forEach(video => {
            let $thumbnail = $("<img>").attr("src", video.snippet.thumbnails.medium.url).attr("alt", video.snippet.title);
            $thumbnail.click(function() {
                player.loadVideoById(video.id.videoId, 0, "large")
            });

            $("#videos").append($thumbnail);
        });
    });
});

