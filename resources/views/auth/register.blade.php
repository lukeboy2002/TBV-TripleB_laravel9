<x-app-layout>
    <div class="flex min-h-full pt-4 sm:pt-0 mb-20">
        <div class="relative hidden w-0 flex-1 sm:block">
            <img class="absolute inset-0 h-full w-full object-cover" src="{{asset('storage/images/backgrounds/login.jpeg')}}" alt="Background Inlog">
        </div>

        <div class="flex flex-1 flex-col justify-center px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24 lg:my-14">
            <div class="mx-auto w-full max-w-sm lg:w-96">
                <div>
                    <x-jet-application-logo />
                    <h2 class="mt-6 text-3xl font-bold tracking-tight text-orange-500">Sign in to your account</h2>
                </div>
                <div class="my-8">
                    <form method="POST" action="{{ route('register') }}" class="space-y-6">
                        @csrf

                        <div>
                            <x-jet-label for="name" value="Username" />
                            <x-jet-input type="text" name="username" id="username" :value="old('username')" autofocus autocomplete="username" required/>
                            <x-jet-input-error for="username" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-jet-label for="email" value="Email" />
                            <x-jet-input type="email" name="email" id="email" :value="old('email')" required />
                            <x-jet-input-error for="email" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-jet-label for="password" value="Password" />
                            <x-jet-input type="password" name="password" id="password" autocomplete="new-password" required/>
                            <x-jet-input-error for="password" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-jet-label for="password_confirmation" value="Confirm Password" />
                            <x-jet-input type="password" name="password_confirmation" id="password_confirmation" autocomplete="new-password" required/>
                            <x-jet-input-error for="password_confirmation" class="mt-2" />
                        </div>

                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                            <div class="mt-4">
                                <x-jet-label for="terms">
                                    <div class="flex items-center">
                                        <x-jet-checkbox name="terms" id="terms" required />
                                        <div class="ml-2">
                                            I agree to the
                                            <x-links.default href="'.route('terms.show').'" target="_blank">Terms of Service</x-links.default>
                                            and
                                            <x-links.default href="'.route('policy.show').'" target="_blank">Privacy Policy</x-links.default>
                                        </div>
                                    </div>
                                </x-jet-label>
                            </div>
                        @endif
                        <div class="flex items-center justify-end">
                            <x-links.default href="{{ route('login') }}">Already registered?</x-links.default>
                        </div>
                        <x-buttons.default class="w-full rounded-lg">Register</x-buttons.default>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
