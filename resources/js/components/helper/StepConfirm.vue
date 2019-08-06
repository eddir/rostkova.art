<template name="StepConfirm">
    <div class="bg-success card">
        <h3>Успешно</h3>
        <img :src="image" style="width: 100%"></img><br><br>
        <div onclick="window.location.reload()" class="btn btn-success">Ещё одну?</div>
    </div>
</template>
<script>
    import VueConfetti from 'vue-confetti'
    Vue.use(VueConfetti)

    export default {
        data: function () {
            return {
                image: ""
            }
        },
        mounted: function () {
            this.image = this.$parent.file
            this.$confetti.start({});
        }
    }
</script>
