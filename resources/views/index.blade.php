<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full rounded-xl px-4 py-2 border-none">
                <option value="Category One">Category One</option>
                <option value="Category One">Category One</option>
                <option value="Category One">Category One</option>
                <option value="Category One">Category One</option>
            </select>
        </div>
        <div class="w-1/3">
            <select name="other_filters" id="category" class="w-full rounded-xl px-4 py-2 border-none">
                <option value="Category One">Category One</option>
                <option value="Category One">Category One</option>
                <option value="Category One">Category One</option>
                <option value="Category One">Category One</option>
            </select>
        </div>
        <div class="2/3 relative">
            <input type="search" placeholder="Find an idea" class="w-full rounded-xl bg-white px-4 py-2 pl-8 border-none placeholder-gray-900">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="w-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
            </div>
        </div>
    </div>

    <div class="ideas-container space-y-6 my-6">
        <div class="idea-container bg-white rounded-xl flex hover:shadow-card transition duration-150 ease-in cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-400">Votes</div>
                </div>
                <div class="mt-8">
                    <button class="w-20 bg-gray-200 border border-gray-200 font-bold text-xs uppercase rounded-xl px-4 py-3 hover:border-gray-400 transition duration-150 ease-in">
                        Vote
                    </button>
                </div>
            </div>
            <div class="flex flex-1 px-2 py-6 ">
                <div class="flex-none">
                    <a href="">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">A random title</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div
                            x-data="{isOpen: false}"
                            class="flex items-center space-x-2"
                        >
                            <div class="bg-gray-200 text-xs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Open
                            </div>
                            <button
                                @click="isOpen = !isOpen"
                                class="relative flex items-center bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in py-2 px-3"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                                <ul
                                    x-cloak
                                    x-show.transition.origin.top.left="isOpen"
                                    @click.away="isOpen = false"
                                    @keydown.escape.window="isOpen = false"
                                    class="absolute text-left top-2 w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8"
                                >
                                    <li><a href="#" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Marks as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Delete Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="idea-container bg-white rounded-xl flex hover:shadow-card transition duration-150 ease-in cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl text-blue">12</div>
                    <div class="text-gray-400">Votes</div>
                </div>
                <div class="mt-8">
                    <button class="w-20 bg-blue border border-gray-200 text-white font-bold text-xs uppercase rounded-xl px-4 py-3 hover:border-gray-400 transition duration-150 ease-in">
                        Voted
                    </button>
                </div>
            </div>
            <div class="flex flex-1 px-2 py-6 ">
                <a href="" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">A random title</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos dignissimos adipisci totam rem id? Quisquam laborum perspiciatis ad, nulla doloremque voluptas omnis corrupti. Odit ea ipsum dolorem maiores iste similique.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-yellow text-white text-xs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                In Progress
                            </div>
                            <button class="relative flex items-center bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="idea-container bg-white rounded-xl flex hover:shadow-card transition duration-150 ease-in cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-400">Votes</div>
                </div>
                <div class="mt-8">
                    <button class="w-20 bg-gray-200 border border-gray-200 font-bold text-xs uppercase rounded-xl px-4 py-3 hover:border-gray-400 transition duration-150 ease-in">
                        Vote
                    </button>
                </div>
            </div>
            <div class="flex px-2 py-6 ">
                <a href="" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">A random title</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos dignissimos adipisci totam rem id? Quisquam laborum perspiciatis ad, nulla doloremque voluptas omnis corrupti. Odit ea ipsum dolorem maiores iste similique.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-red text-white text-xs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Closed
                            </div>
                            <button class="relative flex items-center bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="idea-container bg-white rounded-xl flex hover:shadow-card transition duration-150 ease-in cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-400">Votes</div>
                </div>
                <div class="mt-8">
                    <button class="w-20 bg-gray-200 border border-gray-200 font-bold text-xs uppercase rounded-xl px-4 py-3 hover:border-gray-400 transition duration-150 ease-in">
                        Vote
                    </button>
                </div>
            </div>
            <div class="flex px-2 py-6 ">
                <a href="" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">A random title</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos dignissimos adipisci totam rem id? Quisquam laborum perspiciatis ad, nulla doloremque voluptas omnis corrupti. Odit ea ipsum dolorem maiores iste similique.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-green text-white text-xs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Implemented
                            </div>
                            <button class="relative flex items-center bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="idea-container bg-white rounded-xl flex hover:shadow-card transition duration-150 ease-in cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-400">Votes</div>
                </div>
                <div class="mt-8">
                    <button class="w-20 bg-gray-200 border border-gray-200 font-bold text-xs uppercase rounded-xl px-4 py-3 hover:border-gray-400 transition duration-150 ease-in">
                        Vote
                    </button>
                </div>
            </div>
            <div class="flex px-2 py-6 ">
                <a href="" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">A random title</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos dignissimos adipisci totam rem id? Quisquam laborum perspiciatis ad, nulla doloremque voluptas omnis corrupti. Odit ea ipsum dolorem maiores iste similique.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-purple text-white text-xs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Considered
                            </div>
                            <button class="relative flex items-center bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
