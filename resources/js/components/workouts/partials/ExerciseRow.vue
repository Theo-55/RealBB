<template>
    <div>
        <label for="exercise" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Exercise</label>
        <input type="text" id="reps" v-model="formData.exercises.name"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
    </div>
    <div>
        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sets</label>
        <input type="text" id="reps" v-model="formData.exercises.sets" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
    </div>
    <div>
        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Reps</label>
        <input type="text" id="reps" v-model="formData.exercises.reps" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
    </div>

</template>
<script>

export default {
    data() {
        return{

        }

    }
}

</script>
