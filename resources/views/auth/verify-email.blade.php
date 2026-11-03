<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Hvala na registraciji! Prije nego što započnete, molimo vas da potvrdite svoju email adresu klikom na link koji smo vam upravo poslali. Ako niste primili email, rado ćemo vam poslati novi.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('Novi verifikacijski link poslan je na email adresu koju ste naveli prilikom registracije.') }}
        </div>
    @endif
    <div class="flex flex-col gap-y-6">
    <div class="mt-4 flex flex-col sm:flex-row items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Ponovo pošalji verifikacijski mail') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Odjava') }}
            </button>
        </form>
        
    </div>
    <a class="col-start-1 lg:col-span-2 lg2:col-start-1 lg2:col-span-1 justify-center inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"href="{{ route('firstpage', ['tenant'=>Auth::user()->tenant()->first()->slug]) }}" wire:navigate>Ulaz u prodavnicu</a>
    </div>
</x-guest-layout>
