<div class="flex flex-wrap">
    <div class="w-full">
        @include("paksuco-backend::header")
    </div>
    <div class="w-12 lg:relative lg:block lg:w-1/5 xl:w-1/6 sidebar bg-gray-800">
        @include("paksuco-backend::sidebar")
    </div>
    <div class="lg:w-4/5 xl:w-5/6 content">
        @yield('body')
    </div>
</div>
