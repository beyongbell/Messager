<template>
    <div class="list">
        <ul>
            <li v-for="contact in contacts" :key="contact.id">
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
        contacts : {
            type : Array,
            default : []
        }
    }
}
</script>

<style>

</style>
