
<template>

    <layout-navbar></layout-navbar>

    {{ language }}

    <router-view></router-view>

</template>



<script>

    var actions = require('vuex/actions.js')
    var getters = require('vuex/getters.js')
    var store = require('vuex/store.js')

    export default {

        store: store,

        created: function () {
            this.setLanguage(navigator.language || navigator.userLanguage)
        },

        vuex: {
            actions: {
                setLanguage: actions.setLanguage,
            },
            getters: {
                language: getters.getLanguage,
                text: getters.getText,
            }
        }
    }

</script>
