@extends('template.dashboard')
@section('content')

    @if (session('success'))
        <div class="fixed bottom-4 left-4 z-50">
            <div class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 shadow-lg dark:bg-gray-800 dark:text-green-400 dark:border-green-800"
                role="alert">
                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <div>
                    <span class="font-medium">Success!</span> {{ session('success') }}
                </div>
            </div>
        </div>
    @endif

    <div class="flex justify-between items-center mt-14">
        <!-- Title -->
        <div class="text-xl font-semibold text-gray-800">Address Book</div>

        <!-- Action Buttons -->
        <div class="flex items-center gap-3">
            <!-- Filter Button with Icon -->
            <button class="bg-gray-200 hover:bg-gray-300 p-2 rounded-lg cursor-pointer">
                <img src="{{ asset('image/filter.png') }}" alt="Filter" class="w-5 h-5">
            </button>

            <!-- New Contact Button -->
            <a href="/create-contact">
                <button
                    class="bg-green-500 hover:bg-green-800 text-white px-4 py-2 rounded-lg text-sm font-medium shadow cursor-pointer">
                    New Contact
                </button>
            </a>

        </div>
    </div>


    <div class="mt-5 grid grid-cols-3 ">
        <!-- Konten Kiri (Utama) -->
        <div class="col-span-2 gap-2 ">
            @foreach ($contact as $item)
                <div
                    class="flex flex-col md:flex-row items-center justify-between gap-4 border-2 border-gray-300 rounded-lg mb-2 p-4">
                    <!-- Foto -->
                    <div class="flex-shrink-0 ">
                        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" width="80" height="80"
                            alt="Profile Picture" class="rounded-full">
                    </div>

                    <!-- Info Nama dan Pekerjaan -->
                    <div class="text-center md:text-left">
                        <a href="#" class="text-lg font-semibold text-gray-800">
                            {{ $item->nama_kontak }}
                        </a>
                        <div class="text-sm text-gray-500">
                            {{ $item->job }}
                        </div>
                    </div>

                    <!-- Nomor Telepon -->
                    <div class="text-sm text-gray-700">
                        {{ $item->no }}
                    </div>

                    <!-- Email -->
                    <div class="text-sm text-gray-700">
                        {{ $item->email }}
                    </div>
                    <div class="text-sm text-gray-700 flex gap-2">
                        <div>
                            <a href="{{ route('view.update.contact', $item->id) }}">
                                <img src="https://png.pngtree.com/png-clipart/20230805/original/pngtree-pencil-flat-yellow-color-rounded-vector-icon-pictogram-flat-edit-vector-picture-image_9721456.png"
                                    width="30" height="30" alt="">
                            </a>
                        </div>
                        <form action="{{ route('delete.contact', $item->id) }}" method="POST"
                            onsubmit="return confirm('Are you sure you want to delete this contact?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="cursor-pointer">
                                <img src="https://cdn-icons-png.freepik.com/512/3687/3687412.png" width="30"
                                    height="30" alt="Delete">
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
            {{ $contact->links() }}    

        </div>

        <!-- Side Kanan -->
        <div class="border-2 border-gray-300  d rounded-lg p-4 text-center">
            <div class="flex flex-col items-center">
                <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" width="100" height="100"
                    alt="Profile Picture">
            </div>

            <h2 class="text-lg font-semibold text-gray-800 ">{{ $detail->nama_kontak }}</h2>
            <p class="text-sm text-gray-600">{{ $detail->job }}</p>
            <div>
                <div class="sm:hidden">
                    <label for="tabs" class="sr-only">Select </label>
                    <select id="tabs"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        onchange="location = this.value;">
                        <option disabled selected>Pilih Halaman</option>
                        <option >Profile</option>
                        
                        <option><a href="{{route('about.contact', $detail->id)}}"></a></option>
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
                        <div class="text-base font-medium text-gray-800">{{ $detail->no }}</div>
                    </div>

                    <!-- Tombol Call -->
                    <button class="p-2 rounded-lg hover:bg-gray-100 transition bg-green-200 cursor-pointer">
                        <img src="{{ asset('image/call.png') }}" alt="Call" class="w-5 h-5">
                    </button>
                </div>
                <div class="flex justify-between items-center text-left pt-2">
                    <!-- Informasi Nomor Telepon -->
                    <div>
                        <div class="text-sm text-gray-500">Email Address</div>
                        <div class="text-base font-medium text-gray-800">{{ $detail->email }}</div>
                    </div>

                    <!-- Tombol Call -->
                    <button class="p-2 rounded-lg hover:bg-gray-100 transition bg-green-200 cursor-pointer">
                        <img src="{{ asset('image/call.png') }}" alt="Call" class="w-5 h-5">
                    </button>
                </div>

            </div>
        </div>
    </div>
@endsection
