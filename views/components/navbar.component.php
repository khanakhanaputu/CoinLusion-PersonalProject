<?php
function navbar()
{ ?>
    <nav class="bg-white w-full border-b md:border-0 md:static">
        <div class="items-center px-4 max-w-screen-xl mx-auto md:flex md:px-8">
            <div class="flex items-center justify-between py-3 md:py-5 md:block">
                <a href="#">
                    <img src="https://www.floatui.com/logo.svg" width="120" height="50" alt="Float UI logo" />
                </a>
                <div class="md:hidden">
                    <button class="text-gray-700 outline-none p-2 rounded-md focus:border-gray-400 focus:border"
                        onclick="toggleMenu()">
                        <!-- Close icon -->
                        <svg id="icon-close" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hidden" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                        <!-- Hamburger icon -->
                        <svg id="icon-open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                        </svg>
                    </button>
                </div>
            </div>

            <div id="nav-menu" class="flex-1 justify-self-center pb-3 mt-8 md:block md:pb-0 md:mt-0 hidden">
                <ul class="justify-center items-center space-y-8 md:flex md:space-x-6 md:space-y-0">
                    <li class="text-gray-600 hover:text-indigo-600"><a href="/Customers">Customers</a></li>
                    <li class="text-gray-600 hover:text-indigo-600"><a href="/Careers">Careers</a></li>
                    <li class="text-gray-600 hover:text-indigo-600"><a href="/Guides">Guides</a></li>
                    <li class="text-gray-600 hover:text-indigo-600"><a href="/Partners">Partners</a></li>
                </ul>
            </div>

            <div class="hidden md:inline-block">
                <a class="py-3 px-4 text-white bg-indigo-600 hover:bg-indigo-700 rounded-md shadow" href="#">
                    Get Started
                </a>
            </div>
        </div>
    </nav>
<?php }
?>