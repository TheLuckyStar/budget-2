
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
                colors: {
                    default: '#E7E9ED',
                    success: '#4BC0C0',
                    info: '#36A2EB',
                    warning: '#FFCE56',
                    danger: '#FF6384',
                },
                defaultData: {
                    line: {
                        fill: false,
                        fillColor: 'white',
                    },
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

                Object.keys(this.defaultData[this.type]).forEach(function (key) {
                    output[key] = this.defaultData[this.type][key]
                }, this)

                Object.keys(input).forEach(function (key) {
                    output[key] = input[key]
                })

                Object.keys(input).filter(this.filterColors).forEach(function (key) {
                    output[key] = this.formatColors(input[key])
                }, this)

                return output
            },

            filterColors: function(key) {
                return key === 'backgroundColor' || key === 'borderColor' || key === 'pointBackgroundColor'
            },

            filterDefaultData: function(key) {
                return this.defaultData[this.type].hasOwnProperty(key)
            },

            formatColors: function(colors) {
                if (colors instanceof Array) {
                    return colors.map(this.formatColor)
                }

                return this.formatColor(colors)
            },

            formatColor: function (color) {
                if (this.colors.hasOwnProperty(color)) {
                    return this.colors[color]
                }

                return color
            },

        },

    }

</script>
