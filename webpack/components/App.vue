
<template>

    <div>

        <layout-navbar></layout-navbar>

        <div class="container">
            <router-view></router-view>
        </div>

    </div>

</template>



<script>

    var store = require('vuex/store.js')

    export default {

        store: store,

    }

</script>
