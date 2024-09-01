import axios from 'axios'

    export  default {
        data(){
            return{
                dataList : {},
                formData : {}
            }
        },
        methods: {
            getDataList : function (){
                const _this = this;
                axios.get(`${baseUrl}/${this.$route.meta.dataUrl}`)
                    .then(function (response){
                        _this.dataList = response.data.result;
                    });
            },
        }
}