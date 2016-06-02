
<template>

    <fieldset>

        <legend v-if="title">
            {{ title }}
        </legend>

        <canvas></canvas>

    </fieldset>

</template>



<script>

    export default {

        props: ['title', 'chartLabels', 'data', 'dataLabels', 'type'],

        data: function () {
            return {
                chart: null,
                frontColors: {
                    default: 'rgba(231, 233, 237, 1)',
                    success: 'rgba(75, 192, 192, 1)',
                    info: 'rgba(54, 162, 235, 1)',
                    warning: 'rgba(255, 206, 86, 1)',
                    danger: 'rgba(255, 99, 132, 1)',
                },
                backColors: {
                    default: 'rgba(231, 233, 237, 0.2)',
                    success: 'rgba(75, 192, 192, 0.2)',
                    info: 'rgba(54, 162, 235, 0.2)',
                    warning: 'rgba(255, 206, 86, 0.2)',
                    danger: 'rgba(255, 99, 132, 0.2)',
                },
            }
        },

        ready: function () {
            this.chart = new Chart(this.$el.lastElementChild, {
                type: this.type,
                data: {
                    labels: [],
                    datasets: [],
                },
            })
        },

        watch: {
            data: function () {
                this.chart.data.labels = this.chartLabels
                this.chart.data.datasets = this.formatDatasets(this.data)
                this.chart.update()
            },
            chartLabels: function () {
                this.chart.data.labels = this.chartLabels
                this.chart.update()
            },
        },

        methods: {

            formatDatasets: function (datasets) {
                return datasets.map(this.formatDataset, this)
            },

            formatDataset: function (input, index) {
                var output = {
                    label: this.dataLabels[index],
                }

                Object.keys(input).forEach(function (key) {
                    output[key] = input[key]
                })

                output.backgroundColor = this.backColors[output.color]
                output.borderColor = this.frontColors[output.color]
                output.pointBorderColor = this.frontColors[output.color]
                output.pointBackgroundColor = this.backColors[output.color]
                output.pointHoverBackgroundColor = this.frontColors[output.color]

                return output
            },

        },

    }

</script>
