<template name="StepImage">
    <div class="card">
        <div class="alert alert-danger" role="alert" v-show="error != ''">{{ error }}</div>
        <div class="form-group">
            <div class="input-group" style="width:100%;">
                <h3>Заголовок?</h3>
                <input type="text" class="form-control" v-model="title" autofocus>
            </div>
        </div>
        <div @click="confirm" class="btn btn-success">Дальше</div>
    </div>
</template>
<<script>
export default {
    data: function () {
        return {
            title: '',
            error: ''
        }
    },
    methods: {
        confirm: function () {
            if (this.title == "") {
                this.error = 'Заголовок пожалуйста))'
            } else {
                this.$emit('next-step', 'StepBody', this.title)
            }
        }
    },
}
</script>
