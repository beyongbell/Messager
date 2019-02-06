<template>
    <div class="list">
        <ul>
            <li v-for="(contact, index) in contacts" :key="contact.id" @click="selectContact(index, contact)" :class="{'selected' : index == selected}">
                <div class="avatar">
                    <img :src="contact.image">
                </div>
                <div class="contact">
                    <p class="name"> {{ contact.name  }}</p>
                    <p class="email">{{ contact.email }}</p>
                </div>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    props: {
          contacts: {
                type: Array,
                default: []
            }
    },
    data() {
        return {
            selected : 0
        }
    },
    methods: {
         selectContact(contact) {
                this.selected = contact;
                this.$emit('selected', contact);
            }
    }
}
</script>

<style>

</style>
