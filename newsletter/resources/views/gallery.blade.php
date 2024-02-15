<script src="https://cdn.tailwindcss.com"></script>

<nav class="flex justify-center">
    <a href="/"
       class="hidden xl:block font-abhaya-libre uppercase text-gray-800 tracking-wider px-4 xl:px-8 py-2 text-lg hover:underline">Home</a>
    <a href="/about"
       class="hidden xl:block font-abhaya-libre uppercase text-gray-800 tracking-wider px-4 xl:px-8 py-2 text-lg hover:underline">About</a>
    <a href="#"
       class="hidden xl:block font-abhaya-libre uppercase text-gray-800 tracking-wider px-4 xl:px-8 py-2 text-lg hover:underline">Gallery</a>
</nav>

<div class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-slate-100 py-6 sm:py-12">
    <div class="min-h-28 ">
        <div class="max-w-screen-lg mx-auto py-4">
            <div
                class="rounded-lg overflow-hidden relative before:absolute before:z-20 before:bg-black before:h-full before:w-full before:bg-gradient-to-tr before:from-black before:to-emerald-600 before:opacity-80">
                <img src="https://loremflickr.com/320/240?random=1"
                     class="absolute z-10 object-cover h-80 w-full h-full" alt="">
                <a href="" class="absolute z-20  top-1/2  right-20 text-white -translate-y-1/2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-20 h-20">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M15.91 11.672a.375.375 0 0 1 0 .656l-5.603 3.113a.375.375 0 0 1-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112Z"/>
                    </svg>
                </a>
                <div class="relative z-20 p-10 h-full w-1/2">
                    <h2 class="text-white text-3xl font-semibold">ASA fitoriana ny filazantsara iarivo avaradrano</h2>
                    <h3 class="text-white text-xl">Docteur Irako Andriamahasoa Ammi</h3>
                    <p class="text-sm text-slate-200 mt-4">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga veritatis officiis cupiditate sed
                        sint natus alias placeat, asperiores tempore reiciendis.
                    </p>
                </div>
            </div>

            {{--                @foreach($medias as $media)--}}
            {{--                    @foreach($media->getMedia() as $mediaItem)--}}
            {{--                <div class="flex gap-6 mt-6">--}}
            {{--                    <div class="bg-white w-1/3 shadow rounded-lg overflow-hidden flex flex-col">--}}
            {{--                        <img src="{{ asset('storage/' . "$mediaItem->id/" . $mediaItem->file_name) }}" class="object-cover h-52 w-full" alt="">--}}
            {{--                        <div class="p-6 flex flex-col flex-1">--}}
            {{--                            <span class="block text-slate-400 font-semibold text-sm">{{ $mediaItem->created_at->toFormattedDateString() }}</span>--}}
            {{--                            <h3 class="mt-3 mb-2 font-bold text-lg">--}}
            {{--                                <a href="https://play.tailwindcss.com/TGny89rOkl?layout=horizontal">--}}
            {{--                                    Fiofanana FLM SPIA 19 11 Fevrier 2023</a></h3>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                @endforeach--}}
            {{--                @endforeach--}}


        </div>
    </div>
</div>
