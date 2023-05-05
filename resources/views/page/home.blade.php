@extends('root')



@section('content')
    <div class="relative p-2 w-full min-h-screen ">

        {{-- Floating Action Button --}}
        <a href="/product">
            <div class="bottom-20 right-10 fixed rounded-lg text-white font-bold p-3"
                style="background-color: black">Coffee</div>
        </a>

        {{-- Star --}}
        <div class="">
            <div class="flex">
                <div class="text-2xl mr-3">{{ Auth::user()->point }}</div>
                <div class="center w-8 h-8" style='color: {{ $color }}'>
                    <svg height="20px" width="20px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 47.94 47.94" xml:space="preserve">
                        <path style="fill: {{ $color }};"
                            d="M26.285,2.486l5.407,10.956c0.376,0.762,1.103,1.29,1.944,1.412l12.091,1.757
                       c2.118,0.308,2.963,2.91,1.431,4.403l-8.749,8.528c-0.608,0.593-0.886,1.448-0.742,2.285l2.065,12.042
                       c0.362,2.109-1.852,3.717-3.746,2.722l-10.814-5.685c-0.752-0.395-1.651-0.395-2.403,0l-10.814,5.685
                       c-1.894,0.996-4.108-0.613-3.746-2.722l2.065-12.042c0.144-0.837-0.134-1.692-0.742-2.285l-8.749-8.528
                       c-1.532-1.494-0.687-4.096,1.431-4.403l12.091-1.757c0.841-0.122,1.568-0.65,1.944-1.412l5.407-10.956
                       C22.602,0.567,25.338,0.567,26.285,2.486z" />
                    </svg>

                </div>
            </div>
            <p class="text-sm">Star Balance</p>
        </div>

        {{-- Star Progress --}}
        <div class=""></div>


        <div class="" hidden>

            {{ $secondColor = '#e5e7eb' }}
        </div>


        {{-- Custom progress Bar --}}
        <div class="w-full relative mt-5">
            <div class="bg-gray-200 rounded-lg  h-2 absolute z-0 top-[50%] translate-top-[-50%] w-full">
            </div>
            <div class="rounded-lg  h-2 absolute z-10 top-[50%] translate-top-[-50%]"
                style='background-color: {{ $color }}; width: {{ Auth::user()->point }}%'>
            </div>

            <div class="absolute top-[-7px]  translate-x-[-50%] left-[20%]">
                <div class="rounded-full w-5 h-5"
                    style='background-color: {{ Auth::user()->point < 20 ? $secondColor : $color }}'></div>
                <p class="font-bold ">20</p>
            </div>

            <div class="absolute top-[-7px]  translate-x-[-50%] left-[40%]">
                <div class="rounded-full w-5 h-5"
                    style='background-color: {{ Auth::user()->point < 40 ? $secondColor : $color }}'></div>
                <p class="font-bold ">40</p>
            </div>

            <div class="absolute top-[-7px]  translate-x-[-50%] left-[60%]">
                <div class="rounded-full w-5 h-5"
                    style='background-color: {{ Auth::user()->point < 60 ? $secondColor : $color }}'></div>
                <p class="font-bold ">60</p>
            </div>

            <div class="absolute top-[-7px]  translate-x-[-50%] left-[80%]">
                <div class="rounded-full w-5 h-5"
                    style='background-color: {{ Auth::user()->point < 80 ? $secondColor : $color }}'></div>
                <p class="font-bold ">80</p>
            </div>
        </div>

        {{-- Redeem Button --}}
        <div class="mt-20 flex py-1 px-4 w-fit text-white rounded-full bg-gray-800">
            <div class="mr-2">
                Redeem
            </div>
            <div class="center">
                <svg height="20px" width="20px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 47.94 47.94" xml:space="preserve">
                    <path style="fill: #ffbc05;"
                        d="M26.285,2.486l5.407,10.956c0.376,0.762,1.103,1.29,1.944,1.412l12.091,1.757
               c2.118,0.308,2.963,2.91,1.431,4.403l-8.749,8.528c-0.608,0.593-0.886,1.448-0.742,2.285l2.065,12.042
               c0.362,2.109-1.852,3.717-3.746,2.722l-10.814-5.685c-0.752-0.395-1.651-0.395-2.403,0l-10.814,5.685
               c-1.894,0.996-4.108-0.613-3.746-2.722l2.065-12.042c0.144-0.837-0.134-1.692-0.742-2.285l-8.749-8.528
               c-1.532-1.494-0.687-4.096,1.431-4.403l12.091-1.757c0.841-0.122,1.568-0.65,1.944-1.412l5.407-10.956
               C22.602,0.567,25.338,0.567,26.285,2.486z" />
                </svg>
            </div>
        </div>
        <br>
        <div>
            <img src="https://globalassets.starbucks.com/assets/196581be9eda4e4cb0c3b33ac3241ea7.jpg">
        </div>

        <div class="">
            <h1 class="font-bold text-xl mt-5 mb-5">Promo Information</h1>
            <div class="flex">
                <div class="center p-3">
                    <img class="rounded w-[10rem] object-contain" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_iG1TINoOolJ4el2AoCR8wletPIlQ7Xt4nA&usqp=CAU">
                </div>
                <div class="w-fit h-fit">
                    <div class="font-semibold text-xl">Buy 1 Get 1 Coffee</div>
                    <div class="mt-2 tracking-wide text-sm">
                        Looking for a delicious and affordable way to start your day? Look no futher than our "buy 1 get 1"
                        coffee promotion!
                    </div>
                </div>
            </div>
            <hr class="my-3">
            <div class="flex">
                <div class="center p-3">
                    <img class="rounded w-[10rem] object-contain" src="https://1.bp.blogspot.com/-Mkzp-_vkc0Q/YDcVQIoVU0I/AAAAAAAAseA/jv02dk6aC9srX1T7eAfLnelC3emXzztBwCNcBGAsYHQ/s1080/Promo%2BSTARBUCKS%2BTUMBLER%2BDAY.jpg">
                </div>
                <div class="w-fit h-fit">
                    <div class="font-semibold text-xl">Tumblers Day</div>
                    <div class="mt-2 tracking-wide text-sm">
                        Celebrate Tumbler Day with us and get your hands on the perfect reusable cup to keep your drinks hot
                        or cold all day long. Don't miss out on this limited time offer!
                    </div>
                </div>
            </div>
            <hr class="my-3">
            <div class="flex">
                <div class="center p-3">
                    <img class="rounded w-[10rem] object-contain" src="https://1.bp.blogspot.com/-CcbIO7WNoFY/X4EkealSywI/AAAAAAAD9tg/cb8QR2eeyoM3OYBXtEsNxMqgdvJu_EyogCNcBGAsYHQ/s1080/Promo-Starbucks-Tumbler-Merchandise-Official-Discount-50-Off-5.jpg">
                </div>
                <div class="w-fit h-fit">
                    <div class="font-semibold text-xl">30% Discount Tumbler Discount</div>
                    <div class="mt-2 tracking-wide text-sm">
                        Thirsty for a great deal? Get 30% discount an any store available Hurry, limited time offer only. Order
                        now and enjoy your favorite drinks in styles.
                    </div>
                </div>
            </div>
            <hr class="my-3">
        </div>

    </div>
@endsection
