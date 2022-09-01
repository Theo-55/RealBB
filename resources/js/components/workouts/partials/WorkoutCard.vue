<template>
    <div
        v-for="Workout in workouts"
        :key="Workout.id"
        style="top: calc(1rem * 1);"
        class="sticky w-full max-w-xl px-8 py-12 mx-auto space-y-4 bg-white border rounded-lg shadow-lg"

    >
        <h2 class="space-y-1 text-2xl font-bold leading-none text-gray-900">
        <span class="block text-sm text-blue-700">{{ Workout.date }}</span>
            <span class="block">{{ Workout.muscle_group }}</span>
        </h2>
        <p>You're workout lasted  {{Workout.duration_hrs}}  hours</p>

        <button class="block rounded w-1/3 bg-gray-500 h-5 text-white text-sm ">Update </button>
        <button class="block inline rounded w-1/3 bg-gray-500 text-white" @click="deleteWorkout(Workout)">Delete</button>
    </div>
</template>
<script>

export default {
    data() {
        return {
            workouts: [],
        }
    },
    methods: {
            getWorkouts() {
                axios.get('/workouts/capture').then(response => {
                    this.workouts = response.data;
                });
            },
            deleteWorkout(Workout) {
                axios.delete('/workouts/delete', {params: Workout}).then(function (response){
                    if(response.status === 200){
                            window.location.reload();
                    } else{
                        console.log('request not successful');
                    }
                })
            }
    },
    mounted(){
        this.getWorkouts()
    }
}

</script>
