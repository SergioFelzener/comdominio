<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Condominio News
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container mt-5 mx-auto px-2">
                    <div class="max-w-sm mx-auto flex p-6 bg-white rounded-lg shadow-xl">
                        <div class="flex-shrink-0">
                            <img src="https://i.ibb.co/vX8pYzZ/logo-only.png" alt="" class="h-12 w-12" />
                        </div>
                        <div class="ml-6 pt-1">
                            <h4 class="text-xl text-gray-900">Traversy Media</h4>
                            <p class="text-base text-gray-600">You have a new message!</p>
                        </div>
                    </div>

                    @foreach($new as $n)
                    <span name="news" class="block text-gray-500 tx-sm" value="">{{$n->title}}</span>
                    @endforeach
                    <div class="container mt-5 mx-auto px-2">
                        <!-- Flex on med screens and up -->
                        <div class="md:flex">
                            <div class="flex-1 text-gray-700 text-center bg-gray-400 px-5 py-5 m-2 rounded">
                                <div class="lg:flex lg:items-center">
                                    <div class="lg:flex-shrink-0">
                                        <img class="rounded-lg lg:w-64" src="https://i.ibb.co/mJJNkTJ/img2.jpg" alt="" />
                                    </div>
                                    <div class="mt-4 lg:mt-0 lg:ml-6">
                                        <div class="uppercase tracking-wide text-sm text-indigo-600 font-bold">
                                            Networking
                                        </div>
                                        <a href="#" class="block mt-1 text-lg leading-tight font-semibold text-gray-900 hover:underline">Finding connections to help your business grow</a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-1 text-gray-700 text-center bg-gray-400 px-5 py-5 m-2 rounded">
                                <div class="lg:flex lg:items-center">
                                    <div class="lg:flex-shrink-0">
                                        <img class="rounded-lg lg:w-64" src="https://i.ibb.co/w4wGYvQ/img1.jpg" alt="" />
                                    </div>
                                    <div class="mt-4 lg:mt-0 lg:ml-6">
                                        <div class="uppercase tracking-wide text-sm text-indigo-600 font-bold">
                                            Marketing
                                        </div>
                                        <a href="#" class="block mt-1 text-lg leading-tight font-semibold text-gray-900 hover:underline">Finding customers for your new business</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
</x-app-layout>