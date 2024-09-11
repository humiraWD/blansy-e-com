<ul class="menu-inner py-1">
    <li class="menu-item ">
        <a href="{{ url('/admin/dashboard') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div>Admin Dashboard</div>
        </a>
    </li>
    <li @class([
        'menu-item ',
        'active open' => Route::is([
            'admin.units.*',
            'admin.categories.*',
            'admin.brands.*',
            'admin.products.*',
        ]),
    ])>
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-detail"></i>
            <div>Manage Products</div>
        </a>
        <ul class="menu-sub">
            <li @class(['menu-item ', 'active' => Route::is('admin.units.*')])>
                <a href="{{ url('admin/units') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div>Unit</div>
                </a>
            </li>
            <li @class(['menu-item ', 'active' => Route::is('admin.roles.*')])>
                <a href="{{ url('admin/roles') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div>Role</div>
                </a>
            </li>
            <li @class(['menu-item ', 'active' => Route::is('admin.colors.*')])>
                <a href="{{ url('admin/colors') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div>Colors</div>
                </a>
            </li>
            <li @class(['menu-item ', 'active' => Route::is('admin.sizes.*')])>
                <a href="{{ url('admin/sizes') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div>sizes</div>
                </a>
            </li>
            <li @class(['menu-item ', 'active' => Route::is('admin.categories.*')])>
                <a href="{{ url('admin/categories') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div>Category</div>
                </a>
            </li>
            <li @class(['menu-item ', 'active' => Route::is('admin.brands.*')])>
                <a href="{{ url('admin/brands') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div>Brand</div>
                </a>
            </li>
            <li @class(['menu-item ', 'active' => Route::is('admin.products.*')])>
                <a href="{{ url('admin/products') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div>Product</div>
                </a>
            </li>
        </ul>
    </li>

    <li class="menu-item @if (request()->segment(2) === 'sliders') active open @endif">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-detail"></i>
            <div>Home page</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item @if (request()->segment(2) === 'sliders') active @endif">
                <a href="{{ route('admin.sliders.index') }}" class="menu-link">
                    <div>Sliders</div>
                </a>
            </li>
        </ul>
    </li>
</ul>
