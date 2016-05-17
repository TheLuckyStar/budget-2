
<template>

    <div class="col-md-12">
        <accounts-form :account="account"></accounts-form>
    </div>

</template>



<script>

    var AccountsForm = require('components/accounts/form.vue')

    export default {

        data: function () {
            return {
                account: {
                    deleted_at: null,
                },
            }
        },

        components: {
            AccountsForm,
        },

    }

</script>
