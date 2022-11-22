<x-guest-layout :title="' | Register'">
    <div class="flex items-center justify-center bg-slate-50 font-sans">
        <section class="form-register py-10 lg:py-4">
            <div class="container mx-auto">
                <div class="rows-form-register lg:flex lg:scale-95 lg:items-center lg:justify-center">
                    <div class="cols-form-register lg:basis-1/2 lg:px-20">
                        <i class="bx bx-cube-alt icon text-4xl text-dark-scy"></i>
                        <h1
                            class="title mt-6 mb-3 font-serif text-3xl font-extrabold tracking-widest text-dark lg:text-2xl">
                            Sign Up
                        </h1>
                        <p class="text-base font-medium text-gray-500 lg:text-xs">
                            See your growth and get consulting support!
                        </p>
                        <div
                            class="login-with-google mt-10 flex w-full cursor-pointer items-center justify-center gap-x-3 rounded-full p-3 shadow-3xl hover:bg-white lg:gap-x-2">
                            <img class="w-7" src="./images/gmail.svg" alt="gmail" />
                            <p class="text-base font-semibold text-dark lg:text-sm">
                                Sign in with Google
                            </p>
                        </div>
                        <div
                            class="line relative my-6 w-full text-center after:absolute after:top-1/2 after:left-0 after:-z-10 after:h-[.05rem] after:w-full after:translate-y-1/2 after:bg-slate-200 after:content-['']">
                            <p class="z-10 inline-block bg-slate-50 px-5 text-sm text-gray-300 lg:text-xs">
                                or Sign in with Email
                            </p>
                        </div>
                        <form method="POST" class="flex flex-col gap-y-5" action="{{ route('register') }}">
                            @csrf
                            {{-- name --}}
                            <div class="input-name flex flex-col gap-y-2">
                                <label
                                    class="@error('name') label-error-validate @enderror text-base font-semibold text-dark lg:text-sm"
                                    :value="__('Name')">Name*</label>
                                <input
                                    class="@error('name') input-error-validate @enderror w-full rounded-full border border-slate-300 bg-slate-50 py-3 px-6 placeholder:text-sm"
                                    type="text" name="name" id="name" placeholder="Name"
                                    value="{{ old('name') }}" autofocus />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                            {{-- email --}}
                            <div class="input-email flex flex-col gap-y-2">
                                <label
                                    class="@error('email') label-error-validate @enderror text-base font-semibold text-dark lg:text-sm"
                                    for="email" :value="__('Email')">Email*</label>
                                <input
                                    class="@error('email') input-error-validate @enderror w-full rounded-full border border-slate-300 bg-slate-50 py-3 px-6 placeholder:text-sm"
                                    type="email" name="email" id="email" placeholder="Arunika@gmail.com"
                                    value="{{ old('email') }}" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            {{-- password --}}
                            <div class="input-password flex flex-col gap-y-2">
                                <label
                                    class="@error('password') label-error-validate @enderror text-base font-semibold text-dark lg:text-sm"
                                    for="password" :value="__('Password')">Password*</label>
                                <input
                                    class="@error('password') input-error-validate @enderror w-full rounded-full border border-slate-300 bg-slate-50 py-3 px-6 placeholder:text-sm"
                                    type="password" name="password" id="password" placeholder="Min. 8 character"
                                    autocomplete="new-password" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            {{-- confirm password --}}
                            <div class="input-password flex flex-col gap-y-2">
                                <label
                                    class="@error('password_confirmation') label-error-validate @enderror text-base font-semibold text-dark lg:text-sm"
                                    for="password_confirmation" :value="__('Confirm Password')">Confirm
                                    Password*</label>
                                <input
                                    class="@error('password_confirmation') input-error-validate @enderror w-full rounded-full border border-slate-300 bg-slate-50 py-3 px-6 placeholder:text-sm"
                                    type="password" name="password_confirmation" id="password_confirmation"
                                    placeholder="Confirm Password" />
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                            <div class="input-checkbox flex w-full items-center gap-x-1">
                                <div class="checkbox flex items-center gap-x-1">
                                    <input
                                        class="scale-90 w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2"
                                        type="checkbox" name="checkbox" id="checkbox" />
                                    <label class="text-base font-semibold text-dark lg:text-sm" for="checkbox">I agree
                                        to
                                        the</label>
                                </div>
                                <a href="#"
                                    class="text-base font-semibold text-primary hover:text-blue-600 lg:text-sm">Terms &
                                    Conditions</a>
                            </div>
                            <button
                                class="w-full rounded-full bg-primary p-3 text-center text-[1.1rem] font-semibold text-holy-blur hover:bg-blue-600 lg:text-base"
                                type="submit">
                                {{ __('Sign Up') }}
                            </button>
                            <p class="text-base text-dark lg:text-sm">
                                Already have an Account?
                                <a class="text-base font-semibold text-primary hover:text-blue-600 lg:text-sm"
                                    href="{{ route('login') }}">Sign in</a>
                            </p>
                        </form>
                    </div>
                    <div class="cols-form-register lg:basis-1/2">
                        <img class="hidden lg:block" src="./images/hero-images-register.svg" alt="hero images" />
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-guest-layout>
