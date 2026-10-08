<template> <div> <h1>🎨 Galería de Cuadros</h1>
    <p>Bienvenido {{ name }}</p>
</div>
<nav>
    <li><a href='/'>Home</a></li>
    <li><a href='/users'>Users</a></li>
    <li><a href='/setting'>setting</a></li>
</nav>

</template>

<script>
export default {props
    : {
        name: String,
        frameworks: Array ,
    },
};
</script>