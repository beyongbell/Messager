<template>
    <div class="chat-app">
        <Conversation :contact="selectedContact" :messages="messages" @new="saveNewMessage"/>
        <ContactsList :contacts="contacts" @selected="startConversationWith"/>
    </div>
</template>

<script>
    import Conversation from './Conversation.vue';
    import ContactsList from './List.vue';

    export default {
        components: {Conversation, ContactsList},
        props: {
            user: {
                type: Object,
                required: true
            }
        },
        data() {
            return {
                selectedContact : null,
                messages : [],
                contacts : []
            }
        },
        mounted() {
            axios.get('/contacts')
                .then((response) => {
                    this.contacts = response.data;
                });
        },
        methods: {
            startConversationWith(contact) {
                axios.get(`/conversation/${contact.id}`)
                    .then((response) => {
                        this.messages = response.data;
                        this.selectedContact = contact;
                    })
            },
            saveNewMessage(text) {
                this.messages.push(text)
            }
        }
    }
</script>

<style>
.chat-app {
    display : flex;
}
</style>

