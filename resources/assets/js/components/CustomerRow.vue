<template>
    <div v-if="customer">
        <h2>{{ customer.first_name }} {{ customer.last_name }} <font-awesome-icon :icon="customer.gender.toLowerCase()"/></h2>
        <p>{{ byline }}</p>
        <p><a :href="emailUrl">email</a> <a :href="customer.website">website</a></p>
    </div>
</template>

<script>
    export default {
        props: {
            customer: Object,
        },
        computed: {
            emailUrl() {
                return `mailto:${this.customer.email}`;
            },
            byline() {
                const {title, company, city} = this.customer;
                return ` ${title}, ${company ? ' at ' + company : ''}${city ? ', ' + city : ''}`;
            }
        }
    }
</script>
