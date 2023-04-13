<x-layout >
    <div class="relative">
        <video class="brightness-50 filter xs:min-h-full " autoplay muted loop>
            <source src="https://openaicomproductionae4b.blob.core.windows.net/production-twill-01/121dd5e0-eaea-424d-bdf2-db02ca1f5e55/gpt-4-92586ac_1080p60.mp4" type="video/mp4">
        </video>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 p-5">
        <p class="z-20 mt-10 font-extrabold text-white mb-10 xs:mt-5  text-xl xs:text-lg md:text-6xl" style="font-weight: 700">
                Introducing GPT-4, OpenAI’s most advanced system
            </p>
            <button class=" bg-transparent border hover:bg-white hover:text-black p-2 md:p-2  border-white  font-bold text-white text-sm" >Learn about GPT-4</button>
            <x-underline-word text="View GPT-4 research" class="ml-2" />
        </div>
        </div>
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
                                <span class="f-ui-1 underline-thickness-1 underline underline-offset-4 hover:decoration-gray-800 group-hover:decoration-[rgba(var(--text-primary-rgb),0.2)]">Try ChatGPT</span>
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
    <x-grid column="4" class=" gap-10" >
        <div class="ml-10 mr-20 pr-11 col-span-2 ">
            <h1 class="text-white" style="font-size: 40px;">Careers at OpenAI</h1>
        </div>
        <div class="ml-20">
          <p class="text-white mb-5" style="font-size: 25px;">Developing safe and beneficial AI requires people from a wide range of disciplines and backgrounds.</p>
          <x-underline-word text="View careers" />
        </div>
    </x-grid>
    <div class="mt-20">
        <img src="https://openaicom.imgix.net/47e8bf4c-ffd5-4b80-b481-568ed1329f97/stangel-2022-1598.jpg" alt="">
    </div>
    <hr class="h-px my-8 bg-gray-800 border-0 dark:bg-gray-700 m-2">

    <x-grid column="2" >
        <div class="ml-5 mr-20 pr-11">
            <h1 class="text-white ml-5" style="font-size: 40px;">''
                I encourage my team to keep learning. Ideas in different topics or fields can often inspire new ideas and broaden the potential solution space.''
            </h1>
            <div class="text-white mt-5 ml-5 font-bold">
                <p >Lilian Weng</p>
                <p >Applied AI at OpenAI</p>
            </div>
        </div>
        <div class="mr-5">
         <img class="w-auto" src="https://openaicom.imgix.net/734af367-24c1-4043-934c-269a6a3ec47e/stangel-2022-0484.jpg?fm=auto&auto=compress,format&fit=min&rect=462,0,2841,2840&w=1919&h=1918" alt="">
        </div>
    </x-grid>
    <x-line />
    <div class="flex items-center justify-start ml-5 mb-10">
        <h1 class="text-white text-6xl">Join us in shaping the future of technology.</h1>

    </div>
    <div class="flex items-center justify-center mt-5 mb-20">
        <button class="bg-transparent border border-white w-screen p-7 m-5 hover:bg-white hover:text-black text-white text-2xl">View Careers</button>
    </div>

    <div class="grid grid-cols-5 xs:grid-cols-2 md:grid-cols-5 xs:ml-5">
        <div class="">
            <a href="#" class="flex items-center">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1180 320" class="a-icon--logo-text flex h-32 max-w-[126px]" style="width:118;height:32;" data-new="" aria-hidden="true" data-v-22ee7e7c=""><g fill="#ffffff" data-v-22ee7e7c=""><path d="m367.44 153.84c0 52.32 33.6 88.8 80.16 88.8s80.16-36.48 80.16-88.8-33.6-88.8-80.16-88.8-80.16 36.48-80.16 88.8zm129.6 0c0 37.44-20.4 61.68-49.44 61.68s-49.44-24.24-49.44-61.68 20.4-61.68 49.44-61.68 49.44 24.24 49.44 61.68z"></path><path d="m614.27 242.64c35.28 0 55.44-29.76 55.44-65.52s-20.16-65.52-55.44-65.52c-16.32 0-28.32 6.48-36.24 15.84v-13.44h-28.8v169.2h28.8v-56.4c7.92 9.36 19.92 15.84 36.24 15.84zm-36.96-69.12c0-23.76 13.44-36.72 31.2-36.72 20.88 0 32.16 16.32 32.16 40.32s-11.28 40.32-32.16 40.32c-17.76 0-31.2-13.2-31.2-36.48z"></path><path d="m747.65 242.64c25.2 0 45.12-13.2 54-35.28l-24.72-9.36c-3.84 12.96-15.12 20.16-29.28 20.16-18.48 0-31.44-13.2-33.6-34.8h88.32v-9.6c0-34.56-19.44-62.16-55.92-62.16s-60 28.56-60 65.52c0 38.88 25.2 65.52 61.2 65.52zm-1.44-106.8c18.24 0 26.88 12 27.12 25.92h-57.84c4.32-17.04 15.84-25.92 30.72-25.92z"></path><path d="m823.98 240h28.8v-73.92c0-18 13.2-27.6 26.16-27.6 15.84 0 22.08 11.28 22.08 26.88v74.64h28.8v-83.04c0-27.12-15.84-45.36-42.24-45.36-16.32 0-27.6 7.44-34.8 15.84v-13.44h-28.8z"></path><path d="m1014.17 67.68-65.28 172.32h30.48l14.64-39.36h74.4l14.88 39.36h30.96l-65.28-172.32zm16.8 34.08 27.36 72h-54.24z"></path><path d="m1163.69 68.18h-30.72v172.32h30.72z"></path><path d="m297.06 130.97c7.26-21.79 4.76-45.66-6.85-65.48-17.46-30.4-52.56-46.04-86.84-38.68-15.25-17.18-37.16-26.95-60.13-26.81-35.04-.08-66.13 22.48-76.91 55.82-22.51 4.61-41.94 18.7-53.31 38.67-17.59 30.32-13.58 68.54 9.92 94.54-7.26 21.79-4.76 45.66 6.85 65.48 17.46 30.4 52.56 46.04 86.84 38.68 15.24 17.18 37.16 26.95 60.13 26.8 35.06.09 66.16-22.49 76.94-55.86 22.51-4.61 41.94-18.7 53.31-38.67 17.57-30.32 13.55-68.51-9.94-94.51zm-120.28 168.11c-14.03.02-27.62-4.89-38.39-13.88.49-.26 1.34-.73 1.89-1.07l63.72-36.8c3.26-1.85 5.26-5.32 5.24-9.07v-89.83l26.93 15.55c.29.14.48.42.52.74v74.39c-.04 33.08-26.83 59.9-59.91 59.97zm-128.84-55.03c-7.03-12.14-9.56-26.37-7.15-40.18.47.28 1.3.79 1.89 1.13l63.72 36.8c3.23 1.89 7.23 1.89 10.47 0l77.79-44.92v31.1c.02.32-.13.63-.38.83l-64.41 37.19c-28.69 16.52-65.33 6.7-81.92-21.95zm-16.77-139.09c7-12.16 18.05-21.46 31.21-26.29 0 .55-.03 1.52-.03 2.2v73.61c-.02 3.74 1.98 7.21 5.23 9.06l77.79 44.91-26.93 15.55c-.27.18-.61.21-.91.08l-64.42-37.22c-28.63-16.58-38.45-53.21-21.95-81.89zm221.26 51.49-77.79-44.92 26.93-15.54c.27-.18.61-.21.91-.08l64.42 37.19c28.68 16.57 38.51 53.26 21.94 81.94-7.01 12.14-18.05 21.44-31.2 26.28v-75.81c.03-3.74-1.96-7.2-5.2-9.06zm26.8-40.34c-.47-.29-1.3-.79-1.89-1.13l-63.72-36.8c-3.23-1.89-7.23-1.89-10.47 0l-77.79 44.92v-31.1c-.02-.32.13-.63.38-.83l64.41-37.16c28.69-16.55 65.37-6.7 81.91 22 6.99 12.12 9.52 26.31 7.15 40.1zm-168.51 55.43-26.94-15.55c-.29-.14-.48-.42-.52-.74v-74.39c.02-33.12 26.89-59.96 60.01-59.94 14.01 0 27.57 4.92 38.34 13.88-.49.26-1.33.73-1.89 1.07l-63.72 36.8c-3.26 1.85-5.26 5.31-5.24 9.06l-.04 89.79zm14.63-31.54 34.65-20.01 34.65 20v40.01l-34.65 20-34.65-20z"></path></g></svg>
          </a>
        </div>
        <div class="flex  font-bold text-white ">
           <ul>
            <li><span class=" underline-thickness-1 underline-offset-4 hover:underline">
                <a href="#">Research</a>
            </span></li>
            <li><span class=" underline-thickness-1 underline-offset-4 hover:underline">
                <a href="#">Overview</a>
            </span></li>
            <li><span class=" underline-thickness-1 underline-offset-4 hover:underline">
                <a href="#">Index</a>
            </span></li>
           </ul>
        </div>
        <div class="font-bold text-white xs:ml-5 md:ml-0">
            <ul>
                <li><span class=" underline-thickness-1 underline-offset-4 hover:underline">
                    <a href="#">Product</a>
                </span></li>
                <li><span class=" underline-thickness-1 underline-offset-4 hover:underline">
                    <a href="#">Overview</a>
                </span></li>
                <li><span class=" underline-thickness-1 underline-offset-4 hover:underline">
                    <a href="#">GPT-4</a>
                </span></li>
                <li><span class=" underline-thickness-1 underline-offset-4 hover:underline">
                    <a href="#">DALL·E 2</a>
                </span></li>
                <li><span class=" underline-thickness-1 underline-offset-4 hover:underline">
                    <a href="#">Customer stories</a>
                </span></li>
                <li><span class=" underline-thickness-1 underline-offset-4 hover:underline">
                    <a href="#">Safety standards</a>
                </span></li>
                <li><span class=" underline-thickness-1 underline-offset-4 hover:underline">
                    <a href="#">Pricing</a>
                </span></li>
               </ul>
        </div>
        <div class="font-bold text-white ">
            <ul>
                <li><span class=" underline-thickness-1 underline-offset-4 hover:underline">
                    <a href="#">Safety</a>
                </span></li>
                <li><span class=" underline-thickness-1 underline-offset-4 hover:underline">
                    <a href="#">Overview</a>
                </span></li>
            </div>
        </ul>
        <div class="font-bold text-white xs:ml-5 md:ml-0">
            <ul>
                <li><span class=" underline-thickness-1 underline-offset-4 hover:underline">
                    <a href="#">Company</a>
                </span></li>
                <li><span class=" underline-thickness-1 underline-offset-4 hover:underline">
                    <a href="#">About</a>
                </span></li>
                <li><span class=" underline-thickness-1 underline-offset-4 hover:underline">
                    <a href="#">Blog</a>
                </span></li>
                <li><span class=" underline-thickness-1 underline-offset-4 hover:underline">
                    <a href="#">Careers</a>
                </span></li>
                <li><span class=" underline-thickness-1 underline-offset-4 hover:underline">
                    <a href="#">Charter</a>
                </span></li>
                <li><span class=" underline-thickness-1 underline-offset-4 hover:underline">
                    <a href="#">Security</a>
                </span></li>
            </ul>
        </div>
    </div>
    <x-line />
    <div class="grid grid-cols-3">
        <div class="p-5">
            <h1 class="text-white">OpenAI © 2015 – 2023
                <br>
                Terms & policies <br>
                Privacy policy</h1>
            </div>

        <div class="flex p-5 text-white gap-5 font-bold xs:block md:gap-5 md:inline-flex ">
            <span class=" underline-thickness-1 underline-offset-4 hover:underline">
                <a href="#">Twitter</a>
            </span>
            <span class=" underline-thickness-1 underline-offset-4 hover:underline">
                <a href="#">Youtube</a>
            </span>
            <span class=" underline-thickness-1 underline-offset-4 hover:underline">
                <a href="#">GitHub</a>
            </span>
            <span class=" underline-thickness-1 underline-offset-4 hover:underline">
                <a href="#">SoundCloud</a>
            </span>
            <span class=" underline-thickness-1 underline-offset-4 hover:underline">
                <a href="#">LinkedIn</a>
            </span>
            </div>
        </div>

        <div class="flex items-center justify-center mt-5" style="">
            <span class="underline-thickness-1 underline-offset-4 hover:underline"><a href="#" class="text-white font-bold"> Back to top</a></span>
            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="a-icon--arrow-up400 a-icon--text a-icon--no-align top-[0.05em] relative f-ui-1 ml-2 -mr-4" style="width:1em;height:1em;" data-new="" aria-hidden="true" data-v-22ee7e7c=""><polygon fill="currentColor" points="12.73 7.25 8 2.52 3.27 7.25 4.25 8.23 7.31 5.17 7.31 14 8.69 14 8.69 5.17 11.75 8.23 12.73 7.25" data-v-22ee7e7c=""></polygon></svg>
         </div>
    </div>
</x-layout>
