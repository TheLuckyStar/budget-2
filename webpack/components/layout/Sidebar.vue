
<template>

    <div>

        <div v-for="entryGroup in entries" class="panel panel-default">

            <div class="panel-heading" v-link-active>
                <h3 class="panel-title">
                    <a v-if="entryGroup.route"
                        v-link="{ path: entryGroup.route, activeClass: 'active' }">
                        {{ entryGroup.title }}
                    </a>
                    <template v-else>
                        {{ entryGroup.title }}
                    </template>
                </h3>
            </div>

            <div class="list-group">
                <a v-for="entry in entryGroup.entries"
                    v-link="{ path: entry.route, activeClass: 'active' }"
                    class="list-group-item">
                    {{{ entry.text }}}
                </a>
            </div>

        </div>

    </div>

</template>



<script>

    export default {

        props: ['entries'],

    }

</script>



<style scoped>

    .panel-heading.active {
        color: #fff;
        background-color: #158CBA;
        border-color: #158CBA;
    }

</style>
