
<template>

    <div class="row">

        <div class="col-md-3 col-sm-4">
            <layout-sidebar :entries="entries"></layout-sidebar>
        </div>

        <div class="col-md-9 col-sm-8">
            <router-view></router-view>
        </div>

    </div>

</template>



<script>

    var actions = require('vuex/actions.js')
    var getters = require('vuex/getters.js')

    export default {

        computed: {

            entries: function () {
                return [
                    this.enabledEnvelopesMenu,
                    this.disabledEnvelopesMenu,
                    this.newEnvelopeMenu
                ].filter(function(val) {
                    return val !== null;
                })
            },

            enabledEnvelopesMenu: function () {
                if (this.enabledEnvelopes.length === 0) {
                    return null
                }
                return {
                    title: this.text.envelopes.enabled.title,
                    route: '/envelopes/all',
                    entries: this.enabledEnvelopes.map(function (envelope) {
                        return {
                            text: '<i class="fa fa-fw ' + envelope.icon + '"></i> ' +  envelope.name,
                            route: '/envelopes/one/' + envelope.id,
                            badge: envelope.balance,
                            badgeColor: envelope.balance < 0 ? 'danger' : 'success',
                        }
                    }),
                }
            },

            disabledEnvelopesMenu: function () {
                if (this.disabledEnvelopes.length === 0) {
                    return null
                }
                return {
                    title: this.text.envelopes.disabled.title,
                    entries: this.disabledEnvelopes.map(function (envelope) {
                        return {
                            text: '<i class="fa fa-fw ' + envelope.icon + '"></i> ' +  envelope.name,
                            route: '/envelopes/one/' + envelope.id,
                            badge: envelope.balance,
                            badgeColor: envelope.balance < 0 ? 'danger' : 'success',
                        }
                    }),
                }
            },

            newEnvelopeMenu: function () {
                return {
                    title: this.text.envelopes.new.title,
                    route: '/envelopes/new',
                }
            },

        },

        created: function () {
            this.refreshEnvelopes()
        },

        vuex: {
            actions: {
                refreshEnvelopes: actions.refreshEnvelopes,
            },
            getters: {
                enabledEnvelopes: getters.getEnabledEnvelopes,
                disabledEnvelopes: getters.getDisabledEnvelopes,
                text: getters.getText,
            },
        },

    }
</script>
