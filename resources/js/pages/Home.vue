<template>
    <div>
        <h1 class="text-4xl font-bold"> 🎨 Galería de Cuadros</h1>
        <p>Bienvenido {{ name }}</p>
    </div>

    <Nav />
</template>

<script>
import Nav from '../shared/Nav.vue';

export default {
    components: {
        Nav,
    },
    props: {
        name: String,
        frameworks: Array
    }
};
</script>