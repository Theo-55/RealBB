<template>
    <div class="content-center">
        <div class="w-4/5 mx-auto my-5 bg-white rounded-lg border shadow-md bg-gray-500 dark:border-gray-700">
            <ul class="hidden text-sm font-medium text-center text-black-900 rounded-lg divide-x divide-gray-200 sm:flex dark:divide-gray-600 dark:text-gray-400" id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
                <li class="w-full">
                    <button id="stats-tab" data-tabs-target="#stats" type="button" role="tab" aria-controls="stats" aria-selected="true" class="inline-block p-4 w-full bg-gray-50 rounded-tl-lg hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-600 dark:border-blue-500">Logged Workout</button>
                </li>
            </ul>
            <div id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600">
                <div class="p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="stats" role="tabpanel" aria-labelledby="stats-tab">
                    <dl class="grid grid-cols-2 gap-8 p-4 mx-auto max-w-screen-xl text-gray-900 sm:grid-cols-3 xl:grid-cols-6 dark:text-white sm:p-8">
                        <div class="flex flex-col justify-center items-center">
                            <dt class="mb-2 text-3xl font-extrabold">73M+</dt>
                            <dd class="font-light text-gray-500 dark:text-gray-400"># of Exercises</dd>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <dt class="mb-2 text-3xl font-extrabold">100M+</dt>
                            <dd class="font-light text-gray-500 dark:text-gray-400">Muscle Group(s)</dd>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <dt class="mb-2 text-3xl font-extrabold">1000s</dt>
                            <dd class="font-light text-gray-500 dark:text-gray-400">Duration</dd>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <dt class="mb-2 text-3xl font-extrabold">1B+</dt>
                            <dd class="font-light text-gray-500 dark:text-gray-400">Contributors</dd>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <dt class="mb-2 text-3xl font-extrabold">90+</dt>
                            <dd class="font-light text-gray-500 dark:text-gray-400">Top Forbes companies</dd>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <dt class="mb-2 text-3xl font-extrabold">4M+</dt>
                            <dd class="font-light text-gray-500 dark:text-gray-400">Organizations</dd>
                        </div>
                    </dl>
                </div>
                <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="about" role="tabpanel" aria-labelledby="about-tab">
                    <h2 class="mb-5 text-2xl font-extrabold tracking-tight text-gray-900 dark:text-white">We invest in the world’s potential</h2>
                    <!-- List -->
                    <ul role="list" class="space-y-4 text-gray-500 dark:text-gray-400">
                        <li class="flex space-x-2">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-4 h-4 text-blue-600 dark:text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <span class="font-light leading-tight"># of Excercises</span>
                        </li>
                        <li class="flex space-x-2">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-4 h-4 text-blue-600 dark:text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <span class="font-light leading-tight">Duration</span>
                        </li>
                        <li class="flex space-x-2">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-4 h-4 text-blue-600 dark:text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <span class="font-light leading-tight">Cals burned</span>
                        </li>
                        <li class="flex space-x-2">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-4 h-4 text-blue-600 dark:text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <span class="font-light leading-tight">Muscle Group(s)</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>
