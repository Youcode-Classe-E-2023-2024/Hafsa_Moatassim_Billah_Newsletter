@include('side')
<section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
    <div class="text-center pb-12">
        <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl font-heading text-gray-900">
            Check our awesome team members
        </h1>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($medias as $media)
            @foreach($media->getMedia() as $mediaItem)
                <div
                    class="w-full bg-white rounded-lg sahdow-lg overflow-hidden flex flex-col justify-center items-center">
                    <div>
                        <img class="object-center object-cover h-auto w-full"
                             src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80"
                             alt="photo">
                    </div>
                    <div class="text-center py-8 sm:py-6">
                        <p class="text-xl text-gray-700 font-bold mb-2">{{$mediaItem->name}}</p>
                        <p class="text-base text-gray-400 font-normal">{{$mediaItem->mime_type}}</p>
                        <p class="text-base text-gray-400 font-normal">{{ $user[$media->user_id] }}</p>
                    </div>
                </div>
            @endforeach
        @endforeach
    </div>
</section>
