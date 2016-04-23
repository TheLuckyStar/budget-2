
<template>

    <layout-navbar></layout-navbar>

    <router-view></router-view>

</template>



<script>

    var store = require('vuex/store.js')

    export default {

        store: store,

    }

</script>
