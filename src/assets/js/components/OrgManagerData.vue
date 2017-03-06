<template>
    <grid :position="grid" modifiers="padded overflow">
        <section class="orgmanager-data">
            <h1>OrgManager</h1>
                <ul>
                <li class="orgmanager-statistic">
                    <span class="orgmanager-statistics__users">Users</span>
                    <span class="orgmanager-statistics__count">{{ formatNumber(users) }}</span>
                </li>
                <li class="orgmanager-statistic">
                    <h2 class="orgmanager-statistics__orgs">Organizations</h2>
                    <span class="orgmanager-statistics__count">{{ formatNumber(orgs) }}</span>
                </li>
                <li class="orgmanager-statistic">
                    <h2 class="orgmanager-statistics__invites">Invites</h2>
                    <span class="orgmanager-statistics__count">{{ formatNumber(invites) }}</span>
                </li>
            </ul>
        </section>
    </grid>
</template>

<script>
import { formatNumber } from '../helpers';
import echo from '../mixins/echo';
import Grid from './Grid';
import saveState from 'vue-save-state';

export default {

    components: {
        Grid,
    },

    mixins: [echo, saveState],

    props: ['grid'],

    data() {
        return {
            users: 0,
            orgs: 0,
            invites: 0,
        };
    },

    methods: {
        formatNumber,

        getEventHandlers() {
            return {
                'OrgManager.CountsFetched': response => {
                    this.users = response.users;
                    this.orgs = response.orgs;
                    this.invites = response.invites;
                },
            };
        },

        getSaveStateConfig() {
            return {
                cacheKey: 'orgmanager-statistics',
            };
        },
    },
};
</script>
