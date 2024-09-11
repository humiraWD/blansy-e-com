{{-- Route::group(['prefix' => 'theme', 'as' => 'theme.'], function () {
  Route::get('/cards-basic', [CardBasic::class, 'index'])->name('cards-basic');
  Route::get('/analytics', [Analytics::class, 'index'])->name('analytics');
  Route::get('/affiliate-register', [AffiliateAuthController::class, 'index'])->name('affiliate-register');
  Route::get('/perfect-scrollbar', [PerfectScrollbar::class, 'index'])->name('PerfectScrollbar');
  Route::get('/text-devider', [TextDivider::class, 'index'])->name('text-devider');
  Route::get('/basic-input', [BasicInput::class, 'index'])->name('basic-input');
  Route::get('/input-groups', [InputGroups::class, 'index'])->name('input-groups');
  Route::get('/horizontal-form', [HorizontalForm::class, 'index'])->name('horizontal-form');
  Route::get('/vertical-form', [VerticalForm::class, 'index'])->name('vertical-form');
  Route::get('/boxicons', [Boxicons::class, 'index'])->name('boxicons');
  Route::get('/blank', [Blank::class, 'index'])->name('blank');
  Route::get('/container', [Container::class, 'container'])->name('container');
  Route::get('/fluid', [Fluid::class, 'fluid'])->name('fluid');
  Route::get('/without-menu', [WithoutMenu::class, 'withoutMenu'])->name('without-menu');
  Route::get('/without-navbar', [WithoutNavbar::class, 'withoutNavbar'])->name('without-navbar');
  Route::get('/account-settings-account', [AccountSettingsAccount::class, 'index'])->name('account-settings-account');
  Route::get('/account-settings-connections', [AccountSettingsConnections::class, 'index'])->name('account-settings-connections');
  Route::get('/account-settings-notifications', [AccountSettingsNotifications::class, 'index'])->name('account-settings-notifications');
  Route::get('/misc-error', [MiscError::class, 'index'])->name('misc-error');
  Route::get('/misc-under-maintenance', [MiscUnderMaintenance::class, 'index'])->name('misc-under-maintenance');
  Route::get('/basic', [Basic::class, 'index'])->name('basic');
  Route::get('/accordion', [Accordion::class, 'index'])->name('accordion');
  Route::get('/alerts', [Alerts::class, 'index'])->name('alerts');
  Route::get('/badges', [Badges::class, 'index'])->name('badges');
  Route::get('/buttons', [Buttons::class, 'index'])->name('buttons');
  Route::get('/carousel', [Carousel::class, 'index'])->name('carousel');
  Route::get('/collapse', [Collapse::class, 'index'])->name('collapse');
  Route::get('/dropdowns', [Dropdowns::class, 'index'])->name('dropdowns');
  Route::get('/footer', [Footer::class, 'index'])->name('footer');
  Route::get('/list-groups', [ListGroups::class, 'index'])->name('list-groups');
  Route::get('/modals', [Modals::class, 'index'])->name('modals');
  Route::get('/navbar', [Navbar::class, 'index'])->name('navbar');
  Route::get('/offcanvas', [Offcanvas::class, 'index'])->name('offcanvas');
  Route::get('/pagination-breadcrumbs', [PaginationBreadcrumbs::class, 'index'])->name('pagination-breadcrumbs');
  Route::get('/spinners', [Spinners::class, 'index'])->name('spinners');
  Route::get('/progress', [Progress::class, 'index'])->name('progress');
  Route::get('/tabs-pills', [TabsPills::class, 'index'])->name('tabs-pills');
  Route::get('/toasts', [Toasts::class, 'index'])->name('toasts');
  Route::get('/tooltips-popovers', [TooltipsPopovers::class, 'index'])->name('tooltips-popovers');
  Route::get('/typography', [Typography::class, 'index'])->name('typography');
  Route::get('/table', [Basic::class, 'index'])->name('table-index');
}); --}}
<ul class="menu-inner py-1">
    <li class="menu-item ">
        <a href="{{ url('/theme/dashboard') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div>Theme Dashboard</div>
        </a>
    </li>

    <li class="menu-item @if (request()->segment(1) === 'analytics') active open @endif">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-detail"></i>
            <div>Configurations</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item @if (request()->segment(1) === 'analytics') active @endif">
                <a href="{{ route('theme.analytics') }}" class="menu-link">
                    <div>Sliders</div>
                </a>
            </li>
        </ul>
    </li>

    <li @class([
        'menu-item ',
        'active open' => Route::is([
            'theme.cards-basic.*',
            'theme.text-devider.*',
            'theme.basic.*',
            'theme.carousel.*',
        ]),
    ])>
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-detail"></i>
            <div>Manage carousel</div>
        </a>
        <ul class="menu-sub">
            <li @class(['menu-item ', 'active' => Route::is('theme.cards-basic.*')])>
                <a href="{{ url('theme/cards-basic') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div>Cards Basic</div>
                </a>
            </li>
            <li @class(['menu-item ', 'active' => Route::is('theme.text-devider.*')])>
                <a href="{{ url('theme/text-devider') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div>Text Devider</div>
                </a>
            </li>
            <li @class(['menu-item ', 'active' => Route::is('theme.basic.*')])>
                <a href="{{ url('theme/basic') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div>Basic</div>
                </a>
            </li>
            <li @class(['menu-item ', 'active' => Route::is('theme.carousel.*')])>
                <a href="{{ url('theme/carousel') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div>Carousal</div>
                </a>
            </li>
        </ul>
    </li>

    <li @class([
        'menu-item ',
        'active open' => Route::is([
            'theme.accordion.*',
            'theme.alerts.*',
            'theme.badges.*',
            'theme.buttons.*',
        ]),
    ])>
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-detail"></i>
            <div>Manage UI Elements</div>
        </a>
        <ul class="menu-sub">
            <li @class(['menu-item ', 'active' => Route::is('theme.accordion.*')])>
                <a href="{{ url('theme/accordion') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div>Accordion</div>
                </a>
            </li>
            <li @class(['menu-item ', 'active' => Route::is('theme.alerts.*')])>
                <a href="{{ url('theme/alerts') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div>Alerts</div>
                </a>
            </li>
            <li @class(['menu-item ', 'active' => Route::is('theme.badges.*')])>
                <a href="{{ url('theme/badges') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div>Badges</div>
                </a>
            </li>
            <li @class(['menu-item ', 'active' => Route::is('theme.buttons.*')])>
                <a href="{{ url('theme/buttons') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div>Buttons</div>
                </a>
            </li>

            <li @class(['menu-item ', 'active' => Route::is('theme.carousel.*')])>
                <a href="{{ url('theme/carousel') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div>Carousal</div>
                </a>
            </li>

            <li @class(['menu-item ', 'active' => Route::is('theme.collapse.*')])>
                <a href="{{ url('theme/collapse') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div>Collapse</div>
                </a>
            </li>

            <li @class(['menu-item ', 'active' => Route::is('theme.dropdowns.*')])>
                <a href="{{ url('theme/dropdowns') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div>Dropdowns</div>
                </a>
            </li>

            <li @class(['menu-item ', 'active' => Route::is('theme.footer.*')])>
                <a href="{{ url('theme/footer') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div>Footer</div>
                </a>

            </li>

            <li @class(['menu-item ', 'active' => Route::is('theme.list-groups.*')])>
                <a href="{{ url('theme/list-groups') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div>List Groups</div>
                </a>
            </li>

            <li @class(['menu-item ', 'active' => Route::is('theme.modals.*')])>
                <a href="{{ url('theme/modals') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div>Modals</div>
                </a>
            </li>

            <li @class(['menu-item ', 'active' => Route::is('theme.navbar.*')])>
                <a href="{{ url('theme/navbar') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div>Navbar</div>
                </a>
            </li>

            <li @class(['menu-item ', 'active' => Route::is('theme.offcanvas.*')])>
                <a href="{{ url('theme/offcanvas') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div>Offcanvas</div>
                </a>
            </li>

            <li @class([
                'menu-item ',
                'active' => Route::is('theme.pagination-breadcrumbs.*'),
            ])>
                <a href="{{ url('theme/pagination-breadcrumbs') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div>Pagination Breadcrumbs</div>
                </a>
            </li>

            <li @class(['menu-item ', 'active' => Route::is('theme.spinners.*')])>
                <a href="{{ url('theme/spinners') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div>Spinners</div>
                </a>
            </li>


            <li @class(['menu-item ', 'active' => Route::is('theme.progress.*')])>
                <a href="{{ url('theme/progress') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div>Progress</div>
                </a>
            </li>


            <li @class(['menu-item ', 'active' => Route::is('theme.tabs-pills.*')])>
                <a href="{{ url('theme/tabs-pills') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div>Tabs Pills</div>
                </a>
            </li>

            <li @class(['menu-item ', 'active' => Route::is('theme.toasts.*')])>
                <a href="{{ url('theme/toasts') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div>Toasts</div>
                </a>


            </li>

            <li @class([
                'menu-item ',
                'active' => Route::is('theme.tooltips-popovers.*'),
            ])>
                <a href="{{ url('theme/tooltips-popovers') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div>Tooltips Popovers</div>
                </a>
            </li>

            <li @class(['menu-item ', 'active' => Route::is('theme.typography.*')])>
                <a href="{{ url('theme/typography') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div>Typography</div>
                </a>
            </li>

            <li @class(['menu-item ', 'active' => Route::is('theme.table-index.*')])>
                <a href="{{ url('theme/table-index') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div>Table</div>
                </a>
            </li>
            <li @class(['menu-item ', 'active' => Route::is('theme.boxicons.*')])>
                <a href="{{ url('theme/boxicons') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div>Boxicons</div>
                </a>
            </li>
        </ul>
