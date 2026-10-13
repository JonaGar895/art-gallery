<template> <div> <h1>Setting</h1>
</div>

</template>

<script>
import Nav from '../shared/Nav.vue';
import { Link } from '@inertiajs/vue3';
export default {props
    : {
        name: String,
        frameworks: Array ,
    },
    components: {
        Nav, Link
    },
};
</script>