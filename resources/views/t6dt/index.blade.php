@extends('layouts.main')

@section('container')
  <div class="w-full px-6 py-6 mx-auto">
    <!-- row 1 -->
    <div class="flex flex-wrap -mx-3">
      <!-- card1 -->
      <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-4/12">
        <div class="relative flex flex-col min-w-0 break-words bg-white dark:bg-slate-850 shadow-xl rounded-2xl bg-clip-border">
          <div class="flex-auto p-4">
            <div class="flex flex-row -mx-3">
              <div class="flex-none w-2/3 max-w-full px-3">
                <div>
                  <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase text-slate-500 dark:text-slate-400">Data T6DT</p>
                  <h5 class="mb-2 font-bold text-slate-700 dark:text-white">1000</h5>
                  <p class="mb-0">
                    <span class="text-sm font-bold leading-normal text-emerald-500"></span>
                    bulan ini
                  </p>
                </div>
              </div>
              <div class="px-3 text-right basis-1/3">
                <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-blue-500 to-violet-500">
                  <i class="ni leading-none ni-money-coins text-lg relative top-3.5 text-white"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- card2 -->
      <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-4/12">
        <div class="relative flex flex-col min-w-0 break-words bg-white dark:bg-slate-850 shadow-xl rounded-2xl bg-clip-border">
          <div class="flex-auto p-4">
            <div class="flex flex-row -mx-3">
              <div class="flex-none w-2/3 max-w-full px-3">
                <div>
                  <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase text-slate-500 dark:text-slate-400">Lebih dari 100JT</p>
                  <h5 class="mb-2 font-bold text-slate-700 dark:text-white">20</h5>
                  <p class="mb-0">
                    <span class="text-sm font-bold leading-normal text-emerald-500"></span>
                    bulan ini
                  </p>
                </div>
              </div>
              <div class="px-3 text-right basis-1/3">
                <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-red-600 to-orange-600">
                  <i class="ni leading-none ni-world text-lg relative top-3.5 text-white"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- card3 -->
      <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-4/12">
        <div class="relative flex flex-col min-w-0 break-words bg-white dark:bg-slate-850 shadow-xl rounded-2xl bg-clip-border">
          <div class="flex-auto p-4">
            <div class="flex flex-row -mx-3">
              <div class="flex-none w-2/3 max-w-full px-3">
                <div>
                  <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase text-slate-500 dark:text-slate-400">Lebih dari 500JT</p>
                  <h5 class="mb-2 font-bold text-slate-700 dark:text-white">5</h5>
                  <p class="mb-0">
                    <span class="text-sm font-bold leading-normal text-red-600"></span>
                    bulan ini
                  </p>
                </div>
              </div>
              <div class="px-3 text-right basis-1/3">
                <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-emerald-500 to-teal-400">
                  <i class="ni leading-none ni-paper-diploma text-lg relative top-3.5 text-white"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
    <div class="flex flex-wrap -mx-3">
        <div class="w-full max-w-full px-3 py-3 mb-6">
            <form action="" class="relative">
                <input class="block w-full text-sm text-black border border-gray-300 rounded-lg cursor-pointer bg-white focus:outline-none" id="file_input" type="file">
                <button type="submit" class="absolute top-0 right-0 h-full rounded-md bg-indigo-600 px-20 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </form>
        </div>
    </div>
  </div>
@endsection