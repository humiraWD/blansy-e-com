<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

    <!-- ! Hide app brand if navbar-full -->
    <div class="app-brand demo">
        <a href="{{ url('/') }}" class="app-brand-link">
            <span class="app-brand-logo demo">
                @include('_partials.macros', ['width' => 25, 'withbg' => 'var(--bs-primary)'])
            </span>
            <span class="app-brand-text demo menu-text fw-bold ms-2" style="text-transform: uppercase;">Shopkorea</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    @if (auth()->user()->type === 'admin')
        @include('backend.admin.menu')
    @elseif (auth()->user()->type === 'user')
        @include('backend.user.menu')
    @elseif (auth()->user()->type === 'affiliate')
        @include('backend.affiliate.menu')
    @endif

</aside>
