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
                <div class="grid grid-cols-2 gap-4 xs:block xl:inline-flex">
                    <div class="p-4"><img src="{{asset('images/chatgpt.jpg')}}" alt=""></div>
                    <div class="p-10 m-10"> 
                        <h1 class="text-4xl text-white font-bold mb-4">
                            ChatGPT
                        </h1>
                        <p class="text-xl text-white">
                            We’ve trained a model called ChatGPT which interacts in a conversational way. The dialogue format makes it possible for ChatGPT to answer follow-up questions, admit its mistakes, challenge incorrect premises, and reject inappropriate requests.</p>
                         <div class="flex items-center mt-2 ">
                            <a href="#" class="text-white mr-3 flex items-center font-bold gap-1">
                                <span class="f-ui-1 underline-thickness-1 underline-offset-4 underline  group-hover:decoration-[rgba(var(--text-primary-rgb),0.2)]">Try ChatGPT</span>
                                <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="a-icon--arrow-north-east400 a-icon--text a-icon--no-align top-[0.05em] relative f-ui-1" style="width:1em;height:1em;">
                                    <polygon fill="currentColor" points="5 4.31 5 5.69 9.33 5.69 2.51 12.51 3.49 13.49 10.31 6.67 10.31 11 11.69 11 11.69 4.31 5 4.31"></polygon>
                                </svg>
                            </a>
                        </div>
                        <div class="flex items-center mt-2 ">
                            <a href="#" class="text-white mr-3 flex items-center font-bold gap-1">
                                <span class="f-ui-1 underline-thickness-1 underline-offset-4 underline  group-hover:decoration-[rgba(var(--text-primary-rgb),0.2)]">Read about ChatGPT</span>   
                            </a>
                        </div>
                        </div>
                       
                   
                    </div>
                
                <div class="p-4">
                   
                </div>
        <x-line />
        <x-container title="Latest Update">
            <div class="flex flex-wrap ">
                <x-grid column="4" class="">
                    <x-about
                    file="gpt1.png"
                    hidden={{null}}
                    title="Creating safe AGI that benefits all of humanity"
                    excerpt="Learn about OpenAI"
                    />
                <x-about
                    file="gpt2.png"
                    hidden={{null}}
                    title="Pioneering research on the path to AGI"
                    excerpt="Learn about our research"
                    />
                <x-about
                    file="gpt3.jpg"
                    hidden={{null}}
                    title="Transforming work and creativity with AI"
                    excerpt="Explore our products"
                    />
                    <x-about
                    file="gpt4.jpg"
                    hidden={{null}}
                    title="Join us in shaping the future of technology"
                    excerpt="View careers"
                    />
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
