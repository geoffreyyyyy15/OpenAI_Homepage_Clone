<x-layout >
        <video class="relative brightness-75 filter" autoplay muted loop>
            <source src="https://openaicomproductionae4b.blob.core.windows.net/production-twill-01/121dd5e0-eaea-424d-bdf2-db02ca1f5e55/gpt-4-92586ac_1080p60.mp4" type="video/mp4">
                <p class="absolute z-10 text-white top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque voluptatem ratione consequuntur dignissimos, sit praesentium in iusto vitae officia veritatis distinctio corrupti asperiores recusandae nulla tenetur molestiae tempore! Saepe, rerum.
                </p>
            </video>
                <x-container title="">
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

                                <x-underline-word text="Read about chatGPT" />

                        </div>
                        </div>
                    </div>
                <div class="p-4">
                </div>
        <x-line />
        <x-container title="Latest updates">
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

    <x-grid column="3" class=" gap-10" >
        <div class="ml-10 mr-20 pr-11 col-span-2 ">
            <h1 class="text-white" style="font-size: 40px;">Safety & responsibility</h1>
        </div>
        <div class="ml-20">
          <p class="text-white mb-5" style="font-size: 25px;">Our work to create safe and beneficial AI requires a deep understanding of the potential risks and benefits, as well as careful consideration of the impact.</p>
          <x-underline-word text="Learn about safety" />
        </div>
    </x-grid>
    <div class="m-2 mt-10">
        <img class="min-w-full" src="https://openaicom.imgix.net/971cb9d4-66e4-46b0-95d8-f3b57931b08e/stangel-2022-0052.jpg" alt="">
    </div>
    <x-line />

    <x-grid column="3" class=" gap-10" >
        <div class="ml-10 mr-20 pr-11 col-span-2 ">
            <h1 class="text-white" style="font-size: 40px;">Research</h1>
        </div>
        <div class="ml-20">
          <p class="text-white mb-5" style="font-size: 25px;">We research generative models and how to align them with human values.</p>
          <x-underline-word text="Learn about our research" />
        </div>
    </x-grid>
    <div class="flex flex-wrap ">
        <x-grid column="4" class="mt-20 m-5 p-10">
            <x-about
            file="chatgpt1.png"
            hidden={{null}}
            title="GPT-4"
            excerpt="March 14, 2023"
            />
        <x-about
            file="chatgpt2.png"
            hidden={{null}}
            title="Forecasting potential misuses of language models for disinformation"
            excerpt="Jan 11, 2023"
            />
        <x-about
            file="chatgpt3.png"
            hidden={{null}}
            title="Transforming work and creativity with AI"
            excerpt="Dec 16, 2022"
            />
            <x-about
            file="chatgpt4.jpg"
            hidden={{null}}
            title="Join us in shaping the future of technology"
            excerpt="Sep 21, 2022"
            />
        </x-grid>
    </div>
    <x-line />
    <x-grid column="4" class=" gap-10" >
        <div class="ml-10 mr-20 pr-11 col-span-2 ">
            <h1 class="text-white" style="font-size: 40px;">Products</h1>
        </div>
        <div class="ml-20">
          <p class="text-white mb-5" style="font-size: 25px;">Our API platform offers our latest models and guides for safety best practices.</p>
          <x-underline-word text="Explore our products" />
        </div>
    </x-grid>
    <div class="flex flex-wrap ">
        <x-grid column="4" class="mt-20 m-5 p-10">
            <x-about
            file="section1.jpg"
            hidden={{null}}
            title="New and improved embedding model"
            excerpt="March 14, 2023"
            />
        <x-about
            file="section2.jpg"
            hidden={{null}}
            title="DALL·E now available without waitlist"
            excerpt="Jan 11, 2023"
            />
        <x-about
            file="section3.jpg"
            hidden={{null}}
            title="New and improved content moderation tooling"
            excerpt="Dec 16, 2022"
            />
            <x-about
            file="section4.jpg"
            hidden={{null}}
            title="New GPT-3 capabilities: Edit & insert"
            excerpt="Sep 21, 2022"
            />
        </x-grid>
    </div>
    <x-line />
</x-layout>
