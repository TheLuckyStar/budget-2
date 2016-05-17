
<template>

    <div>
        {{ envelopes }}
    </div>

</template>



<script>

    var getters = require('vuex/getters.js')

    export default {

        vuex: {
            getters: {
                envelopes: getters.getEnvelopes,
            },
        },

    }

</script>
