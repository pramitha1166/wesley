
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
                    <a href="<?php the_permalink(); ?>">
                        <h2 class="post-title">
                            <?php the_title(); ?>
                        </h2>
                        <h3 class="post-subtitle">
                        <?php the_excerpt(); ?>
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Start Bootstrap</a><?php the_date(); ?></p>
                </div>
            </div>
        </div>

