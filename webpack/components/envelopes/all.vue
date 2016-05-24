
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

    var mixins = require('scripts/mixins.js')

    export default {
        mixins: [mixins.vuex],
    }

</script>
