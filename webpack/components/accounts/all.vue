
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

    var mixins = require('scripts/mixins.js')

    export default {
        mixins: [mixins.vuex],
    }

</script>
