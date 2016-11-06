
<template>

    <div>

        <layout-navbar></layout-navbar>

        <div class="container-fluid">
            <router-view></router-view>
        </div>

    </div>

</template>



<script>

    var mixins = require('scripts/mixins.js')
    var store = require('vuex/store.js')

    export default {

        store: store,

        mixins: [mixins.vuex],

        created: function () {
            this.setLanguage(navigator.language || navigator.userLanguage)
        },

        events: {
            'refresh-data': function () {
                this.$broadcast('refresh-data')
            },
        },

    }

</script>
