<template>
    <a v-if="userData.muted" :class="{'btn btn-sm btn-primary': !dropdown, 'dropdown-item': dropdown}"
       :data-mdb-toggle="!showText ? 'tooltip' : false" :title="i18n.get('_.user.unmute-tooltip')" href="#"
       @click.prevent="unmute">
        <i aria-hidden="true" class="far fa-eye"></i>
        <span v-if="showText">{{ i18n.get("_.user.unmute-tooltip") }}</span>
    </a>
    <a v-else-if="showButton" :class="{'btn btn-sm btn-primary': !dropdown, 'dropdown-item': dropdown}"
       :data-mdb-toggle="!showText ? 'tooltip' : false" :title="i18n.get('_.user.mute-tooltip')" href="#"
       @click.prevent="mute">
        <i aria-hidden="true" class="far fa-eye-slash"></i>
        <span v-if="showText">{{ i18n.get("_.user.mute-tooltip") }}</span>
    </a>
</template>

<script>

import {ProfileModel} from "../js/APImodels";

export default {
    name: "MuteButton",
    inject: ["notyf"],
    data() {
        return {
            userData: ProfileModel
        };
    },
    props: ["user", "bigButton", "dropdown"],
    mounted() {
        this.userData = this.$props.user;
        console.log(this.userData);
    },
    watch: {
        user(val, oldVal) {
            this.userData = this.$props.user;
        }
    },
    computed: {
        showButton() {
            return this.userData.id !== this.$auth.user().id;
        },
        showText() {
            return this.$props.bigButton || this.$props.dropdown;
        }
    },
    methods: {
        mute() {
            axios
                .post("/user/createMute", {userId: this.user.id})
                .then((result) => {
                    this.userData = result.data.data;
                    this.$emit("updateUser", this.userData);
                })
                .catch((error) => {
                    if (error.response) {
                        this.notyf.error(error.response.data.error.message);
                    } else {
                        this.notyf.error(this.i18n.get("_.messages.exception.general"));
                    }
                });
        },
        unmute() {
            axios
                .delete("/user/destroyMute", {data: {userId: this.user.id}})
                .then((result) => {
                    this.userData = result.data.data;
                    this.$emit("updateUser", this.userData);
                })
                .catch((error) => {
                    if (error.response) {
                        this.notyf.error(error.response.data.error.message);
                    } else {
                        this.notyf.error(this.i18n.get("_.messages.exception.general"));
                    }
                })
        }
    }
};
</script>

<style scoped>

</style>
