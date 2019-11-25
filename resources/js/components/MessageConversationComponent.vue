<template>
    <b-media :right-align="writtenByMe" vertical-align="center">
        <template v-slot:aside>
            <b-img rounded="circle" blank blank-color="#ccc" width="48" alt="placeholder"></b-img>
        </template>
        <b-card class="mb-2">
            <slot></slot>
        </b-card>
    </b-media>


</template>

<script>
    export default {
        props: {
            writtenByMe:Boolean,
        },
        data(){
            return {
               // content:'sdfghjkjhgfg'
            };
        },
        mounted() {
            console.log("Componente montado, jejeje")
        }
    }

</script>
