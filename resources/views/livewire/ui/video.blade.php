<div>
    <link href="https://vjs.zencdn.net/7.18.1/video-js.css" rel="stylesheet" />

    <video id="my-video" class="video-js" controls preload="auto" width="640" height="264"
        poster="{{ $file->fileable->cover_url }}" data-setup="{}">
        <source src="{{ asset('storage/' . $file->path) }}" type="video/mp4" />
        {{-- <source src="MY_VIDEO.webm" type="video/webm" /> --}}
        <p class="vjs-no-js">
            To view this video please enable JavaScript, and consider upgrading to a
            web browser that
            <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
        </p>
    </video>


    <script src="https://vjs.zencdn.net/7.18.1/video.min.js"></script>
</div>
