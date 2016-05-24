
<template>

    <div>

        <h1>
            {{ text.envelopes.new.title }}
        </h1>

        <hr>

        <div class="col-xs-12">
            <envelopes-form :envelope="{}"></envelopes-form>
        </div>

    </div>

</template>



<script>

    var mixins = require('scripts/mixins.js')
    var EnvelopesForm = require('components/envelopes/form.vue')

    export default {

        mixins: [mixins.vuex],

        components: {
            EnvelopesForm,
        },

    }

</script>
