
<template>

    <div>

        <h1>
            {{ text.accounts.new.title }}
        </h1>

        <hr>

        <div class="col-xs-12">
            <accounts-form :account="{}"></accounts-form>
        </div>

    </div>

</template>



<script>

    var mixins = require('scripts/mixins.js')
    var AccountsForm = require('components/accounts/form.vue')

    export default {

        mixins: [mixins.vuex],

        ready: function () {
            this.setCurrentAccount(null)
        },

        components: {
            AccountsForm,
        },

    }

</script>
