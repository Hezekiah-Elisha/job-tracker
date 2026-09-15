<div class="flex flex-row gap-4">
    <a href="/" class="hover:text-secondary hover:bg-primary p-2 rounded">Home</a>
    <a href="/jobs" class="hover:text-secondary hover:bg-primary p-2 rounded">Jobs</a>
    <div class="flex flex-row gap-2 justify-center items-center">
        @auth
            <span>Welcome, {{ auth()->user()->name }}!</span>
            <form method="POST" action="/logout" class="inline">
                @csrf
                <button type="submit"
                    class="hover:text-secondary hover:bg-white hover:text-blue-500 hover:cursor-pointer p-2 rounded">Logout</button>
            </form>
        @else
            <a href="/login" class="hover:text-secondary hover:bg-primary p-2 rounded">Login</a>
            <a href="/register" class="hover:text-secondary hover:bg-primary p-2 rounded">Register</a>
        @endauth
    </div>
</div>
