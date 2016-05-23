
<template>

    <fieldset>

        <legend v-if="title">
            {{ title }}
        </legend>

        <canvas width="400" height="400"></canvas>

    </fieldset>

</template>



<script>

    export default {

        props: ['title', 'labels', 'data', 'type'],

        data: function () {
            return {
                chart: null,
                backgroundColor: {
                    default: '#E7E9ED',
                    success: '#4BC0C0',
                    info: '#36A2EB',
                    warning: '#FFCE56',
                    danger: '#FF6384',
                },
            }
        },

        ready: function() {
            this.chart = new Chart(this.$el.lastElementChild, {
                type: this.type,
                data: {
                    labels: this.labels,
                    datasets: this.datasets,
                },
            })
        },

        computed: {
            datasets: function () {
                return this.data.map(this.formatDataset, this)
            },
        },

        methods: {

            formatDataset: function (input) {
                var output = {}

                Object.keys(input).forEach(function (key) {
                    output[key] = input[key]
                })

                Object.keys(input).filter(this.filterColors).forEach(function (key) {
                    output[key] = this.formatColors(input[key])
                }, this)

                return output
            },

            filterColors: function(key) {
                return key === 'backgroundColor'
            },

            formatColors: function(colors) {
                if (colors instanceof Array) {
                    return colors.map(this.formatColor)
                }

                return this.formatColor(colors)
            },

            formatColor: function (color) {
                return this.backgroundColor[color]
            },

        },

    }

</script>
