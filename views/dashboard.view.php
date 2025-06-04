<?php
include_once("components/navbar.component.php");
function dashboard()
{
?>
<?php navbar(); ?>
<div class="bg-indigo-600">
    <div class="max-w-screen-xl mx-auto px-4 py-3 flex items-start justify-between text-white sm:items-center md:px-8">
        <div class="flex-1 justify-center flex items-start gap-x-4 sm:items-center">
            <div
                class="flex-none p-1.5 px-4 rounded-full bg-indigo-800 flex items-center justify-center font-medium text-sm">
                News
            </div>
            <p class="font-medium p-2">
                We just launched a new version of our library! <a href="javascript:void(0)"
                    class="font-semibold underline duration-150 hover:text-indigo-100 inline-flex items-center gap-x-1">
                    Learn more
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                        <path fill-rule="evenodd"
                            d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </p>
        </div>
    </div>
</div>
<section class="py-16">
    <div class="max-w-screen-xl mx-auto px-4 md:px-8">
        <div class="max-w-md">
            <h1 class="text-gray-800 text-xl font-extrabold sm:text-2xl">
                Integrations
            </h1>
            <p class="text-gray-600 mt-2">
                Extend and automate your workflow by using integrations for your favorite tools.
            </p>
        </div>

        <ul class="mt-16 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Integration 1 -->
            <li class="border rounded-lg">
                <div class="flex items-start justify-between p-4">
                    <div class="space-y-2">
                        <!-- Ganti 'your Figma svg' dengan SVG asli -->
                        <div>
                            <!-- your Figma svg -->
                        </div>
                        <h4 class="text-gray-800 font-semibold">Figma</h4>
                        <p class="text-gray-600 text-sm">Ut enim ad minim veniam</p>
                    </div>
                    <button class="text-gray-700 text-sm border rounded-lg px-3 py-2 duration-150 hover:bg-gray-100">
                        Connect
                    </button>
                </div>
                <div class="py-5 px-4 border-t text-right">
                    <a href="javascript:void(0)" class="text-indigo-600 hover:text-indigo-500 text-sm font-medium">
                        View integration
                    </a>
                </div>
            </li>

            <!-- Integration 2 -->
            <li class="border rounded-lg">
                <div class="flex items-start justify-between p-4">
                    <div class="space-y-2">
                        <div>
                            <!-- your Github svg -->
                        </div>
                        <h4 class="text-gray-800 font-semibold">Github</h4>
                        <p class="text-gray-600 text-sm">Ut enim ad minim veniam</p>
                    </div>
                    <button class="text-gray-700 text-sm border rounded-lg px-3 py-2 duration-150 hover:bg-gray-100">
                        Connect
                    </button>
                </div>
                <div class="py-5 px-4 border-t text-right">
                    <a href="javascript:void(0)" class="text-indigo-600 hover:text-indigo-500 text-sm font-medium">
                        View integration
                    </a>
                </div>
            </li>

            <!-- Integration 3 -->
            <li class="border rounded-lg">
                <div class="flex items-start justify-between p-4">
                    <div class="space-y-2">
                        <div>
                            <!-- your Discord svg -->
                        </div>
                        <h4 class="text-gray-800 font-semibold">Discord</h4>
                        <p class="text-gray-600 text-sm">Ut enim ad minim veniam</p>
                    </div>
                    <button class="text-gray-700 text-sm border rounded-lg px-3 py-2 duration-150 hover:bg-gray-100">
                        Connect
                    </button>
                </div>
                <div class="py-5 px-4 border-t text-right">
                    <a href="javascript:void(0)" class="text-indigo-600 hover:text-indigo-500 text-sm font-medium">
                        View integration
                    </a>
                </div>
            </li>
        </ul>
    </div>
</section>

<div class="max-w-screen-xl mx-auto px-4 md:px-8 mb-8">
    <div class="items-start justify-between md:flex">
        <div class="max-w-lg">
            <h3 class="text-gray-800 text-xl font-bold sm:text-2xl">All products</h3>
            <p class="text-gray-600 mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
        <div class="mt-3 md:mt-0">
            <a href="javascript:void(0)"
                class="inline-block px-4 py-2 text-white duration-150 font-medium bg-indigo-600 rounded-lg hover:bg-indigo-500 active:bg-indigo-700 md:text-sm">Add
                product</a>
        </div>
    </div>

    <div class="mt-12 relative h-max overflow-auto">
        <table class="w-full table-auto text-sm text-left">
            <thead class="text-gray-600 font-medium border-b">
                <tr>
                    <th class="py-3 pr-6">name</th>
                    <th class="py-3 pr-6">date</th>
                    <th class="py-3 pr-6">status</th>
                    <th class="py-3 pr-6">Purchase</th>
                    <th class="py-3 pr-6">price</th>
                    <th class="py-3 pr-6"></th>
                </tr>
            </thead>
            <tbody class="text-gray-600 divide-y">
                <tr>
                    <td class="pr-6 py-4 whitespace-nowrap">Solo learn app</td>
                    <td class="pr-6 py-4 whitespace-nowrap">Oct 9, 2023</td>
                    <td class="pr-6 py-4 whitespace-nowrap">
                        <span
                            class="px-3 py-2 rounded-full font-semibold text-xs text-green-600 bg-green-50">Active</span>
                    </td>
                    <td class="pr-6 py-4 whitespace-nowrap">Monthly subscription</td>
                    <td class="pr-6 py-4 whitespace-nowrap">$35.000</td>
                    <td class="text-right whitespace-nowrap">
                        <a href="javascript:void(0)"
                            class="py-1.5 px-3 text-gray-600 hover:text-gray-500 duration-150 hover:bg-gray-50 border rounded-lg">Manage</a>
                    </td>
                </tr>
                <tr>
                    <td class="pr-6 py-4 whitespace-nowrap">Window wrapper</td>
                    <td class="pr-6 py-4 whitespace-nowrap">Oct 12, 2023</td>
                    <td class="pr-6 py-4 whitespace-nowrap">
                        <span
                            class="px-3 py-2 rounded-full font-semibold text-xs text-green-600 bg-green-50">Active</span>
                    </td>
                    <td class="pr-6 py-4 whitespace-nowrap">Monthly subscription</td>
                    <td class="pr-6 py-4 whitespace-nowrap">$12.000</td>
                    <td class="text-right whitespace-nowrap">
                        <a href="javascript:void(0)"
                            class="py-1.5 px-3 text-gray-600 hover:text-gray-500 duration-150 hover:bg-gray-50 border rounded-lg">Manage</a>
                    </td>
                </tr>
                <tr>
                    <td class="pr-6 py-4 whitespace-nowrap">Unity loroin</td>
                    <td class="pr-6 py-4 whitespace-nowrap">Oct 22, 2023</td>
                    <td class="pr-6 py-4 whitespace-nowrap">
                        <span
                            class="px-3 py-2 rounded-full font-semibold text-xs text-blue-600 bg-blue-50">Archived</span>
                    </td>
                    <td class="pr-6 py-4 whitespace-nowrap">Annually subscription</td>
                    <td class="pr-6 py-4 whitespace-nowrap">$20.000</td>
                    <td class="text-right whitespace-nowrap">
                        <a href="javascript:void(0)"
                            class="py-1.5 px-3 text-gray-600 hover:text-gray-500 duration-150 hover:bg-gray-50 border rounded-lg">Manage</a>
                    </td>
                </tr>
                <tr>
                    <td class="pr-6 py-4 whitespace-nowrap">Background remover</td>
                    <td class="pr-6 py-4 whitespace-nowrap">Jan 5, 2023</td>
                    <td class="pr-6 py-4 whitespace-nowrap">
                        <span
                            class="px-3 py-2 rounded-full font-semibold text-xs text-green-600 bg-green-50">Active</span>
                    </td>
                    <td class="pr-6 py-4 whitespace-nowrap">Monthly subscription</td>
                    <td class="pr-6 py-4 whitespace-nowrap">$5.000</td>
                    <td class="text-right whitespace-nowrap">
                        <a href="javascript:void(0)"
                            class="py-1.5 px-3 text-gray-600 hover:text-gray-500 duration-150 hover:bg-gray-50 border rounded-lg">Manage</a>
                    </td>
                </tr>
                <tr>
                    <td class="pr-6 py-4 whitespace-nowrap">Colon tiger</td>
                    <td class="pr-6 py-4 whitespace-nowrap">Jan 6, 2023</td>
                    <td class="pr-6 py-4 whitespace-nowrap">
                        <span
                            class="px-3 py-2 rounded-full font-semibold text-xs text-green-600 bg-green-50">Active</span>
                    </td>
                    <td class="pr-6 py-4 whitespace-nowrap">Annually subscription</td>
                    <td class="pr-6 py-4 whitespace-nowrap">$9.000</td>
                    <td class="text-right whitespace-nowrap">
                        <a href="javascript:void(0)"
                            class="py-1.5 px-3 text-gray-600 hover:text-gray-500 duration-150 hover:bg-gray-50 border rounded-lg">Manage</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="w-full mx-auto mt-12 text-gray-600 ">
        <div class="flex items-center justify-between text-sm text-gray-600 font-medium">
            <a href="#" class="px-4 py-2 border rounded-lg duration-150 hover:bg-gray-50">Previous</a>
            <div>
                Page 1 of 9
            </div>
            <a href="#" class="px-4 py-2 border rounded-lg duration-150 hover:bg-gray-50">Next</a>
        </div>
    </div>
</div>

<?php }