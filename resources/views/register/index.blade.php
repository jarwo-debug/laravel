<x-layout>



    <main class="form-signin w-100 m-auto">
        <form action="/register" method="post">
            @csrf
            <div class="form-floating">
                <input type="text" name="name" class="form-control @error('name')is-invalid @enderror" id="name"
                    placeholder="Name" required value="{{ old('name') }}">
                <label for="name">Name</label>
                @error('name')
                    <div class= "invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="text" name="username" class="form-control @error('username')is-invalid @enderror"
                    id="username" placeholder="Username" required value="{{ old('username') }}">
                <label for="username">Username</label>
                @error('name')
                    <div class= "invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email')is-invalid @enderror"
                    id="email" placeholder="Enter your email" required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('name')
                    <div class= "invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control @error('password')is-invalid @enderror"
                    id="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error('name')
                    <div class= "invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Register</button>

        </form>
        <small class="d-block text-center">Already registered? <a href="/login">Login</a></small>
    </main>




</x-layout>
