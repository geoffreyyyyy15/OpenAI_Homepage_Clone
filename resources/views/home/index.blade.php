<x-layout >
        <video class="brightness-75 filter" autoplay muted loop>
            <source src="https://openaicomproductionae4b.blob.core.windows.net/production-twill-01/121dd5e0-eaea-424d-bdf2-db02ca1f5e55/gpt-4-92586ac_1080p60.mp4" type="video/mp4">
                <div class="text-overlay">
                    <p class="absolute">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque voluptatem ratione consequuntur dignissimos, sit praesentium in iusto vitae officia veritatis distinctio corrupti asperiores recusandae nulla tenetur molestiae tempore! Saepe, rerum.</p>
                </div>
            </video>
                <x-container>
                        <x-grid column="4">
                            <x-about
                                file="{{null}}"
                                hidden="hidden"
                                title="Creating safe AGI that benefits all of humanity"
                                excerpt="Learn about OpenAI"
                                />
                            <x-about
                                file="{{null}}"
                                hidden="hidden"
                                title="Pioneering research on the path to AGI"
                                excerpt="Learn about our research"
                                />
                            <x-about
                                file="{{null}}"
                                hidden="hidden"
                                title="Transforming work and creativity with AI"
                                excerpt="Explore our products"
                                />
                            <x-about
                                file="{{null}}"
                                hidden="hidden"
                                title="Join us in shaping the future of technology"
                                excerpt="View careers"
                                />
                        </x-grid>
                </x-container>
        <x-line />
                <x-container >
                    <x-grid column="4" class="">
                        <div>
                            <img src="{{asset('images/chatgpt.jpg')}}" alt="side pic">
                        </div>
                            <div>
                                <p class="text-xl ml-10">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut mollitia deleniti reiciendis natus unde sed labore optio non laboriosam? Veritatis hic perspiciatis ratione nihil dolor expedita quae. Ut, libero ipsum.</p>
                            </div>
                        </x-grid>
                </x-container>
        <x-line />
        <x-container >
            <div class="flex md:flex-row-reverse flex-wrap">
                <x-grid column="4" class="w-full md:w-1/4 bg-gray-400 p-4 text-center text-gray-700">
                    <x-about
                    file="gpt1.png"
                    hidden={{null}}
                    title="Creating safe AGI that benefits all of humanity"
                    excerpt="Learn about OpenAI"/>
                <x-about
                    file="gpt2.png"
                    hidden={{null}}
                    title="Pioneering research on the path to AGI"
                    excerpt="Learn about our research"/>
                <x-about
                    file="gpt3.jpg"
                    hidden={{null}}
                    title="Transforming work and creativity with AI"
                    excerpt="Explore our products"/>
                    <x-about
                    file="gpt4.jpg"
                    hidden={{null}}
                    title="Join us in shaping the future of technology"
                    excerpt="View careers"/>
                </x-grid>
            </div>
        </x-container>
    <x-line />
    <div class="justify-center items-center bg-black p-5">
        <div class="grid grid-cols-3 gap-2 text-white">
            @foreach ($posts as $post)
            <div class="bg-gray-800 rounded-lg p-2">
                {{ $post->title }}
                <div class="bg-gray-900 rounded-lg p-3 mt-2">
                    {{ $post->body }}
                </div>
            </div>
            @endforeach
            {{ $posts->links() }}
    </div>
</div>

</x-layout>
