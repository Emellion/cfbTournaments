<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            {{-- <form method="POST" action="https://auth.riotgames.com/authorize?redirect_uri=http://local.leagueoflegends.com:3000/oauth2-callback&client_id=oujzg5jiibvzo&response_type=code&scope=openid"> --}}
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password" />
            </div>


            <button id="dropdownRadioBgHoverButton" data-dropdown-toggle="dropdownRadioBgHover"
                class="text-white bg-blue-600 mt-4 hover:bg-blue-500 focus:ring-4 focus:outline-none focus:ring-transparent font-light rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">Choose Your Rank <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg></button>

            <!-- Dropdown menu -->
            <div id="dropdownRadioBgHover"
                class="hidden z-10 w-48 rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600" style="background-color:#272B34;">
                <ul class="p-3 space-y-1 text-sm text-gray-200 dark:text-gray-200"
                    aria-labelledby="dropdownRadioBgHoverButton">
                    <li>
                        <div class="flex items-center p-2 rounded  dark:hover:bg-gray-600" style="background-color:#272B34;">
                            <input id="default-radio-4" type="radio" value="unranked" name="rank"
                                class="w-4 h-4 text-blue-600  border-gray-300 focus:ring-transparent dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" style="background-color:#272B34;">
                            <label for="default-radio-4"
                                class="ml-2 w-full text-sm font-medium text-gray-200 rounded dark:text-gray-300">Unranked</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center p-2 rounded  dark:hover:bg-gray-600" style="background-color:#272B34;">
                            <input checked id="default-radio-5" type="radio" value="iron" name="rank"
                                class="w-4 h-4 text-blue-600  border-gray-300 focus:ring-transparent dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" style="background-color:#272B34;">
                            <label for="default-radio-5"
                                class="ml-2 w-full text-sm font-medium text-gray-200 rounded dark:text-gray-300">Iron</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center p-2 rounded  dark:hover:bg-gray-600" style="background-color:#272B34;">
                            <input id="default-radio-6" type="radio" value="bronze" name="rank"
                                class="w-4 h-4 text-blue-600  border-gray-300 focus:ring-transparent dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" style="background-color:#272B34;">
                            <label for="default-radio-6"
                                class="ml-2 w-full text-sm font-medium text-gray-200 rounded dark:text-gray-300">Bronze</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center p-2 rounded  dark:hover:bg-gray-600" style="background-color:#272B34;">
                            <input id="default-radio-7" type="radio" value="silver" name="rank"
                                class="w-4 h-4 text-blue-600  border-gray-300 focus:ring-transparent dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" style="background-color:#272B34;">
                            <label for="default-radio-7"
                                class="ml-2 w-full text-sm font-medium text-gray-200 rounded dark:text-gray-300">Silver</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center p-2 rounded  dark:hover:bg-gray-600" style="background-color:#272B34;">
                            <input id="default-radio-8" type="radio" value="gold" name="rank"
                                class="w-4 h-4 text-blue-600  border-gray-300 focus:ring-transparent dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" style="background-color:#272B34;">
                            <label for="default-radio-8"
                                class="ml-2 w-full text-sm font-medium text-gray-200 rounded dark:text-gray-300">Gold</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center p-2 rounded dark:hover:bg-gray-600" style="background-color:#272B34;">
                            <input id="default-radio-9" type="radio" value="platinum" name="rank"
                                class="w-4 h-4 text-blue-600  border-gray-300 focus:ring-transparent dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" style="background-color:#272B34;">
                            <label for="default-radio-9"
                                class="ml-2 w-full text-sm font-medium text-gray-200 rounded dark:text-gray-300">Platinum</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center p-2 rounded dark:hover:bg-gray-600" style="background-color:#272B34;">
                            <input id="default-radio-10" type="radio" value="diamond" name="rank"
                                class="w-4 h-4 text-blue-600  border-gray-300 focus:ring-transparent dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" style="background-color:#272B34;">
                            <label for="default-radio-10"
                                class="ml-2 w-full text-sm font-medium text-gray-200 rounded dark:text-gray-300">Diamond</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center p-2 rounded dark:hover:bg-gray-600" style="background-color:#272B34;">
                            <input id="default-radio-11" type="radio" value="ascendant" name="rank"
                                class="w-4 h-4 text-blue-600  border-gray-300 focus:ring-transparent dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" style="background-color:#272B34;">
                            <label for="default-radio-11"
                                class="ml-2 w-full text-sm font-medium text-gray-200 rounded dark:text-gray-300">Ascendant</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center p-2 rounded dark:hover:bg-gray-600" style="background-color:#272B34;">
                            <input id="default-radio-12" type="radio" value="immortal" name="rank"
                                class="w-4 h-4 text-blue-600  border-gray-300 focus:ring-transparent dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" style="background-color:#272B34;">
                            <label for="default-radio-12"
                                class="ml-2 w-full text-sm font-medium text-gray-200 rounded dark:text-gray-300">Immortal</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center p-2 rounded dark:hover:bg-gray-600" style="background-color:#272B34;">
                            <input id="default-radio-13" type="radio" value="radiant" name="rank"
                                class="w-4 h-4 text-blue-600  border-gray-300 focus:ring-transparent dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" style="background-color:#272B34;">
                            <label for="default-radio-13"
                                class="ml-2 w-full text-sm font-medium text-gray-200 rounded dark:text-gray-300">Radiant</label>
                        </div>
                    </li>
                </ul>
            </div>


            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                    'terms_of_service' =>
                                        '<a target="_blank" href="' .
                                        route('terms.show') .
                                        '" class="underline text-sm text-gray-100 hover:text-gray-400">' .
                                        __('Terms of Service') .
                                        '</a>',
                                    'privacy_policy' =>
                                        '<a target="_blank" href="' .
                                        route('policy.show') .
                                        '" class="underline text-sm text-gray-100 hover:text-gray-400">' .
                                        __('Privacy Policy') .
                                        '</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-300 hover:text-gray-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>


