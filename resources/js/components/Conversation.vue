<template>
    <div class="conversation">
        <h1>{{ contact ? contact.name : "Select a Contact"}}</h1>
        <MessageFeed :contact="contact" :messages="messages"/>
        <MessageComposer @send="sendMessage"/>
    </div>
</template>

<script>
import MessageFeed from './MessageFeed';
import MessageComposer from './MessageComposer';

export default {
    components : {MessageFeed, MessageComposer},
    props: {
          contact: {
                type: Object,
                default: null
            },
            messages: {
                type: Array,
                default: []
            }
    },
    methods: {
        sendMessage(text) {
            console.log(text);
        }
    }
}
</script>

<style>

</style>
