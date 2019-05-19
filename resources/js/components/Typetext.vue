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
            new Typewriter(document.getElementById('typewriter'), {
                strings: [this.q1, this.q2, this.q3],
                autoStart: true,
                loop: true,
            });
        }
    }
</script>