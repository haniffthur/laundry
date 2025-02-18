<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Cemarawash</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- SweetAlert2 for notifications -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body {
            background: url('/assets/img/bglaundry6.jpeg');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen flex items-center justify-center bg-cover bg-center">
        <div class="grid grid-cols-1 lg:grid-cols-2 w-full max-w-6xl bg-white rounded-xl shadow-xl">

            <!-- Left Section (Logo and Text) -->
<div class="relative flex flex-col justify-center items-center px-8 py-12 lg:px-16 lg:py-24 bg-gray-100 bg-cover bg-center"
    style="background-image: url('/assets/img/bglaundry6.jpeg');">
    
    <!-- Logo di pojok kiri atas -->
    <img src="/assets/img/cemara.png" alt="Logo" 
        class="absolute top-4 left-4 h-16">

    <h3 class="text-3xl font-bold text-gray-800 mt-8">"Keep It Clean, Keep It Simple"</h3>
    <p class="text-sm mt-4 text-gray-800">Sign in to keep your laundry journey simple and fresh. Experience the ease
        of clean and cared-for laundry.</p>
</div>


            <!-- Right Section (Form Login) -->
            <div class="flex flex-col justify-center items-center px-8 py-12 lg:px-16 lg:py-24">
                <div class="w-full max-w-sm">
                    <div class="text-center mb-6">
                        <h2 class="text-2xl font-semibold text-gray-800">Login to Your Account</h2>
                        <p class="text-sm text-gray-500">Sign in to continue.</p>
                    </div>
                    <form action="/login" method="POST">
    @csrf
    <!-- Email Input with Icon on the Right -->
    <div class="mb-4 relative">
        <label for="email" class="block text-sm font-medium text-gray-600">Email Address</label>
        <div class="relative">
            <input type="email" name="email" id="email"
                class="w-full p-3 pr-10 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                placeholder="Enter your email" required>
            <!-- User Icon (positioned to the right) -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                viewBox="0 0 24 24" class="w-5 h-5 absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 14c3.314 0 6-2.686 6-6S15.314 2 12 2 6 4.686 6 8s2.686 6 6 6zM4 20c0-4.418 3.582-8 8-8s8 3.582 8 8">
                </path>
            </svg>
        </div>
    </div>

    <!-- Password Input with Eye Icon on the Right -->
    <div class="mb-6 relative">
        <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
        <div class="relative">
            <input type="password" name="password" id="password"
                class="w-full p-3 pr-10 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                placeholder="Enter your password" required>
            <!-- Eye Icon (positioned to the right) -->
            <svg xmlns="http://www.w3.org/2000/svg" id="eye-icon" fill="none" stroke="currentColor"
                viewBox="0 0 24 24" class="w-5 h-5 absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 cursor-pointer"
                onclick="togglePassword()">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 4a9 9 0 1 0-9-9 9 9 0 0 0 9 9z">
                </path>
            </svg>
        </div>
    </div>

    <!-- Submit Button -->
    <div class="mb-4">
        <button type="submit"
            class="w-full p-3 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition duration-200">Log
            in</button>
    </div>
</form>
                </div>
            </div>
        </div>
    </div>

    <!-- Success or Error Alerts -->
    @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Login Successful!',
                text: '{{ session("success") }}',
            });
        </script>
    @endif

    @if(session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Login Failed!',
                text: '{{ session("error") }}',
            });
        </script>
    @endif

    <script>
    function togglePassword() {
        var passwordField = document.getElementById("password");

        if (passwordField.type === "password") {
            passwordField.type = "text";

            // Setelah 3 detik, kembali ke mode password
            setTimeout(function () {
                passwordField.type = "password";
            }, 500);
        }
    }
</script>


</body>

</html>
