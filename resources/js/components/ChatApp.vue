<template>
    <div class="chat-app">
        <Conversation :contact="selectedContect" :messages="messages"/>
        <ContactsList :contacts="contacts" @selected="startConversationWith"/>
    </div>
</template>

<script>
    import Conversation from './Conversation.vue';
    import ContactsList from './List.vue';

    export default {
        components: {Conversation, ContactsList},
        props: {
            user : {
                type : Object,
                required : true
            }
        },
        data() {
            return {
                selectedContect : null,
                messages : [],
                contacts : []
            }
        },
        mounted() {
            console.log(this.user)
            axios.get('/contacts')
            .then((response) => {
                this.contacts = response.data;
            })
        },
        methods: {
            startConversationWith(contact) {
                this.updateUnreadCount(contact, true);
                axios.get(`/conversation/${contact.id}`)
                    .then((response) => {
                        this.messages = response.data;
                        this.selectedContact = contact;
                    })
            },
        }
    }
</script>
