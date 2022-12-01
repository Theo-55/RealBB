<template>
<form v-on:submit.prevent="keySearch">
    <div class="flex">
        <div class="relative w-full rounded-sm">
            <input type="search" v-model="keyword" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-300 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-500 dark:border-l-gray-700 dark:text-white dark:focus:border-blue-500" placeholder="Search through your keywords" required>
            <button type="submit" class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-blue-200 rounded-r-lg border border-blue-400 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                <span class="sr-only">Search</span>
            </button>
        </div>
    </div>
</form>

    
</template>
<script>
export default {
    data() {
        return {
            keyword: ""
        }
    },
    methods: {
        keySearch(){
            this.$emit('keySearch', this.keyword)
        }
    }

}
</script>
