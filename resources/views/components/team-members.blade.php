<div class="max-w-7xl mx-auto px-4 py-6">
    <div class="border-l-4 border-orange-500 pl-4 flex justify-between items-center">
        <x-links.default class="text-2xl" href="#">Ons Team</x-links.default>
    </div>

    <div class="pt-2 border-b border-gray-200 dark:border-gray-600"></div>

    <div class="flex items-center justify-center w-full pt-4 px-4">
        <div class="w-full relative flex items-center justify-center">
            <button aria-label="slide backward" class="absolute rotate-180 z-30 left-0 ml-3 text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-500 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2" id="prev">
                <svg aria-hidden="true" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <div class="w-full h-full mx-auto overflow-x-hidden overflow-y-hidden">
                <div id="slider" class="h-full flex lg:gap-8 md:gap-6 gap-4 items-center justify-start transition ease-out duration-700">
                    @foreach($members as $member)
                        <div class="w-full md:w-6/12 lg:w-3/12 mb-6 px-6 sm:px-6 lg:px-4">
                            <div class="flex flex-col">
                                <!-- Avatar -->
                                <a href="#" class="mx-auto">
                                    <img class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                                    src="{{ asset('storage/images/profiles/9.jpg') }}">
                                </a>

                                <!-- Details -->
                                <div class="text-center mt-6">
                                    <h1 class="text-gray-700 dark:text-white text-xl font-bold mb-1">
                                        {{ $member->username }}
                                    </h1>
                                    <div class="text-gray-700 dark:text-white font-light mb-1">
                                        @if($member->oneliner >= 1)
                                            {{ $member->oneliner }}
                                        @else
                                            <div>...</div>
                                        @endif
                                    </div>
                                    <!-- Social Icons -->
                                    <div class="flex items-center justify-center opacity-80 hover:opacity-100 transition-opacity duration-300">
                                        @if ($member->facebook != 0)
                                        <a href="https://www.facebook.com/{{$member->facebook}}" class="flex items-center rounded-full hover:bg-orange-50 h-10 w-10">
                                            <i class="fa-brands fa-facebook text-orange-500 mx-auto"></i>
                                        </a>
                                        @else
                                            <div class="flex items-center h-10 w-10">
                                                <i class="fa-brands fa-facebook text-gray-400 dark:text-gray-900 mx-auto"></i>
                                            </div>
                                        @endif
                                        @if ($member->linkedin != 0)
                                        <a href="https://www.linkedin.com/in/{{$member->linkedin}}" class="flex items-center rounded-full hover:bg-orange-50 h-10 w-10">
                                            <i class="fa-brands fa-linkedin text-orange-500 mx-auto"></i>
                                        </a>
                                        @else
                                            <div class="flex items-center h-10 w-10">
                                                <i class="fa-brands fa-linkedin text-gray-400 dark:text-gray-900 mx-auto"></i>
                                            </div>
                                        @endif
                                        @if ($member->twitter != 0)
                                        <a href="https://twitter.com/{{$member->twitter}}" class="flex items-center rounded-full hover:bg-orange-50 h-10 w-10">
                                            <i class="fa-brands fa-twitter text-orange-500 mx-auto"></i>
                                        </a>
                                        @else
                                            <div class="flex items-center h-10 w-10">
                                                <i class="fa-brands fa-twitter text-gray-400 dark:text-gray-900 mx-auto"></i>
                                            </div>
                                        @endif
                                        @if ($member->instagram != 0)
                                        <a href="https://www.instagram.com/{{$member->instagram}}" class="flex items-center rounded-full hover:bg-orange-50 h-10 w-10">
                                            <i class="fa-brands fa-instagram text-orange-500 mx-auto"></i>
                                        </a>
                                        @else
                                            <div class="flex items-center h-10 w-10">
                                                <i class="fa-brands fa-instagram text-gray-400 dark:text-gray-900 mx-auto"></i>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <button aria-label="slide forward" class="absolute z-30 right-0 mr-10 text-white text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-500 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2" id="next">
                <svg aria-hidden="true" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
    </div>

    <script>
        let defaultTransform = 0;
        function goNext() {
            defaultTransform = defaultTransform - 398;
            var slider = document.getElementById("slider");
            if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.25) defaultTransform = 0;
            slider.style.transform = "translateX(" + defaultTransform + "px)";
        }
        next.addEventListener("click", goNext);
        function goPrev() {
            var slider = document.getElementById("slider");
            if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
            else defaultTransform = defaultTransform + 398;
            slider.style.transform = "translateX(" + defaultTransform + "px)";
        }
        prev.addEventListener("click", goPrev);
    </script>
</div>
