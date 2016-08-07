
<template>

    <fieldset>

        <legend v-if="legend">
            {{ legend }}
        </legend>

        <canvas></canvas>

    </fieldset>

</template>



<script>

    var mixins = require('scripts/mixins.js')

    export default {

        mixins: [mixins.vuex, mixins.moment, mixins.development],

        props: ['type', 'legend', 'labels', 'datasets'],

        data: function () {
            return {
                chart: null,
                frontColors: {
                    primary: 'rgb(21, 140, 186, 1)',
                    default: 'rgba(231, 233, 237, 1)',
                    success: 'rgba(75, 192, 192, 1)',
                    info: 'rgba(54, 162, 235, 1)',
                    warning: 'rgba(255, 206, 86, 1)',
                    danger: 'rgba(255, 99, 132, 1)',
                },
                backColors: {
                    primary: 'rgba(21, 140, 186, 0.2)',
                    default: 'rgba(231, 233, 237, 0.2)',
                    success: 'rgba(75, 192, 192, 0.2)',
                    info: 'rgba(54, 162, 235, 0.2)',
                    warning: 'rgba(255, 206, 86, 0.2)',
                    danger: 'rgba(255, 99, 132, 0.2)',
                },
            }
        },

        computed: {
            formatedDatasets: function () {
                return this.datasets.map(function (dataset) {
                    this.colorDataset(dataset)
                    return dataset
                }, this)
            },
        },

        watch: {
            formatedDatasets: function () {
                this.chart.data.labels = this.labels
                this.chart.data.datasets = this.formatedDatasets
                this.chart.update()
            },
            chartLabels: function () {
                this.chart.data.labels = this.labels
                this.chart.update()
            },
        },

        ready: function () {
            if (this.type === 'radar') {
                this.$el.lastElementChild.setAttribute('height', this.$el.lastElementChild.offsetWidth)
            }
            this.chart = new Chart(
                this.$el.lastElementChild,
                {
                    type: this.type,
                    data: {
                        labels: this.labels,
                        datasets: this.formatedDatasets
                    },
                }
            )
        },

        methods: {

            colorDataset: function (dataset) {
                var colors = this[dataset.type+'Colors'](dataset.color)

                Object.keys(colors).forEach(function (key) {
                    dataset[key] = colors[key]
                })

                delete dataset.color
            },

            lineColors: function (color) {
                return {
                    backgroundColor: this.backColors[color],
                    borderColor: this.frontColors[color],
                    pointBorderColor: this.frontColors[color],
                    pointBackgroundColor: this.frontColors[color],
                    pointHoverBackgroundColor: this.frontColors[color],
                    pointHoverBorderColor:  this.frontColors[color],
                    borderWidth: 2,
                }
            },

            barColors: function (color) {
                return {
                    backgroundColor: this.backColors[color],
                    borderColor: this.frontColors[color],
                    hoverBackgroundColor: this.backColors[color],
                    hoverBorderColor: this.frontColors[color],
                    borderWidth: 2,
                }
            },

            radarColors: function (color) {
                return {
                    backgroundColor: this.backColors[color],
                    borderColor: this.frontColors[color],
                    pointBorderColor: this.frontColors[color],
                    pointBackgroundColor: this.frontColors[color],
                    pointHoverBackgroundColor: this.frontColors[color],
                    pointHoverBorderColor: this.frontColors[color],
                    borderWidth: 2,
                }
            },

        },

    }

</script>
