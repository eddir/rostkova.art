<template name="StepBody">
    <div class="card">
        <h3>Может описание?</h3>
        <div class="form-group">
            <div class="input-group" style="width:100%;">
                <textarea v-model="body" style="width:100%;"></textarea>
            </div>
        </div>
        <div class="btn btn-success" @click="$emit('next-step', 'StepPrice', body)">{{ placeholder }}</div>
    </div>
</template>
<script>
export default {
    data: function () {
        return {
            body: '',
            placeholder: 'Не сейчас'
        }
    },
    watch: {
        body: function (newBody, oldBody) {
            if (newBody == "") {
                this.placeholder = "Не сейчас"
            } else {
                this.placeholder = "Дальше"
            }
        }
    },
}
</script>