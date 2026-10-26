<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <div class="sidebar-brand">
        <a href="{{ route('dashboard') }}" class="brand-link text-decoration-none">
            <span class="brand-text fw-light app-brand-text">
                <i class="bi bi-lightning-charge-fill me-2"></i>
                Anti-Procrastination
            </span>
        </a>
    </div>

    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul
                class="nav sidebar-menu flex-column"
                data-lte-toggle="treeview"
                role="menu"
                data-accordion="false"
            >
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}"
                       class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-speedometer2"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-header">TASK MANAGEMENT</li>

                <li class="nav-item">
                    <a href="{{ route('tasks') }}"
                       class="nav-link {{ request()->routeIs('tasks') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-list-check"></i>
                        <p>Tasks</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('categories') }}"
                       class="nav-link {{ request()->routeIs('categories') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-tags"></i>
                        <p>Categories</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('focus-sessions') }}"
                       class="nav-link {{ request()->routeIs('focus-sessions') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-stopwatch"></i>
                        <p>Focus Sessions</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('rescue-plans') }}"
                       class="nav-link {{ request()->routeIs('rescue-plans') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-life-preserver"></i>
                        <p>Rescue Plans</p>
                    </a>
                </li>

                <li class="nav-header">MONITORING</li>

                <li class="nav-item">
                    <a href="{{ route('notifications') }}"
                       class="nav-link {{ request()->routeIs('notifications') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('statistics') }}"
                       class="nav-link {{ request()->routeIs('statistics') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-bar-chart-line"></i>
                        <p>Statistics</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
