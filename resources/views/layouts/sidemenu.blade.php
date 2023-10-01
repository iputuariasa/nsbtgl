<aside class="fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white dark:bg-slate-850 dark:text-slate-50 border-0 shadow-xl max-w-64 ease-nav-brand z-990 xl:ml-6 rounded-2xl xl:left-0 xl:translate-x-0 sidescoll" aria-expanded="false">
    <div class="h-19">
        <i class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden" sidenav-close></i>
        <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700" href="https://demos.creative-tim.com/argon-dashboard-tailwind/pages/dashboard.html" target="_blank">
        <img src="{{ asset('img/logobpr.png') }}" class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-8" alt="main_logo" />
        <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand text-slate-700 dark:text-slate-50">NSBTGL</span>
      </a>
    </div>

    <hr class="h-px mt-0 bg-gradient-to-r from-transparent via-slate-400 to-transparent" />

    <div class="items-center block w-auto max-h-screen grow basis-full">
        <ul class="flex flex-col mb-0">
            <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 transition-colors {{ Request::is('/') ? 'myactive' : '' }}" href="/">
                <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-tv-2"></i>
                </div>
                <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Dashboard</span>
            </a>
            </li>

            <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 transition-colors {{ Request::is('t6dt*') ? 'myactive' : '' }}" href="/t6dt">
                <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                <i class="relative top-0 text-sm leading-normal text-orange-500 ni ni-collection"></i>
                </div>
                <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Data T6DT</span>
            </a>
            </li>

            <li class="w-full mt-4">
            <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase opacity-60 text-slate-700 dark:text-slate-50">Account pages</h6>
            </li>

            <li class="mt-0.5 w-full">
            <a class=" py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 transition-colors {{ Request::is('profile*') ? 'myactive' : '' }}" href="/profile">
                <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                <i class="relative top-0 text-sm leading-normal text-slate-700 ni ni-single-02"></i>
                </div>
                <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Profile</span>
            </a>
            </li>

            <li class="mt-0.5 w-full">
            <a class=" py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 transition-colors" href="{{ route('logout') }}">
                <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                <i class="relative top-0 text-sm leading-normal text-red-500 fa-solid fa-right-from-bracket"></i>
                </div>
                <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Sign Out</span>
            </a>
            </li>

            {{-- <li class="mt-0.5 w-full">
            <a class=" py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 transition-colors">
                <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Light</span>
                </div>
                <div class="block pl-0 min-h-6">
                <input id="checkboxMode" class="rounded-10 duration-250 ease-in-out after:rounded-circle after:shadow-2xl after:duration-250 checked:after:translate-x-5.3 h-5 relative float-left mt-1 ml-auto w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-blue-500/95 checked:bg-blue-500/95 checked:bg-none checked:bg-right" type="checkbox" />
                </div>
                <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Dark</span>
                </div>
            </a>
            </li> --}}
        </ul>
    </div>
</aside>