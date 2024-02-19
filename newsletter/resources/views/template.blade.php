@include('side')

<div class="w-full m-9 justify-center">
    <div class="h-full">
        <div class="bg-gray-300 p-14 col-span-4">
            <div class="grid gap-6 mb-6 grid-cols-2">
                <div class="flex flex-col">
                    <input class="py-4 bg-white rounded-full px-6 placeholder:text-xs" aria-placeholder="Votre nom"
                           placeholder="Votre nom"></inpu>
                </div>
                <div class="flex flex-col">
                    <input class="py-4 bg-white rounded-full px-6 placeholder:text-xs" aria-placeholder="Votre nom"
                           placeholder="Votre prénom"></inpu>
                </div>
            </div>
            <div class="grid gap-6 mb-6 grid-cols-2">
                <div class="flex flex-col">
                    <input class="py-4 bg-white rounded-full px-6 placeholder:text-xs" aria-placeholder="Votre nom"
                           placeholder="Email Adresse"></inpu>
                </div>
                <div class="flex flex-col">
                    <input class="py-4 bg-white rounded-full px-6 placeholder:text-xs" aria-placeholder="Votre nom"
                           placeholder="Sujet"></inpu>
                </div>
            </div>
            <div class="mb-8">
                <label class="text-xl text-gray-600">Content
                    <span class="text-red-500">*</span></label></br>
                <textarea name="content" class="border-2 border-gray-500" required></textarea>
            </div>
            <div class="flex justify-evenly">
                <div>
                    <select class="border-2 border-gray-300 border-r p-2" name="media">
{{--                        @foreach($medias as $media)--}}
{{--                            @foreach($media['media'] as $image)--}}
                                <option name="media" value="">
                                    <img src="{{asset("")}}" alt="">
                                </option>
{{--                            @endforeach--}}
{{--                        @endforeach--}}
                    </select>
                </div>
                <button
                    class="rounded-full bg-blue-900 text-white font-bold py-4 px-6 min-w-40 hover:bg-blue-800 transition-all">
                    Valider
                </button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('content');
</script>
