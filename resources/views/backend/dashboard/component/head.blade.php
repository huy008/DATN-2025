<base href="{{ config('app.url') }}">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>INSPINIA | Dashboard v.2</title>
<link href="http://127.0.0.1:8000/backend/css/bootstrap.min.css" rel="stylesheet">
<link href="http://127.0.0.1:8000/backend/font-awesome/css/font-awesome.css" rel="stylesheet">
<link href="http://127.0.0.1:8000/backend/css/animate.css" rel="stylesheet">
<link href="http://127.0.0.1:8000/backend/plugins/jquery-ui.css" rel="stylesheet">
@if (isset($config['css']) && is_array($config['css']))
    @foreach ($config['css'] as $key => $val)
        {!! '<link rel="stylesheet" href="' . $val . '"></script>' !!}
    @endforeach
@endif

<link href="http://127.0.0.1:8000/backend/css/style.css" rel="stylesheet">
<link href="http://127.0.0.1:8000/backend/css/customize.css" rel="stylesheet">
<script src="http://127.0.0.1:8000/backend/js/jquery-3.1.1.min.js"></script>
<script>
    var BASE_URL = '{{ config('app.url') }}'
    var SUFFIX = '{{ config('apps.general.suffix') }}'
</script>
