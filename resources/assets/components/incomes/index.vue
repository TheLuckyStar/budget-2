
<template>

    <div id="incomes-index">
        <div class="row">

            <div class="incomes-envelopes hidden-xs col-sm-4 col-md-3 col-lg-2">
                <div class="panel panel-default">

                    <div class="panel-heading">
                        {{ text.incomes.page.envelopesTitle }}
                    </div>

                    <ul class="list-group">
                        <li v-for="envelope in envelopes" class="list-group-item">
                            <i class="fa fa-fw {{ envelope.icon }}"></i>
                            {{ envelope.name }}
                            <span class="badge badge-{{ envelope.state.balance < 0 ? 'danger' : 'success' }} pull-right">
                                {{ envelope.state.balance }}
                            </span>
                        </li>
                    </ul>

                </div>
            </div>

            <div class="incomes-invisible hidden-xs col-xs-12 col-sm-4 col-md-3 col-lg-2">&nbsp;</div>

            <div v-for="month in months" class="incomes-inputs col-xs-12 col-sm-4 col-md-3 col-lg-2">
                <div class="panel panel-default">

                    <div class="panel-heading">
                        {{ month.format('MMMM YYYY') }}
                    </div>

                    <ul class="list-group">
                        <li v-for="envelope in envelopes" class="list-group-item">
                            <div class="input-group input-group-sm">
                                <span class="input-group-addon" :title="envelope.name">
                                    <i class="fa fa-fw {{ envelope.icon }}"></i>
                                </span>
                                <input type="text" class="form-control" :placeholder="envelope.name">
                            </div>
                        </li>
                    </ul>

                </div>
            </div>

        </div>
    </div>

</template>



<script>

    var mixins = require('scripts/mixins.js')

    export default {

        mixins: [mixins.vuex],

        created: function () {
            this.$emit('refresh-data')
        },

        computed: {
            months: function () {
                return [moment('2016-01-01'), moment('2016-02-01'), moment('2016-03-01')]
            }
        },

        events: {
            'refresh-data': function () {
                this.refreshEnvelopes()
                return true
            },
        },

    }

</script>



<style scoped>

    #incomes-index {
        overflow-x: auto;
        white-space: nowrap;
    }

    .incomes-envelopes, .incomes-invisible, .incomes-inputs {
        display: inline-block;
        float: none;
    }

    .incomes-envelopes {
        position: absolute;
        z-index: 10;
    }

    .incomes-inputs .list-group-item {
        padding: 6px 9px;
    }

</style>
