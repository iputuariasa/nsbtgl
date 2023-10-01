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

      <!-- card4 -->
      {{-- <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
        <div class="relative flex flex-col min-w-0 break-words bg-white dark:bg-slate-850 shadow-xl rounded-2xl bg-clip-border">
          <div class="flex-auto p-4">
            <div class="flex flex-row -mx-3">
              <div class="flex-none w-2/3 max-w-full px-3">
                <div>
                  <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase text-slate-500 dark:text-slate-400">Siswa</p>
                  <h5 class="mb-2 font-bold text-slate-700 dark:text-white">103</h5>
                  <p class="mb-0">
                    <span class="text-sm font-bold leading-normal text-emerald-500">+5%</span>
                    tahun ini
                  </p>
                </div>
              </div>
              <div class="px-3 text-right basis-1/3">
                <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-orange-500 to-yellow-500">
                  <i class="ni leading-none ni-cart text-lg relative top-3.5 text-white"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
    </div>

    <!-- cards row 2 -->
    <div class="flex flex-wrap mt-6 -mx-3">
      <div class="w-full max-w-full px-3 mt-0 lg:flex-none">
        <div class="border-black/12.5 shadow-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white dark:bg-slate-850 bg-clip-border">
          <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid p-6 pt-4 pb-0">
            <h6 class="capitalize text-slate-600 dark:text-slate-200">Pendapatan Bulan</h6>
            <p class="mb-0 text-sm leading-normal text-slate-400 dark:text-slate-300">
              <i class="fa fa-arrow-up text-emerald-500"></i>
              <span class="font-semibold">4% more</span> in 2021
            </p>
          </div>
          <div class="flex-auto p-4">
            <div>
              <canvas id="chart-bars" height="300"></canvas>
            </div>
          </div>
        </div>
      </div>

      {{-- <div class="w-full max-w-full px-3 mt-0 lg:w-5/12 lg:flex-none">
        <div class="border-black/12.5 shadow-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white dark:bg-slate-850 bg-clip-border">
          <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid p-6 pt-4 pb-0">
            <h6 class="capitalize text-slate-600 dark:text-slate-200">Pendapatan Pertahun</h6>
            <p class="mb-0 text-sm leading-normal text-slate-400 dark:text-slate-300">
              <i class="fa fa-arrow-up text-emerald-500"></i>
              <span class="font-semibold">4% more</span> in 2021
            </p>
          </div>
          <div class="flex-auto p-4">
            <div>
              <canvas id="chart-line" height="300"></canvas>
            </div>
          </div>
        </div>
      </div> --}}

      {{-- <div class="w-full max-w-full px-3 lg:w-5/12 lg:flex-none">
        <div slider class="relative w-full h-full overflow-hidden rounded-2xl">
          <!-- slide 1 -->
          <div slide class="absolute w-full h-full transition-all duration-500">
            <img class="object-cover h-full" src="../assets/img/carousel-1.jpg" alt="carousel image" />
            <div class="block text-start ml-12 left-0 bottom-0 absolute right-[15%] pt-5 pb-5 text-white">
              <div class="inline-block w-8 h-8 mb-4 text-center text-black bg-white bg-center rounded-lg fill-current stroke-none">
                <i class="top-0.75 text-xxs relative text-slate-700 ni ni-camera-compact"></i>
              </div>
              <h5 class="mb-1 text-white">Get started with Argon</h5>
              <p class="">There’s nothing I really wanted to do in life that I wasn’t able to get good at.</p>
            </div>
          </div>

          <!-- slide 2 -->
          <div slide class="absolute w-full h-full transition-all duration-500">
            <img class="object-cover h-full" src="../assets/img/carousel-2.jpg" alt="carousel image" />
            <div class="block text-start ml-12 left-0 bottom-0 absolute right-[15%] pt-5 pb-5 text-white">
              <div class="inline-block w-8 h-8 mb-4 text-center text-black bg-white bg-center rounded-lg fill-current stroke-none">
                <i class="top-0.75 text-xxs relative text-slate-700 ni ni-bulb-61"></i>
              </div>
              <h5 class="mb-1 text-white">Faster way to create web pages</h5>
              <p class="">That’s my skill. I’m not really specifically talented at anything except for the ability to learn.</p>
            </div>
          </div>

          <!-- slide 3 -->
          <div slide class="absolute w-full h-full transition-all duration-500">
            <img class="object-cover h-full" src="../assets/img/carousel-3.jpg" alt="carousel image" />
            <div class="block text-start ml-12 left-0 bottom-0 absolute right-[15%] pt-5 pb-5 text-white">
              <div class="inline-block w-8 h-8 mb-4 text-center text-black bg-white bg-center rounded-lg fill-current stroke-none">
                <i class="top-0.75 text-xxs relative text-slate-700 ni ni-trophy"></i>
              </div>
              <h5 class="mb-1 text-white">Share with us your design tips!</h5>
              <p class="">Don’t be afraid to be wrong because you can’t learn anything from a compliment.</p>
            </div>
          </div>

          <!-- Control buttons -->
          <button btn-next class="absolute z-10 w-10 h-10 p-2 text-lg text-white border-none opacity-50 cursor-pointer hover:opacity-100 far fa-chevron-right active:scale-110 top-6 right-4"></button>
          <button btn-prev class="absolute z-10 w-10 h-10 p-2 text-lg text-white border-none opacity-50 cursor-pointer hover:opacity-100 far fa-chevron-left active:scale-110 top-6 right-16"></button>
        </div>
      </div> --}}
    </div>

    <!-- cards row 3 -->

    {{-- <div class="flex flex-wrap mt-6 -mx-3">
      <div class="w-full max-w-full px-3 mt-0 mb-6 lg:mb-0 lg:w-full lg:flex-none">
        <div class="relative flex flex-col min-w-0 break-words bg-white dark:bg-slate-850 border-0 border-solid shadow-xl border-black-125 rounded-2xl bg-clip-border">
          <div class="p-4 pb-0 mb-0 rounded-t-4">
            <div class="flex justify-between">
              <h6 class="mb-2 text-slate-600 dark:text-slate-200">Transaksi Terbaru</h6>
            </div>
          </div>
          <div class="overflow-x-auto">
            <table class="items-center w-full mb-4 align-top border-collapse border-gray-200">
              <tbody>
                <tr>
                  <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap">
                    <div class="flex items-center px-2 py-1">
                      <div>
                        <p class="mb-0 text-xs font-semibold leading-tight text-slate-400">NIS:</p>
                        <h6 class="mb-0 text-sm leading-normal text-slate-500 dark:text-slate-200">0001</h6>
                      </div>
                      <div class="ml-6">
                        <p class="mb-0 text-xs font-semibold leading-tight text-slate-400">Nama:</p>
                        <h6 class="mb-0 text-sm leading-normal text-slate-500 dark:text-slate-200">Ni Luh Putu Cahyanti Wulandari</h6>
                      </div>
                    </div>
                  </td>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                    <div class="text-center">
                      <p class="mb-0 text-xs font-semibold leading-tight">Kelas:</p>
                      <h6 class="mb-0 text-sm leading-normal text-slate-500 dark:text-slate-200">X RPL</h6>
                    </div>
                  </td>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                    <div class="text-center">
                      <p class="mb-0 text-xs font-semibold leading-tight">Bulan:</p>
                      <h6 class="mb-0 text-sm leading-normal text-slate-500 dark:text-slate-200">Jul</h6>
                    </div>
                  </td>
                  <td class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap">
                    <div class="flex-1 text-center">
                      <p class="mb-0 text-xs font-semibold leading-tight">Nominal:</p>
                      <h6 class="mb-0 text-sm leading-normal text-slate-500 dark:text-slate-200">Rp.250,000</h6>
                    </div>
                  </td>
                  <td class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap">
                    <div class="flex-1 text-center">
                      <p class="mb-0 text-xs font-semibold leading-tight">Status:</p>
                      <h6 class="mb-0 text-sm leading-normal text-slate-500 dark:text-slate-200">Lunas</h6>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap">
                    <div class="flex items-center px-2 py-1">
                      <div>
                        <p class="mb-0 text-xs font-semibold leading-tight text-slate-400">NIS:</p>
                        <h6 class="mb-0 text-sm leading-normal text-slate-500 dark:text-slate-200">0002</h6>
                      </div>
                      <div class="ml-6">
                        <p class="mb-0 text-xs font-semibold leading-tight text-slate-400">Nama:</p>
                        <h6 class="mb-0 text-sm leading-normal text-slate-500 dark:text-slate-200">I Putu Ariasa</h6>
                      </div>
                    </div>
                  </td>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                    <div class="text-center">
                      <p class="mb-0 text-xs font-semibold leading-tight">Kelas:</p>
                      <h6 class="mb-0 text-sm leading-normal text-slate-500 dark:text-slate-200">XI RPL</h6>
                    </div>
                  </td>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                    <div class="text-center">
                      <p class="mb-0 text-xs font-semibold leading-tight">Bulan:</p>
                      <h6 class="mb-0 text-sm leading-normal text-slate-500 dark:text-slate-200">Jul</h6>
                    </div>
                  </td>
                  <td class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap">
                    <div class="flex-1 text-center">
                      <p class="mb-0 text-xs font-semibold leading-tight">Nominal:</p>
                      <h6 class="mb-0 text-sm leading-normal text-slate-500 dark:text-slate-200">Rp.250,000</h6>
                    </div>
                  </td>
                  <td class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap">
                    <div class="flex-1 text-center">
                      <p class="mb-0 text-xs font-semibold leading-tight">Status:</p>
                      <h6 class="mb-0 text-sm leading-normal text-slate-500 dark:text-slate-200">Lunas</h6>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap">
                    <div class="flex items-center px-2 py-1">
                      <div>
                        <p class="mb-0 text-xs font-semibold leading-tight text-slate-400">NIS:</p>
                        <h6 class="mb-0 text-sm leading-normal text-slate-500 dark:text-slate-200">0003</h6>
                      </div>
                      <div class="ml-6">
                        <p class="mb-0 text-xs font-semibold leading-tight text-slate-400">Nama:</p>
                        <h6 class="mb-0 text-sm leading-normal text-slate-500 dark:text-slate-200">Ni Putu Willy Antari</h6>
                      </div>
                    </div>
                  </td>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                    <div class="text-center">
                      <p class="mb-0 text-xs font-semibold leading-tight">Kelas:</p>
                      <h6 class="mb-0 text-sm leading-normal text-slate-500 dark:text-slate-200">X TKJ</h6>
                    </div>
                  </td>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                    <div class="text-center">
                      <p class="mb-0 text-xs font-semibold leading-tight">Bulan:</p>
                      <h6 class="mb-0 text-sm leading-normal text-slate-500 dark:text-slate-200">Jun</h6>
                    </div>
                  </td>
                  <td class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap">
                    <div class="flex-1 text-center">
                      <p class="mb-0 text-xs font-semibold leading-tight">Nominal:</p>
                      <h6 class="mb-0 text-sm leading-normal text-slate-500 dark:text-slate-200">Rp.250,000</h6>
                    </div>
                  </td>
                  <td class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap">
                    <div class="flex-1 text-center">
                      <p class="mb-0 text-xs font-semibold leading-tight">Status:</p>
                      <h6 class="mb-0 text-sm leading-normal text-slate-500 dark:text-slate-200">Lunas</h6>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap">
                    <div class="flex items-center px-2 py-1">
                      <div>
                        <p class="mb-0 text-xs font-semibold leading-tight text-slate-400">NIS:</p>
                        <h6 class="mb-0 text-sm leading-normal text-slate-500 dark:text-slate-200">0004</h6>
                      </div>
                      <div class="ml-6">
                        <p class="mb-0 text-xs font-semibold leading-tight text-slate-400">Nama:</p>
                        <h6 class="mb-0 text-sm leading-normal text-slate-500 dark:text-slate-200">I Wayan Putra Suarbawa</h6>
                      </div>
                    </div>
                  </td>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                    <div class="text-center">
                      <p class="mb-0 text-xs font-semibold leading-tight">Kelas:</p>
                      <h6 class="mb-0 text-sm leading-normal text-slate-500 dark:text-slate-200">XII MM</h6>
                    </div>
                  </td>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                    <div class="text-center">
                      <p class="mb-0 text-xs font-semibold leading-tight">Bulan:</p>
                      <h6 class="mb-0 text-sm leading-normal text-slate-500 dark:text-slate-200">May</h6>
                    </div>
                  </td>
                  <td class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap">
                    <div class="flex-1 text-center">
                      <p class="mb-0 text-xs font-semibold leading-tight">Nominal:</p>
                      <h6 class="mb-0 text-sm leading-normal text-slate-500 dark:text-slate-200">Rp.250,000</h6>
                    </div>
                  </td>
                  <td class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap">
                    <div class="flex-1 text-center">
                      <p class="mb-0 text-xs font-semibold leading-tight">Status:</p>
                      <h6 class="mb-0 text-sm leading-normal text-slate-500 dark:text-slate-200">Lunas</h6>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap">
                    <div class="flex items-center px-2 py-1">
                      <div>
                        <p class="mb-0 text-xs font-semibold leading-tight text-slate-400">NIS:</p>
                        <h6 class="mb-0 text-sm leading-normal text-slate-500 dark:text-slate-200">0005</h6>
                      </div>
                      <div class="ml-6">
                        <p class="mb-0 text-xs font-semibold leading-tight text-slate-400">Nama:</p>
                        <h6 class="mb-0 text-sm leading-normal text-slate-500 dark:text-slate-200">Ni Luh Satya Pertiwi</h6>
                      </div>
                    </div>
                  </td>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                    <div class="text-center">
                      <p class="mb-0 text-xs font-semibold leading-tight">Kelas:</p>
                      <h6 class="mb-0 text-sm leading-normal text-slate-500 dark:text-slate-200">X TKJ</h6>
                    </div>
                  </td>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                    <div class="text-center">
                      <p class="mb-0 text-xs font-semibold leading-tight">Bulan:</p>
                      <h6 class="mb-0 text-sm leading-normal text-slate-500 dark:text-slate-200">Jul</h6>
                    </div>
                  </td>
                  <td class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap">
                    <div class="flex-1 text-center">
                      <p class="mb-0 text-xs font-semibold leading-tight">Nominal:</p>
                      <h6 class="mb-0 text-sm leading-normal text-slate-500 dark:text-slate-200">Rp.250,000</h6>
                    </div>
                  </td>
                  <td class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap">
                    <div class="flex-1 text-center">
                      <p class="mb-0 text-xs font-semibold leading-tight">Status:</p>
                      <h6 class="mb-0 text-sm leading-normal text-slate-500 dark:text-slate-200">Lunas</h6>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div> --}}
  </div>
@endsection