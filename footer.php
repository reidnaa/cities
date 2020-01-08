

   
            </div>
        </div>

        <footer class="site-footer" >
            <hr />
            <h2>this is the footer</h2>
            <nav class="footer-navigation">
                        <ul>
                        <?php 
                            $args = array(
                                'theme_location' => 'main-menu',
                                'container' => 'nav',
                                'container_class' => 'main-menu'
                            );

                            wp_nav_menu($args);
                            ?>
                    
                    </nav>
        </footer>
<script src="" async defer></script>
    </body>
</html>