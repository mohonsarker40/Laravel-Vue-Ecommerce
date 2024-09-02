<template>
    <!-- The Modal -->
    <div class="modal" :id="modalId">
        <div class="modal-dialog modal-xl ">
            <form @submit.prevent="submitForm(formData)">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Modal Heading</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <slot></slot>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" @click="submitForm">Submit</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
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
            formData : {
                type : [Object, Array],
                default(){
                    return {}
                }
            }
        }
    }
</script>

<style scoped>

</style>