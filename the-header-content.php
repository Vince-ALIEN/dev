<?php
/**
 * Template part for displaying the header content Ufo Agency
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sup'Saint-Dominique
 */

?>

<header id="masthead" class="container px-4 mx-auto fixed w-full flex justify-between items-center transition-all duration-300 h-24 mt-5" :class="{'h-24': !scrolledFromTop, 'h-14': scrolledFromTop}">

				<div class="lg:w-60 w-44 transform origin-left transition duration-200" :class="{'scale-100': !scrolledFromTop, 'scale-75': scrolledFromTop}">
				<?php if(has_custom_logo()) : ?>
				<?php the_custom_logo(); ?>
				<?php else : ?>
				<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
				<?php endif; ?>
				</div>


	<div x-data="{showMenu: false}" id="site-navigation" aria-label="<?php esc_attr_e( 'Main Navigation', 'supsaintdominique' ); ?>">
		<div class="w-20 h-20 flex flex-col items-center relative z-20 bg-primary rounded-full" :class="{'scale-100': !scrolledFromTop, 'scale-75': scrolledFromTop}">
			<button x-cloak x-on:click="showMenu = !showMenu " x-data="{ open: false }" class="-space-y-1.5 pt-1 z-[100] group focus:outline-none flex flex-col m-3 relative items-center content-center" :class="{'scale-100': !scrolledFromTop, 'scale-75': scrolledFromTop}">
			<!-- <span class="sr-only">Close slideover</span> -->	
			<div class=" flex items-center justify-center w-8 h-8">
						<span x-bind:class="showMenu ? 'translate-y-0 rotate-45 w-8' : '-translate-y-2'" class="transform group-hover:translate-y-[0.01rem] group-hover:w-full w-8 right-0 h-0.5 bg-background absolute transition duration-500 ease-in-out "></span>
						<span x-bind:class="showMenu ? 'opacity-0 translate-x-3' : 'opacity-100'" class="transform group-hover:w-full w-8 transition right-0 h-0.5 bg-background absolute"></span>
						<span x-bind:class="showMenu ? 'translate-y-0 -rotate-45 w-8' : 'translate-y-2'" class="transform group-hover:-translate-y-[0.01rem] group-hover:w-full w-8 right-0 h-0.5 bg-background absolute transition duration-500 ease-in-out"></span>
				</div>
				<div class="text-center -mt-1">
						<span x-transition:enter="transition ease-out duration-600" x-transition:leave="transition-all ease-in duration-700" class="w-11 tracking-widest font-medium menu-item text-[10px] text-background group-hover:hidden uppercase">menu</span>
						<span x-text="showMenu ? 'fermer' : 'ouvrir'" class="w-11 relative pt-1.5 tracking-tighter hidden transition-all ease-in duration-700 group-hover:block font-medium text-[10px] text-background menu-item uppercase"></span>
				</div>
			</button>
		</div>

			<div  x-show="showMenu" x-transition.opacity class="fixed inset-0 bg-black bg-opacity-20"></div>
				<div>
				<div x-show="showMenu"
						x-data="{state:false}"
						x-transition:enter-start="transition translate-x-72 ease-in duration-1000"
						x-transition:enter-end="opacity-100 ease-out  translate-x-110 duration-1000"
						x-transition:leave-start="opacity-100 translate-x-100 ease-out duration-500"
						x-transition:leave-end="opacity-0 translate-x-72"						
						aria-hidden="true"
						x-bind:class=" state ? 'lg:w-[100vw]' : 'lg:w-[50vw]' "
						class="fixed  w-full right-0  top-0 bottom-0 flex justify-center items-center bg-background transition-all ease-in duration-600" x-on:click.stop="showMenu" x-trap.noscroll="showMenu">
									<div class="container md:mt-[2vw] xs:mt-[20vw]">
											<div class="flex flex-wrap px-4 content-between">
												<div  class="xs:pt-4">
															<?php
																wp_nav_menu([
																	'theme_location' => 'menu-1',
																	'container' => 'nav',
																	'menu_class' => 'list-none p-0 m-0',
																	'a_class_0' => "font-bold inline-flex items-center text-3xl uppercase my-3 animate-fade-up animate-ease-in-out animate-delay-500",
																	'a_class_1' => "text-white font-semibold leading-[3em] ml-2 text-lg",
																	
																	'li_atts_0' => [
																		'class' => "px-6 ml-2 hover:border-l hover:border-l-[24px] border-secondary hover:transition-all",
																		'x-data' => "{opened: false}",														
																		'x-on:click' => "opened = !opened ; state = !state "
																		
																	
																	],
																	'submenu_class' => 'nav-item z-50 no-tailwind before:cursor-pointer before:fill-[#f2f2f2] before:h-12 before:w-12 text-white lg:w-1/2 w-[100vw] right-0  absolute z-20 flex flex-col top-0 bottom-0 justify-center bg-tertiary transition-all ease-in duration-600',
																	'submenu_atts_0' => [
																		'x-show.important' => 'opened',
																		'@click.outside' => 'opened = false',
																		
																		'x-transition:enter-start' => 'transition translate-x-72 ease-in duration-1000',
																		'x-transition:enter-end' => 'opacity-100 ease-out  translate-x-110 duration-1000',
																		'x-transition:leave-start' => 'opacity-100 translate-x-10 ease-out duration-500',
																		'x-transition:leave-end' => 'opacity-0 translate-x-72',
																		'class' => 'list-none pl-10'
																	]

																]);
																?>
																<p>blabla</p>
													</div>
											</div>
									</div>
					</div>
				</div>
			</div>
</header><!-- #masthead -->
