<?php
//======================================================================
// Service Boxes - Horizontal 1 Column
//======================================================================

//-----------------------------------------------------
// GET BACKGROUND
//-----------------------------------------------------
$partName = 'background';
include( locate_template('templates/meta-part-' . $partName . '.php') );

//-----------------------------------------------------
// GET BORDER
//-----------------------------------------------------
$partName = 'border';
include( locate_template('templates/meta-part-' . $partName . '.php') );

//-----------------------------------------------------
// Preloader, Section, Container Open
//-----------------------------------------------------
$partName = 'preload-container';
$section_template_class = 'service-blocks-horiz';
include( locate_template('templates/meta-part-' . $partName . '.php') );


//-----------------------------------------------------
// Meta Box Header / Subtext
//-----------------------------------------------------
$partName = 'header';
include( locate_template('templates/meta-part-' . $partName . '.php') );


//-----------------------------------------------------
// Service Blocks
//-----------------------------------------------------
if($show == 1){
$i = 0;
echo '<div class="main-content-dev">';
if( have_rows('repeat') ):
	
 	// loop through the rows of data
	
    while ( have_rows('repeat') ) : the_row();
	if ( !$i ) :
		echo '<div class="row">';
	endif;

	echo '<div class="block col-sm-5 col-sm-offset-1">';
        // display a sub field value

		
		
		echo '<div class="repeater-name col-sm-12">';
        echo the_sub_field('name');
		echo '</div>';
		
		
		echo '<div class="col-sm-12 repeater-image">';
		$img = get_sub_field('img');
		echo '<img src="'.$img.'">';
		echo '</div>';


		echo '<div class="repeater-text">';
		echo the_sub_field('text');
		echo '</div></div>';
	

		
	
	$i++;
	if ($i > 1) :
		echo '</div>';
		$i = 0;
	endif;
	
    endwhile;
	
	if ( $i != 0) :
		echo '</div>';
		$i = 0;
	endif;
echo '</div>';
else :

    // no rows found

endif;



} // end outer if / then


//-----------------------------------------------------
// Preloader, Section, Container Close
//-----------------------------------------------------
$partName = 'preload-container-close';
include( locate_template('templates/meta-part-' . $partName . '.php') );

//-----------------------------------------------------
// GET BORDER CLOSE
//-----------------------------------------------------
$partName = 'border-close';
include( locate_template('templates/meta-part-' . $partName . '.php') );