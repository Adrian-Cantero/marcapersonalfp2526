<!-- Settings Dropdown -->
<li class="hidden sm:flex sm:items-center sm:ms-6">
    <ul>
        <li>
            {{ Auth::user()->name }}
        </li>
        <li>
            <ul>
                <li>
                    <x-dropdown-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-dropdown-link>
                </li>
            </ul>
            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
        </li>
    </ul>
</li>
