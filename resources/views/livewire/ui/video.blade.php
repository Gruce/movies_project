<div>
    <link href="https://vjs.zencdn.net/7.18.1/video-js.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/videojs-seek-buttons/dist/videojs-seek-buttons.css" rel="stylesheet" />

    <style>
        .vjs-matrix.video-js {
            /* color: #ff4343; */
        }

        /* Change the border of the big play button. */
        .vjs-matrix .vjs-big-play-button {
            border-color: #ff4343;
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .vjs-matrix {
            border-radius: 10px;
        }

        .vjs-matrix video {
            border-radius: 10px;
        }

        .vjs-matrix .vjs-poster {
            border-radius: 10px;
        }

        /* Change the color of various "bars". */
        .vjs-matrix .vjs-volume-level,
        .vjs-matrix .vjs-play-progress,
        .vjs-matrix .vjs-slider-bar {
            background: #ff4343;
        }

    </style>

    <video id="my-video" class="video-js vjs-matrix" width="640" height="264" data-setup="{}">
        {{-- <track src="http://example.com/oceans.vtt" kind="captions" srclang="en" label="English"> --}}
        {{-- <track src="http://example.com/oceans.vtt" kind="captions" srclang="ar" label="Arabic"> --}}
    </video>


    <script src="https://vjs.zencdn.net/7.18.1/video.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/videojs-seek-buttons/dist/videojs-seek-buttons.min.js"></script>

    <script>
        var player = videojs('my-video', {
            fluid: true,
            controls: true,
            autoplay: false,
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
            aspectRatio: '16:9',
        });

        player.seekButtons({
            forward: 30,
            back: 10
        });
    </script>
</div>
