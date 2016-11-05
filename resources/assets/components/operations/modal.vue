
<template>

    <div class="modal fade" id="modal-{{ operation.type }}-{{ operation.id }}" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                    <h4 class="modal-title">
                        {{ text.operations.modal.title[operation.type] }}
                    </h4>
                </div>

                <div class="modal-body row">

                    <div class="form-group col-sm-6">
                        <label for="operation-account_id-select">
                            {{ text.operations.attributes.account_id }}
                        </label>
                        <select v-model="account_id" class="form-control" id="operation-account_id-select">
                            <option v-for="account in accounts" value="{{ account.id }}">
                                {{ account.name }}
                            </option>
                        </select>
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="operation-envelope_id-select">
                            {{ text.operations.attributes.envelope_id }}
                        </label>
                        <select v-model="envelope_id" class="form-control" id="operation-envelope_id-select">
                            <option v-for="envelope in envelopes" value="{{ envelope.id }}">
                                {{ envelope.name }}
                            </option>
                        </select>
                    </div>

                    <div class="form-group col-sm-12">
                        <label for="operation-name-input">
                            {{ text.operations.attributes.name }}
                        </label>
                        <input type="text" v-model="name" class="form-control" id="operation-name-input">
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="operation-amount-input">
                            {{ text.operations.attributes.amount }}
                        </label>
                        <input type="text" v-model="amount" class="form-control" id="operation-amount-input">
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="operation-date-input">
                            {{ text.operations.attributes.date }}
                        </label>
                        <input type="text" v-model="date" class="form-control" id="operation-date-input">
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger pull-left" @click="onDelete">
                        {{ text.operations.modal.deleteButton }}
                    </button>
                    <button type="button" class="btn btn-primary" @click="onSubmit">
                        {{ text.operations.modal.saveButton }}
                    </button>
                </div>

            </div>
        </div>
    </div>

</template>



<script>

    var mixins = require('scripts/mixins.js')

    export default {

        mixins: [mixins.vuex],

        props: ['operation'],

        data: function () {
            return {
                account_id: null,
                envelope_id: null,
                name: null,
                amount: null,
                date: null,
            }
        },

        created: function () {
            this.account_id = this.operation.account_id
            this.envelope_id = this.operation.envelope_id
            this.name = this.operation.name
            this.amount = this.operation.amount
            this.date = moment(this.operation.date).format('L')
        },

        ready: function () {
            var component = this
            jQuery(document).ready(function() {
                jQuery('#modal-' + component.operation.type + '-' + component.operation.id + ' #operation-date-input').datetimepicker({
                    defaultDate: false,
                    format: 'L',
                    icons: {
                        time: 'fa fa-clock-o',
                        date: 'fa fa-calendar',
                        up: 'fa fa-chevron-up',
                        down: 'fa fa-chevron-down',
                        previous: 'fa fa-chevron-left',
                        next: 'fa fa-chevron-right',
                        today: 'fa fa-crosshairs',
                        clear: 'fa fa-trash',
                        close: 'fa fa-times'
                    },
                })
            })
        },

        methods: {

            onSubmit: function () {
                jQuery('#modal-' + this.operation.type + '-' + this.operation.id).modal('hide')

                var attributes = {
                    account_id: this.account_id,
                    envelope_id: this.envelope_id,
                    name: this.name,
                    amount: this.amount,
                    date: moment(this.date, 'L').format('YYYY-MM-DD'),
                }

                if (this.operation.id) {
                    this.updateOperation(this.operation.id, this.operation.type, attributes)
                } else {
                    this.saveOperation(this.operation.type, attributes)
                }
            },

            onDelete: function () {
                if (confirm(this.text.operations.modal.deleteConfirmation)) {
                    jQuery('#modal-' + this.operation.type + '-' + this.operation.id).modal('hide')
                    this.deleteOperation(this.operation.id, this.operation.type)
                }
            },

        }

    }

</script>


<style scoped>

    .modal {
        text-align: initial;
    }

</style>
