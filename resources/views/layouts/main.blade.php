<!DOCTYPE html>
<html lang="en">
    <head>
        @include('..layouts.main._head')

        <title>Užduotis @yield('title')</title>
    </head>

    <body>

        <div class="container" style="margin-top: 100px">
            <div class="row">
                <div class="col-md-3 panel sidebar">
                    @yield('sidebar')
                </div>
                <div class="col-md-9" style="padding-left: 30px;">
                    @yield('content')
                </div>
            </divc>

        </div>

        @yield('scripts')

    </body>
</html>
