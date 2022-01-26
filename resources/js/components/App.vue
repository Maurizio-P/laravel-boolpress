<template>
<div>
    <nav>
        <ul class="navbar-nav">
            <li class="nav-items">
                <router-link class="nav-link" to="/">
                    Home
                </router-link>
            </li>
        </ul>
    </nav>
    <router-view></router-view>
</div>
</template>

<script>
export default {
    name: "App",
    data() {
        return {
            // variabili e array
            msg: 'ciao questo è stampato con vue',
        };
    }
}
</script>

<style>

</style>