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
                    <b-form @submit.prevent="postMessages" autocomplete="off">
                        <b-input-group class="mb-0" >
                            <b-form-input type="text" v-model="newMessage" class="text-center"  placeholder="Escribe un mensaje...."></b-form-input>
                            <b-input-group-append>
                                <b-button variant="primary" type="submit">Guardar</b-button>
                            </b-input-group-append>

                        </b-input-group>
                    </b-form>


                </div>


                <message-conversation-component v-for="message in messages"
                                                :key="message.id"
                :written-by-me="message.written_by_me">
                    {{message.content}}
                </message-conversation-component>



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
                messages: [],
                newMessage:'',
            };
        },
        mounted() {
            this.getMessages();
        },
        methods:{
            getMessages(){
                axios.get('/api/messages').then((response)=>{
                    this.messages = response.data
                });
            },
            postMessages(){
                const params = {
                    to_id:2,
                    content:this.newMessage,
                };
                axios.post('/api/messages',params)
                    .then((response)=>{
                    this.newMessage="";
                    this.getMessages();
                }).catch((err)=>{
                    console.log(err);
                });
            },
        }
    }

</script>
