<template>
    <div>
    <nav class="flex items-center justify-between flex-wrap bg-gray-500 p-6 absolute top-0 w-full h-24">
        <div class="flex items-center flex-shrink-0 text-black mr-6">
            <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
            <span class="font-semibold text-xl tracking-tight" @click="gotoHome">Real BB</span>
        </div>
        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto ml-10">
            <div class="text-sm lg:flex-grow lg:items-center text-xl">
                <a @click="gotoWorkouts" class=" flex mt-1 lg:inline-block lg:mt-0 text-black-300 hover:text-white mr-4 text-">
                    Workouts
                </a>
                <a @click="" class="block mt-4 lg:inline-block lg:mt-0 text-black-300 hover:text-white mr-4">
                    Notes
                </a>
                <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-black-300 hover:text-white">
                    Meals
                </a>
            </div>
            <div>
                <div class="block align-content-end m w-2/4 h-full mr-48">
                        <button class="w-full bg-gray-700 rounded text-sm text-white" @click="goToSettings">Settings</button>
                </div>
            </div>
        </div>
    </nav>
    </div>
</template>
<script>

export default {
    props: ['user'],
    methods:{
        gotoWorkouts() {
            window.location.href = '/workouts';
        },
        gotoHome() {
            window.location.href = '/home';
        },
        goToSettings(){
            window.location.href = '/settings';
        }
    },
    mounted() {
        console.log('aye');
    }
}
</script>
