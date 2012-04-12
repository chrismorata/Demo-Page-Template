    </article>
        
    <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="/demos/_resources/js/jquery-1.7.2.min.js"><\/script>')</script>
    
    <?php 
        if($demoJS){
            echo '<script src="'.$demoJS.'></script>';
        }
    ?>
    
</body>
</html>