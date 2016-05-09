
<template>

    <layout-navbar></layout-navbar>

    <div class="container-fluid">
        <router-view></router-view>
    </div>

</template>



<script>

    var store = require('vuex/store.js')

    export default {

        store: store,

    }

</script>
