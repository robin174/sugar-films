<!-- TO SORT -->

<?php while(has_sub_field("new_page_content")): ?>

    <?php if(get_row_layout() == 'subheading'): // layout: Subheading ?>
        <div class="row">
            <div class="small-12 large-12 columns">
               <h3><?php the_sub_field('heading'); ?></h3>
            </div>
        </div><!-- end .row -->
    <?php endif; ?>

    <?php if(get_row_layout() == 'introduction_full_width'): // layout: Introduction - Full Width ?>
        <div class="row">
            <div class="small-12 large-12 columns">
               <p class="introduction"><?php the_sub_field('introduction'); ?></p>
            </div>
        </div><!-- end .row -->
    <?php endif; ?>

    <?php if(get_row_layout() == 'paragraph_full_width'): // layout: Paragraph - Full Width ?>
        <div class="row">
            <div class="small-12 large-12 columns">
               <?php the_sub_field('paragraph'); ?>
            </div>
        </div><!-- end .row -->
    <?php endif; ?>

    <?php if(get_row_layout() == 'image_full_width'): // layout: Image / Caption - Full Width ?>
        <div class="row image-full-width">
            <div class="small-12 large-12 columns">
                <figure>
                    <img class="border-shadow" src="<?php the_sub_field('image'); ?>" />
                    <figcaption class="caption"><?php the_sub_field('caption'); ?></figcaption>
                </figure>
            </div>
        </div><!-- end .row -->
    <?php endif; ?>

    <!-- RECONFIGURE -->
    <?php if(get_row_layout() == 'bullet_list'): // layout: Bulleted List 
        $rows = get_sub_field('bullet_point'); //Repeater Field Name ?>
        <div class="row">
            <div class="small-12 large-12 columns">
                <?php if( get_sub_field('introduction_para') ): ?>
                    <p><?php the_sub_field('introduction_para'); ?></p>
                <?php endif; ?>

                <div>
                    <?php if ($rows){ 
                    echo '<ul>';
                    foreach($rows as $row){
                        echo '<li>'.$row['list_item'].'</li>'; 
                    }
                    echo '</ul>';
                    } ?>
                </div>
                
                <?php if( get_sub_field('conclusion_para') ): ?> 
                    <p><?php the_sub_field('conclusion_para'); ?></p>
                <?php endif; ?>
            </div>
        </div><!-- end .row -->
    <?php endif; ?>

    <!-- RECONFIGURE -->
    <?php if(get_row_layout() == 'number_list'): // layout: Numbered List 
        $rows = get_sub_field('number_point'); //Repeater Field Name ?>
        <div class="row">
            <div class="small-12 large-12 columns">
                <?php if( get_sub_field('introduction_para') ): ?>
                    <p><?php the_sub_field('introduction_para'); ?></p>
                <?php endif; ?>

                <div>
                    <?php if ($rows){ 
                    echo '<ol>';
                    foreach($rows as $row){
                        echo '<li>'.$row['list_item'].'</li>'; 
                    }
                    echo '</ol>';
                    } ?>
                </div>
                
                <?php if( get_sub_field('conclusion_para') ): ?> 
                    <p><?php the_sub_field('conclusion_para'); ?></p>
                <?php endif; ?>
            </div>
        </div><!-- end .row -->
    <?php endif; ?>

    <?php if(get_row_layout() == 'callout'): // layout: Blockquote ?>
        <div class="row">
            <div class="small-12 large-12 columns">
                
                <!-- Reconfigure for Callout -->
                <div class="callout">
                    <p><?php the_sub_field('call'); ?></p>
                </div>

            </div>
        </div><!-- end .row -->
    <?php endif; ?>

    <?php if(get_row_layout() == 'page_break'): // layout: Page Break ?>
        <div class="row">
            <div class="small-12 large-12 columns">
                <?php if( get_sub_field('break') )
                    {
                        echo "<hr>";
                    }
                ?>
            </div>
        </div><!-- end .row -->
    <?php endif; ?>

<?php endwhile; ?>