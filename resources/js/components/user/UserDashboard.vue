<template>
    <div id="header-content">
            <user-nav :User="{ user }"></user-nav>
    </div>

</template>
<script>

import UserNav from '/resources/js/components/user/UserNav.vue'
export default {
    mounted() {
        console.log(this.user);
    },
    components: {
        UserNav
    },
    props: {
        User:
    }

}
</script>
