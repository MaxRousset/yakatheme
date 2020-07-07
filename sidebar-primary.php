<?php if ( is_active_sidebar( 'primary' ) ) { ?>

	<div id="sidebar-primary" class="sidebar">
		<style>
		.main-container {
		display: block;
		}
		.blog-main {
    width: 100%;
		}
		.sidebar {
		  padding: 2%;
			padding-top: 0;
			float: none;
			margin-top: 5vw;
    	margin: auto;
		}
		.widget {
    display: inline-grid;
    padding-right: 5%;
		padding-left: 5%;
    min-width: 15%;
		}
		@media (min-width: 992px){
			.main-container {
			display: flex;
			}
			.blog-main {
    		width: 70%;
			}
	    .sidebar{
				float: right;
		    margin: unset;
		    width: auto;
				border-left-style: groove;
	    }
			.widget{
				display: block;
			}
		}
		</style>

	  <?php dynamic_sidebar( 'primary' ); ?>
	</div>



<?php } ?>
