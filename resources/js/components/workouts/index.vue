<template>
    <div>
        <div>
            <user-nav></user-nav>
        </div>
        <div class="mx-20 pt-20 rounded my-auto" id="workout-create-button">
            <button type="button" @click="goToCreate" class=" py-3 px-5 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-gray-500 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-gray-500 dark:hover:bg-gray-700 dark:focus:ring-gray-800">create</button>
        </div>
        <div class="relative pt-5 w-50 mx-auto">
            <!-- this section for the workout table, adding after create is completed -->
            <workout></workout>x
        </div>
    </div>


</template>
<script>
import UserNav from "../user/UserNav.vue";
import Workout from '../workouts/partials/Workout.vue'
export default {
    components: {UserNav, Workout},

    methods: {
        goToCreate(){
            window.location.href = '/workouts/create';
        }
    }
}
</script>
