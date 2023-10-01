<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="m-0 font-sans antialiased font-normal bg-white text-start text-base leading-default text-slate-500 dark:bg-darkbgbody">
    <main class="mt-0 transition-all duration-200 ease-in-out mx-auto">
        <section class="flex flex-col justify-center antialiased bg-gray-200 dark:bg-darkbgbody text-gray-600 min-h-screen p-4">
            <div class="h-full">
                <!-- Card -->
                <div class="max-w-[360px] mx-auto">
                    <div class="bg-white dark:bg-slate-850 shadow-lg rounded-lg mt-9 dark:shadow-slate-700">
                        <!-- Card header -->
                        <header class="text-center px-5 pb-5">
                            <!-- Avatar -->
                            <img src="{{ asset('img/logo.png') }}" alt="" class="inline-flex -mt-9 w-[72px] h-[72px] fill-current rounded-full border-4 border-white box-content shadow mb-3 bg-slate-800" viewBox="0 0 72 72">
                            <!-- Card name -->
                            <h3 class="text-xl font-bold text-gray-900 mb-1 dark:text-slate-50">Hello Admin!</h3>
                            <div class="text-sm font-medium text-gray-500 dark:text-slate-300">Welcome Back</div>
                        </header>
                        <!-- Card body -->
                        <div class="bg-gray-100 dark:bg-slate-900 text-center px-5 py-6">
                            <form class="space-y-3" action="/login" method="POST">
                                @csrf
                                <div class="flex flex-col shadow-sm rounded">
                                    <div class="flex-grow mb-2">
                                        <input name="email" class="focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" type="text" placeholder="Email" aria-label="Email" />
                                    </div>
                                    <div class="flex-grow">
                                        <input name="password" class="focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" type="password" placeholder="Password" aria-label="Password" />
                                    </div>
                                </div>
                                <button type="submit" class="font-semibold text-sm inline-flex items-center justify-center px-3 py-2 border border-transparent rounded leading-5 shadow transition duration-150 ease-in-out w-full bg-indigo-500 hover:bg-indigo-600 text-white focus:outline-none focus-visible:ring-2">Sign In</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>