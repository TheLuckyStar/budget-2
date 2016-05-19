
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

        props: ['title', 'data', 'type'],

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
            this.data.datasets = this.data.datasets.map(function (item) {
                item.backgroundColor = item.backgroundColor.map(function (value) {
                    return this.backgroundColor[value]
                }, this)
                return item
            }, this)
            this.chart = new Chart(this.$el.lastElementChild, {
                type: this.type,
                data: this.data,
            })
        },

    }

</script>
