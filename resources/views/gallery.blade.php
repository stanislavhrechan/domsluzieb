@extends('layouts.app')
@section('content')
<div class="">
    <div class="grid grid-cols-1  gap-4">

        <div class="group relative overflow-hidden bg-neutral-900">
            <img src="{{asset('images/gallery/img1.jpg')}}"
                 class="w-full h-full ">
            <div class="absolute inset-0 bg-black/0 group-hover:bg-black/40 transition duration-500"></div>
        </div>

        <div class="group relative overflow-hidden bg-neutral-900">
            <img src="{{asset('images/gallery/img2.jpg')}}" loading="lazy"
                 class="w-full h-full ">
            <div class="absolute inset-0 bg-black/0 group-hover:bg-black/40 transition duration-500"></div>
        </div>

        <div class="group relative overflow-hidden bg-neutral-900">
            <img src="{{asset('images/gallery/img3.jpg')}}" loading="lazy"
                 class="w-full h-full ">
            <div class="absolute inset-0 bg-black/0 group-hover:bg-black/40 transition duration-500"></div>
        </div>

        <div class="group relative overflow-hidden bg-neutral-900">
            <img src="{{asset('images/gallery/img4.jpg')}}" loading="lazy"
                 class="w-full h-full ">
            <div class="absolute inset-0 bg-black/0 group-hover:bg-black/40 transition duration-500"></div>
        </div>

        <div class="group relative overflow-hidden bg-neutral-900">
            <img src="{{asset('images/gallery/img5.jpg')}}" loading="lazy"
                 class="w-full h-full ">
            <div class="absolute inset-0 bg-black/0 group-hover:bg-black/40 transition duration-500"></div>
        </div>

         <div class="group relative overflow-hidden bg-neutral-900">
            <img src="{{asset('images/gallery/img6.jpg')}}" loading="lazy"
                 class="w-full h-full ">
            <div class="absolute inset-0 bg-black/0 group-hover:bg-black/40 transition duration-500"></div>
        </div>

         <div class="group relative overflow-hidden bg-neutral-900">
            <img src="{{asset('images/gallery/img7.jpg')}}" loading="lazy"
                 class="w-full h-full ">
            <div class="absolute inset-0 bg-black/0 group-hover:bg-black/40 transition duration-500"></div>
        </div>
       

    </div>

</div>

@endsection