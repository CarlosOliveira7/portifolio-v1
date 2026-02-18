<script src="https://cdn.tailwindcss.com"></script>
<script>
    tailwind.config = {
        theme: {
            extend: {
                keyframes: {
                    typewriter: {
                        'to': {
                            left: '78%'
                        }
                    },
                    blink: {
                        '50%': {
                            borderColor: 'transparent'
                        }
                    }
                },
                animation: {
                    typewriter: 'typewriter 3s steps(10) infinite',
                    blink: 'blink 0.5s infinite'
                }
            }
        }
    }
</script>
<header class="mx-auto max-w-screen-lg px-1 py-6 flex items-center justify-between">

    <!-- Logo -->
    <div class="relative w-max font-medium text-xl font-bold text-gray-200 flex items-center">
        <span>Dev Carlos</span>

        <div class="absolute inset-0 bg-[#020617] animate-typewriter border-l-2  ml-1"></div>

        <img class="w-6 h-6 animate-pulse mx-0.5" src="/images/cli3.png" alt="terminal-image">
    </div>

    <!-- Links -->
    <div>
        <ul class="flex gap-x-3 font-medium text-gray-200">
            <li><a href="https://github.com/CarlosOliveira7" target="_blank" class="p-3 rounded-lg hover:bg-slate-950 transition-colors duration-300">GitHub</a></li>
            <li><a href="https://www.linkedin.com/in/devcarlosz/" target="_blank" class="p-3 rounded-lg hover:bg-slate-950 transition-colors duration-300">LinkedIn</a></li>
            <li><a href="https://wa.me/qr/MPTPWJPWTNTVF1" class="p-3 rounded-lg hover:bg-slate-950 transition-colors duration-300">Contate-me</a></li>

        </ul>
    </div>

</header>