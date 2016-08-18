
<template>

    <div class="row">

        <div class="col-md-12">

            <h1>
                {{ text.home.bestEnvelopes.title }}
            </h1>

            <hr>

        </div>

        <template v-for="(index, envelope) in bestEnvelopes">

            <div v-if="index % 4 === 0" class="clearfix visible-md visible-lg"></div>

            <div v-if="index % 2 === 0" class="clearfix visible-sm"></div>

            <div class="col-md-3 col-sm-6">
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

    }

</script>

