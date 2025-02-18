<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="shortcut icon" href="/img/cemarablue.png">

  <title>Login</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Styles -->

</head>

<body class="antialiased">
  <div class="font-[sans-serif]">
    <div
      class="grid lg:grid-cols-2 gap-12 bg-cover bg-center sm:px-8 px-4 py-20 h-screen" style="background-image: url('/assets/img/bglaundry6.jpeg');>
      <!-- Left Section -->
      <div>
        <a href="#">
          <div class="flex items-center space-x-1">
            <img src="/assets/img/cemarablue.png" alt="Logo" class="h-10 w-10">
            <h1 class="text-white font-sans text-2xl font-bold">CemaraWash</h1>
          </div>
        </a>
        <div class="max-w-lg mt-16 max-lg:hidden">
          <h3 class="text-3xl font-bold text-white">"Keep It Clean, Keep It Simple"</h3>
          <p class="text-sm mt-4 text-white">Sign in to keep your laundry journey simple and fresh. Experience the ease
            of clean and cared-for laundry.</p>
        </div>
      </div>

      <form action="/login" method="POST">
        @csrf
        <!-- Right Section -->
        <div
          class="rounded-xl sm:px-6 px-4 py-8 max-w-md w-full shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] mx-auto bg-[url('/public/img/bglaundry5.jpg')] bg-cover bg-center">
          <form>
            <div class="mb-8">
              <h3 class="text-3xl font-extrabold text-white">Sign in</h3>
            </div>
            <!-- Username Field -->
            <div>
              <label class="text-white  text-sm mb-2 block">Username</label>
              <div class="relative flex items-center">
                <input id="email" name="email" type="email" required
                  class="w-full text-sm text-gray-800 border border-gray-300 px-4 py-3 rounded-md outline-blue-600"
                  placeholder="Enter Email" />
                <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb"
                  class="w-[18px] h-[18px] absolute right-4" viewBox="0 0 24 24">
                  <circle cx="10" cy="7" r="6" data-original="#000000"></circle>
                  <path
                    d="M14 15H6a5 5 0 0 0-5 5 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 5 5 0 0 0-5-5zm8-4h-2.59l.3-.29a1 1 0 0 0-1.42-1.42l-2 2a1 1 0 0 0 0 1.42l2 2a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42l-.3-.29H22a1 1 0 0 0 0-2z"
                    data-original="#000000"></path>
                </svg>
              </div>
            </div>

            <!-- Password Field -->
            <div class="mt-4">
              <label class="text-white text-sm mb-2 block">Password</label>
              <div class="relative flex items-center">
                <input id="password" name="password" type="password" required
                  class="w-full text-sm text-gray-800 border border-gray-300 px-4 py-3 rounded-md outline-blue-600"
                  placeholder="Enter password" />
                <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb"
                  class="w-[18px] h-[18px] absolute right-4 cursor-pointer" viewBox="0 0 128 128">
                  <path
                    d="M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z"
                    data-original="#000000"></path>
                </svg>
              </div>
            </div>
            <div class="mt-8">
              <button type="submit"
                class="w-full shadow-xl py-2.5 px-4 text-sm font-semibold rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none">
                Log in
              </button>
            </div>

          </form>
        </div>
    </div>
  </div>
  @if(session('success'))
    <script>
    Swal.fire({
      icon: 'success',
      title: 'Berhasil!',
      text: '{{ session("success") }}',
    });
    </script>
  @endif

  @if(session('gagal'))
    <script>
    Swal.fire({
      icon: "error",
      title: "data not found",
      footer: '<a href="#">Why am I getting this issue?</a>'
    });
    </script>
  @endif
</body>

</html>