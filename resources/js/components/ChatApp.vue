<template>
    <div class="chat-app">
        <Conversation :contact="selectedContect" :message="messages"/>
        <ContactsList :contacts="contacts"/>
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
        }
    }
</script>
