<template>
    <div>
        <h3 class="text-center">Flickity Carousel</h3>

        <div data-flickity='{ "cellAlign": "left", "contain": true, "wrapAround": true }'>
            <slot></slot>
        </div>

    </div>
</template>

<script>
import Flickity from 'flickity';
import 'flickity/dist/flickity.min.css';

export default {
    props : {
        wraparound : { default : true },
        autoplay : { default : false },
    }
}
</script>
