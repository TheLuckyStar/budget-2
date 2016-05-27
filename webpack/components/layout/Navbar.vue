
<template>

    <nav class="navbar navbar-default">

        <div class="container">

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

                <a class="navbar-brand" v-link="{ path: '/', activeClass: 'active' }">
                    {{ text.app.title }}
                </a>

            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse">

                <ul class="nav navbar-nav">
                    <li v-link-active>
                        <a v-link="{ path: '/home', activeClass: 'active' }">
                            {{ text.home.page.title }}
                        </a>
                    </li>
                    <li v-link-active>
                        <a v-link="{ path: '/accounts', activeClass: 'active' }">
                            {{ text.accounts.page.title }}
                        </a>
                    </li>
                    <li v-link-active>
                        <a v-link="{ path: '/envelopes', activeClass: 'active' }">
                            {{ text.envelopes.page.title }}
                        </a>
                    </li>
                    <li v-link-active>
                        <a v-link="{ path: '/operations', activeClass: 'active' }">
                            {{ text.operations.page.title }}
                        </a>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li v-for="lang in availableLanguages"
                        :class="{ active: lang === language }">
                        <a href="#" v-on:click.prevent="setLanguage(lang)">{{ lang | uppercase }}</a>
                    </li>
                </ul>

            </div>

        </div>

    </nav>

</template>



<script>

    var mixins = require('scripts/mixins.js')

    export default {

        mixins: [mixins.vuex],

    }

</script>
