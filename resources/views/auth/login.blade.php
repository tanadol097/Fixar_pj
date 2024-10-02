<x-guest-layout>
    <div class="flex items-center justify-center min-h-screen bg-blue-50">
        <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-md sm:max-w-lg md:max-w-3xl sm:p-8 md:flex">
            <!-- Left Side (Form Section) -->
            <div class="w-full md:w-1/2">
                <div class="text-center">
                    <h1 class="text-3xl font-semibold text-gray-700">Welcome Back</h1>
                    <p class="mt-2 text-sm text-gray-600">Sign in to continue</p>
                </div>

                <div class="mt-6">
                    <button class="w-full px-4 py-2 mb-4 text-white bg-blue-500 rounded-lg focus:outline-none">
                        <i class="fab fa-google mr-2"></i> Log in with Google
                    </button>

                    <div class="text-center text-sm text-gray-400 my-4">or login with email</div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input id="email" type="email" name="email" class="block w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring focus:ring-indigo-500" required>
                        </div>

                        <div class="mt-4">
                            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                            <input id="password" type="password" name="password" class="block w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring focus:ring-indigo-500" required>
                        </div>

                        <div class="flex items-center justify-between mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" name="remember" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                                <span class="ml-2 text-sm text-gray-600">Keep me logged in</span>
                            </label>

                            <a href="{{ route('password.request') }}" class="text-sm text-indigo-600 hover:text-indigo-900">Forgot password?</a>
                        </div>

                        <div class="mt-6">
                            <button type="submit" class="w-full px-4 py-2 text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-indigo-500">
                                Log in
                            </button>
                        </div>
                    </form>

                    <div class="mt-6 text-center">
                        <p class="text-sm text-gray-600">Don’t have an account? <a href="{{ route('register') }}" class="text-indigo-600">Sign up</a></p>
                    </div>
                </div>
            </div>

            <!-- Right Side (Illustration Section) -->
            <div class="hidden md:block w-1/2 bg-indigo-500 text-white rounded-r-lg p-6 flex flex-col justify-center items-center">
                <h2 class="text-2xl font-bold">New Update Available</h2>
                <p class="mt-2 text-sm">We have added some new awesome features</p>
                <a href="#" class="mt-4 px-4 py-2 text-sm bg-white text-indigo-600 rounded-lg hover:bg-indigo-200">Learn More</a>
                <img src="{{ asset('images/illustration.png') }}" alt="Illustration" class="mt-6">
            </div>
        </div>
    </div>
</x-guest-layout>
