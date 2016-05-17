
<template>

    <div>

        <h1>
            {{ text.envelopes.enabled.title }}
        </h1>

        <hr>

        {{ envelopes }}

    </div>

</template>



<script>

    var getters = require('vuex/getters.js')

    export default {

        vuex: {
            getters: {
                envelopes: getters.getEnvelopes,
                text: getters.getText,
            },
        },

    }

</script>
