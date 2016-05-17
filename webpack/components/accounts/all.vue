
<template>

    <div>

        <h1>
            {{ text.accounts.enabled.title }}
        </h1>

        <hr>

        {{ accounts }}

    </div>

</template>



<script>

    var getters = require('vuex/getters.js')

    export default {

        vuex: {
            getters: {
                accounts: getters.getAccounts,
                text: getters.getText,
            },
        },

    }

</script>
