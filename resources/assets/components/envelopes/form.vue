
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
                    <input type="text" class="form-control" id="input-envelope-name" v-model="name" lazy :disabled="deleted_at">
                </div>
            </div>

            <div class="form-group">
                <label for="input-envelope-icon" class="col-xs-3 control-label">
                    {{ text.envelopes.form.icon }}
                </label>
                <div class="col-xs-9">
                    <input type="text" class="form-control" id="input-envelope-icon" v-model="icon" lazy :disabled="deleted_at">
                </div>
            </div>

            <div class="form-group">
                <div class="col-xs-12 text-right">
                    <button v-if="deleted_at && id"
                        @click="onEnable"
                        type="button"
                        class="btn btn-success btn-sm">
                        {{ text.app.enable }}
                    </button>
                    <button v-if="! deleted_at && id"
                        @click="onDisable"
                        type="button"
                        class="btn btn-warning btn-sm">
                        {{ text.app.disable }}
                    </button>
                    <button v-if="! deleted_at"
                        type="submit"
                        class="btn btn-primary btn-sm">
                        {{ text.app.submit }}
                    </button>
                </div>
            </div>

        </fieldset>

    </form>

</template>



<script>

    var mixins = require('scripts/mixins.js')

    export default {

        mixins: [mixins.vuex],

        data: function () {
            return {
                id: null,
                name: null,
                icon: null,
                deleted_at: null,
            }
        },

        watch: {
            envelope: function () {
                this.id = this.envelope.id
                this.name = this.envelope.name
                this.icon = this.envelope.icon
                this.deleted_at = this.envelope.deleted_at
            },
        },

        methods: {

            onSubmit: function () {
                jQuery('#envelope-form').modal('hide')

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
                jQuery('#envelope-form').modal('hide')

                var attributes = {
                    deleted_at: null
                }

                this.updateEnvelope(this.envelope.id, attributes)
            },

            onDisable: function () {
                jQuery('#envelope-form').modal('hide')

                var attributes = {
                    deleted_at: moment().format("YYYY-MM-DD HH:mm:ss"),
                }

                this.updateEnvelope(this.envelope.id, attributes)
            },

        },

    }

</script>



<style scoped>

    .modal-body legend {
        display: none;
    }

</style>