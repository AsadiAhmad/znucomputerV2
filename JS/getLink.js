document.querySelectorAll('.part').forEach(function(div) {
    div.addEventListener('click', function() {
        var lesson = div.getAttribute('data-lesson');
        var section = div.getAttribute('data-section');
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var videoLink = xhr.responseText;
                var videoPlayer = document.getElementById('video');
                videoPlayer.setAttribute('src', videoLink);
                videoPlayer.load();
                videoPlayer.play();
            }
        };
        xhr.open('GET', '/PHP/getLink.php?lesson=' + lesson + '&section=' + section, true);
        xhr.send();
    });
});