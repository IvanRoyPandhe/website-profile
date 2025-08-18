<x-filament-panels::page>
    <div class="space-y-6">
        <!-- Welcome Card -->
        <div class="bg-gradient-to-r from-blue-700 to-blue-600 dark:from-gray-800 dark:to-gray-700 rounded-3xl p-8 text-white shadow-2xl border border-yellow-400">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-bold mb-2">Selamat Datang di Admin Panel</h1>
                    <p class="text-blue-100 dark:text-gray-300 text-lg">Program Studi Gizi - Universitas Muhammadiyah Gresik</p>
                </div>
                <div class="hidden md:block">
                    <div class="w-24 h-24 bg-yellow-400 rounded-full flex items-center justify-center">
                        <x-heroicon-o-academic-cap class="w-12 h-12 text-blue-700" />
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Overview -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            {{ $this->getWidgets()[0] }}
        </div>

        <!-- Quick Actions -->
        <div class="bg-white dark:bg-gray-800 rounded-3xl p-8 shadow-xl border border-blue-100 dark:border-gray-600">
            <h2 class="text-2xl font-bold text-blue-700 dark:text-blue-400 mb-6 flex items-center">
                <x-heroicon-o-bolt class="w-6 h-6 mr-2 text-yellow-500" />
                Aksi Cepat
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <a href="/admin/beritas" class="group bg-gradient-to-br from-blue-50 to-blue-100 dark:from-gray-700 dark:to-gray-600 hover:from-yellow-50 hover:to-yellow-100 dark:hover:from-yellow-600 dark:hover:to-yellow-500 p-6 rounded-2xl border border-blue-200 dark:border-gray-500 hover:border-yellow-400 transition-all duration-300 transform hover:scale-105">
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-blue-600 group-hover:bg-yellow-500 rounded-xl flex items-center justify-center mr-4 transition-colors">
                            <x-heroicon-o-newspaper class="w-6 h-6 text-white" />
                        </div>
                        <div>
                            <h3 class="font-semibold text-blue-700 dark:text-blue-300 group-hover:text-yellow-600 dark:group-hover:text-gray-800">Kelola Berita</h3>
                            <p class="text-sm text-blue-500 dark:text-blue-400 group-hover:text-yellow-500 dark:group-hover:text-gray-700">Tambah & edit berita</p>
                        </div>
                    </div>
                </a>

                <a href="/admin/profile-dosens" class="group bg-gradient-to-br from-blue-50 to-blue-100 dark:from-gray-700 dark:to-gray-600 hover:from-yellow-50 hover:to-yellow-100 dark:hover:from-yellow-600 dark:hover:to-yellow-500 p-6 rounded-2xl border border-blue-200 dark:border-gray-500 hover:border-yellow-400 transition-all duration-300 transform hover:scale-105">
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-blue-600 group-hover:bg-yellow-500 rounded-xl flex items-center justify-center mr-4 transition-colors">
                            <x-heroicon-o-user-group class="w-6 h-6 text-white" />
                        </div>
                        <div>
                            <h3 class="font-semibold text-blue-700 dark:text-blue-300 group-hover:text-yellow-600 dark:group-hover:text-gray-800">Profile Dosen</h3>
                            <p class="text-sm text-blue-500 dark:text-blue-400 group-hover:text-yellow-500 dark:group-hover:text-gray-700">Kelola data dosen</p>
                        </div>
                    </div>
                </a>

                <a href="/admin/prestasi-mahasiswas" class="group bg-gradient-to-br from-blue-50 to-blue-100 dark:from-gray-700 dark:to-gray-600 hover:from-yellow-50 hover:to-yellow-100 dark:hover:from-yellow-600 dark:hover:to-yellow-500 p-6 rounded-2xl border border-blue-200 dark:border-gray-500 hover:border-yellow-400 transition-all duration-300 transform hover:scale-105">
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-blue-600 group-hover:bg-yellow-500 rounded-xl flex items-center justify-center mr-4 transition-colors">
                            <x-heroicon-o-trophy class="w-6 h-6 text-white" />
                        </div>
                        <div>
                            <h3 class="font-semibold text-blue-700 dark:text-blue-300 group-hover:text-yellow-600 dark:group-hover:text-gray-800">Prestasi</h3>
                            <p class="text-sm text-blue-500 dark:text-blue-400 group-hover:text-yellow-500 dark:group-hover:text-gray-700">Data prestasi mahasiswa</p>
                        </div>
                    </div>
                </a>

                <a href="/admin/agendas" class="group bg-gradient-to-br from-blue-50 to-blue-100 dark:from-gray-700 dark:to-gray-600 hover:from-yellow-50 hover:to-yellow-100 dark:hover:from-yellow-600 dark:hover:to-yellow-500 p-6 rounded-2xl border border-blue-200 dark:border-gray-500 hover:border-yellow-400 transition-all duration-300 transform hover:scale-105">
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-blue-600 group-hover:bg-yellow-500 rounded-xl flex items-center justify-center mr-4 transition-colors">
                            <x-heroicon-o-calendar-days class="w-6 h-6 text-white" />
                        </div>
                        <div>
                            <h3 class="font-semibold text-blue-700 dark:text-blue-300 group-hover:text-yellow-600 dark:group-hover:text-gray-800">Agenda</h3>
                            <p class="text-sm text-blue-500 dark:text-blue-400 group-hover:text-yellow-500 dark:group-hover:text-gray-700">Kelola agenda kegiatan</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="bg-white dark:bg-gray-800 rounded-3xl p-8 shadow-xl border border-blue-100 dark:border-gray-600">
            <h2 class="text-2xl font-bold text-blue-700 dark:text-blue-400 mb-6 flex items-center">
                <x-heroicon-o-clock class="w-6 h-6 mr-2 text-yellow-500" />
                Aktivitas Terbaru
            </h2>
            <div class="space-y-4">
                <div class="flex items-center p-4 bg-gradient-to-r from-blue-50 to-blue-100 dark:from-gray-700 dark:to-gray-600 rounded-2xl border-l-4 border-yellow-400">
                    <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center mr-4">
                        <x-heroicon-o-plus class="w-5 h-5 text-white" />
                    </div>
                    <div>
                        <p class="font-semibold text-blue-700 dark:text-blue-300">Berita baru ditambahkan</p>
                        <p class="text-sm text-blue-500 dark:text-blue-400">2 jam yang lalu</p>
                    </div>
                </div>
                
                <div class="flex items-center p-4 bg-gradient-to-r from-yellow-50 to-yellow-100 dark:from-yellow-800 dark:to-yellow-700 rounded-2xl border-l-4 border-blue-400">
                    <div class="w-10 h-10 bg-yellow-500 rounded-full flex items-center justify-center mr-4">
                        <x-heroicon-o-pencil class="w-5 h-5 text-white" />
                    </div>
                    <div>
                        <p class="font-semibold text-yellow-700 dark:text-yellow-200">Profile dosen diperbarui</p>
                        <p class="text-sm text-yellow-600 dark:text-yellow-300">5 jam yang lalu</p>
                    </div>
                </div>
                
                <div class="flex items-center p-4 bg-gradient-to-r from-green-50 to-green-100 dark:from-green-800 dark:to-green-700 rounded-2xl border-l-4 border-green-400">
                    <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center mr-4">
                        <x-heroicon-o-trophy class="w-5 h-5 text-white" />
                    </div>
                    <div>
                        <p class="font-semibold text-green-700 dark:text-green-200">Prestasi mahasiswa baru</p>
                        <p class="text-sm text-green-600 dark:text-green-300">1 hari yang lalu</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-filament-panels::page>