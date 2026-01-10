<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard') - Anxiety Relief Tool</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', system-ui, sans-serif;
            background: #f8f9fa;
        }

        .sidebar-item {
            transition: all 0.2s ease;
        }

        .sidebar-item:hover {
            background: rgba(59, 130, 246, 0.1);
            transform: translateX(4px);
        }

        .sidebar-item.active {
            background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
            color: white;
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
        }

        .sidebar-item.active i {
            color: white;
        }

        .card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .card:hover {
            transform: translateY(-4px) scale(1.01);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
        }

        .btn {
            transition: all 0.2s ease;
        }

        .btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .btn:active {
            transform: translateY(0);
        }

        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .gradient-blue {
            background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
        }

        .gradient-teal {
            background: linear-gradient(135deg, #14b8a6 0%, #0d9488 100%);
        }

        .gradient-green {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        }

        .gradient-purple {
            background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 100%);
        }

        .gradient-orange {
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in {
            animation: fadeIn 0.5s ease-out;
        }
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3b82f6',
                        secondary: '#64748b',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside class="w-64 bg-white border-r border-gray-200 flex flex-col shadow-lg">
            <!-- Logo / Brand -->
            <div class="h-16 flex items-center px-6 border-b border-gray-200 bg-gradient-to-r from-blue-50 to-indigo-50">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-lg gradient-blue flex items-center justify-center shadow-md">
                        <i class="fas fa-spa text-white text-lg"></i>
                    </div>
                    <div>
                        <h1 class="text-base font-bold text-gray-800">Anxiety Relief</h1>
                        <p class="text-xs text-gray-500">Admin Panel</p>
                    </div>
                </div>
            </div>

            <!-- Navigation Menu -->
            <nav class="flex-1 px-4 py-6 space-y-2 overflow-y-auto">
                <div class="mb-4">
                    <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider px-3 mb-3">Menu Utama</p>
                </div>

                <a href="{{ route('admin.relaxation.edit', 'musik') }}"
                   class="sidebar-item flex items-center gap-3 px-4 py-3 rounded-lg text-sm font-medium text-gray-700 {{ request()->is('admin/musik') ? 'active' : '' }}">
                    <i class="fas fa-music w-5 text-center text-blue-500"></i>
                    <span>Musik Relaksasi</span>
                </a>

                <a href="{{ route('admin.relaxation.edit', 'pernapasan') }}"
                   class="sidebar-item flex items-center gap-3 px-4 py-3 rounded-lg text-sm font-medium text-gray-700 {{ request()->is('admin/pernapasan') ? 'active' : '' }}">
                    <i class="fas fa-wind w-5 text-center text-teal-500"></i>
                    <span>Latihan Pernapasan</span>
                </a>

                <a href="{{ route('admin.relaxation.edit', 'mindfulness') }}"
                   class="sidebar-item flex items-center gap-3 px-4 py-3 rounded-lg text-sm font-medium text-gray-700 {{ request()->is('admin/mindfulness') ? 'active' : '' }}">
                    <i class="fas fa-brain w-5 text-center text-purple-500"></i>
                    <span>Latihan Mindfulness</span>
                </a>

                <a href="{{ route('admin.relaxation.edit', 'visual') }}"
                   class="sidebar-item flex items-center gap-3 px-4 py-3 rounded-lg text-sm font-medium text-gray-700 {{ request()->is('admin/visual') ? 'active' : '' }}">
                    <i class="fas fa-eye w-5 text-center text-green-500"></i>
                    <span>Relaksasi Visual</span>
                </a>

                <div class="my-4 border-t border-gray-200"></div>

                <a href="{{ route('admin.relaxation.index') }}"
                   class="sidebar-item flex items-center gap-3 px-4 py-3 rounded-lg text-sm font-medium text-gray-700 {{ request()->is('admin') && !request()->is('admin/*') ? 'active' : '' }}">
                    <i class="fas fa-th-large w-5 text-center text-gray-500"></i>
                    <span>Semua Halaman</span>
                </a>
            </nav>

            <!-- User / Logout Section -->
            <div class="px-4 py-4 border-t border-gray-200 bg-gray-50">
                <div class="flex items-center gap-3 mb-3 px-2">
                    <div class="w-9 h-9 rounded-full bg-gradient-to-br from-blue-400 to-indigo-500 flex items-center justify-center text-white font-semibold text-sm shadow-md">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-semibold text-gray-800 truncate">Administrator</p>
                        <p class="text-xs text-gray-500">Admin Panel</p>
                    </div>
                </div>
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full flex items-center justify-center gap-2 px-4 py-2.5 rounded-lg text-sm font-medium text-red-600 bg-red-50 hover:bg-red-100 transition-colors">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content Area -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Top Header -->
            <header class="h-16 bg-white border-b border-gray-200 flex items-center justify-between px-8 shadow-sm">
                <div>
                    <h2 class="text-lg font-semibold text-gray-800">@yield('page-title', 'Dashboard')</h2>
                    <p class="text-xs text-gray-500">@yield('page-subtitle', 'Kelola konten relaksasi')</p>
                </div>
                <div class="flex items-center gap-4">
                    <div class="text-right">
                        <p class="text-xs text-gray-400">{{ now()->isoFormat('dddd, D MMMM Y') }}</p>
                        <p class="text-xs font-medium text-gray-600">{{ now()->isoFormat('HH:mm') }} WIB</p>
                    </div>
                </div>
            </header>

            <!-- Main Content -->
            <main class="flex-1 overflow-y-auto bg-gray-50 p-8">
                <div class="max-w-7xl mx-auto animate-fade-in">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>
</body>
</html>
