<template>
    <div>
        <h2 class="calc-shem__blc-title" id="typewriter"></h2>
    </div>
</template>

<script>
    import Typewriter from 'typewriter-effect/dist/core';

    export default {
        props: {
            q1: String,
            q2: String,
            q3: String,
        },
        mounted() {
            var typevr = new Typewriter(document.getElementById('typewriter'), {
                loop: true,
                changeDeleteSpeed: 2,
            });

            typevr.changeDelay(60)
            .typeString(this.q1)
            .pauseFor(3500)
            .deleteAll(8)
            .typeString(this.q2)
            .pauseFor(3500)
            .deleteAll(8)
            .typeString(this.q3)
            .pauseFor(3500)
            .deleteAll(8)
            .start()
        }
    }
</script>