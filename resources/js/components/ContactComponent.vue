<template>
    <b-list-group-item :variant="variant">
        <b-row class="p-2" align-h="center">
            <b-col cols="12" md="3" class="text-center">
                <b-img blank rounded="circle" width="60" height="60" blank-color="#777" alt="img" class="m-1"></b-img>
            </b-col>
            <b-col cols="6" align-self="center" class="d-none d-md-block">
                <p class="mb-1">{{name}}</p>
                <p class="text-muted small mb-1">{{ultimo_mensaje}}</p>
            </b-col>
            <b-col cols="3" class="d-none d-md-block">
                <p class="text-muted small">{{lastTime}}</p>
            </b-col>

        </b-row>
    </b-list-group-item>
</template>

<script>
    export default {
        props:[
            'variant'
        ],
        data(){
            return {
                name:'Erick Guerrero',
                ultimo_mensaje:'Tú: Te bañas',
                lastTime:'1:37 p.m.',
            };
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
