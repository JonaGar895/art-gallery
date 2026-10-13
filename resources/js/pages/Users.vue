<template> <div> <h1 class="text-4xl font-bold">🎨 Users</h1>

<Nav />
</div>
<div style="margin-top: 400px">
    <p>the current time is {{ time }}.</p>

    <Link href="/users" class="text-blue-500" 
    preserve-scroll> refresh</Link>
</div>

</template>

<script>
import Nav from '../shared/Nav.vue';
import { Link } from '@inertiajs/vue3';

export default {
    components: {
        Nav, Link
    },

    props: {
        name: String,
        frameworks: Array,
        time: String,
    },
};
</script>