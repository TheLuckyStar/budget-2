
<template>

    <nav class="navbar navbar-default">

        <div class="container-fluid">

            <div class="navbar-header">

                <button type="button"
                    class="navbar-toggle collapsed"
                    data-toggle="collapse"
                    data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="#">Budget</a>

            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse">

                <ul class="nav navbar-nav">
                    <li v-link-active>
                        <a v-link="{ path: '/', activeClass: 'active' }">
                            Accueil
                        </a>
                    </li>
                    <li v-link-active>
                        <a v-link="{ path: '/accounts', activeClass: 'active' }">
                            Comptes
                        </a>
                    </li>
                    <li v-link-active>
                        <a v-link="{ path: '/envelopes', activeClass: 'active' }">
                            Envelopes
                        </a>
                    </li>
                    <li v-link-active>
                        <a v-link="{ path: '/operations', activeClass: 'active' }">
                            Operations
                        </a>
                    </li>
                </ul>

            </div>

        </div>

    </nav>

</template>



<script>

    export default {}

</script>
