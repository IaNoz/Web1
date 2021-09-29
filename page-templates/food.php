<?php /* Template Name: Food */
setLanguage('eng');
get_header();?>
<section id="food">
    <section id="menus-section">
        <nav id="fm-slider">
            <div id="starter-0" class="fm-title-wrp">
                <div class="fm-title">STARTERS</div>
            </div>
            <div id="fm-mains-0" class="fm-title-wrp">
                <div class="fm-title">MAINS</div>
            </div>
            <div id="fm-drinks-0" class="fm-title-wrp">
                <div class="fm-title">DRINKS</div>
             </div>
            <div id="fm-extras-0" class="fm-title-wrp">
                <div class="fm-title">EXTRAS</div>
            </div>
            <div id="starter-1" class="fm-title-wrp">
                <div class="fm-title">STARTERS</div>
            </div>
            <div id="fm-mains-1" class="fm-title-wrp">
                <div class="fm-title">MAINS</div>
            </div>
            <div id="fm-drinks-1" class="fm-title-wrp">
                <div class="fm-title">DRINKS</div>
            </div>
            <div id="fm-extras-1" class="fm-title-wrp">
                <div class="fm-title">EXTRAS</div>
            </div>
            <div id="starter-2" class="fm-title-wrp">
                <div class="fm-title">STARTERS</div>
            </div>
            <div id="fm-mains-2" class="fm-title-wrp">
                <div class="fm-title">MAINS</div>
            </div>
            <div id="fm-drinks-2" class="fm-title-wrp">
                <div class="fm-title">DRINKS</div>
            </div>
            <div id="fm-extras-2" class="fm-title-wrp">
                <div class="fm-title">EXTRAS</div>
            </div>
        </nav>
        
        <div id="plot-screen">
            <div id="fm-txt-slider">
                <div class="fm-txt-box">
                    <!--filled by js-->
                </div>
                <div class="fm-txt-box">
                    <!--filled by js-->
                </div>
                <div class="fm-txt-box">
                    <!--filled by js-->
                </div>
                <div class="fm-txt-box">
                    <!--filled by js-->
                </div>
            </div>
            
            <div id="fm-img-slider">
                <div class="fm-img-wrp">
                        <!--set by js-->
                </div>
                <div class="fm-img-wrp">
                        <!--set by js-->
                </div>
                <div class="fm-img-wrp">
                        <!--set by js-->
                </div>
                <div class="fm-img-wrp">
                        <!--set by js-->
                </div>
            </div>
        </div>
    </section>
    <div id='dishes'>
        <div id='d-txt-slider'>
        </div>
        <div id='d-img-slider'>
        </div>
    </div>
  <section id="subdishes">
  </section>
</section>
<?php get_footer();?>
<script>
    // get menus options
var food_images_path = "http://testas2studio.lagocciacritica.com/wp-content/themes/base/images/food/";
   
    class menu{
        constructor(name, dishes, img_file_path,img){
            this.name = name;
            this.dishes = dishes;
            this.img = food_images_path+img_file_path+img;
            this.img_file_path = food_images_path+img_file_path;
        }
    }
    class dish{
//            this.alergens = ["vegan": null, "gluten free": null, "mustard": null, "soya": null, "sesame": null, "treenuts": null];
        constructor(name,subtitle, ingridients, price, alergens, subdishes, img){
            this.name = name;
            this.subtitle = subtitle;
            this.ingridients = ingridients;
            this.price = price;
            this.alergens = alergens;
            this.subdishes = subdishes;
            this.img = img;
        }
    }
    //    showMenu
    
    // initialize menus 
    
    // init starters ***********************************************************
    var alrg = [["VG","Vegan"],["GF","Gluten free"],["MU","Mustard"],["SY","Soya"],["SE","Sesame"],["TN","Treenuts"]];
     var house_hummus= new dish("HOUSE HUMMUS", null, "Chickpeas, lemon, garlic, olive oil, parsley", "£7",[1,1,0,0,1,0], null, ["S_1_2.jpg"]);
     var chilli = new dish("CHILLI HUMMUS", null, "House hummus, chilli, paprika", "£7", [1,1,0,0,1,0], null, ["S_1_3.jpg"]);
     var avocado= new dish("SPECIAL AVOCADO HUMMUS", null, "House hummus, avocado", "£7", [1,1,0,0,1,0], null,["S_1_4.jpg"]);
    var trio_hummus = new dish("TRIO HUMMUS"," + Bread + Salad", null, "£11", [1,1,0,0,1,0], null,["S_1_0.jpg"]); 
    var array = [house_hummus, chilli, avocado, trio_hummus];
    var hummus= new dish("HUMMUS"," + Bread +Salad", "Chickpeas, lemon, garlic, olive oil, parsley","£7 - £11", [1,1,0,0,1,0], array, ["S_1_0.jpg"]);
     var falafel= new dish("FALAFEL"," + Hummus + Salad", "Chickpeas, lemon, garlic, olive oil, parsley","£7-11", [1,1,0,0,1,0], null,["S_2_2.jpg","S_2_1.jpg","S_2_0.jpg"]);
     
     var house_fries= new dish("HOUSE FRIES", null, null, "Small:  £4 - Large:  £7", [0,0,0,0,0,0], null,["S_3_0.jpg", "S_3_1.jpg", "S_3_2.jpg"]);
     var sweet_potato= new dish("SWEET POTATO", null, null, "Small:  £4 - Large:  £7", [0,0,0,0,0,0], null,["S_3_0.jpg", "S_3_1.jpg", "S_3_2.jpg"]);
     var fries= new dish("FRIES"," + Sauce", null, "Small:  £4 - Large:  £7", [0,0,0,0,0,0],[house_fries, sweet_potato], ["S_3_2.jpg"]);
    
var roasted_potato = new dish("ROASTED POTATO", "+ 3 toppings + Sauce","(You can add more toppings from the <span id=\"show-extras-button\" onclick=\"showExtras()\" >Extras list</span>)","£7", [0,0,0,0,0,0], null, ["S_4_2.jpg", "S_4_0.jpg", "S_4_1.jpg", "S_4_3.jpg"]);
 
    </script><style>
        #show-extras-button{
            font-size:1.2em; 
            color: var(--darkgrey);
         }
         #show-extras-button:hover{
            font-size:1.2em;
            color: var(--darkpink);
         }
    </style><script>
    var arancina_vegan = new dish("VEGAN ARANCINA", null, "vegan bechamel, vegan cheese, vegan butter", "£9", [1,1,0,0,0,1], null, ["S_5_0.jpg", "S_5_1.jpg", "S_5_2.jpg", "S_5_3.jpg"]);
    var arancina_vegetarian = new dish("VEGETARIAN ARANCINA", null, "vegan bechamel, vegan cheese, vegan butter", "£11", [0,1,0,0,0,1], null, ["S_V5_0.jpg", "S_V5_1.jpg", "S_V5_2.jpg", "S_V5_3.jpg"]);
    var arancina = new dish("ARANCINAS", null, "Rice, olive oil, saffron, flour, breadcrumb", "£9 - £11", [0,0,0,0,0,0],[arancina_vegan, arancina_vegetarian], ["S_5_3.jpg"]);
    
     var aubergine_fagotto_vegan= new dish("VEGAN FAGOTTO", null, "Vegan cheese", "£8", [1,0,0,0,0,0], null, ["S_6_0.jpg", "S_6_1.jpg", "S_6_2.jpg", "S_6_3.jpg"]);
     var aubergine_fagotto_vegetarian= new dish("VEGETARIAN FAGOTTO", null, "Smoked scamorza", "£8", [0,0,0,0,0,0], null,["S_6_0.jpg", "S_6_1.jpg", "S_6_2.jpg", "S_6_3.jpg"]);
     var aubergine_fagotto = new dish("AUBERGINE FAGOTTOS"," + Bread", "Aubergine, garlic, olive oil, tomatoes", "£8", [0,0,0,0,0,0],[aubergine_fagotto_vegan, aubergine_fagotto_vegetarian],["S_6_1.jpg"]);
       
     var mushroom = new dish("MUSHROOM OMELETTE", null, null, "£10", [1,0,0,0,0,0], null,["S_7A_0.jpg", "S_7A_1.jpg", "S_7A_2.jpg", "S_7A_3.jpg"]); 
     var pepper = new dish("PEPPER OMELETTE", null, null, "£10", [1,0,0,0,0,0], null,["S_7B_0.jpg", "S_7B_1.jpg", "S_7B_2.jpg", "S_7B_3.jpg"]); 
     var ricotta_spinach= new dish("RICOTTA & SPINACH OMELETTE", null, null, "£12", [0,0,0,0,0,0], null,["S_7C_0.jpg", "S_7C_1.jpg", "S_7C_2.jpg"]);
     var omelette = new dish("OMELETTES", null, "Potatoes, chickpeas, garlic, onion, olive oil",  "£10 - £12", [0,0,0,0,0,0],[mushroom, pepper, ricotta_spinach], ["S_7C_1.jpg"]);
    
    var m_starters = new menu("Starters", [hummus, falafel, fries, roasted_potato, arancina,aubergine_fagotto,omelette], "starters/2.4.4.1_STARTERS/", "S_2_1.jpg");
/*//////////////////////////////////////////////////////////*/

// init mains ***********************************************************
    var lasagna_vegan = new dish("VEGAN LASAGNA", null, "Lentils, carrot, nutmeg", "£13", [1,1,0,0,1,0], null, ["M_1_1.jpg", "M_1_2.jpg", "M_1_3.jpg","M_1_0.jpg"]);
    var lasagna_vegetarian = new dish ("VEGETARIAN LASAGNA", null, "Mushroom, zucchini, broccoli, British pecorino","£15", [1,0,0,0,1,0], null,[ "M_V1_1.jpg", "M_V1_2.jpg", "M_V1_3.jpg"]);
    var lasagna = new dish("LASAGNAS", null, "Home made pasta, tomatoes, rice milk, peppers, onion, corn flour", "£13 - £15",[0,0,0,0,0,0],[lasagna_vegetarian,lasagna_vegan], ["M_1_0.jpg"]);

    var ravioli_vegan = new dish("VEGAN RAVIOLI", null, "Mushroom served with fresh tomatoes sauce", "£15", [1,1,0,0,0,0], null, ["M_2_0.jpg", "M_2_1.jpg", "M_2_2.jpg", "M_2_3.jpg"]);
    var ravioli_vegetarian = new dish("VEGETARIAN RAVIOLI", null, "Ricotta, spinach, nutmeg, rosemary, sage","£15", [0,1,0,0,0,0], null, ["M_V2_0.jpg", "M_V2_1.jpg", "M_V2_2.jpg", "M_V2_3.jpg"]);
    var ravioli = new dish("RAVIOLI", null, "Home made pasta", "£15", [0,0,0,0,0,0],[ravioli_vegan, ravioli_vegetarian], ["M_2_0.jpg"]);
    
    var parmigiana_vegan = new dish("VEGAN PARMIGIANA", null, "Vegan cheese", "£13", [1,0,0,0,0,0], null, ["M_3_0.jpg", "M_3_1.jpg", "M_3_2.jpg", "M_3_3.jpg"]);
    var parmigiana_vegetarian = new dish("VEGETARIAN PARMIGIANA", null, "British pecorino, Edam", "£13",  [0,0,0,0,0,0], null, [ "M_3_0.jpg", "M_3_1.jpg","M_3_2.jpg", "M_3_3.jpg"]);
    var parmigiana = new dish("PARMIGIANAS", null,"Tomatoes, aubergine, garlic, basil", "£13", [0,0,0,0,0,0], [parmigiana_vegan, parmigiana_vegetarian], ["M_3_1.jpg"]);
    
    var burger_lentils = new dish("LENTILS BURGER", " + Sauce + Fries or Salad", null, "£15", [1,1,0,0,0,0], null, [ "M_4A_1.jpg","M_4A_0.jpg"]);
    var burger_mushroom = new dish("MUSHROOM BURGER", " + Sauce + Fries or Salad",  null, "£15", [1,1,0,0,0,0], null,[ "M_4B_1.jpg","M_4B_0.jpg"]);
    var burger_bean = new dish("BEANS BURGER", " + Sauce + Fries or Salad",  null, "£15", [1,1,0,0,0,0], null, [ "M_4C_1.jpg","M_4C_0.jpg"]);
    var burger_zucchini = new dish("ZUCCHINI BURGER", " + Sauce + Fries or Salad",  null, "£15", [1,1,0,0,0,0], null, [ "M_4D_1.jpg","M_4D_0.jpg"]);
    var burger_chickpeas = new dish("CHICKPEAS BURGER", " + Sauce + Fries or Salad",  null, "£15", [1,1,0,0,0,0], null, [ "M_4E_1.jpg","M_4E_0.jpg"]);
    var burger = new dish("BURGERS"," + Sauce + Fries or Salad", "Tomatoes, cucumber, lettuce, vegan cheese, caramel onion", "£15", [0,0,0,0,0,0],[burger_lentils,burger_mushroom,burger_bean, burger_zucchini,burger_chickpeas], ["M_4_0.jpg", "M_4_1.jpg", "M_4_2.jpg", "M_4_3.jpg", "M_4_4.jpg"]);
    
    var salad_green_leaves = new dish("GREEN LEAVES SALAD", null,"Lettuce Mix, apple, tofu, treenuts, tomatoes, croutons", "£9", [1,1,0,1,0,1], null, ["M_5A_0.jpg", "M_5A_1.jpg", "M_5A_2.jpg", "M_5A_3.jpg", "M_5A_4.jpg"]);
    var salad_pepper_leaves = new dish("PEPPER LEAVES SALAD", null, "Caramel onion, red peppers, tofu, chilli, lime", "£7", [1,0,0,1,0,0], null, ["M_5B_0.jpg", "M_5B_1.jpg", "M_5B_2.jpg"]);
    var salad =new dish("SALADS", null, null, "£7 - £9", [0,0,0,0,0,0],[salad_green_leaves, salad_pepper_leaves], ["M_5_0.jpg", "M_5_1.jpg"]);

    var m_mains = new menu("Mains",[burger,salad,lasagna, ravioli, parmigiana], "mains/2.4.4.2_MAINS/", "M_4_1.jpg");
/////////////////////////////////////////////////////////////////////////////////////////
    // init drinks
    var fresh_juices_orange = new dish("FRESH ORANGE JUICE", null, null, "£4", [1,0,0,0,0,0], null, ["D_1_0.jpg", "D_1_1.jpg"]);
    var fresh_juices_lemonade = new dish("FRESH LEMONADE JUICE", null, null, "4", [1,0,0,0,0,0], null, ["D_1_0.jpg", "D_1_1.jpg"]);
    var fresh_juices_pear = new dish("FRESH PEAR JUICE", null, null, "£4", [1,0,0,0,0,0], null, ["D_1_0.jpg", "D_1_1.jpg"]);
    var fresh_juices = new dish("FRESH JUICES", null, null,"£4",  [1,0,0,0,0,0],[fresh_juices_orange, fresh_juices_lemonade, fresh_juices_pear] , ["D_1_0.jpg", "D_1_1.jpg"]);
    
    var ice_tea_black_tea = new dish("BLACK TEA", null, "lemon, lime, panela", "£3", [1,0,0,0,0,0], null, ["D_2_0.jpg", "D_2_1.jpg"]);
    var ice_tea_green_tea = new dish("GREEN TEA", null,  "lemon, lime, panela", "£3", [1,0,0,0,0,0], null, ["D_2_0.jpg", "D_2_1.jpg"]);
    var ice_tea = new dish("ICE TEAS", null, null,"£3", [0,0,0,0,0,0],[ice_tea_black_tea, ice_tea_green_tea], ["D_2_0.jpg", "D_2_1.jpg"]);
    
    var smoothies_banana = new dish("BANANA, STRAWBERRY & COCONUT MILK", null, null, "£6", [0,0,0,0,0,0], null, ["D_3_0.jpg"]);
    var smoothies_pear = new dish("PEAR, APPLE & RED FRUITS", null, null, "£6", [0,0,0,0,0,0], null, ["D_3_0.jpg"]);
    var smoothies_carrot = new dish("CARROT JUICE & APPLE & COCONUT MILK", null, null, "£6", [0,0,0,0,0,0], null, ["D_3_0.jpg"]);
    var smoothies = new dish("SMOOTHIES", null, null,"£6", [0,0,0,0,0,0],[smoothies_banana,smoothies_pear, smoothies_carrot], ["D_3_0.jpg"]);

    var m_drinks = new menu("Drinks",[fresh_juices, ice_tea, smoothies], "drinks/2.4.4.3_DRINKS/", "D_2_1.jpg");
    /////////////////////////////////////////////////////////
// init extras
    var sauces_vegan_mayo = new dish("VEGAN MAYO", null,"Chickpeas, ground mustard, rice syrup, vinegar", "£2", [1,1,1,0,0,0], null, ["M_5A_2.jpg"]);
    var sauces_yogurt = new dish("YOGURT", null,"Vegan yogurt, mint, lemon, olive oil", "£2", [1,0,0,0,0,1], null, ["M_5A_1.jpg"]);
    var sauces_guacamole = new dish("GUACAMOLE", null, "Avocado, lime, onion, tomatoes, garlic, coriander", "£2", [0,0,0,0,0,0], null,["S_2_1.jpg"]);
    var sauces = new dish("SAUCES", null,  null, "£2", [0,0,0,0,0,0],[sauces_vegan_mayo, sauces_yogurt, sauces_guacamole], ["S_3_1.jpg"]);
    
    var cheese_vegan = new dish ("VEGAN CHEESE", null, null, "£2", [0,0,0,0,0,0], null, ["M_1_1.jpg"]);
    var cheese_ricotta = new dish("RICOTTA", null, null, "£2", [0,0,0,0,0,0], null, ["M_5A_4.jpg"]);
    var cheese_parmigiano = new dish("PARMIGIANO", null, null, "£2", [0,0,0,0,0,0], null, ["M_3_3.jpg"]);
    var cheese_edam = new dish("EDAM", null, null, "£2", [0,0,0,0,0,0], null, ["M_5A_3.jpg"]);
    var cheese_smoked_scamorza = new dish("SMOKED SCAMORZA", null, null, "£2", [0,0,0,0,0,0], null, ["M_5B_2.jpg"]);
    var cheese_british_pecorino = new dish("BRITISH PECORINO", null, null, "£2", [0,0,0,0,0,0], null, ["M_5A_1.jpg"]);
    var cheese = new dish("CHEESES", null, null,"£2", [0,0,0,0,0,0],[cheese_vegan, cheese_ricotta, cheese_parmigiano, cheese_edam, cheese_smoked_scamorza, cheese_british_pecorino], ["M_5B_2.jpg"]);
    
    var others_hummus = new dish("HUMMUS", null, null,"£2", [0,0,0,0,0,0], null,["S_1_0.jpg"]);
    var others_caramel_onion = new dish("CARAMEL ONION", null, null, "£2", [0,0,0,0,0,0], null, ["S_4_1.jpg"]);
    var others_bread = new dish("BREAD", null, null,"£3", [0,0,0,0,0,0], null, ["S_6_3.jpg"]);
    var others_ask_for_more = new dish("*ASK FOR MORE",null, null, null, [0,0,0,0,0,0], null, ["S_3_2.jpg"]);
    var others = new dish("OTHERS", null,null,"£2 - £3",[0,0,0,0,0,0],[others_hummus, others_caramel_onion, others_bread, others_ask_for_more],["S_3_2.jpg"]);

    var m_extras = new menu("Extras", [sauces, cheese, others], "extras/", "M_5A_4.jpg");
/////////////////////////////////////////////////////////

// create composed menu
    
    
</script>
<script>
    // content variables: thees vars contain menu or dish items NOT html elements
    //     // m=menu; d=dish; s=subdish; i=index; ele=html element; arr= array
    var fm_i = 0; //starters menu selected by default
    var d_i = 0;
    var d_img_i = 0;//current seen img index in d-img-slider
    var s_i = 0;
    //content arrays for those variable contents such as dish and subdish
    var fm_arr = [m_starters,m_mains, m_drinks, m_extras];
    var d_arr = fm_arr[0].dishes;//this has to contain dishes items
    var s_arr = d_arr[0].subdishes;//this has to contain dishes (representing subdiches)

    //set up food-menu-bar-slider 
    var fm_ele_arr = [];
    var fm_cls_arr = ["fm-seen-0","fm-seen-1","fm-seen-2","fm-seen-3","fm-hid-left-0", "fm-hid-left-1", "fm-hid-left-2","fm-hid-left-3","fm-hid-right-0","fm-hid-right-1","fm-hid-right-2","fm-hid-right-3"];
    fm_ele_arr = setSlideChildElements("fm-slider");
    addSlideClasses(fm_ele_arr, fm_cls_arr);
    fm_ele_arr.forEach(element => element.addEventListener('click',onClickSelectMenu));

    // set scroll events on top food menu nav
    var fm_slider = document.getElementById('menus-section');
    fm_slider.addEventListener('swiped-right', onSwipeRightMenu);
    
    //set up food-menu-txt-slider
    var fm_txt_ele_arr = [];
    var fm_txt_cls_arr = ["fm-txt-seen","fm-txt-hid-top","fm-txt-hid-top","fm-txt-hid-top"];
    fm_txt_ele_arr = setSlideChildElements("fm-txt-slider");
    addSlideClasses(fm_txt_ele_arr, fm_txt_cls_arr);
    
    //declaration dish elements inside fm txt
    var d_ele_arr = [];
    
/*=>*/ setFMTxt();// set menu txt slider
   
    //set up food-menu-img-slider 
    var fm_img_ele_arr = [];
    var fm_img_cls_arr = ["fm-img-seen","fm-img-hid-left","fm-img-hid-left","fm-img-hid-left"];
    fm_img_ele_arr = setSlideChildElements("fm-img-slider");
    addSlideClasses(fm_img_ele_arr, fm_img_cls_arr);
    
/*=>*/ setFMImg();// set menu img slider

    //set up dish-txt-slider 
    var d_txt_ele_arr = [];
    var d_txt_cls_arr = ["d-txt-seen","d-txt-hid-back","d-txt-hid-back","d-txt-hid-back"];

    /*=>*/ setDTxt();// set dishes txt slider

    addSlideClasses(d_txt_ele_arr, d_txt_cls_arr);
    //set up dish-img-slider 
    var d_img_ele_arr = [];
    var d_img_cls_arr = [];
    
/*=>*/ setDImg();// set dish img slider
    addSlideClasses(d_img_ele_arr, d_img_cls_arr);
    
    // set subdish content and classes arrays
    // image
    var s_img_ele_arr = [];
    var s_img_cls_arr = [];
    var s_slider_to_arr = [];
    setSTxt();

    // gets existing element (slide ele childs) fill ele_arr and add handler for each
    function setSlideChildElements(slide_id){
        var slide = document.getElementById(slide_id);
        return Array.from(slide.children);
    }
    //creates element,set class, set event listener, append it, set ele array, set cls array, 
    // classes hidden before / after and seen must beset up property beforehand
    // arg cls_arra lenght determines also the number of elements to create
    function setSlideCreateChildElements(slide_id,ele_arr,cls_arr,handler){
        var slide = document.getElementById(slide_id);
        var i;
        for (i=0; i < cls_arr.length; i++){
            var child_ele = document.createElement("div");
            child_ele.classList.add(cls_arr[i]);
            ele_arr[i] = child_ele;
            child_ele.adEventListener('click', handler);
            slide.append(child_ele);
        }
    }
    //Slider actions
    function shiftSlideRight(array){
         array.push(array.shift());
     }
     function shiftSlideLeft(array){
         array.unshift(array.pop());
     }
// this function takes array of html elements and corresponding (same length) array of classes and removes the classes i from element i
     function removeSlideClasses(ele_arr, classes_arr){
        var i; 
        for (i = 0; i < ele_arr.length; i++){
            ele_arr[i].classList.remove(classes_arr[i]);
        }
     }
// this function takes array of html elements and corresponding (same length) array of classes and add the classes i to element i
    function addSlideClasses(ele_arr, classes_arr){
         var i;
         for(i = 0; i < ele_arr.length; i++){
                ele_arr[i].classList.add(classes_arr[i]);
         }
    }
// empties the content of a given element
    function clearElement(element){
         element.innerHTML = "";
    }


    // set dishes content to menu txt slider
    function setFMTxt(){
        var i;
        for(i=0; i < fm_arr.length ;i++){
            var wrp = document.createElement("div");
            wrp.classList.add('fm-txt-wrp');
            fm_txt_ele_arr[i].append(wrp);
            
            var box_elements = [];
            var j;
            for (j=0; j < fm_arr[i].dishes.length ;j++){
                var d_ele = document.createElement("a");
                d_ele.href = "#dishes";
                d_ele.classList.add("fm-txt-d-name");
                d_ele.innerHTML = fm_arr[i].dishes[j].name;
                wrp.append(d_ele);
                d_ele.addEventListener('click', onClickSelectDish);
                    box_elements[j] = d_ele;
            }
            d_ele_arr[i] = box_elements;
        }
    }
    function setFMImg(){
        var i;
        for(i=0; i < fm_arr.length ;i++){
            fm_img_ele_arr[i].innerHTML = "<img class='fm-img' src='"+fm_arr[i].img+"' alt='"+fm_arr[i].name+" Image'>";
                
        }
    }
    function setDTxt(){
        var slider = document.getElementById('d-txt-slider');
        clearElement(slider);
        d_txt_cls_arr =[];
        d_txt_ele_arr =[];
        var i;
        for(i=0; i < d_arr.length ;i++){
            var wrp = document.createElement("div");
            wrp.classList.add('d-txt-box');
            slider.append(wrp);
            
            var a = document.createElement("div");
            a.classList.add('d-txt-wrp');
            var title = document.createElement("a");
            title.classList.add('d-txt-title');
            title.href = "#subdishes";
            var name = document.createElement("div");
            name.classList.add('d-txt-name');
            var subtitle = document.createElement("div");
            subtitle.classList.add('d-txt-subtitle');
            title.append(name,subtitle);
            
            var alergen_wrp = document.createElement("div");
            alergen_wrp.classList.add('d-txt-alrg-wrp');
            d_txt_cls_arr[i] = (i==0) ? "d-txt-seen" : "d-txt-hid-back";
            var j;
            for (j=0; j < d_arr[i].alergens.length ;j++){
                if (d_arr[i].alergens[j] == 1){
                    let alergen = document.createElement("div");
                    alergen.classList.add("d-txt-alrg");
                    alergen.innerHTML = alrg[j][0];
                    let description = document.createElement("div");
                    description.classList.add("d-txt-alrg-desc");
                    description.innerHTML = alrg[j][1];
                    alergen.append(description);
                    alergen_wrp.append(alergen);
                }
            }
            // extras and drinks show their subdishes in d txt section
            var subdishes_wrp = document.createElement("div");
            subdishes_wrp.classList.add('d-txt-subdishes-wrp');
            if (fm_arr[0].name == "Extras" || fm_arr[0].name == "Drinks"){
                wrp.classList.add("d-txt-box-exception");
                var k;
                for(k=0; k < d_arr[i].subdishes.length ; k++){
                    var sub = document.createElement("div");
                    sub.classList.add('d-txt-subdishes');

                    var sub_name = document.createElement("span");
                    sub_name.classList.add('d-txt-subdishes-name');
                    sub_name.innerHTML = d_arr[i].subdishes[k].name;
                
                    var sub_alergens_wrp  = document.createElement("span");
                    sub_alergens_wrp.classList.add('d-txt-subdishes-alrg-wrp');
                    var l;
                    for (l=0; l < d_arr[i].subdishes[k].alergens.length ;l++){
                       if (d_arr[i].subdishes[k].alergens[l] == 1){
                            let sub_alergen = document.createElement("div");
                            sub_alergen.classList.add("d-txt-alrg");
                            sub_alergen.innerHTML = alrg[l][0];
                            let sub_description = document.createElement("div");
                            sub_description.classList.add("d-txt-alrg-desc");
                            sub_description.innerHTML = alrg[l][1];
                            sub_alergen.append(sub_description);
                            sub_alergens_wrp.append(sub_alergen);
                        }
                    }
                    var sub_ingridients = document.createElement("div");
                    sub_ingridients.classList.add('d-txt-subdishes-ingridients');
                    sub_ingridients.innerHTML = d_arr[i].subdishes[k].ingridients;
                    
                    sub.append(sub_name, sub_alergens_wrp, sub_ingridients);
                    subdishes_wrp.append(sub);
                }
            }
            // end extras and subdishes exception

            var price = document.createElement("div");
            price.classList.add('d-txt-price');
            var ingridients = document.createElement("div");
            ingridients.classList.add('d-txt-ingridients');
            name.innerHTML = d_arr[i].name;
            subtitle.innerHTML = d_arr[i].subtitle;
            price.innerHTML = d_arr[i].price;
            ingridients.innerHTML = d_arr[i].ingridients;
          console.log("here");
            a.append(title,alergen_wrp, ingridients,subdishes_wrp, price);
            d_txt_ele_arr[i] = wrp;
            wrp.append(a);
            
            // d-txt footer: menu name and index
            var page_num = document.createElement("div");
            page_num.id='d-txt-index';
            page_num.innerHTML = fm_arr[0].name+": "+(i+1)+"/"+d_arr.length;
            wrp.append(page_num);
            // link to veggie crumbles
            var link_to_vg = document.createElement("a");
            link_to_vg.href = 'https://veggiecrumbles.co.uk/'
            link_to_vg.id='d-txt-link-to-vg';
            link_to_vg.innerHTML = 'ORDER AT:  <span id="vg-name">Veggie Crumbles</span>  >>';
            page_num.append(link_to_vg);
        }
    }
    function p(string){
        console.log("OUTPUT:" + string);
    }
    
    function setDImg(){
        var slider = document.getElementById("d-img-slider");
        clearElement(slider);
        d_img_ele_arr =[];
        d_img_cls_arr = ["d-img-seen", "d-img-seen-below"];
        var k=0;
        var i;
        for (i=0; i < 3 ;i++){ // controlls img set copies
            var j;
            for(j=0; j < d_arr.length ;j++){ // controls images for each dish 
                var box = document.createElement('div');
                box.id = "d-img-"+k;// set id for each element (no specific reason, good for debug)
                box.classList.add('d-img-wrp');
                box.innerHTML = "<img class='d-img' src='"+fm_arr[0].img_file_path+d_arr[j].img[0]+"' alt='"+d_arr[j].name+" Image'>";
                if (k > 1 && k <= (d_arr.length*3)/2){
                    d_img_cls_arr[k] = "d-img-hid-below";
                }
                else if (k > 1 && k < (d_arr.length*3)-1){
                    d_img_cls_arr[k] = "d-img-hid-above";
                }
                else if (k > 1 && k == (d_arr.length*3)-1){
                    d_img_cls_arr[k] = "d-img-seen-above";
                }
                d_img_ele_arr[k] = box;
                d_img_ele_arr[k].addEventListener('click', onClickDishSlider);
                slider.append(box);
                k++;
            }
        }
    }
    function setSubdishesTitle(){
        var section = document.getElementById("subdishes");
        clearElement(section);
        var separator = document.createElement("div");
        separator.id = "separator-d-s";
        var banner = document.createElement("div");
        banner.id = "subdishes-title-banner";
        var title = document.createElement("div");
        title.id = "subdishes-title";
        var  s_body= document.createElement("div");
        s_body.id = "s-body";
        title.innerHTML = d_arr[d_i].name+": ";
        banner.append(title);
        section.append(separator, banner, s_body);
    }
    function setSTxt(){
        setSubdishesTitle();
        var s_body = document.getElementById('s-body');
        s_img_cls_arr =[];
        s_img_ele_arr =[];
        
        //set TEXT:
        var i;
        for(i=0; i < s_arr.length ;i++){
            var text = document.createElement("div");
            text.classList.add('s-txt');
            var text_inner = document.createElement("div");
            text_inner.classList.add('s-txt-inner');
            text.append(text_inner);
            
            var title = document.createElement("a");
            title.classList.add('d-txt-title');
            var name = document.createElement("div");
            name.classList.add('d-txt-name');
            var subtitle = document.createElement("div");
            subtitle.classList.add('d-txt-subtitle');
            title.append(name,subtitle);
            
            var alergen_wrp = document.createElement("div");
            alergen_wrp.classList.add('d-txt-alrg-wrp');
            var j;
            for (j=0; j < s_arr[i].alergens.length ;j++){
                if (s_arr[i].alergens[j] == 1){
                    let alergen = document.createElement("div");
                    alergen.classList.add("d-txt-alrg");
                    alergen.innerHTML = alrg[j][0];
                    let description = document.createElement("div");
                    description.classList.add("d-txt-alrg-desc");
                    description.innerHTML = alrg[j][1];
                    alergen.append(description);
                    alergen_wrp.append(alergen);
                }
            }
            var price = document.createElement("div");
            price.classList.add('d-txt-price');
            var ingridients = document.createElement("div");
            ingridients.classList.add('d-txt-ingridients');
            name.innerHTML = s_arr[i].name;
            subtitle.innerHTML = s_arr[i].subtitle;
            price.innerHTML = s_arr[i].price;
            ingridients.innerHTML = s_arr[i].ingridients;
            text_inner.append(title,alergen_wrp, ingridients, price);
//            s_txt_ele_arr[i] = text; no needed
            
            // set IMAGE SLIDER
            var s_images = s_arr[i].img;
            var img_slider_ele_arr = [];
            var img_slider_cls_arr = [];
    
            var img_slider = document.createElement("div");
            img_slider.classList.add("s-img-slider");
            var j;
            for (j=0; j<s_images.length; j++){
                var img = document.createElement("div");
                img.classList.add('s-img-wrp');
                img_slider_ele_arr[j] = img;
                img_slider_cls_arr[j] = (j==0) ? "s-img-seen" : "s-img-hid-back";
                img.innerHTML = "<img class='s-img' src='"+fm_arr[0].img_file_path+s_arr[i].img[j]+"' alt='"+s_arr[i].name+" Image-"+j+" '>";
                img_slider.append(img);
                img.addEventListener('click', onClickSubdishSlider);
                img.addEventListener('swiped-right', onClickSubdishSlider);
                img.addEventListener('swiped-left', onClickSubdishSlider);
            }
            s_img_cls_arr[i] = img_slider_cls_arr;
            s_img_ele_arr[i] = img_slider_ele_arr;
            // to do add more pisc[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[
            // append both txt and img
            var separator = document.createElement("div");
            
            if (i%2 == 0){
                text.classList.add("s-txt-right");
                img_slider.classList.add("s-img-left");
                
                separator.classList.add("separator-s-white-to-pink");
            }
            else{
                text.classList.add("s-pink-background");
                img_slider.classList.add("s-pink-background");
                img_slider.classList.add("s-img-right");
                text.classList.add("s-txt-left");
                separator.classList.add("separator-s-pink-to-white");
            }
            s_body.append(text);
            s_body.append(img_slider);
          s_body.append(separator);
        }
        stopSSliderTimeOuts();
        setSSliderTimeOuts();
        var i;
        for (i=0; i < s_img_ele_arr.length; i++){
            addSlideClasses(s_img_ele_arr[i], s_img_cls_arr[i]);
        }
    }
     //set d txt slider and s img slider
    function loadDishes(){
        setDTxt();
        addSlideClasses(d_txt_ele_arr, d_txt_cls_arr);
        setDImg();
        addSlideClasses(d_img_ele_arr, d_img_cls_arr);
    }
    function showExtras(){
        selectMenu(3);
    }
    function shouldSubsBeShown(){
        if (fm_arr[0].name != "Extras" && fm_arr[0].name != "Drinks"){
            setSTxt();
        }
        else {
            var subdishes = document.getElementById('subdishes');
            clearElement(subdishes);
        }
    }
    function onClickSelectMenu(){
        // which menu has been selected?
        var fm_ele_index = fm_ele_arr.indexOf(this);
        selectMenu(fm_ele_index);
    }
    function onSwipeRightMenu(){
        // which menu has been selected?
        selectMenu(1);
        console.log("swiped yeah");
    }
    function selectMenu(fm_ele_index){
        // remove current classes to rotate sliders 
        removeSlideClasses(fm_ele_arr, fm_cls_arr);
        removeSlideClasses(fm_txt_ele_arr, fm_txt_cls_arr);
        removeSlideClasses(fm_img_ele_arr, fm_img_cls_arr);
        
        // shift menu bar, menu txt and menu img
        while (fm_ele_index > 0){//slide menus till the selected one is on position: [0]            
            shiftSlideRight(fm_ele_arr);
/*NB:*/shiftSlideRight(fm_arr);// shift menu content toghether with menu elements to correspond indexes (current menu will always be at position zero of fm_arr)
            shiftSlideRight(fm_txt_ele_arr);
            shiftSlideRight(fm_img_ele_arr);
            fm_ele_index--;
            fm_i = (fm_i < fm_arr.length-1) ? fm_i+1 : 0;
        }
        // set new classes
        addSlideClasses(fm_ele_arr, fm_cls_arr);
        addSlideClasses(fm_txt_ele_arr, fm_txt_cls_arr);
        addSlideClasses(fm_img_ele_arr, fm_img_cls_arr);
        setDArray();
        setSArray();
        loadDishes();
        shouldSubsBeShown(); 
    }
    function setSArray(){
        s_arr = (d_arr[d_i].subdishes != null) ? d_arr[d_i].subdishes : [d_arr[d_i]];
        s_i = 0;
    }
    function setDArray(){
        d_arr = fm_arr[0].dishes;// d_arr will always contain the dishes of the current selected menu
        d_i = 0;// always start showing first dish on list
    }
    function onClickSelectDish(){
       // which menu has been selected?
        var dish_index = d_ele_arr[fm_i].indexOf(this);
        console.log('INDEX REAL: '+dish_index);
        (dish_index > d_i) ? SelectDish(dish_index,'fordward') : SelectDish(dish_index, 'backwards');
        d_i = dish_index;
        d_img_i = d_i;
        //update subdishes
        setSArray();
        shouldSubsBeShown();
    }
    function onClickDishSlider(){
        var img_index = d_img_ele_arr.indexOf(this);
        console.log('INDEX REAL: '+img_index);
        if (img_index == d_img_ele_arr.length-1){
            SelectDish(d_i-1, 'backwards');
                d_i = (d_i > 0) ? d_i-1 : d_i=d_arr.length-1;
        }
        else if(img_index == 1){
                SelectDish(d_i+1,'forward');
                d_i = (d_i < d_arr.length-1) ? d_i+1 : d_i=0;
        }
        // update sub dishes
        setSArray();
        shouldSubsBeShown();
        var i;
        for (i=0; i < s_img_ele_arr.length; i++){
            addSlideClasses(s_img_ele_arr[i], s_img_cls_arr[i]);
        }
    }
    function onClickSubdishSlider(){
        var i;// i will capture the selected slide index
        
        for (i=0; i < s_img_ele_arr.length; ++i){
            if (s_img_ele_arr[i].includes(this)) break;
        }
        clearTimeout(s_slider_to_arr[i]);
        changeSImg(i);
    }
    function SelectDish(dish_index,direction){       
        // remove current classes to rotate sliders 
        removeSlideClasses(d_txt_ele_arr, d_txt_cls_arr);
        removeSlideClasses(d_img_ele_arr, d_img_cls_arr);
        
        // shift dish txt slider and dish img slider
            switch (direction){
                case 'backwards':
                    while (dish_index < d_i){//slide menus till the selected one is on position: [0]
                        shiftSlideLeft(d_txt_ele_arr);
                        shiftSlideLeft(d_img_ele_arr);
                        console.log("inside while d index: "+dish_index);
                        console.log("inside while d_i: "+d_i);
                        dish_index++;
                    }
                    break;
                default:
                    while (dish_index > d_i){//slide menus till the selected one is on position: [0]
                        shiftSlideRight(d_txt_ele_arr);
                        shiftSlideRight(d_img_ele_arr);
                        dish_index--;
                    }
                    break;
             }
             
        // set new classes
        addSlideClasses(d_txt_ele_arr, d_txt_cls_arr);
        addSlideClasses(d_img_ele_arr, d_img_cls_arr);
    }
    function changeSImg(slide_index){
//        var i;
//        for(i=0;i<s_img_ele_arr[slide_index].length; i++){
//        }
        var subdishes_cls_arr = s_img_cls_arr[slide_index];
        var subdishes_img_arr = s_img_ele_arr[slide_index];
        removeSlideClasses(subdishes_img_arr, subdishes_cls_arr);
        shiftSlideRight(subdishes_img_arr);
        addSlideClasses(subdishes_img_arr, subdishes_cls_arr);
        s_slider_to_arr[slide_index] = setTimeout(changeSImg,5000, slide_index);
    }
    function setSSliderTimeOuts(){
        var i;
        for (i=0; i < s_img_ele_arr.length ; i++){
            s_slider_to_arr[i] = setTimeout(changeSImg,5000, i);
        }
    }
    function stopSSliderTimeOuts(){
        var i;
        for (i=0; i < s_slider_to_arr.length ; i++){
            clearTimeout(s_slider_to_arr[i]);
        }
    }

    let d_scroll_ele = document.getElementById('d-img-slider');
    d_scroll_ele.addEventListener('swiped-right', scrollRight);
    d_scroll_ele.addEventListener('swiped-left', scrollLeft);

    let m_scroll_ele = document.getElementById('menus-section');
    m_scroll_ele.addEventListener('swiped-right', scrollMenusRight);

    function scrollRight(){
        
        SelectDish(d_i-1, 'backwards');
        d_i = (d_i > 0) ? d_i-1 : d_i=d_arr.length-1;

        // update sub dishes
        setSArray();
        shouldSubsBeShown();
        var i;
        for (i=0; i < s_img_ele_arr.length; i++){
            addSlideClasses(s_img_ele_arr[i], s_img_cls_arr[i]);
        }
    }
    
    function scrollLeft(){

        SelectDish(d_i+1,'forward');
        d_i = (d_i < d_arr.length-1) ? d_i+1 : d_i=0;
        // update sub dishes
        setSArray();
        shouldSubsBeShown();
        var i;
        for (i=0; i < s_img_ele_arr.length; i++){
            addSlideClasses(s_img_ele_arr[i], s_img_cls_arr[i]);
        }
    }

    function scrollMenusRight(){
        selectMenu(0);
    }
</script>


