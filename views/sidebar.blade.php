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
/*
    .layout.closed_sidebar .sidebar [class*='paksuco-menu'] {
        padding: 0;
    }

    .layout.closed_sidebar .sidebar [class*='paksuco-menu']>ul>li>a>div>span {
        display: none;
    }

    .layout.closed_sidebar .sidebar [class*='paksuco-menu']>ul>li>a>div>i {
        font-size: 26px;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .layout.closed_sidebar .sidebar [class*='paksuco-menu']>ul>li>a>div {
        line-height: 1;
        font-size: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 5px;
    }

    .layout.closed_sidebar .sidebar [class*='paksuco-menu']>ul>li>a>div:after {
        content: "";
        display: block;
        padding-bottom: 100%;
    }

    .layout.closed_sidebar .sidebar [class*='paksuco-menu']>ul>li>a>i {
        position: absolute;
        top: 100%;
        left: 100%;
        display: flex;
        align-items: end;
        padding: 0;
        transform: rotateZ(-45deg);
        color: gold;
    }

    .layout.closed_sidebar .sidebar [class*='paksuco-menu']>ul>li>a {
        padding: 0 !important;
    }

    .layout.closed_sidebar .sidebar [class*='paksuco-menu']>ul>li ul {
        position: absolute;
        top: 0;
        left: 100%;
        overflow: visible;
        border-radius: 6px;
        background: transparent !important;
        box-shadow: 0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06);
        border: none;
    }

    .layout.closed_sidebar .sidebar [class*='paksuco-menu']>ul>li ul li {
        border: none;
        background: white;
        border-radius: 0;
    }
    .layout.closed_sidebar .sidebar [class*='paksuco-menu']>ul>li ul li:first-child {
        border-radius: 6px 6px 0 0 !important;
    }
    .layout.closed_sidebar .sidebar [class*='paksuco-menu']>ul>li ul li:last-child {
        border-radius: 0 0 6px 6px !important;
    }*/
</style>
