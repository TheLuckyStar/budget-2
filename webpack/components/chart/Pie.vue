
<template>

    <fieldset>

        <legend>
            {{ title }}
        </legend>

        <canvas width="400" height="400"></canvas>

    </fieldset>

</template>



<script>

    export default {

        props: ['title', 'labels', 'data', 'colors'],

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
            this.chart = new Chart(this.$el.children[1], {
                type: 'pie',
                data: {
                    labels: this.labels,
                    datasets: [{
                        data: this.data,
                        backgroundColor: this.colors.map(function (value) {
                            return this.backgroundColor[value]
                        }, this),
                    }],
                },
            })
        },

    }

</script>
