<template>
    <div>
        <div v-if="customers">
            <customer-row v-for="customer in customers" :key="customer.id" :customer="customer"></customer-row>
        </div>
        <div v-else-if="loading">
            <p><font-awesome-icon class="fa-pulse" icon="spinner" /> Loading…</p>
        </div>
        <div v-else>
            <p>Click the load button!</p>
            <button autofocus @click.prevent="load"><font-awesome-icon icon="user-friends" /> Load Customers</button>
        </div>

    </div>
</template>

<script>
    export default {
        data() {
            return {
                customers: null,
                loading: false,
            };
        },
        methods: {
            load() {
                this.loading = true;
                axios.get('/customers')
                    .then((response) => {
                        this.customers = response.data;
                        this.loading = false;
                    });
            }
        }
    }
</script>
