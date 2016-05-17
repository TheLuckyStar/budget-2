
<template>

    <div>

        <div class="col-lg-2 col-md-3 col-sm-4">
            <layout-sidebar :entries="[reportMenu, editMenu, enableMenu, createMenu]"></layout-sidebar>
        </div>

        <div class="col-lg-10 col-md-9 col-sm-8">
            <router-view></router-view>
        </div>

    </div>

</template>



<script>

    var getters = require('vuex/getters.js')

    export default {

        computed: {

            reportMenu: function () {
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

            editMenu: function () {
                var recordEntries = {
                    title: this.text.accounts.edit.title,
                    entries: [],
                }
                for (var i = 0; i < this.enabledAccounts.length; ++i) {
                    recordEntries.entries.push({
                        text: this.enabledAccounts[i].name,
                        route: '/accounts/edit/' + this.enabledAccounts[i].id,
                    })
                }
                return recordEntries
            },

            enableMenu: function () {
                var recordEntries = {
                    title: this.text.accounts.enable.title,
                    entries: [],
                }
                for (var i = 0; i < this.disabledAccounts.length; ++i) {
                    recordEntries.entries.push({
                        text: this.disabledAccounts[i].name,
                        route: '/accounts/enable/' + this.disabledAccounts[i].id,
                    })
                }
                return recordEntries
            },

            createMenu: function () {
                return {
                    title: this.text.accounts.create.title,
                    route: '/accounts/create',
                }
            },

        },

        vuex: {
            getters: {
                enabledAccounts: getters.getEnabledAccounts,
                disabledAccounts: getters.getDisabledAccounts,
                text: getters.getText,
            },
        },

    }
</script>
