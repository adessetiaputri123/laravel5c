<!doctype html>
<html lang="en">
@include('layouts.components.head')
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">
        @include('layouts.components.nav')
        @include('layouts.components.sidebar')

        <main class="app-main">
            @include('layouts.components.breadcrumb')

            <div class="app-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </main>

        @include('layouts.components.footer')
    </div>

    @include('layouts.components.scripts')
</body>
</html>
