
<template>

    <div>

        <h1>
            {{ text.accounts.new.title }}
        </h1>

        <hr>

        <div class="col-md-12">
            <accounts-form :account="account"></accounts-form>
        </div>

    </div>

</template>



<script>

    var getters = require('vuex/getters.js')
    var AccountsForm = require('components/accounts/form.vue')

    export default {

        data: function () {
            return {
                account: {
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
            AccountsForm,
        },

    }

</script>
