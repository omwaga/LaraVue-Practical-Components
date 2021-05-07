<template>
    <div>
     <div class="justify-content-center mb-5">
        <h2 class="text-center">
            Thousands of dev up their game with <br> laracasts every day
        </h2>

    </div>

    <div class="row" style="min-height: 500px;">
        <!-- left -->
        <div class="col-md-8 justify-content-center bg-white p-5">
            <a
            :href="testimonial.link"
            id="'testimonial-${++index}'"
            class=""
            target="_blank"
            v-for="(testimonial, index) in testimonials"
            @mouseover="UpdatedFeaturedTestimonial(testimonial)"
            @mouseout="ClearTimer">
            <img :src="`/images/testimonials/${testimonial.avatar}`" :alt="testimonial.name" style="height:50px" class="img-fluid img-thumbnail rounded-circle"
            :class="featuredTestimonial.id === testimonial.id ? 'border border-danger' : ''">
        </a>
    </div>

    <!-- right -->
    <div class="col-md-4 bg-light p-3">
        <div class="text-center">
            <img :src="`/images/testimonials/${featuredTestimonial.avatar}`" class="rounded-circle" :alt="featuredTestimonial.name">

            <p class="" v-text="featuredTestimonial.name"></p>

            <p class="text-grey-dark" v-text="featuredTestimonial.body"></p>

            <a href="/testimonials" class="btn btn-primary rounded-pill">More testimonials</a>

        </div>


    </div>

</div>
</div>
</template>

<script>
import axios from 'axios';

export default {
    data(){
        return { testimonials : [], featuredTestimonial : {}, timer : null };
    },

    created(){
        axios.get('/testimonial')
        .then(response => this.testimonials = response.data)
        .then(response => this.featuredTestimonial = this.testimonials[0]);
    },

    methods: {
        UpdatedFeaturedTestimonial(testimonial){
            this.timer = setTimeout(() => {
                this.featuredTestimonial = testimonial;
            }, 400);
        },

        ClearTimer(){
            clearTimeout(this.timer);
        }
    }
}
</script>
