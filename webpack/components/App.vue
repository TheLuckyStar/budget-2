
<template>

    <div>

        <layout-navbar></layout-navbar>

        <div class="container-fluid">
            <router-view></router-view>
        </div>

    </div>

</template>



<script>

    var actions = require('vuex/actions.js')
    var store = require('vuex/store.js')

    export default {

        store: store,

        created: function () {
            this.refreshAccounts()
        },

        vuex: {
            actions: {
                refreshAccounts: actions.refreshAccounts,
            },
        },

    }

</script>
