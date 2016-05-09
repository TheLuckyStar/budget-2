
<template>

    <div v-for="entryGroup in entries" class="panel panel-default">

        <div class="panel-heading">
            <h3 class="panel-title">
                {{ entryGroup.title }}
            </h3>
        </div>

        <div class="list-group">
            <a v-for="entry in entryGroup.entries"
                v-link="{ path: entry.route, activeClass: 'active' }"
                class="list-group-item">
                {{ entry.text }}
            </a>
        </div>

    </div>

</template>



<script>

    export default {

        props: ['entries'],

    }

</script>
