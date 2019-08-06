<template>
        <transition name="step" mode="out-in">
            <component
                v-bind:is="step"
                @next-step="nextStep"
            ></component>
        </transition>
</template>
<script>
    import Start from './helper/Start.vue';
    import StepImage from './helper/StepImage.vue';
    import StepTitle from './helper/StepTitle.vue';
    import StepBody from './helper/StepBody.vue';
    import StepPrice from './helper/StepPrice.vue';
    import StepConfirm from './helper/StepConfirm.vue';
    export default {
        data: function () {
            return {
                step: "Start",
                file: '',
                title: '',
                body: '',
                price: 0
            }
        },
        components: {
            Start, StepImage, StepTitle, StepBody, StepPrice, StepConfirm
        },
        methods: {
            nextStep: function () {
                switch (arguments[0]) {
                    case 'StepTitle':
                        this.file = arguments[1];
                        break;
                    case 'StepBody':
                        this.title = arguments[1];
                        break;
                    case 'StepPrice':
                        this.body = arguments[1];
                        break;
                    case 'StepConfirm':
                        this.price = arguments[1];
                        this.submitPainting();
                        break;
                    default:
                        break;
                }
                this.step = arguments[0]
            },
            submitPainting: function () {
                axios.post('/api/helper/store', {
                    title: this.title,
                    body: this.body,
                    image: this.file,
                    price: this.price
                }).then(response => {
                    if (response.data.ok != true) {
                        console.log(response)
                        alert("ОШЫБКА !! " + JSON.stringify(response));
                    }
                })
                .catch(function(error){
                    console.log(error)
                    alert("ОШЫБКА!!\n\n" + JSON.stringify(error));
                });
            }
        },
    }
</script>

<style>
    .step-enter-active {
        animation: step-in .5s;
    }
    .step-leave-active {
        animation: step-in .5s reverse;
    }
    @keyframes step-in {
        0% {
            transform: scale(0);
        }
        50% {
            transform: scale(1.5);
        }
        100% {
            transform: scale(1);
        }
    }
    .btn-sq-lg {
        width: 100%;
        height: auto;
        display: inline-block;
        font-size: 14px;
        font-weight: 400;
        line-height: 1.42857143;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -ms-touch-action: manipulation;
        touch-action: manipulation;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-image: none;
    }
    .card {
        margin-bottom: 20px;
        box-shadow: 0 10px 10px rgba(0,0,0,0.3);
        border-radius: 30px;
        padding: 20px;
        border: #bbbec2 1px solid;
    }
</style>
