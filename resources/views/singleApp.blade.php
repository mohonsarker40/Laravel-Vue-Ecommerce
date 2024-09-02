{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--    <head>--}}
{{--        <meta charset="utf-8">--}}
{{--        <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--        <title>Laravel vue </title>--}}

{{--        <!-- Fonts -->--}}
{{--        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">--}}

{{--    </head> --}}
{{--    <body>--}}
{{--    <div id="app">--}}
{{--        <app></app>--}}
{{--    </div>--}}
{{--    --}}
{{--    --}}
{{--    <script src="{{asset('js/app.js')}}"></script>--}}
{{--    </body>--}}
{{--</html>--}}


        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>LaravelVue -Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
{{--topNav--}}
<div id="app">
    <app/>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('assets/js/scripts.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('assets/assets/demo/chart-area-demo.js') }}"></script>
<script src="{{ asset('assets/assets/demo/chart-bar-demo.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('assets/js/datatables-simple-demo.js') }}"></script>
<script>window.baseUrl = '{{url('/')}}';</script>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>

<script>
    import App from "../js/App";
    export default {
        components: {App}
    }
</script>