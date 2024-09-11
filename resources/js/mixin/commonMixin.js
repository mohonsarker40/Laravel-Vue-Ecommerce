import axios from 'axios'


export default {
    data() {
        return {
            // dataList: {},
            // formData: {}
        }
    },
    watch: {
        'errors': {
            handler: function (eachError, oldVal) {
                const _this = this;
                $(".validation_error").remove();
                $(".is-invalid").removeClass('is-invalid');
                $.each(eachError.items, function (index, eachField) {
                    var target = $("[name='" + eachField.field + "']");
                    $(target).parent().append("<span class='validation_error'>" + eachField.msg + "</span>")
                    $(target).addClass('is-invalid');
                });
            },
            deep: true
        }
    },

    methods: {
        // formData =this.$store.getters.formData
        openModal : function (modalId = 'myModal', formData = {}){
            const _this = this;
            $(`#${modalId}`).modal('show');
            _this.$store.commit('formData', formData);
        },

        closeModal : function (modalId = 'myModal', formData = {}){
            const _this = this;
            $(`#${modalId}`).modal('hide');
            _this.$store.commit('formData', {});

        },

        urlGenerate : function (customUrl = false){
            const _this = this;
            if (customUrl){
                return `${baseUrl}/${customUrl}`;
            }
            return `${baseUrl}/${_this.$route.meta.dataUrl}`;
        },
        // openEditModal(category) {
        //     this.$store.commit('formData', category);
        //     if (this.$refs.myModal) {
        //         this.$refs.myModal.show();
        //     } else {
        //         console.error("Modal not found");
        //     }
        // },
        openEditModal(category) {
            let cat=Object.assign({},category)
            this.$store.commit('formData', cat);

            this.openModal('myModal',this.$store.getters.formData);

        },
    },

    computed : {
        formData(){
            return this.$store.state.formData;
        },
        dataList(){
            return this.$store.state.dataList;
        }
    }

}