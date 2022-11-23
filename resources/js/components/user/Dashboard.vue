<template>

    <div class="container justify-content-center w-full">
        <h1 class="w-full text-decoration-underline text-lg-center h-25"> Stats At A Glance!</h1>
    </div>
    <!---===================== FIRST ROW CONTAINING THE  STATS CARD STARTS HERE =============================-->
    <div class="flex justify-center bg-gray-100 py-10 p-14">
        <!---== First Stats Container ====--->
        <div class="container mx-auto pr-4">
            <div class="w-72 bg-white max-w-xs mx-auto rounded-sm overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-100 cursor-pointer">
                <div class="h-20 bg-gray-500 flex items-center justify-between">
                    <p class="mr-0 text-white text-lg pl-5">Total Workouts</p>
                </div>
                <p class="py-4 text-3xl ml-5"> {{ workouts }}</p>
                <!-- <hr > -->
            </div>
        </div>
        <!---== First Stats Container ====--->

        <!---== Second Stats Container ====--->
        <div class="container mx-auto pr-4">
            <div class="w-72 bg-white max-w-xs mx-auto rounded-sm overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-100 cursor-pointer">
                <div class="h-20 bg-gray-500 flex items-center justify-between">
                    <p class="mr-0 text-white text-lg pl-5">Total Hours</p>
                </div>
                <p class="py-4 text-3xl ml-5">{{ time }}</p>
                <!-- <hr > -->
            </div>
        </div>
        <!---== Second Stats Container ====--->

    </div>
</template>
<script>
export default{
    props: ['workouts', 'time'],
    mounted(){
    }
}
</script>
