
<template>

    <div>

        <h1>
            {{ text.envelopes.new.title }}
        </h1>

        <hr>

        <div class="col-md-12">
            <envelopes-form :envelope="envelope"></envelopes-form>
        </div>

    </div>

</template>



<script>

    var getters = require('vuex/getters.js')
    var EnvelopesForm = require('components/envelopes/form.vue')

    export default {

        data: function () {
            return {
                envelope: {
                    deleted_at: null,
                },
            }
        },

        vuex: {
            getters: {
                text: getters.getText,
            },
        },

        components: {
            EnvelopesForm,
        },

    }

</script>
