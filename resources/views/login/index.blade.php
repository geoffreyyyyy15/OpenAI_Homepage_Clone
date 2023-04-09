<x-layout >
    <div class="flex justify-center ">
        <div class=" bg-gray-800 p-2 w-96 h-96 mt-20 rounded-lg justify-center items-center">
            <div class="flex-auto w-32 m-5 justify-center items-center relative">
                <form action="/sessions" method="post" class="">
                    <h1 class="text-lg text-white">Login</h1>
                    @csrf
                    <div class="flex flex-col gap-2 justify-center p-2 ">
                        <a href="{{route('register')}}" class="text-white">Click here to Sign-up</a>
                        <x-form name="email" type="email"/>
                        <x-form name="password" type="password"/>
                        <div class="flex mt-2">
                            <x-form.button>Submit </x-form.button>
                        </div>
                    </div>
                </form>
                </div>
        </div>
    </div>
</x-layout>
