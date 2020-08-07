<nav x-show="open_sidebar">
@yield("sidebar")
</nav>
<nav x-show="!open_sidebar">
@yield("sidebar-alt")
</nav>

<style>
    .layout.closed_sidebar .sidebar,
    .layout.closed_sidebar .w-4 {
        width: auto !important;
    }
</style>
