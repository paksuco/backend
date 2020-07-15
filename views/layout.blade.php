<div class="flex flex-wrap">
    <div class="w-full">
        @include("paksuco-backend::header")
    </div>
    <div class="w-1/5 sidebar bg-gray-800">
        @include("paksuco-backend::sidebar")
    </div>
    <div class="w-4/5 content">
        @yield('body')
    </div>
</div>
