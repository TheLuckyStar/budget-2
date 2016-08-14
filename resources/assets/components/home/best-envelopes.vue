
<template>

    <div class="row">

        <div class="col-md-12">

            <h1>
                {{ text.home.bestEnvelopes.title }}
            </h1>

            <hr>

        </div>

        <div class="col-md-3 col-sm-6">
            <layout-card :color="100 < 0 ? 'danger' : 'success'"
                icon="fa-book"
                :text="100"
                comment="Culture & Loisirs"
            ></layout-card>
        </div>

        <div class="col-md-3 col-sm-6">
            <layout-card :color="100 < 0 ? 'danger' : 'success'"
                icon="fa-book"
                :text="100"
                comment="Culture & Loisirs"
            ></layout-card>
        </div>

        <div class="col-md-3 col-sm-6">
            <layout-card :color="100 < 0 ? 'danger' : 'success'"
                icon="fa-book"
                :text="100"
                comment="Culture & Loisirs"
            ></layout-card>
        </div>

        <div class="col-md-3 col-sm-6">
            <layout-card :color="100 < 0 ? 'danger' : 'success'"
                icon="fa-book"
                :text="100"
                comment="Culture & Loisirs"
            ></layout-card>
        </div>

    </div>

</template>



<script>

    var mixins = require('scripts/mixins.js')

    export default {

        mixins: [mixins.vuex],

    }

</script>

