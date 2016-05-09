
<template>

    <div class="col-lg-2 col-md-3 col-sm-4">
        <layout-sidebar :entries="[reportEntries, recordEntries]"></layout-sidebar>
    </div>

    <div class="col-lg-10 col-md-9 col-sm-8">
        <router-view></router-view>
    </div>

</template>



<script>

    export default {

        data: function() {
            return {
                reportEntries: {
                    title: 'Rapports',
                    entries: [
                        {
                            text: 'Solde',
                            route: '/accounts/balance',
                        },
                    ],
                },
                recordEntries: {
                    title: "Liste des comptes",
                    entries: [],
                }
            }
        },

    }

</script>
