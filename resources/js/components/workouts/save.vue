<template>
    <div>
        <user-nav></user-nav>
    </div>
    <div class="relative mt-24 bg-gray-500 w-3/4 mx-auto h-full rounded">
        <form>
            <div class="grid gap-6 mb-6 md:grid-cols-3 ">
                <div>
                    <label for="first_name" class="block mb-2 text-sm font-medium text-white">Exercise</label>
                    <input type="text" id="first_name" @v-model="formData.name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                </div>
                <div>
                    <label for="first_name" class="block mb-2 text-sm font-medium text-white">Sets</label>
                    <input type="number" id="first_name" @v-model="formData.sets" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                </div>
                <div>
                    <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Reps</label>
                    <input type="number" id="reps" @v-model="formData.reps" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                </div>
            </div>
            <button type="submit" @v-model="sendExercise" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create</button>
        </form>

    </div>
</template>
<script>
import UserNav from "../user/UserNav.vue";

export default{
    data() {
        return {
            formData: {
                name: String,
                sets: Number,
                reps: Number
            }
        }
    },
    methods: {
         sendExercise() {
             axios.post("/workouts/create/save", this.formData)


         }
    },
    components: {
        UserNav
    }
}
</script>
