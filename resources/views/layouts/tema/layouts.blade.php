@include('layouts.tema.inc.header')
@include('layouts.tema.inc.navbar')
<div class="container py-4">
    <div class="row">
        @include('layouts.tema.inc.left-box')
        @yield('content')
        <div class="col-3">
           @include('layouts.tema.inc.search-box')
           @include('layouts.tema.inc.whofollow')
        </div>
    </div>
</div>
@include('layouts.tema.inc.footer')
