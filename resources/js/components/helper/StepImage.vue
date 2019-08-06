<template name="StepImage">
    <div class="card">
        <h3>Выбирайте:</h3>
        <input type="file" id="file" ref="file" @change="submitFile()">
        <br>
        <div class="progress">
            <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" v-bind:style="{width: uploadPercentage + '%'}" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">{{ uploadPercentage }}%</div>
        </div>
    </div>
</template>
<script>
export default {
    data: function () {
        return {
            file: '',
            uploadPercentage: 0
        }
    },
    methods: {
        handleFileUpload: function () {
             this.file = this.$refs.file.files[0];
        },
        submitFile: function () {
            this.file = this.$refs.file.files[0];
            let formData = new FormData();
            formData.append('image', this.file);
            axios.post( '/api/helper/uploadImage',
                formData,
                {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    },
                    onUploadProgress: function( progressEvent ) {
                        this.uploadPercentage = parseInt( Math.round( ( progressEvent.loaded * 100 ) / progressEvent.total ) );
                    }.bind(this)
                }
            ).then(response => {
                if (response.data.ok) {
                    this.$emit('next-step', 'StepTitle', response.data.response.file);
                } else {
                    console.log(response)
                    alert("ОШЫБКА !! " + JSON.stringify(response));
                }
            })
            .catch(function(error){
                console.log(error)
                alert("ОШЫБКА!!\n\n" + JSON.stringify(error));
            });
       }
    }
}
</script>