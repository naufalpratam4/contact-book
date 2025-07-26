@extends('template.dashboard')
@section('content')
    <section class=" md:mt-0 mt-14 ">
        <div class=" mx-auto lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 ">Add a new contact</h2>
            <form action="{{ route('update.contact', $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">

                    {{-- Nama Kontak --}}
                    <div class="sm:col-span-2">
                        <label for="nama_kontak" class="block mb-2 text-sm font-medium text-gray-900">Nama Kontak</label>
                        <input type="text" name="nama_kontak" id="nama_kontak"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                            value="{{ $data->nama_kontak }}" required>
                    </div>

                    {{-- Nomor HP --}}
                    <div class="w-full">
                        <label for="no" class="block mb-2 text-sm font-medium text-gray-900">Nomor HP</label>
                        <input type="number" name="no" id="no"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                            value="{{ $data->no }}" required>
                    </div>

                    {{-- Email --}}
                    <div class="w-full">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                        <input type="email" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                            value="{{ $data->email }}" required>
                    </div>

                    {{-- Job --}}
                    <div class="w-full">
                        <label for="job" class="block mb-2 text-sm font-medium text-gray-900">Job</label>
                        <input type="text" name="job" id="job"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                            value="{{ $data->job }}" required>
                    </div>

                    {{-- Upload Gambar --}}
                    <div class="w-full">
                        <label for="img" class="block mb-2 text-sm font-medium text-gray-900">Upload Foto</label>
                        <input type="file" name="img" id="img"
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none">
                    </div>

                    {{-- Deskripsi --}}
                    <div class="sm:col-span-2">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Description</label>
                        <textarea id="description" name="description" rows="6"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">{{ old('description', $data->description ?? '') }}</textarea>

                    </div>

                </div>

                {{-- Tombol Submit --}}
                <button type="submit"
                    class="inline-flex items-center px-5 py-2.5 mt-6 text-sm font-medium text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 hover:bg-blue-800 cursor-pointer">
                    Edit Contact
                </button>
            </form>

        </div>
    </section>
@endsection
