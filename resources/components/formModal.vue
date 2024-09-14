<template>

    <div class="modal" :id="modalId">
        <div class="modal-dialog modal-xl ">
            <form @submit.prevent="submit()" >
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Modal Heading</h4>
                        <button type="button" class="btn-close"  @click="closeModal(modalId)"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <slot></slot>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" >Submit</button>
                        <button type="button" class="btn btn-danger" @click="closeModal(modalId)">Close</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</template>

<script>

    export default {
        name: "formModal",
        props: {
            modalId : {
                type : [String],
                default : 'myModal'
            },

        },
        methods : {

            submit : function (){
                this.$emit('submit');
            },
            show() {
                $(`#${this.modalId}`).modal('show');
            },
            closeModal() {
                $(`#${this.modalId}`).modal('hide');
            },
        }
    }

</script>

<style scoped>

</style>