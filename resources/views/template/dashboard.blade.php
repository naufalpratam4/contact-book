<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <title>Contact Book</title>
</head>

<body>
    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200  ">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                        aria-controls="logo-sidebar" type="button"
                        class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200  ">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                            </path>
                        </svg>
                    </button>
                    <a href="https://flowbite.com" class="flex ms-2 md:me-24">
                        <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 me-3" alt="FlowBite Logo" />
                        <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap  ">Flowbite</span>
                    </a>
                </div>
                <div class="flex items-center">
                    <div class="flex items-center ms-3">
                        <div>
                            <button type="button"
                                class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300  "
                                aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-8 h-8 rounded-full"
                                    src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                                    alt="user photo">
                            </button>
                        </div>
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-sm shadow-sm "
                            id="dropdown-user">
                            <div class="px-4 py-3" role="none">
                                <p class="text-sm text-gray-900  " role="none">
                                    Neil Sims
                                </p>
                                <p class="text-sm font-medium text-gray-900 truncate " role="none">
                                    neil.sims@flowbite.com
                                </p>
                            </div>
                            <ul class="py-1" role="none">
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100  "
                                        role="menuitem">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100  "
                                        role="menuitem">Settings</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100  "
                                        role="menuitem">Earnings</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100  "
                                        role="menuitem">Sign out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <aside id="logo-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0  "
        aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto bg-white text-center flex flex-col items-center">
            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" width="100" height="100"
                alt="Profile Picture">
            <div class="mt-2 font-semibold">{{$user->name}}</div>
            <div class=" text-sm">{{$user->email}}</div>
            <div class="text-left w-full max-w-xs mt-4 px-4 space-y-2">
                <div class="flex items-center gap-2 text-sm text-gray-700">
                    <img src="{{ asset('image/kalender.png') }}" alt="Kalender" class="w-5 h-5">
                    <span>{{$user->tgl_lahir}}</span>
                </div>

                <div class="flex items-center gap-2 text-sm text-gray-700">
                    <img src="{{ asset('image/telpon.png') }}" alt="Telepon" class="w-5 h-5">
                    <span>{{$user->no}}</span>
                </div>

                <div class="flex items-center gap-2 text-sm text-gray-700">
                    <img src="{{ asset('image/lokasi.png') }}" alt="Lokasi" class="w-5 h-5">
                    <span>{{$user->alamat}}</span>
                </div>
            </div>

        </div>

    </aside>

    <div class="p-4 sm:ml-64 ">
        @yield('content')
        {{-- <div class="flex justify-between items-center mt-14">
            <!-- Title -->
            <div class="text-xl font-semibold text-gray-800">Address Book</div>

            <!-- Action Buttons -->
            <div class="flex items-center gap-3">
                <!-- Filter Button with Icon -->
                <button class="bg-gray-200 hover:bg-gray-300 p-2 rounded-lg cursor-pointer">
                    <img src="{{ asset('image/filter.png') }}" alt="Filter" class="w-5 h-5">
                </button>

                <!-- New Contact Button -->
                <button
                    class="bg-green-500 hover:bg-green-800 text-white px-4 py-2 rounded-lg text-sm font-medium shadow cursor-pointer">
                    New Contact
                </button>
            </div>
        </div>


        <div class="mt-5 grid grid-cols-3 ">
            <!-- Konten Kiri (Utama) -->
            <div class="col-span-2 gap-2 ">
                <div
                    class="flex flex-col md:flex-row items-center justify-between gap-4 border-2 border-gray-300 rounded-lg mb-2 p-4">
                    <!-- Foto -->
                    <div class="flex-shrink-0 ">
                        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" width="80"
                            height="80" alt="Profile Picture" class="rounded-full">
                    </div>

                    <!-- Info Nama dan Pekerjaan -->
                    <div class="text-center md:text-left">
                        <a href="#" class="text-lg font-semibold text-gray-800">
                            David Jhon
                        </a>
                        <div class="text-sm text-gray-500">
                            Java Developer
                        </div>
                    </div>

                    <!-- Nomor Telepon -->
                    <div class="text-sm text-gray-700">
                        085985858
                    </div>

                    <!-- Email -->
                    <div class="text-sm text-gray-700">
                        naufal.d.pratama@gmail.com
                    </div>
                </div>
                <div
                    class="flex flex-col md:flex-row items-center justify-between gap-4 border-2 border-gray-300 rounded-lg p-4 ">
                    <!-- Foto -->
                    <div class="flex-shrink-0">
                        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" width="80"
                            height="80" alt="Profile Picture" class="rounded-full">
                    </div>

                    <!-- Info Nama dan Pekerjaan -->
                    <div class="text-center md:text-left">
                        <a href="#" class="text-lg font-semibold text-gray-800">
                            David Jhon
                        </a>
                        <div class="text-sm text-gray-500">
                            Java Developer
                        </div>
                    </div>

                    <!-- Nomor Telepon -->
                    <div class="text-sm text-gray-700">
                        085985858
                    </div>

                    <!-- Email -->
                    <div class="text-sm text-gray-700">
                        naufal.d.pratama@gmail.com
                    </div>
                </div>

            </div>

            <!-- Side Kanan -->
            <div class="border-2 border-gray-300  d rounded-lg p-4 text-center">
                <div class="flex flex-col items-center">
                    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" width="100" height="100"
                        alt="Profile Picture">
                </div>

                <h2 class="text-lg font-semibold text-gray-800 ">Nama contact</h2>
                <p class="text-sm text-gray-600">Laravel Developer</p>
                <div>
                    <div class="sm:hidden">
                        <label for="tabs" class="sr-only">Select your country</label>
                        <select id="tabs"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option>Profile</option>
                            <option>About</option>
                        </select>
                    </div>
                    <ul
                        class="hidden text-sm font-medium text-center text-gray-500 rounded-lg shadow-sm sm:flex dark:divide-gray-700 dark:text-gray-400">
                        <li class="w-full focus-within:z-10">
                            <a href="#"
                                class="inline-block w-full p-4 text-gray-900 bg-gray-100 border-r border-gray-200  rounded-s-lg focus:ring-4 focus:ring-blue-300 active focus:outline-none "
                                aria-current="page">Profile</a>
                        </li>
                        <li class="w-full focus-within:z-10">
                            <a href="#"
                                class="inline-block w-full p-4 bg-white border-s-0 border-gray-200  rounded-e-lg hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:outline-none focus:ring-blue-300 ">About</a>
                        </li>
                    </ul>
                    <div class="flex justify-between items-center text-left pt-2">
                        <!-- Informasi Nomor Telepon -->
                        <div>
                            <div class="text-sm text-gray-500">Phone Number</div>
                            <div class="text-base font-medium text-gray-800">08456485</div>
                        </div>

                        <!-- Tombol Call -->
                        <button class="p-2 rounded-lg hover:bg-gray-100 transition bg-green-200 cursor-pointer">
                            <img src="{{ asset('image/call.png') }}" alt="Call" class="w-5 h-5">
                        </button>
                    </div>
                    <div class="flex justify-between items-center text-left pt-2">
                        <!-- Informasi Nomor Telepon -->
                        <div>
                            <div class="text-sm text-gray-500">Phone Number</div>
                            <div class="text-base font-medium text-gray-800">08456485</div>
                        </div>

                        <!-- Tombol Call -->
                        <button class="p-2 rounded-lg hover:bg-gray-100 transition bg-green-200 cursor-pointer">
                            <img src="{{ asset('image/call.png') }}" alt="Call" class="w-5 h-5">
                        </button>
                    </div>
                    <div class="flex justify-between items-center text-left pt-2">
                        <!-- Informasi Nomor Telepon -->
                        <div>
                            <div class="text-sm text-gray-500">Phone Number</div>
                            <div class="text-base font-medium text-gray-800">08456485</div>
                        </div>

                        <!-- Tombol Call -->
                        <button class="p-2 rounded-lg hover:bg-gray-100 transition bg-green-200 cursor-pointer">
                            <img src="{{ asset('image/call.png') }}" alt="Call" class="w-5 h-5">
                        </button>
                    </div>
                </div>
            </div>
        </div> --}}

    </div>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>
