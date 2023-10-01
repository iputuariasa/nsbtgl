<nav class="flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all ease-in shadow-none border-2 border-slate-50 dark:border-slate-600 outline-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start sticky top-[1%] backdrop-saturate-200 backdrop-blur-2xl bg-[hsla(0,0%,100%,0.8)] shadow-blur z-110 dark:bg-indigo-950" navbar-main navbar-scroll="false">
    <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
        <nav>
            <!-- breadcrumb -->
            <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
            <li class="text-sm leading-normal">
                <a class="text-black dark:text-white opacity-50" href="javascript:;">Pages</a>
            </li>
            <li class="text-sm pl-2 capitalize leading-normal text-slate-600 dark:text-white before:float-left before:pr-2 before:text-white before:content-['/']" aria-current="page">{{ $title }}</li>
            </ol>
            <h6 class="mb-0 font-bold text-slate-800 dark:text-white capitalize">{{ $title }}</h6>
        </nav>

        <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
            <div class="flex items-center md:ml-auto">
                @if ($title == 'Data T6DT')
                    <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease">
                        <span class="text-sm ease leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                        <i class="fas fa-search"></i>
                        </span>
                        <input type="text" class="pl-9 text-sm focus:shadow-primary-outline ease w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none focus:transition-shadow" placeholder="Type here..." />
                    </div>
                @endif
            </div>
            <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
            {{-- <li class="flex items-center me-3">
                <a href="{{ route('logout') }}" class="block px-0 py-2 text-sm font-semibold text-slate-700 dark:text-white transition-all ease-nav-brand">
                    <i class="fa-solid fa-right-from-bracket sm:mr-1"></i>
                <span class="hidden sm:inline">Sign Out</span>
                </a>
            </li> --}}
            <li class="flex items-center pl-4 xl:hidden">
                <a href="javascript:;" class="block p-0 text-sm text-white transition-all ease-nav-brand" sidenav-trigger>
                <div class="w-4.5 overflow-hidden">
                    <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
                    <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
                    <i class="ease relative block h-0.5 rounded-sm bg-white transition-all"></i>
                </div>
                </a>
            </li>

            <!-- notifications -->

            <li class="relative flex items-center pr-2 pl-4">
                <p class="hidden transform-dropdown-show"></p>
                <a href="javascript:;" class="block p-0 text-sm text-white dark:bg-slate-850 transition-all ease-nav-brand" dropdown-trigger aria-expanded="false">
                <img src="{{ asset('img/user.png') }}" alt="" class="w-7 h-7">
                </a>

                <ul dropdown-menu class="shadow-2xl text-sm transform-dropdown before:font-awesome before:leading-default before:duration-350 before:ease lg:shadow-3xl duration-250 min-w-44 before:sm:right-8 before:text-5.5 pointer-events-none absolute right-0 top-0 z-50 origin-top list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:right-2 before:left-auto before:top-0 before:z-50 before:inline-block before:font-normal before:text-white before:antialiased before:transition-all before:content-['\f0d8'] sm:-mr-6 lg:absolute lg:right-0 lg:left-auto lg:mt-2 lg:block lg:cursor-pointer dark:text-slate-50 dark:bg-slate-850">
                <!-- add show class on dropdown open js -->
                <li class="relative mb-2">
                    <a class="ease py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent duration-300 lg:transition-colors" href="javascript:;">
                        <div class="flex py-1 px-4">
                            <div class="my-auto">
                            <img src="{{ asset('img/user.png') }}" class="inline-flex items-center justify-center mr-4 text-sm text-white h-9 w-9 max-w-none rounded-xl" />
                            </div>
                            <div class="flex flex-col justify-center">
                            <h6 class="text-sm font-normal leading-normal"><span class="font-semibold text-slate-700 dark:text-slate-50">{{ Auth::user()->email }}</span></h6>
                                <a href="{{ route('logout') }}" class="inline-block w-fit px-4 text-sm font-semibold text-slate-100 dark:text-white bg-red-600 rounded-md">
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                    <span class="sm:inline">Sign Out</span>
                                </a>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>