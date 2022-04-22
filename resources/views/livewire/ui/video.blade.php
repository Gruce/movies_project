<div>
    <link href="https://vjs.zencdn.net/7.18.1/video-js.css" rel="stylesheet" />

    <video id="my-video" class="video-js" width="640" height="264" data-setup="{}">
        <track src="http://example.com/oceans.vtt" kind="captions" srclang="en" label="English">
        <track src="http://example.com/oceans.vtt" kind="captions" srclang="ar" label="Arabic">
    </video>


    <script src="https://vjs.zencdn.net/7.18.1/video.min.js"></script>

    <script>
        var player = videojs('my-video', {
            fluid: true,
            controls: true,
            autoplay: true,
            preload: 'auto',
            playbackRates: [0.7, 1.0, 1.5, 2.0],
            sources: [{
                src: '{{ asset('storage/' . $file->path) }}',
                type: 'video/mp4'
            }],
            poster: '{{ $file->fileable->slider_url }}',
            language: '{{ app()->getLocale() }}',
            textTrackDisplay: {
                mode: 'hidden'
            },
            notSupportedMessage: 'Your browser is not supported',
            responsive: true,
        });
    </script>
</div>
