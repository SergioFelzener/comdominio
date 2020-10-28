<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo"></x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
        @endif
        <div class="flex">
            <form method="POST" action="{{ route('login') }}" class="max-w-sm mx-auto shadow-lg bg-white rounded-lg pt-6 pb-8 mb-4 px-8">
                @csrf
                <img class="" src="{{asset('assets/img/logo.png')}}">
                <div class="">
                    <div class="my-4 max-w-sm text-center">
                        <h2 class="my-2 font-bold">Login com Social Media</h2>
                        <a href="{{route('social.login', ['provider' => 'github'])}}" class="p-2 flex justify-center font-bold border-solid border-2 border-gray-600 mr-auto ml-auto bg-gray-300 rounded-2xl shadow-2xl text-black hover:bg-gray-100">
                        <img class="w-12 h-12 mr-4" src="{{asset('assets/img/gitlogo.png')}}">
                            <label class="text-bold mt-3"for="">GitHub Login</label>
                        </a>
                    </div>
                    <div class="my-4 max-w-sm text-center">
                        <a href="{{route('social.login', ['provider' => 'facebook'])}}" class="p-2 flex justify-center font-bold border-solid border-2 border-gray-600 mr-auto ml-auto bg-blue-500 rounded-2xl shadow-2xl text-black hover:bg-blue-200">
                        <img class="w-12 h-12 mr-4" src="{{asset('assets/img/face.png')}}">
                            <label class="text-bold mt-3 text-white"for="">Facebook Login</label>
                        </a>
                    </div>
                    <p class="flex justify-center  text-red-500 text-xs">
                        Não tem uma conta,&nbsp; <a href="#" class="justify-center text-black-700 font-bold">Crie sua conta </a> &nbsp; agora.
                    </p>
                    
            </form>
        </div>

    </x-jet-authentication-card>
</x-guest-layout>