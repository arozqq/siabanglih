@include('layouts.partials.header')
<div class="container-xxl position-relative p-0">
    @include('layouts.partials.navbar')
    
    <div class="container-xxl konten-section"  style="">
        <div class="container px-lg-5">
            @yield('content')
        </div>
    </div>

</div>
@include('layouts.partials.footer')