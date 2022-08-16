<template>
    <div id="header-content">
            <user-nav></user-nav>
    </div>

</template>
<script>

import UserNav from '/resources/js/components/user/UserNav.vue'
export default {
    mounted() {
        console.log('dashboard mounted');
    },
    components: {
        UserNav
    }
}
</script>
