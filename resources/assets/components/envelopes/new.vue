
<template>

    <div class="row">

        <div class="col-md-12">

            <h1>
                {{ text.envelopes.new.title }}
            </h1>

            <hr>

        </div>

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

        ready: function () {
            this.setCurrentEnvelope(null)
        },

        components: {
            EnvelopesForm,
        },

    }

</script>
