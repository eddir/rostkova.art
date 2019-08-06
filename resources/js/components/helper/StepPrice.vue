<template name="StepPrice">
    <div class="card">
        <h3>Цена?</h3>
        <div class="form-group">
            <div class="input-group" style="width:100%;">
                <span class="input-group-addon">₽</span>
                <input type="number" class="form-control" v-model="price" autofocus>
            </div>
        </div>
        <div @click="$emit('next-step', 'StepConfirm', price)" class="btn btn-success">Выставить</div>
    </div>
</template>
<script>
export default {
    data: function () {
        return {
            price: ''
        }
    }
}
</script>
