<div class="flex flex-wrap layout" x-data='{open_sidebar: false}' :class="{ 'open_sidebar': open_sidebar, 'closed_sidebar': !open_sidebar }">
    <div class="w-full z-20 bg-white shadow-md">
        @include("paksuco-backend::header")
    </div>
    <div class="w-full relative flex z-10">
        <div :class="{ 'block': open_sidebar, 'hidden lg:block': !open_sidebar }"
             class="absolute inset-0 bg-cool-gray-800 transform shadow lg:relative lg:translate-x-0 lg:w-1/5 xl:w-1/6 sidebar z-10">
            @include("paksuco-backend::sidebar")
        </div>
        <div class="w-full content z-0 bg-cool-gray-100" x-cloak :class="{'lg:w-4/5 xl:w-5/6': open_sidebar}">
            <div class="w-full p-4">
                <div class="w-full px-5 py-3 text-xs bg-cool-gray-50 rounded shadow text-gray-900">
                    <b>Home</b> &raquo; <b>Bread</b> &raquo; <b>Crumbs</b> &raquo; <a href="#">Here</a>
                </div>
            </div>
            <div class="flex flex-col min-h-screen p-4">@yield('body')</div>
            <footer class="p-4 text-right text-sm">Created by Taha PAKSU
                ©{{\Carbon\Carbon::now()->year}}</footer>
        </div>
    </div>
</div>
