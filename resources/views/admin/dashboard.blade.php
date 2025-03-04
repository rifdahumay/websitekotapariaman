<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}

                    <!-- Sidebar -->
                    <button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar" aria-controls="sidebar-multi-level-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                        </svg>
                    </button>

                    <aside id="sidebar-multi-level-sidebar" class="w-64 mt-4 h-auto bg-gray-50 dark:bg-gray-800 rounded-lg shadow">
                        <div class="px-3 py-4 overflow-y-auto">
                            <ul class="space-y-2 font-medium">
                                <li>
                                    <a href="news" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group" style="text-decoration: none;">
                                    <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M2 4a1 1 0 011-1h18a1 1 0 011 1v16a1 1 0 01-1 1H3a1 1 0 01-1-1V4zm3 2v12h16V6H5zm7 2h6v2h-6V8zM5 10h6v2H5v-2zM5 14h6v2H5v-2z" clip-rule="evenodd"/>
                                    </svg>
                                        <span class="ms-3">Berita</span>
                                    </a>
                                </li>

                                <!-- Dropdown Profil Kota -->
                                <li>
                                    <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                                    <svg class="flex-shrink-0 w-4 h-4 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M6 2a1 1 0 0 0-1 1v18a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H6zM7 3h10v16H7V3z" clip-rule="evenodd"/>
                                    </svg>
                                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Profil Kota</span>
                                        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg>
                                    </button>
                                    <ul id="dropdown-example" class="hidden py-2 space-y-2">
                                        <li>
                                            <a href="/admin/profil_kota/visi_misi" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" style="text-decoration: none;">Visi Misi</a>
                                        </li>
                                        <li>
                                            <a href="/admin/profil_kota/sejarah" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" style="text-decoration: none;">Sejarah</a>
                                        </li>
                                        <li>
                                            <a href="/admin/profil_kota/lambang_kota" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" style="text-decoration: none;">Lambang Kota</a>
                                        </li>
                                        <li>
                                            <a href="/admin/profil_kota/geografis" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" style="text-decoration: none;">Geografis</a>
                                        </li>
                                        <li>
                                            <a href="/admin/profil_kota/demografi" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" style="text-decoration: none;">Demografi</a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- Dropdown selesai -->
                            </ul>
                        </div>
                    </aside>
                    <!-- Sidebar selesai -->
                </div>
            </div>
        </div>
    </div>

    <!-- Menambahkan Script untuk mengaktifkan dropdown -->
    <script>
        const dropdownButton = document.querySelector('[data-collapse-toggle="dropdown-example"]');
        const dropdownMenu = document.getElementById('dropdown-example');

        dropdownButton.addEventListener('click', () => {
            dropdownMenu.classList.toggle('hidden');
        });
    </script>
</x-app-layout>
