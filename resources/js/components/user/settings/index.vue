<template>
    <div>
        <div>
            <user-nav></user-nav>
        </div>

        <div class="bg-gray-200 min-h-screen pt-2 font-mono my-16">
            <div class="container mx-auto">
                <div class="inputs w-full max-w-2xl p-6 mx-auto">
                    <h2 class="text-2xl text-gray-900">Account Setting</h2>
                    <div class="w-full max-w-sm bg-gray-500 rounded-lg border border-gray-200 shadow-md dark:bg-gray-500 dark:border-gray-700">
                        <div class="flex flex-col items-center pb-10">
                            <img class="mb-3 w-24 h-24 rounded-full shadow-lg" :src="profile" alt="stock profile">
                            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{user}}</h5>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Visual Designer</span>
                            <button class="mb-1 text-l font-medium text-gray-900 dark:text-white pt-1 mt-2 border-2 border-solid content-center hover:bg-blue-600 " >Add Profile Photo</button>
                        </div>
                    </div>

                    <div class="mt-6 border-t border-gray-400 pt-4 md:grid-cols-1 grid relative">
                        <div class='flex flex-wrap -mx-3 mb-6'>
                            <div class='block w-full md:w-full px-3 mb-6 '>
                                <button  class="appearance-none bg-gray-200 text-gray-900 px-2 py-1 shadow-sm border border-gray-400 rounded-md" @click="changeEmail">Change Email</button>
                            </div>
                            <div class='block w-full md:w-full px-3 mb-6 '>
                                <button class="appearance-none bg-gray-200 text-gray-900 px-2 py-1 shadow-sm border border-gray-400 rounded-md ">Change Your Passwords</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</template>

<script>
import UserNav from "../UserNav.vue";

export default {
    data(){
        return{

        }

    },
    props: {
        user: "",
        profile: ""
    },

    methods: {
            changeEmail() {
                window.location.href = '/settings/emailReset';
            }
    },

    components: {
        UserNav
    },

    mounted() {
        console.log(this.profile);
    }
}

</script>
