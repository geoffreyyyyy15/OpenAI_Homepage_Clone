<x-layout >
    <div class="flex justify-center items-center h-screen w-full relative">
        <div class=" bg-gray-900 shadow-xl shadow-gray-400 rounded-lg p-5 mb-5 mx-auto">
            <div class="flex flex-col gap-1 p-3">
                <form action="/sessions" method="post" class="">
                    <div class="flex items-center justify-center">
                        <h1 class="text-xl text-white">Login</h1>
                    </div>
                    @csrf
                    <div class="flex flex-col gap-2 justify-center p-2 ">
                        <a href="{{route('register')}}" class="text-white">Click <span class="text-blue-500">here</span> to Sign-up</a>
                        <x-form name="email" type="email"/>
                        <x-form name="password" type="password"/>
                        <div class="flex mt-2 items-center justify-center ">
                            <x-form.button class="hover:-translate-y-1 duration-300">Submit </x-form.button>
                        </div>
                    </div>
                </form>
                </div>
        </div>
    </div>
</x-layout>
