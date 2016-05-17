
<template>

    <div class="col-md-12">
        <envelopes-form :envelope="envelope"></envelopes-form>
    </div>

</template>



<script>

    var EnvelopesForm = require('components/envelopes/form.vue')

    export default {

        data: function () {
            return {
                envelope: {
                    deleted_at: null,
                },
            }
        },

        components: {
            EnvelopesForm,
        },

    }

</script>
