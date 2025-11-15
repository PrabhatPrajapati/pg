<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center mb-16">
                <h1 class="text-5xl font-bold text-gray-900 mb-4">Welcome to Livewire MVC</h1>
                <p class="text-xl text-gray-600 mb-8">Building interactive UIs with the simplicity you love</p>
                <button class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 font-semibold">
                    Get Started
                </button>
            </div>

        <!-- Stats Section -->
        <div class="grid grid-cols-3 gap-8 mb-20">
            <div class="bg-white p-8 rounded-lg shadow-md text-center">
                <div class="text-4xl font-bold text-blue-600 mb-2">{{ $totalUsers }}</div>
                <div class="text-gray-600">Active Users</div>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-md text-center">
                <div class="text-4xl font-bold text-blue-600 mb-2">{{ count($posts) }}</div>
                <div class="text-gray-600">Recent Posts</div>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-md text-center">
                <div class="text-4xl font-bold text-blue-600 mb-2">100%</div>
                <div class="text-gray-600">Uptime</div>
            </div>
        </div>

        <!-- Recent Posts Section -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Recent Posts</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($posts as $post)
                    <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $post['title'] }}</h3>
                        <p class="text-gray-600 mb-4">{{ $post['description'] }}</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">{{ $post['date'] }}</span>
                            <a href="#" class="text-blue-600 hover:text-blue-700 font-semibold">Read More →</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Features Section -->
        <div class="bg-blue-600 text-white rounded-lg p-12 text-center">
            <h2 class="text-3xl font-bold mb-4">Why Choose Livewire?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
                <div>
                    <div class="text-3xl mb-2">⚡</div>
                    <h3 class="font-semibold mb-2">Fast & Reactive</h3>
                    <p>Real-time reactivity without leaving Laravel</p>
                </div>
                <div>
                    <div class="text-3xl mb-2">🛡️</div>
                    <h3 class="font-semibold mb-2">Secure</h3>
                    <p>Built-in CSRF protection and data validation</p>
                </div>
                <div>
                    <div class="text-3xl mb-2">🎨</div>
                    <h3 class="font-semibold mb-2">Simple</h3>
                    <p>Write less JavaScript, more productivity</p>
                </div>
            </div>
        </div>
    </div>
