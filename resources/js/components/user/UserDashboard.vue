<template>
    <div>
        <div id="header-content" class="h-20 my-1">
            <user-nav user="{{ user }}"></user-nav>
        </div>
        <div>
            <Dashboard :workouts="workouts" :time="time"></Dashboard>
            <h1>{{time}}</h1>
        </div>
        <div>
            <UserFooter></UserFooter>
        </div>
    </div>



</template>
<script>

import UserNav from '/resources/js/components/user/UserNav.vue'
import Dashboard from '/resources/js/components/user/Dashboard.vue'
export default {
    props: ['user', 'workouts', 'time'],
    components: {
        UserNav,
        Dashboard
    },
    mounted() {
        console.log(this.workouts)
    }

}
</script>
