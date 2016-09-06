<?php get_header(); ?>
<?php echo do_shortcode( '[gallery ids="4,5,6"]' );?>
<div class="top-panel">
<h3>Some</h3>
</div>
    <div class="white-wrap">
        <div id="app">

            <router-view></router-view>

        </div>
    </div>


<template id="post-list-template">
                    <ul class="bxslider">
                        <li class="lide-img" v-for="post in posts"><img v-bind:src="post.imagent"  alt=""></li>
                    </ul>

</template>

<template id="slider-vl">
    {{mensaje}}
ppp
</template>
	<main role="main">
		<!-- section -->
		<section>

			<h1><?php // _e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php //get_template_part('loop'); ?>

			<?php // get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
