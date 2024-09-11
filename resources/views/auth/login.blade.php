@extends('layouts.auth')

@section('content')
<main>
    <section class="bg-cover bg-center bg-fixed" style="background-image: url('http://www.listercarterhomes.com/wp-content/uploads/2013/11/dummy-image-square.jpg')">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto min-h-screen lg:py-0">
            <div class="w-full bg-transparent md:mt-0 sm:max-w-md xl:p-0">
                <div class="p-6 sm:p-8">
                    <div class="mb-14">
                        <h1 class="my-4 text-3xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                            Selamat datang di Lapor Pak
                        </h1>
                        <p class="my-4 text-md leading-tight tracking-tight text-gray-900">
                            Masuk untuk akses akun Anda.
                        </p>
                    </div>
                    <form class="space-y-4 md:space-y-6" action="{{ route('login') }}" method="POST">
                        @csrf
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                            <input type="email" name="email" id="email" class="bg-blue-50 border border-blue-300 text-gray-900 rounded-lg block w-full p-2.5" placeholder="login@email.com" required="">
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-blue-50 border border-gray-300 text-gray-900 rounded-lg  block w-full p-2.5" required="">
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-black rounded bg-gray-50">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="remember" class="text-black">Ingatkan saya</label>
                                </div>
                            </div>
                            @if (Route::has('password.request'))
                            <a href="#" class="text-sm font-medium hover:underline">Lupa password?</a>
                            @endif
                        </div>
                        <button type="submit" class="w-full bg-black text-white focus:outline-none font-medium rounded-xl text-sm px-5 py-2.5 text-center">Sign in</button>
                        <p class="text-xs text-center font-light text-black">
                            Belum punya akun? <a href="{{ route('register') }}" class="font-medium text-red-600 hover:underline">Daftar disini.</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection


{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
