<template>
    <div>
        <div id="header-content" class="h-20 my-1">
            <user-nav user="{{ user }}"></user-nav>
        </div>
        <div class="grid grid-cols-1 text-center h-4/5">
            <div class="my-3">
                <div class="container mx-auto px-6 py-15">
                    <h2 class="text-4xl font-bold text-center text-gray-800 mb-8">
                        Why RealBB?
                    </h2>
                    <div class="block flex-wrap content-center">
                        <div class="w-50 md:w-1/3 px-2 mb-4 content-center">
                            <div class="bg-white rounded shadow py-2">
                                <p class="text-gray-800 text-base px-6 mb-5">Have all of your essential body building data all in one place!</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap">
                        <div class="w-50 md:w-1/3 px-2 mb-4">
                            <div class="bg-white rounded shadow py-2">
                                <p class="text-gray-800 text-base px-6 mb-5">Monitor progress of your set goals!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <UserFooter></UserFooter>
        </div>

    </div>



</template>
<script>

import UserNav from '/resources/js/components/user/UserNav.vue'
export default {
    props: ['user', 'workouts'],
    components: {
        UserNav,
    },
    mounted() {
        console.log(this.user)
    }

}
</script>
