        <footer>
            <nav id="social-media-menu">
                   <a href="#">
                            <div class="icon"><i class="fas fa-envelope fa-2x"></i></div>
                            <span class="title">E-MAIL</span>
                    </a>
                    <a href="https://www.instagram.com/as_2_studio/">
                            <div class="icon"><i class="fab fa-instagram fa-2x"></i></div>
                            <span class="title">INSTAGRAM</span>
                    </a>
                    <a href="https://www.patreon.com/as2studio">
                            <div class="icon"><i class="fab fa-patreon fa-2x"></i></div>
                            <span class="title">PATREON</span>
                    </a>
                    <a href="https://www.facebook.com/as2studio">
                            <div class="icon"><i class="fab fa-facebook-square fa-2x"></i></div>
                            <span class="title">FACEBOOK</span>
                    </a>
            </nav>
            <div class="divider"></div>
            <div id="quotation-slider">
                <img id="author_image" class="author_image fade" src="<?php bloginfo('template_directory');?>/images/testimonials/2222.png" alt="image slider einstein">
                <div class="quotation fade">“Nothing will benefit both human health and increase the chances of survival of life on Earth, as the evolution towards a vegetarian diet.”</div>
                <div id="author_name" class="author fade">Albert Einstein</div>
            </div>
            
            <div class="links">
                <a href="#">CONTACT</a>
                |
                <a href="#">COLLABORATE</a>
                |
                <a href="#"><i class="fas fa-shopping-cart"></i></a>
            </div>
            <div class="copyright">Copyright 2020 | All Rights Reserved |</div>
            <a href="#" class="topbutton"><i class="fas fa-arrow-circle-up"></i></a>
        </footer>
<?php wp_footer(); ?>
    </body>
    <script>
        var authors = ["Albert Einstein", "pythagoras", "Leonardo da Vinci", "Miguel de Cervantes", "Isaac Newton", "Wollstonecraft Godwin", "Rosa Parks","Charlotte Despard", "Nikola Tesla"];
        var pictures = ["2222.png", "8888.png", "555.png", "1111.png", "44444.png", "3333.png", "99999.png", "666.png", "7777.png"];
        var quotation = ['" Nothing will benefit both human health and increase the chances of survival of life on Earth, as the evolution towards a vegetarian diet. "',
            '" Never wet your bread neither in the blood or in the tears of your brothers. "',
            '" There will come a day when men like me will see the murder of an animal as they now see that of a man. Verily, man is the king of beasts, for his brutality surpasses that of those. "',
            '" The feeding of a superior man must be of edible fruits and roots. "',
            '" A man may imagine things that are false, but he can only understand things that are true, for if the things be false, the apprehension of them is not understanding. "',
            '" First eliminate violence from the table, in order to eliminate violence from the family, the neighborhood and the world. "',
            '" You must never be fearful about what you are doing when it is right. "',
            '" I should like the words ‘alien’ and ‘foreigner’ to be banished from the language. We are all members of the same family. "',
            '" It is certainly preferable to raise vegetables, so I think vegetarianism is advisable to leave barbaric habits. That we can subsist on plants and that we can work on our behalf is not a theory, it is a very well-supported fact. "'];

       
    
        var current_testimonial_index=0;
        function showTestimonials(){
            if (current_testimonial_index >= authors.length){
                current_testimonial_index = 0;
            }
            document.getElementById("quotation-slider").innerHTML = 
                    "<img id=\"author_image\" class=\"author_image fade\" src=\"<?php bloginfo('template_directory');?>/images/testimonials/"+pictures[current_testimonial_index]+"\" alt=\"author image\">\n\
                    <div class=\"quotation fade\">"+quotation[current_testimonial_index]+"</div>\n\
                    <div id=\"author_name\" class=\"author fade\">"+authors[current_testimonial_index]+"</div>";
            current_testimonial_index++;
            setTimeout(showTestimonials, 10000); // Change image every 2 seconds
        }
        showTestimonials();
    </script>
</html>