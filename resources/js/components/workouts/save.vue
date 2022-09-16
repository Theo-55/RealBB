<template>
    <div>
        <user-nav></user-nav>
    </div>
    <div class="relative mt-24 bg-gray-500 w-3/4 mx-auto h-full rounded">
            <div class="grid gap-6 mb-6 md:grid-cols-3 ">

                <div>
                    <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Date</label>
                    <input type="date" id="reps" v-model="formData.entries.date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                </div>
                <div>
                    <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Muscle Group</label>
                    <input type="text" id="reps" v-model="formData.entries.group" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                </div>
                <div>
                    <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Duration</label>
                    <select class="form-select appearance-none block w-2/3 px-3 py-1.5 text-base font-normal text-white bg-gray-600 bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-gray-600 focus:border-blue-600 focus:outline-none" v-model="formData.entries.duration" aria-label="Default select example">
                        <option selected >Select Hours</option>
                        <option value="1">1/2</option>
                        <option value="2">1</option>
                        <option value="3">1.5</option>
                        <option value="4">2</option>
                        <option value="5">2.5</option>
                    </select>
                </div>

                <div v-for="(exercise, counter) in formData.exercises" v-bind:key="counter">
                        <label for="exercise" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Exercise</label>
                        <input type="text" id="exercise" v-model="exercise.name"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">

                        <label for="exercise" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sets</label>
                        <input type="text" id="sets" v-model="exercise.sets"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">

                        <label for="exercise" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Reps</label>
                        <input type="text" id="reps" v-model="exercise.reps"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                </div>
            </div>
        <button @click="sendExercise" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center mx-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create</button>
        <button @click="addRow" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mx-3">Add Exercise</button>
    </div>
</template>
<script>
import UserNav from "../user/UserNav.vue";
import ExerciseRow from "../workouts/partials/ExerciseRow.vue";

export default{
    data() {
        return {
            counter: 0,
            formData: {
                entries: {
                    date: "",
                    group: "",
                    duration: ""
                },
                exercises: []
            }
        }
    },
    methods: {
         sendExercise() {
             axios.post("/workouts/create/save", this.formData, {
                        headers: {
                            'Reason': 'Debug'
                        }
             }).then(
                     response => window.location.href = '/workouts'
                 ).catch(
                     error => console.log(error)
             )
         },

        addRow() {
            this.formData.exercises.push({
                name: "",
                sets: "",
                reps: ""
            })
        }
    },
    components: {
        UserNav,
        ExerciseRow
    }
}
</script>
