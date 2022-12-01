<template>
    <div
        style="min-height: 300vh;"
        class="relative flex flex-col px-4 pt-24 pb-12 font-sans text-gray-700 bg-gray-400 sm:px-6 lg:px-8"
    >
        <div class="flex-1 space-y-8">
                <workout-card ></workout-card>
        </div>

    </div>
</template>

<script>
import WorkoutCard from '/resources/js/components/workouts/partials/WorkoutCard.vue'
export default {
    components: {
        WorkoutCard
    }
}
</script>
