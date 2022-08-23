<template>
    <div
        v-for="Workout in workouts"
        style="top: calc(1rem * 1);"
        class="sticky w-full max-w-xl px-8 py-12 mx-auto space-y-4 bg-white border rounded-lg shadow-lg"

    >
        <h2 class="space-y-1 text-2xl font-bold leading-none text-gray-900">
        <span class="block text-sm text-blue-700">hello </span
        ><span class="block">{{ Workout.date }}</span>
        </h2>
        <p>

        </p>
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
                    this.workouts = response.data.workout;
                });
            }
    },

    beforeMount(){
        this.getWorkouts()
    }
}

</script>
