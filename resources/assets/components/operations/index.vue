
<template>

    <div class="row">

        <operations-modal :operation="{id: '', type: 'revenue'}"></operations-modal>
        <operations-modal :operation="{id: '', type: 'outcome'}"></operations-modal>

        <operations-filters></operations-filters>

        <div class="col-sm-10">
            <template v-for="month in months">
                <operations-month :month="month"></operations-month>
            </template>
        </div>

        <div class="col-sm-2 hidden-xs">
            <ul class="list-unstyled" data-spy="affix" data-offset-top="0" data-offset-bottom="0">
                <li>
                    <button type="button" class="btn btn-link" data-toggle="modal" data-target="#modal-revenue-">
                        {{ text.operations.modal.links.newRevenue }}
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-link" data-toggle="modal" data-target="#modal-outcome-">
                        {{ text.operations.modal.links.newOutcome }}
                    </button>
                </li>
                <li v-for="year in years">
                    <a href="#/operations?{{ monthsInYear(year)[0].format('YYYY-MM') }}" class="btn btn-link">
                        {{ year | formatYear }}
                    </a>
                    <ul class="list-unstyled">
                        <li v-for="month in monthsInYear(year)">
                            <a href="#/operations?{{ month.format('YYYY-MM') }}" class="btn btn-link">
                                {{ month | formatShortMonth }}
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

    </div>

</template>



<script>

    var mixins = require('scripts/mixins.js')
    var OperationsMonth = require('components/operations/month.vue')
    var OperationsFilters = require('components/operations/filters.vue')
    var OperationsModal = require('components/operations/modal.vue')

    export default {

        mixins: [mixins.vuex],

        computed: {

            months: function () {
                var months = []

                Object.keys(this.operations).map(function(year) {
                    Object.keys(this.operations[year]).map(function(month) {
                        months.push(moment().year(year).month(month))
                    }, this)
                }, this)

                return months.sort(function (a, b) {
                    return a < b ? 1 : -1
                })
            },

            years: function () {
                return Object.keys(this.operations)
                    .map(function (year) {
                        return moment().year(year)
                    })
                    .sort(function (a, b) {
                        return a < b ? 1 : -1
                    })
            },

        },

        created: function () {
            var component = this

            this.$emit('refresh-data')

            jQuery(document).scroll(function() {
                component.updateActiveMenu()
            })
        },

        methods: {

            monthsInYear: function (year) {
                return this.months.filter(function (month) {
                    return month.year() === year.year()
                })
            },

            monthOperations: function (month) {
                return this.operations.filter(function (operation) {
                    return operation.date.isBetween(month, month, 'month', '[]')
                })
            },

            updateActiveMenu: function () {
                var position = jQuery(document).scrollTop()
                var li = jQuery('.affix ul a, .affix-top ul a')
                li.parents('li').removeClass('active')
                li.each(function () {
                    var target = jQuery('[id="'+jQuery(this).attr('href').substring(1)+'"]')
                    if (position >= target.offset().top && position <= target.offset().top + target.height()) {
                        jQuery(this).parents('li').addClass('active')
                        return false
                    }
                })
            },

        },

        events: {
            'refresh-data': function () {
                this.refreshOperations()
                this.refreshAccounts()
                this.refreshEnvelopes()
                return true
            },
        },

        components: {
            OperationsMonth,
            OperationsFilters,
            OperationsModal,
        },

    }

</script>



<style scoped>

    ul ul {
        padding-left: 20px;
        display: none;
    }

    li.active ul {
        display: block;
    }

    li .btn-link {
        font-weight: normal;;
    }

    li.active > .btn-link {
        font-weight: bold;
    }


</style>
