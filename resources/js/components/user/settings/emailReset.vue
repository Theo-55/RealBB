<template>
    <div>
        <div>
            <user-nav></user-nav>
        </div>
        <div class="flex justify-center">
            <div class="block rounded-lg shadow-lg bg-white max-w-sm text-center mt-36 ">
                <div class="py-3 px-6 border-b border-gray-300 text-lg" >
                    Email Reset
                </div>
                <div class="p-6">
                    <h5 class="text-gray-900 text-xl font-medium mb-2">Enter your desired email</h5>
                    <input type="text" class="border-dashed border-b-blue-400 bg-gray-400 mx-3 w-75 mb-3 text-white h-10">
                    <button type="button" class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Button</button>
                </div>
                <div class="py-3 px-6 border-t border-gray-300 text-gray-600">
                    <p>Your current email is {{email}}</p>
                </div>
            </div>
        </div>

    </div>
</template>
<script>
import UserNav from '/resources/js/components/user/UserNav.vue'
export default{
    data(){
      return{
            loading: false //going to be used for a loading screen as request is sent
      }
    },
    props: {
        email: ""
    },
    components: {
      UserNav
    },
    methods: {

    },
    mounted() {
        console.log('email change component mounted')
    }
}
</script>
