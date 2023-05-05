@extends('root')



@section('content')
    <div class="container">


        <div class="flex flex-wrap">
            <button
                style="background-color: {{ $category == -1 ? 'black' : 'white' }}; color: {{ $category == -1 ? 'white' : 'black' }}"
                class="p-3 w-fit border border-black font-bold m-2">All</button>
            @foreach ($categories as $curr)
                <form action="/product" method="post">
                    @csrf
                    <input hidden value="{{ $curr->id }}" name="category" type="text">
                    <button type="submit"
                        style="background-color: {{ $curr->id == $category ? 'black' : 'white' }}; color: {{ $curr->id == $category ? 'white' : 'black' }}"
                        class="p-3 border border-black font-bold m-2">{{ $curr->name }}</button>
                </form>
            @endforeach
        </div>

        <hr class="my-3" />

        <div class="center flex-wrap">
            @foreach ($coffees as $coffee)
                <div class=" m-3 relative w-fit border border-black">
                    <div class="w-full h-full absolute left-0 top-0 opacity-0 z-0 coffeeContainer">{{ $coffee->id }}    
                    </div>
                        <img src="{{ $coffee->image_url }}" class="p-3  w-40 h-40" alt="">
                        <div class="text-center absolute bottom-0 w-full">
                            <div class="">
                                <p class="text-black">Price : {{ $coffee->price }}</p>
                                <p class="text-black  font-bold">{{ $coffee->name }}</p>
                            </div>
                        </div>
                        {{-- invicible block --}}
                    <div class="w-full h-12"></div>
                </div>
            @endforeach
        </div>
        <div class="modal" style="display: none" id="modal">
            <div class="center fixed  top-0 left-0 w-screen h-screen ">
                <div class="absolute z-20 w-full h-full bg-black opacity-50"></div>
                <div class="center z-30 bg-white p-5 rounded-lg min-h-[100px]">
                    <div class="">
                        <p class="font-bold text-lg">Are you sure want to buy this ? </p>
                        <div class="center">
                            <form class="w-[50%] mr-2 mt-4" action="/buy" method="post">
                                @csrf
                                <input hidden type="text" id="coffeeInput" name="coffeeId">
                                <button type="submit" class="z-[200] bg-black px-3 py-1 text-white w-full">Yes</button>
                            </form>
                            <button id="noBtn" class="bg-black px-3 py-1 text-white ml-2 w-[50%]">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@vite('resources/js/modal.js')
