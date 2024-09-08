import axios from 'axios'

export default {
    data() {
        return {
            // dataList: {},
            // formData: {},
        }
    },
    methods: {
        // getDataList: function () {
        //     const _this = this;
        //     axios.get(`${baseUrl}/${this.$route.meta.dataUrl}`)
        //         .then(function (response) {
        //             _this.dataList = response.data.result;
        //         });
        // },
        getDataList: function () {
            const _this = this;
            axios.get(_this.urlGenerate())
                .then(function (response) {
                    _this.$store.commit('dataList', response.data.result);
                });
        },

        submitForm: function (formData = {}) {
            const _this = this;
            if (_this.formData.id) {
                axios.put(`${baseUrl}/${this.$route.meta.dataUrl}/${_this.formData.id}`, _this.formData)
                    .then(function (response) {
                        _this.getDataList();
                        _this.$toast.success('Category updated successfully!');
                        _this.closeModal();
                    })
                    .catch(function (error) {
                        console.error('Error updating category:', error);
                        // _this.$toast.error('Data updated Unsuccessfully!');


                    });
            } else {
                axios.post(`${baseUrl}/${this.$route.meta.dataUrl}`, _this.formData)
                    .then(function (response) {
                        _this.getDataList();
                         _this.$toast.success('Category Create successfully!');

                        _this.closeModal('myModal', 'hide');

                    })
                    .catch(function (error) {
                        console.error('Error adding category:', error);
                         _this.$toast.error('Category Create Unsuccessfully!');


                    });
            }
        },

        // deleteForm(id) {
        //     const _this = this;
        //     const URl = `${baseUrl}/${this.$route.meta.dataUrl}/${id}`;
        //     axios.post(URl)
        //         .then(function (response) {
        //             this.$store.commit('dataList', _this.dataList.filter(item => item.id !== id));
        //             console.log('Deleted successfully');
        //         })
        //         .catch(function (error) {
        //             console.log('Delete failed', error.response.data);
        //         });
        // },
         deleteForm(data) {
            const _this = this;
            axios
                .delete(`${baseUrl}/${this.$route.meta.dataUrl}/${data.id}`)

                .then((response) => {
                    _this.getDataList();
                    _this.$toast.success("Category Delete successfully!");
                })
                .catch((error) => {
                    console.error("Error deleting category:", error);
                    _this.$toast.error("Category Delete Unsuccessfully!");
                })
        },
    }

}

