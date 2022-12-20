<x-guest-layout>
    <div class="w3-container">
        <div class="w3-display-middle">
            <div class="w3-card">
                <header class="w3-container w3-indigo w3-center">
                    <h2>- Log In -</h2>
                </header>
                <form class="w3-container" method="post" action="{{ route('login') }}">
                    @csrf
                    <div class="w3-margin-top">
                        <label for="email">Email:</label>
                        <input type="email" class="w3-input" name="email" placeholder="fake@email.com" value="{{ old('email') }}">
                        <p class="w3-text-red">@error('email') {{ $message }} @enderror</p>
                    </div>
                    <div class="w3-margin-top">
                        <label for="email">Password:</label>
                        <input type="password" class="w3-input" name="password" placeholder="****">
                        <p class="w3-text-red">@error('password') {{ $message }} @enderror</p>
                    </div>
                    <div class="w3-section">
                        <button type="submit" class="w3-btn w3-gray w3-hover-indigo">Log In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>