<!DOCTYPE html>
<html>

<head>
    <title>Laravel Crop Image Before Upload Example</title>
    <meta name="_token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
    body {
        background: #f7fbf8;
    }

    h1 {
        font-weight: bold;
        font-size: 23px;
    }

    img {
        display: block;
        max-width: 100%;
    }

    input {
        margin-top: 40px;
    }

    .section {
        background: #fff;
        padding: 10px;
    }

    .modal-lg {
        max-width: 1000px !important;
    }
    .section-wrap {
        margin-top: 10px;
        cursor: pointer;
        padding: 10px;
    }
    .section-wrap:hover {
        padding: 10px;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
    }
</style>

<body>

    <div class="container">
        <a href="{{ route('crop-image-upload') }}">◀</a>
        <div class="row">
            @foreach ($medias as $media)
                <div class="col-md-2 section-wrap">
                    <img class="img-fluid section" src="{{ asset('uploads/'. $media->name) }}" alt="">
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
