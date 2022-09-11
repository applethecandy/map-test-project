@extends('layouts.app')

@section('content')
    <div class="container mx-auto flex justify-center">
        <!-- Sidebar Section -->
        <aside class="flex w-full flex-col items-center px-3 md:w-1/3 max-w-sm">
            <div class="my-4 flex w-full flex-col bg-white p-6 shadow">
                <p href="#" class="flex w-full items-center justify-center rounded px-2 text-sm font-bold uppercase">
                    {{ __('Login') }}
                </p>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div>
                        <label for="email"
                            class="mt-4 flex w-full rounded px-2 text-md mb-1">{{ __('Email Address') }}</label>

                        <div>
                            <input id="email" type="email"
                                class="flex w-full items-center justify-center rounded focus:border-gray-400 focus:ring-transparent border-2 px-2 py-2 border-gray-300 text-sm font-bold uppercase @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="text-red-600" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="password"
                            class="mt-4 flex w-full rounded px-2 text-md mb-1">{{ __('Password') }}</label>

                        <div>
                            <input id="password" type="password"
                                class="flex w-full items-center justify-center rounded focus:border-gray-400 focus:ring-transparent border-2 px-2 py-2 border-gray-300 text-sm font-bold uppercase @error('password') is-invalid @enderror"
                                name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="text-red-600" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-4">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>

                    <div>
                        <div class="flex flex-col direction-end">
                            <button type="submit"
                                class="mt-4 flex w-full items-center justify-center rounded bg-yellow-500 px-2 py-3 text-sm font-bold uppercase text-white hover:bg-yellow-400">
                                {{ __('Login') }}
                            </button>

                            <a class="mt-1 text-right text-gray-700 hover:text-black" href="{{ route('register') }}">
                                {{ __('Register') }}
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </aside>
    </div>
@endsection
