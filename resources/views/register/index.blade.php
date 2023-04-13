<x-layout >
    <main>
        <div class="flex justify-center items-center w-full h-screen relative">
            <div class="bg-gray-900 shadow-xl shadow-gray-400 rounded-lg p-5 mb-5 mx-auto">
                <div class="flex flex-col gap-1 p-3">
                    <form action="{{ route('user.create') }}" method="post" class="flex flex-col gap-2" enctype="multipart/form-data">
                        @csrf
                        <x-form name="email" type="email" />
                        <x-form name="name" type="text" />
                        <x-form name="picture" type="file" />
                        <x-form name="username" type="text" />
                        <x-form name="password" type="password" />

                        <div class="flex justify-end relative gap-2 mt-2">
                            <a href="{{ route('login') }}" class="underline text-gray-600 mt-1">Already have an account?</a>
                           <x-form.button>Submit</x-form.button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </main>
</x-layout>
