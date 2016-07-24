
<template>

    <fieldset>

        <legend>
            {{ title }}
        </legend>

        <div class="panel panel-{{ color }}">

            <div class="panel-heading">

                <div class="row">

                    <div class="col-xs-3">
                        <i class="fa {{ icon }} fa-5x"></i>
                    </div>

                    <div class="col-xs-9 text-right">

                        <div class="huge">
                            {{ text }}
                        </div>

                        <div>
                            {{ comment }}
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </fieldset>

</template>



<script>

    export default {
        props: ['color', 'icon', 'title', 'text', 'comment'],
    }

</script>



<style scoped>

    .huge {
        font-size: 40px;
    }

</style>
