
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

                <a class="navbar-brand" v-link="{ path: '/', activeClass: 'active' }">
                    {{ text.app.title }}
                </a>

            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse">

                <ul class="nav navbar-nav">
                    <li v-link-active>
                        <a v-link="{ path: '/home', activeClass: 'active' }">
                            {{ text.home.title }}
                        </a>
                    </li>
                    <li v-link-active>
                        <a v-link="{ path: '/accounts', activeClass: 'active' }">
                            {{ text.accounts.title }}
                        </a>
                    </li>
                    <li v-link-active>
                        <a v-link="{ path: '/envelopes', activeClass: 'active' }">
                            {{ text.envelopes.title }}
                        </a>
                    </li>
                    <li v-link-active>
                        <a v-link="{ path: '/operations', activeClass: 'active' }">
                            {{ text.operations.title }}
                        </a>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li v-for="language in availableLanguages"
                        :class="{ active: language === currentLanguage }">
                        <a href="#" v-on:click.prevent="setLanguage(language)">{{ language | uppercase }}</a>
                    </li>
                </ul>

            </div>

        </div>

    </nav>

</template>



<script>

    var actions = require('vuex/actions.js')
    var getters = require('vuex/getters.js')

    export default {

        created: function () {
            this.setLanguage(navigator.language || navigator.userLanguage)
        },

        vuex: {
            actions: {
                setLanguage: actions.setLanguage,
            },
            getters: {
                currentLanguage: getters.getCurrentLanguage,
                availableLanguages: getters.getAvailableLanguages,
                text: getters.getText,
            }
        }

    }

</script>
