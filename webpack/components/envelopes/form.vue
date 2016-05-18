
<template>

    <form v-on:submit.prevent="onSubmit" class="form-horizontal">

        <fieldset>

            <legend>
                {{ text.envelopes.form.title }}
            </legend>

            <div class="form-group">
                <label for="input-envelope-name" class="col-xs-3 control-label">
                    {{ text.envelopes.form.name }}
                </label>
                <div class="col-xs-9">
                    <input type="text" class="form-control" id="input-envelope-name" v-model="name" lazy :disabled="envelope.deleted_at !== null">
                </div>
            </div>

            <div class="form-group">
                <label for="input-envelope-icon" class="col-xs-3 control-label">
                    {{ text.envelopes.form.icon }}
                </label>
                <div class="col-xs-9">
                    <input type="text" class="form-control" id="input-envelope-icon" v-model="icon" lazy :disabled="envelope.deleted_at !== null">
                </div>
            </div>

            <div class="form-group">
                <div class="col-xs-12 text-right">
                    <button v-if="envelope.deleted_at !== null"
                        @click="onEnable"
                        type="button"
                        class="btn btn-success">
                        {{ text.app.enable }}
                    </button>
                    <button v-if="envelope.deleted_at === null && envelope.id"
                        @click="onDisable"
                        type="button"
                        class="btn btn-warning">
                        {{ text.app.disable }}
                    </button>
                    <button v-if="envelope.deleted_at === null"
                        type="submit"
                        class="btn btn-primary">
                        {{ text.app.submit }}
                    </button>
                </div>
            </div>

        </fieldset>

    </form>

</template>



<script>

    var actions = require('vuex/actions.js')
    var getters = require('vuex/getters.js')

    export default {

        props: ['envelope'],

        data: function () {
            return {
                name: null,
                icon: null,
            }
        },

        watch: {
            envelope: function () {
                this.name = this.envelope.name
                this.icon = this.envelope.icon
            },
        },

        methods: {
            onSubmit: function () {
                var attributes = {
                    name: this.name,
                    icon: this.icon,
                }
                if (this.envelope.id) {
                    this.updateEnvelope(this.envelope.id, attributes)
                } else {
                    this.saveEnvelope(attributes)
                }
            },
            onEnable: function () {
                var attributes = {
                    deleted_at: null
                }
                this.updateEnvelope(this.envelope.id, attributes)
            },
            onDisable: function () {
                var attributes = {
                    deleted_at: moment().format("YYYY-MM-DD HH:mm:ss"),
                }
                this.updateEnvelope(this.envelope.id, attributes)
            },
        },

        vuex: {
            actions: {
                updateEnvelope: actions.updateEnvelope,
                saveEnvelope: actions.saveEnvelope,
            },
            getters: {
                text: getters.getText,
            },
        },

    }

</script>
