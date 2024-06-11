<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} - @if(Auth::user()->hasRole('super-admin'))
            {{ 'Super Admin' }}
            @elseif(Auth::user()->hasRole('admin'))
            {{ 'Admin' }}
            @else(Auth::user()->hasRole('user'))
            {{ 'User' }}
            @endif

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in! As @if(Auth::user()->hasRole('super-admin'))
                    {{ 'Super Admin' }}
                    @elseif(Auth::user()->hasRole('admin'))
                    {{ 'Admin' }}
                    @else(Auth::user()->hasRole('user'))
                    {{ 'User' }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
