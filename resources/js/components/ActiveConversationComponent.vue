<template>
    <b-row class="h-100">
        <b-col cols="8">
            <b-card
            footer-bg-variant="light"
            footer-border-variant="dark"
            title="Conversación activa"
            class="h-100">
                <p class="card-text">Encabezado y pie de pagina</p>
                <div slot="footer">
                    <b-input-group class="mb-0">
                        <b-form-input type="text" class="text-center"  placeholder="Escribe un mensaje...."></b-form-input>
                        <b-input-group-append>
                            <b-button variant="primary">Guardar</b-button>
                        </b-input-group-append>

                    </b-input-group>

                </div>

                <b-media left-align vertical-align="center">
                    <template v-slot:aside>
                        <b-img rounded="circle" blank blank-color="#ccc" width="48" alt="placeholder"></b-img>
                    </template>
                    <b-card class="mb-2">
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                    </b-card>
                </b-media>

                <b-media right-align vertical-align="center">
                    <template v-slot:aside>
                        <b-img rounded="circle" blank blank-color="#ccc" width="48" alt="placeholder"></b-img>
                    </template>
                    <b-card class="mb-2">
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                    </b-card>
                </b-media>

            </b-card>
        </b-col>
        <b-col cols="4">
            <b-img blank rounded="circle" width="60" height="60" blank-color="#777" alt="img" class="m-1"></b-img>
            <p>Usuario seleccionado</p>
            <hr>
            <b-form-checkbox>
                Desactivar notificaciones
            </b-form-checkbox>
        </b-col>
    </b-row>

</template>

<script>
    export default {
        data(){
            return {

            };
        },
        mounted() {
            console.log("Componente montado, jejeje")
        }
    }

</script>
