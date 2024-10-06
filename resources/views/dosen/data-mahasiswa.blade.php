<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Jadwal Seminar</title>
</head>
<body class="bg-gray-100">
 
<div class="min-h-screen flex">
  <!-- Sidebar Kiri -->
  <div class="w-1/12 bg-purple-600 flex flex-col items-center py-10 space-y-8">
    <!-- Icons in the Sidebar -->
    <a href="{{ route('dashboard-operator') }}" class="text-white">
      <img src="{{ asset('images/home.png') }}" alt="Home" class="w-8 h-8 mb-4">
    </a>
    <a href="{{ route('data-mahasiswa') }}" class="text-white">
      <img src="{{ asset('images/clipboard.png') }}" alt="Daftar Mahasiswa" class="w-8 h-8 mb-4">
    </a>
    <a href="{{ route('verifikasi-pengajuan-skripsi') }}" class="text-white">
      <img src="{{ asset('images/thesis.png') }}" alt="Skripsi" class="w-8 h-8 mb-4">
    </a>
    <a href="{{ route('jadwal-seminar') }}" class="text-white">
      <img src="{{ asset('images/public-speaking.png') }}" alt="Seminar" class="w-8 h-8 mb-4">
    </a>
    <a href="{{ route('jadwal-bimbingan') }}" class="text-white">
      <img src="{{ asset('images/talk.png') }}" alt="Konsultasi" class="w-8 h-8 mb-4">
    </a>
    <a href="{{ route('evaluasi') }}" class="text-white">
      <img src="{{ asset('images/evaluation.png') }}" alt="Evaluasi" class="w-8 h-8 mb-4">
    </a>
  </div>


    <!-- Main Content -->
    <div class="flex-1 p-6">
      <h2 class="text-2xl font-bold mb-6">Data Mahasiswa</h2>

      <!-- Feature Buttons -->
      <div class="space-y-4">
        <!-- Seminar Proposal -->
        <a href="#" class="bg-purple-400 p-6 rounded-lg text-white shadow-md flex items-center justify-between">
          <span class="text-lg font-bold">Seminar Proposal</span>
        </a>

        <!-- Seminar Hasil -->
        <a href="#" class="bg-purple-400 p-6 rounded-lg text-white shadow-md flex items-center justify-between">
          <span class="text-lg font-bold">Seminar Hasill</span>
        </a>

      </div>
    </div>

   <!-- Right Section (Calendar and Notifications) -->
   <div class="w-1/3 ml-6 space-y-6">
        <!-- Date Range Boxes -->
        <div class="grid grid-cols-2 gap-4">
            <!-- From Date -->
            <div class="bg-white p-4 rounded-lg shadow-md text-center">
                <h4 class="text-lg font-bold">From: 1 September</h4>
            </div>
            <!-- To Date -->
            <div class="bg-white p-4 rounded-lg shadow-md text-center">
                <h4 class="text-lg font-bold">To: 30 September</h4>
            </div>
        </div>

        <!-- Calendar -->
        <div class="bg-purple-500 p-6 rounded-lg shadow-md">
            <h4 class="text-lg font-bold text-white mb-4 text-center">September 2024</h4>
            <div class="grid grid-cols-7 gap-1 text-center text-white">
                <span>Sun</span> <span>Mon</span> <span>Tue</span> <span>Wed</span> <span>Thu</span> <span>Fri</span> <span>Sat</span>
                <!-- Add dates -->
                <span class="text-gray-400">1</span>
                <span class="text-gray-400">2</span>
                <span>3</span>
                <span>4</span>
                <span>5</span>
                <span>6</span>
                <span>7</span>
                <span>8</span>
                <span>9</span>
                <span>10</span>
                <span>11</span>
                <span>12</span>
                <span class="bg-red-500 text-white rounded-full p-2">19</span>
                <span>20</span>
                <span>21</span>
                <span>22</span>
                <span>23</span>
                <span>24</span>
                <span>25</span>
                <span>26</span>
                <span>27</span>
                <span>28</span>
                <span>29</span>
                <span>30</span>
            </div>
        </div>

        <!-- Notification Section -->
        <div class="bg-purple-500 p-6 rounded-lg shadow-md">
            <h4 class="text-lg font-bold text-white mb-4 text-center">Notifikasi</h4>
            <ul class="space-y-4">
                <li class="bg-white p-4 rounded-lg flex justify-between items-center">
                    <span class="text-purple-500 font-bold">Seminar Hasil</span>
                    <span class="text-xs text-gray-500">Mon, 25 Jan 2025</span>
                </li>
                <li class="bg-white p-4 rounded-lg flex justify-between items-center">
                    <span class="text-purple-500 font-bold">Yudisium Periode V</span>
                    <span class="text-xs text-gray-500">Mon, 22 Feb 2025</span>
                </li>
                <li class="bg-white p-4 rounded-lg flex justify-between items-center">
                    <span class="text-purple-500 font-bold">Wisuda 130</span>
                    <span class="text-xs text-gray-500">Thu, 06 Mar 2025</span>
                </li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>
