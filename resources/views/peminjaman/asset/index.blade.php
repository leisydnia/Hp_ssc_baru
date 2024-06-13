@extends('templates.main')

@section('container')
    <div class="grid grid-cols-1 w-96 mx-auto">

        <div class="mb-5">
            <label for="id_siswa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID siswa</label>
            <input type="text" id="id_siswa" name="id_siswa" value="{{ 8 }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>

        <div class="mb-5">
            <label for="ukm_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama UKM</label>
            <input type="text" id="ukm_name" name="ukm_name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>

        <div class="mb-5">
            <label for="event_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Event</label>
            <input type="text" id="event_name" name="event_name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>

        <div class="mb-5">
            <label for="num_of_participants" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Partisipasi</label>
            <input type="text" id="num_of_participants" name="num_of_participants"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        
        <div class="mb-5">
            <label for="event_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal pinjam</label>
            <input type="date" id="event_date" name="event_date"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>

        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Next</button>
    </div>
@endsection
