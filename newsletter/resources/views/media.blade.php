@include('side')
<section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
    <div class="text-center pb-12">
        <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl font-heading text-gray-900">
            Check our awesome Templates
        </h1>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6">

        @foreach($medias as $media)
            @foreach($media->getMedia() as $mediaItem)
                <div class="w-full bg-white rounded-lg shadow-lg overflow-hidden flex flex-col justify-center items-center">
                    <div style="width: 200px; height: 200px;"> <!-- Set width and height as needed -->
                        <img src="{{ asset('storage/' . "$mediaItem->id/" . $mediaItem->file_name) }}" alt="Media Image" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="text-center py-8 sm:py-6">
                        <p class="text-xl text-gray-700 font-bold mb-2">{{$mediaItem->name}}</p>
                        <p class="text-base text-gray-400 font-normal">{{ $mediaItem->created_at->toFormattedDateString() }}</p>
                        <p class="text-base text-gray-400 font-normal">{{ $user[$media->user_id] }}</p>
                    </div>
                </div>
            @endforeach
        @endforeach
    </div>
</section>
