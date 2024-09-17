import axios from 'axios'
export default {
    data() {
        return {

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
        openModal : function (modalId = false, formData = {}, callback= false){
            const _this = this;
            let modal= modalId ? modalId : 'myModal';
            $(`#${modal}`).modal('show');
            _this.$store.commit('formData', formData);


            if (typeof callback == 'function'){
                callback(true);
            }
        },

        closeModal : function (modalId = 'myModal', formData = {}){
            const _this = this;
            $(`#${modalId}`).modal('hide');
            _this.$store.commit('formData', {});
            _this.$store.commit('updateId', '');
            _this.$store.commit('formType', 1);

        },

        urlGenerate : function (customUrl = false){
            const _this = this;
            if (customUrl){
                return `${baseUrl}/${customUrl}`;
            }
            return `${baseUrl}/${_this.$route.meta.dataUrl}`;
        },

        openEditModal : function (data, id){
            const _this = this;
            _this.$store.commit('updateId', id);
            _this.$store.commit('formType', 2);
            _this.openModal(false, data);
        },


    },

    computed : {
        formData(){
            return this.$store.state.formData;
        },
        dataList(){
            return this.$store.state.dataList;
        },
        updateId(){
            return this.$store.state.updateId;
        },
        formType(){
            return this.$store.state.formType;
        },
        requiredData(){
            return this.$store.state.requiredData;
        },
        Config(){
            return this.$store.state.Config;
        },
        permissions(){
            return this.$store.state.permissions;
        }

    }

}