<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Anxiety Relief Tool')</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('video-fix.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --sage-50: #f6f7f4;
            --sage-100: #e8ebe4;
            --sage-200: #d4daca;
            --sage-300: #b8c4a8;
            --sage-400: #2a3107;
            --sage-500: #2a3107;
            --sage-600: #2a3107; /* primary green */
            --sage-700: #2a3107;
            --cream-50: #fefdfb;
            --cream-100: #fdfbf7;
            --cream-200: #f9f5ed;
            --stone-100: #f5f5f4;
            --stone-200: #e7e5e4;
            --stone-300: #d6d3d1;
            --stone-400: #000000;
            --stone-500: #000000;
            --stone-600: #57534e;
            --stone-700: #44403c;
            --stone-800: #292524;
            --stone-900: #1c1917;
            --teal-500: #14b8a6;
            --teal-600: #0d9488;
            --purple-400: #c084fc;
            --purple-500: #a855f7;
            --purple-600: #9333ea;
            --amber-400: #fbbf24;
            --amber-500: #f59e0b;
            --amber-600: #d97706;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        html { scroll-behavior: smooth; }

        body {
            font-family: 'Inter', system-ui, sans-serif;
            /* Foto ruang operasi + overlay gradient lembut, tetap terang demi keterbacaan */
            background-image:
                linear-gradient(160deg, rgba(254, 253, 251, 0.92) 0%, rgba(246, 247, 244, 0.92) 40%, rgba(232, 235, 228, 0.94) 100%),
                url('{{ asset('assets/images/operating-room.jpg') }}');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-blend-mode: soft-light;
            color: var(--stone-700);
            line-height: 1.7;
            min-height: 100vh;
            -webkit-font-smoothing: antialiased;
        }

        /* Global heading & text color for stronger contrast */
        h1, h2, h3, h4, h5, h6 {
            color: var(--stone-800);
        }


        .font-serif { font-family: 'Cormorant Garamond', Georgia, serif; }

        /* Gradient Utilities */
        .bg-gradient-to-br { background-image: linear-gradient(to bottom right, var(--tw-gradient-stops)); }
        .bg-gradient-to-tl { background-image: linear-gradient(to top left, var(--tw-gradient-stops)); }
        .bg-gradient-to-r { background-image: linear-gradient(to right, var(--tw-gradient-stops)); }

        .from-sage-50 { --tw-gradient-from: var(--sage-50); --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, transparent); }
        .from-sage-100 { --tw-gradient-from: var(--sage-100); --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, transparent); }
        .from-sage-200\/30 { --tw-gradient-from: rgba(212, 218, 202, 0.3); --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, transparent); }
        .from-sage-100\/40 { --tw-gradient-from: rgba(232, 235, 228, 0.4); --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, transparent); }
        .from-sage-400 { --tw-gradient-from: #9aad85; --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, transparent); }
        .from-sage-500 { --tw-gradient-from: var(--sage-500); --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, transparent); }
        .to-sage-50 { --tw-gradient-to: var(--sage-50); }
        .to-sage-500 { --tw-gradient-to: var(--sage-500); }
        .to-sage-600 { --tw-gradient-to: var(--sage-600); }
        .via-cream-100 { --tw-gradient-stops: var(--tw-gradient-from), var(--cream-100), var(--tw-gradient-to, transparent); }
        .via-sage-50 { --tw-gradient-stops: var(--tw-gradient-from), var(--sage-50), var(--tw-gradient-to, transparent); }
        .to-transparent { --tw-gradient-to: transparent; }
        .to-cream-50 { --tw-gradient-to: var(--cream-50); }

        .from-teal-100 { --tw-gradient-from: #ccfbf1; --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, transparent); }
        .from-teal-200\/30 { --tw-gradient-from: rgba(153, 246, 228, 0.3); --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, transparent); }
        .from-teal-100\/40 { --tw-gradient-from: rgba(204, 251, 241, 0.4); --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, transparent); }
        .from-teal-400 { --tw-gradient-from: #2dd4bf; --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, transparent); }
        .to-teal-50 { --tw-gradient-to: #f0fdfa; }
        .to-teal-100 { --tw-gradient-to: #ccfbf1; }
        .to-teal-500 { --tw-gradient-to: var(--teal-500); }
        .to-teal-600 { --tw-gradient-to: var(--teal-600); }

        .from-purple-100 { --tw-gradient-from: #f3e8ff; --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, transparent); }
        .from-purple-200\/30 { --tw-gradient-from: rgba(233, 213, 255, 0.3); --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, transparent); }
        .from-purple-100\/40 { --tw-gradient-from: rgba(243, 232, 255, 0.4); --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, transparent); }
        .from-purple-400 { --tw-gradient-from: var(--purple-400); --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, transparent); }
        .to-purple-50 { --tw-gradient-to: #faf5ff; }
        .to-purple-500 { --tw-gradient-to: var(--purple-500); }
        .to-purple-600 { --tw-gradient-to: var(--purple-600); }

        .from-amber-50\/50 { --tw-gradient-from: rgba(255, 251, 235, 0.5); --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, transparent); }
        .from-amber-100 { --tw-gradient-from: #fef3c7; --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, transparent); }
        .from-amber-200\/30 { --tw-gradient-from: rgba(253, 230, 138, 0.3); --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, transparent); }
        .from-amber-100\/40 { --tw-gradient-from: rgba(254, 243, 199, 0.4); --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, transparent); }
        .from-amber-400 { --tw-gradient-from: var(--amber-400); --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, transparent); }
        .to-amber-50 { --tw-gradient-to: #fffbeb; }
        .to-amber-600 { --tw-gradient-to: var(--amber-600); }

        .from-stone-400 { --tw-gradient-from: var(--stone-400); --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, transparent); }
        .to-stone-500 { --tw-gradient-to: var(--stone-500); }

        .from-cream-200\/30 { --tw-gradient-from: rgba(249, 245, 237, 0.3); --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, transparent); }

        .text-gradient-sage {
            background: linear-gradient(135deg, var(--sage-600) 0%, var(--teal-600) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(20px) saturate(180%);
            -webkit-backdrop-filter: blur(20px) saturate(180%);
            border: 1px solid rgba(255, 255, 255, 0.5);
        }

        .shadow-soft { box-shadow: 0 4px 20px -2px rgba(0,0,0,0.05), 0 2px 8px -2px rgba(0,0,0,0.03); }
        .shadow-elevated { box-shadow: 0 20px 40px -10px rgba(0,0,0,0.06), 0 8px 16px -8px rgba(0,0,0,0.03); }
        .shadow-glow-sage { box-shadow: 0 0 50px -15px rgba(125, 149, 103, 0.25); }
        .shadow-glass { box-shadow: 0 8px 32px -4px rgba(0,0,0,0.05), 0 4px 16px -2px rgba(0,0,0,0.02); }

        .glass-card-strong {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(24px) saturate(200%);
            -webkit-backdrop-filter: blur(24px) saturate(200%);
            border: 1px solid rgba(255, 255, 255, 0.6);
        }

        /* Navigation Links */
        .nav-link {
            padding: 8px 16px;
            font-size: 0.9rem;
            font-weight: 500;
            color: var(--stone-600);
            text-decoration: none;
            border-radius: 10px;
            transition: all 0.3s ease;
        }
        .nav-link:hover { color: var(--sage-600); background: var(--sage-50); }

        .mobile-nav-link {
            display: block;
            padding: 12px 16px;
            font-size: 0.95rem;
            font-weight: 500;
            color: var(--stone-600);
            text-decoration: none;
            border-radius: 12px;
            transition: all 0.3s ease;
        }
        .mobile-nav-link:hover { color: var(--sage-700); background: var(--sage-50); }

        /* Feature Cards */
        .feature-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-radius: 24px;
            padding: 28px;
            border: 1px solid rgba(255, 255, 255, 0.5);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .feature-card:hover {
            background: rgba(255, 255, 255, 0.85);
            transform: translateY(-4px);
            box-shadow: 0 20px 40px -12px rgba(0, 0, 0, 0.08);
        }

        .feature-card-interactive {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-radius: 24px;
            padding: 24px;
            border: 1px solid rgba(255, 255, 255, 0.5);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .feature-card-interactive:hover {
            background: rgba(255, 255, 255, 0.9);
            transform: translateY(-6px);
            box-shadow: 0 24px 48px -12px rgba(0, 0, 0, 0.1);
        }

        /* Benefit Item */
        .benefit-item {
            display: flex;
            align-items: flex-start;
            gap: 14px;
            padding: 14px;
            border-radius: 16px;
            background: rgba(255, 255, 255, 0.5);
            transition: all 0.3s ease;
        }
        .benefit-item:hover {
            background: rgba(255, 255, 255, 0.8);
        }

        /* Progress Bar Animation */
        .progress-bar {
            animation: progressFill 1.5s ease-out forwards;
            transform-origin: left;
        }
        @keyframes progressFill {
            from { transform: scaleX(0); }
            to { transform: scaleX(1); }
        }

        /* Stat Item */
        .stat-item {
            text-align: center;
        }

        /* Bounce Slow Animation */
        @keyframes bounceSlow {
            0%, 100% { transform: translateY(0) translateX(-50%); }
            50% { transform: translateY(6px) translateX(-50%); }
        }
        .animate-bounce-slow { animation: bounceSlow 2s ease-in-out infinite; }

        /* Ping Animation */
        @keyframes ping {
            75%, 100% { transform: scale(2); opacity: 0; }
        }
        .animate-ping { animation: ping 1.5s cubic-bezier(0, 0, 0.2, 1) infinite; }

        .btn-primary {
            background: linear-gradient(135deg, var(--sage-500) 0%, var(--sage-600) 100%);
            color: white;
            padding: 14px 32px;
            border-radius: 50px;
            font-weight: 500;
            font-size: 0.95rem;
            letter-spacing: 0.3px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: none;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            text-decoration: none;
        }
        .btn-primary:hover { transform: translateY(-2px); box-shadow: 0 12px 28px -6px rgba(125, 149, 103, 0.35); }

        .btn-secondary {
            background: transparent;
            color: var(--stone-600);
            padding: 14px 32px;
            border-radius: 50px;
            font-weight: 500;
            font-size: 0.95rem;
            letter-spacing: 0.3px;
            transition: all 0.3s ease;
            border: 1.5px solid var(--stone-200);
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            text-decoration: none;
        }
        .btn-secondary:hover { border-color: var(--sage-400); background: var(--sage-50); color: var(--sage-700); }

        @keyframes fadeInUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
        @keyframes breathe { 0%, 100% { transform: scale(1); opacity: 0.5; } 50% { transform: scale(1.03); opacity: 0.7; } }
        @keyframes float { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-12px); } }
        @keyframes pulse-soft { 0%, 100% { opacity: 0.3; } 50% { opacity: 0.6; } }

        .animate-fade-in-up { animation: fadeInUp 0.8s ease-out forwards; }
        .animate-breathe { animation: breathe 6s ease-in-out infinite; }
        .animate-float { animation: float 8s ease-in-out infinite; }
        .animate-pulse-soft { animation: pulse-soft 4s ease-in-out infinite; }
        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }

        /* Additional Color Utilities */
        .bg-sage-50 { background-color: var(--sage-50); }
        .bg-sage-100 { background-color: var(--sage-100); }
        .bg-sage-200 { background-color: var(--sage-200); }
        .text-sage-500 { color: var(--sage-500); }
        .text-sage-600 { color: var(--sage-600); }
        .text-sage-700 { color: var(--sage-700); }
        .border-sage-100 { border-color: var(--sage-100); }
        .border-sage-300 { border-color: var(--sage-300); }

        .bg-teal-50 { background-color: #f0fdfa; }
        .bg-teal-100 { background-color: #ccfbf1; }
        .text-teal-500 { color: var(--teal-500); }
        .text-teal-600 { color: var(--teal-600); }
        .text-teal-700 { color: #0f766e; }
        .border-teal-100 { border-color: #ccfbf1; }
        .border-teal-300 { border-color: #5eead4; }

        .bg-purple-50 { background-color: #faf5ff; }
        .bg-purple-100 { background-color: #f3e8ff; }
        .text-purple-500 { color: #a855f7; }
        .text-purple-600 { color: #9333ea; }
        .text-purple-700 { color: #7e22ce; }
        .border-purple-100 { border-color: #f3e8ff; }
        .border-purple-300 { border-color: #d8b4fe; }

        .bg-amber-50 { background-color: #fffbeb; }
        .bg-amber-100 { background-color: #fef3c7; }
        .bg-amber-300 { background-color: #fcd34d; }
        .text-amber-400 { color: #fbbf24; }
        .text-amber-500 { color: #f59e0b; }
        .text-amber-600 { color: #d97706; }
        .text-amber-700 { color: #b45309; }
        .border-amber-100 { border-color: #fef3c7; }
        .border-amber-200 { border-color: #fde68a; }
        .border-amber-300 { border-color: #fcd34d; }
        .border-amber-400 { border-color: #fbbf24; }

        .from-amber-50 { --tw-gradient-from: #fffbeb; --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, transparent); }
        .via-amber-50 { --tw-gradient-stops: var(--tw-gradient-from), #fffbeb, var(--tw-gradient-to, transparent); }
        .to-amber-500 { --tw-gradient-to: #f59e0b; }
        .from-teal-50 { --tw-gradient-from: #f0fdfa; --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, transparent); }
        .via-teal-50 { --tw-gradient-stops: var(--tw-gradient-from), #f0fdfa, var(--tw-gradient-to, transparent); }
        .from-purple-50 { --tw-gradient-from: #faf5ff; --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, transparent); }
        .via-purple-50 { --tw-gradient-stops: var(--tw-gradient-from), #faf5ff, var(--tw-gradient-to, transparent); }
        .via-sage-500 { --tw-gradient-stops: var(--tw-gradient-from), var(--sage-500), var(--tw-gradient-to, transparent); }

        .from-sage-300\/20 { --tw-gradient-from: rgba(184, 196, 168, 0.2); --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, transparent); }
        .from-teal-200\/15 { --tw-gradient-from: rgba(153, 246, 228, 0.15); --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, transparent); }
        .from-sage-200\/20 { --tw-gradient-from: rgba(212, 218, 202, 0.2); --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, transparent); }
        .from-cream-200\/30 { --tw-gradient-from: rgba(249, 245, 237, 0.3); --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, transparent); }
        .from-teal-200\/20 { --tw-gradient-from: rgba(153, 246, 228, 0.2); --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, transparent); }
        .from-teal-200\/30 { --tw-gradient-from: rgba(153, 246, 228, 0.3); --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, transparent); }
        .from-sage-200\/40 { --tw-gradient-from: rgba(212, 218, 202, 0.4); --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, transparent); }
        .from-sage-50\/30 { --tw-gradient-from: rgba(246, 247, 244, 0.3); --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, transparent); }
        .from-sage-50\/20 { --tw-gradient-from: rgba(246, 247, 244, 0.2); --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, transparent); }
        .to-sage-200 { --tw-gradient-to: var(--sage-200); }
        .via-sage-200 { --tw-gradient-stops: var(--tw-gradient-from), var(--sage-200), var(--tw-gradient-to, transparent); }
        .via-teal-200 { --tw-gradient-stops: var(--tw-gradient-from), #99f6e4, var(--tw-gradient-to, transparent); }

        .from-sage-200\/50 { --tw-gradient-from: rgba(212, 218, 202, 0.5); --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, transparent); }
        .from-teal-200\/50 { --tw-gradient-from: rgba(153, 246, 228, 0.5); --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, transparent); }
        .from-purple-200\/50 { --tw-gradient-from: rgba(233, 213, 255, 0.5); --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, transparent); }
        .from-amber-200\/50 { --tw-gradient-from: rgba(253, 230, 138, 0.5); --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, transparent); }
        .from-sage-200\/30 { --tw-gradient-from: rgba(212, 218, 202, 0.3); --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, transparent); }
        .from-amber-50\/80 { --tw-gradient-from: rgba(255, 251, 235, 0.8); --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, transparent); }
        .to-cream-50\/50 { --tw-gradient-to: rgba(254, 253, 251, 0.5); }

        .bg-sage-300\/50 { background-color: rgba(184, 196, 168, 0.5); }
        .bg-sage-200\/50 { background-color: rgba(212, 218, 202, 0.5); }
        .bg-sage-300\/30 { background-color: rgba(184, 196, 168, 0.3); }
        .bg-teal-200\/50 { background-color: rgba(153, 246, 228, 0.5); }
        .bg-teal-300\/30 { background-color: rgba(94, 234, 212, 0.3); }
        .bg-purple-200\/50 { background-color: rgba(233, 213, 255, 0.5); }
        .bg-purple-300\/30 { background-color: rgba(216, 180, 254, 0.3); }
        .bg-amber-200\/50 { background-color: rgba(253, 230, 138, 0.5); }
        .bg-amber-300\/30 { background-color: rgba(252, 211, 77, 0.3); }

        .bg-sage-400 { background-color: #9aad85; }
        .bg-sage-500 { background-color: var(--sage-500); }
        .bg-teal-400 { background-color: #2dd4bf; }
        .bg-teal-500 { background-color: var(--teal-500); }
        .bg-purple-400 { background-color: var(--purple-400); }
        .bg-purple-500 { background-color: var(--purple-500); }
        .bg-amber-400 { background-color: var(--amber-400); }
        .bg-amber-500 { background-color: var(--amber-500); }

        .bg-sage-100\/80 { background-color: rgba(232, 235, 228, 0.8); }
        .bg-teal-100\/80 { background-color: rgba(204, 251, 241, 0.8); }

        .shadow-sage-500\/20 { box-shadow: 0 10px 30px -5px rgba(125, 149, 103, 0.2); }
        .shadow-sage-500\/30 { box-shadow: 0 12px 32px -6px rgba(125, 149, 103, 0.3); }
        .shadow-sage-500\/40 { box-shadow: 0 14px 36px -6px rgba(125, 149, 103, 0.4); }
        .shadow-teal-500\/20 { box-shadow: 0 10px 30px -5px rgba(20, 184, 166, 0.2); }
        .shadow-teal-500\/30 { box-shadow: 0 12px 32px -6px rgba(20, 184, 166, 0.3); }
        .shadow-purple-500\/20 { box-shadow: 0 10px 30px -5px rgba(168, 85, 247, 0.2); }
        .shadow-purple-500\/30 { box-shadow: 0 12px 32px -6px rgba(168, 85, 247, 0.3); }
        .shadow-amber-500\/20 { box-shadow: 0 10px 30px -5px rgba(245, 158, 11, 0.2); }

        .hover\:bg-sage-100:hover { background-color: var(--sage-100); }
        .hover\:bg-sage-500:hover { background-color: var(--sage-500); }
        .hover\:bg-teal-500:hover { background-color: var(--teal-500); }
        .hover\:bg-purple-500:hover { background-color: var(--purple-500); }
        .hover\:bg-amber-500:hover { background-color: var(--amber-500); }

        .hover\:text-sage-600:hover { color: var(--sage-600); }
        .hover\:text-sage-700:hover { color: var(--sage-700); }
        .hover\:text-teal-700:hover { color: #0f766e; }
        .hover\:text-purple-700:hover { color: #7e22ce; }
        .hover\:text-amber-700:hover { color: #b45309; }

        .bg-cream-50 { background-color: var(--cream-50); }
        .bg-cream-100 { background-color: var(--cream-100); }

        .text-stone-400 { color: var(--stone-400); }
        .text-stone-500 { color: var(--stone-500); }
        .text-stone-600 { color: var(--stone-600); }
        .text-stone-700 { color: var(--stone-700); }
        .text-stone-800 { color: var(--stone-800); }
        .bg-stone-100 { background-color: var(--stone-100); }
        .border-stone-100 { border-color: var(--stone-100); }
        .border-stone-200 { border-color: var(--stone-200); }

        /* Audio element styling */
        audio { border-radius: 12px; width: 100%; }
        audio::-webkit-media-controls-panel { background: linear-gradient(to right, var(--sage-50), var(--cream-50)); }

        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: var(--cream-100); }
        ::-webkit-scrollbar-thumb { background: var(--sage-300); border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: var(--sage-400); }
        ::selection { background: var(--sage-200); color: var(--sage-900); }
    </style>
    @yield('styles')
</head>
<body>
    @yield('content')
    <script src="{{ asset('script.js') }}"></script>
    @yield('scripts')
</body>
</html>
