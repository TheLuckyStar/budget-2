
<template>

    <div class="row">

        <div class="col-md-12">

            <h1>
                {{ title }}
            </h1>

            <hr>

        </div>

        <template v-for="(index, envelope) in data">

            <div v-if="index % 2 === 0" class="clearfix hidden-xs"></div>

            <div class="col-sm-6">
                <layout-card :color="envelope.state.balance < 0 ? 'danger' : 'success'"
                    :icon="envelope.icon"
                    :text="envelope.state.balance"
                    :comment="envelope.name"
                ></layout-card>
            </div>

        </template>

    </div>

</template>



<script>

    var mixins = require('scripts/mixins.js')

    export default {

        mixins: [mixins.vuex],

        props: ['title', 'data'],

    }

</script>

