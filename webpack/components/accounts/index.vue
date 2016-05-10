
<template>

    <div class="col-lg-2 col-md-3 col-sm-4">
        <layout-sidebar :entries="[reportEntries, recordEntries]"></layout-sidebar>
    </div>

    <div class="col-lg-10 col-md-9 col-sm-8">
        <router-view></router-view>
    </div>

</template>



<script>

    var getters = require('vuex/getters.js')

    export default {

        computed: {

            reportEntries: function () {
                return {
                    title: this.text.accounts.report.section.title,
                    entries: [
                        {
                            text: this.text.accounts.report.balance.title,
                            route: '/accounts/report/balance',
                        },
                    ],
                }
            },

            recordEntries: function () {
                var recordEntries = {
                    title: this.text.accounts.edit.title,
                    entries: [],
                }
                for (var i = 0; i < this.accounts.length; ++i) {
                    recordEntries.entries.push({
                        text: this.accounts[i].name,
                        route: '/accounts/edit/' + this.accounts[i].id,
                    })
                }
                return recordEntries
            },

        },

        vuex: {
            getters: {
                accounts: getters.getAccounts,
                text: getters.getText,
            },
        },

    }
</script>
