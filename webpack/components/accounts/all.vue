
<template>

    <div>
        {{ accounts }}
    </div>

</template>



<script>

    var getters = require('vuex/getters.js')

    export default {

        vuex: {
            getters: {
                accounts: getters.getAccounts,
            },
        },

    }

</script>
