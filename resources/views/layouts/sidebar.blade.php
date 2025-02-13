<div class="h-screen drawer lg:drawer-open">
    <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
    <div class="drawer-side">
        <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
        <div class="flex flex-col justify-between p-4 w-60 h-full bg-base-200 text-base-content">
            {{-- Menu --}}
            <ul class="menu">
                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li>
                    <span class="menu-dropdown-toggle menu-dropdown-show">Master</span>
                    <ul class="menu-dropdown menu-dropdown-show">
                        <li><a class="active">User</a></li>
                        <li><a>Role</a></li>
                        <li><a>Permission</a></li>
                    </ul>
                </li>
            </ul>

            {{-- Profile Dropdown --}}
            <div class="dropdown dropdown-top">
                <div tabindex="0" role="button" class="flex gap-2 items-center w-full h-auto btn btn-ghost btn-circle">
                    <div class="w-10 rounded-full">
                        <img
                        alt="Profile Picture"
                        src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                    </div>
                    <div class="leading-tight text-left">
                        <h1 class="font-bold">John Doe</h1>
                        <p class="text-sm opacity-50">Admin</p>
                    </div>
                </div>
                <ul
                tabindex="0"
                class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                    <li><a class="justify-between">Profile <span class="badge">New</span></a></li>
                    <li><a>Settings</a></li>
                    <li><a>Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
