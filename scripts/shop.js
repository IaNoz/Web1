class collection {
    constructor(page_id, template_directory){
        this.template_directory = template_directory;
        this.page_id = page_id;
        this.waiting_time = 1;
        this.pics_file = "";
        this.num_pics =0;
        this.background = document.getElementById("collection-background-"+page_id);
        this.separator = document.getElementById("separator-"+page_id);
        this.image = 1;
        console.log("page id: "+this.page_id);
        this.play_stop_button = document.querySelector("#pics-buttons-"+this.page_id+" .stop");
        switch(page_id) {
            case 359:
            case 783:
                this.background.classList.add("pink-background");
                this.separator.classList.add("gr-pink-to-white");
                this.num_pics = 6;
                this.pics_file = "trival";
                break;
            case 363:
            case 786:
                this.background.classList.add("white-background");
                this.separator.classList.add("gr-white-to-pink");
                this.num_pics = 6;
                this.pics_file = "women_skates_&_bananas";
                break;
            case 349:
            case 795:
                this.background.classList.add("pink-background");
                this.separator.classList.add("gr-pink-to-white");
                this.num_pics = 7;
                this.pics_file = "curves";
                break;
            case 369:
            case 787:
                this.background.classList.add("white-background");
                this.separator.classList.add("gr-white-to-pink");
                this.num_pics = 6;
                this.pics_file = "cyber-punk";
                break;
            case 373:
            case 790:
                this.background.classList.add("pink-background");
                this.separator.classList.add("gr-pink-to-white");
                this.num_pics = 7;
                this.pics_file = "nature";
                break;
          default:
                this.background.classList.add("default");
                this.separator.classList.add("default");
                this.num_pics = 7;
                this.pics_file = "nature";
            } 
        }
        
        changeBackgroundImage (){
            let image = document.createElement("img");
            image.classList.add("fade_motion_right_left");
            image.src = this.template_directory+"/images/PRODUCTS/collections/"+this.pics_file+"/"+this.image+".png";
            image.alt = "author image";
            console.log("page id: "+ "background-image-"+this.page_id);
            var wrp = document.getElementById("background-image-"+this.page_id);
            console.log("wrp element: "+wrp);
            wrp.append(image);
            wrp.removeChild(wrp.childNodes[0]);
        }
        
        showBackground (){
            if (this.image > this.num_pics){
                this.image = 1;
            }
            this.changeBackgroundImage();
            this.image++;
            if(this.play_stop_button.className === "stop"){
                this.waiting_time = setTimeout(this.showBackground.bind(this) , 10000);
                if (this.page_id === 359){
                    console.log(this.page_id + " - ShowBackground: " + this.waiting_time);            
                }
            }
        }
        
        nextPicture (){
            clearTimeout(this.waiting_time);
            this.showBackground();
        }
        
        previousPicture (){
            if (this.image === 2){
                this.image = this.num_pics;
            }
            else{
                this.image=this.image-2;
            }
            clearTimeout(this.waiting_time);
            this.showBackground();
        }
        
        stopSlider (){
            clearTimeout(this.waiting_time);
            this.play_stop_button.innerHTML =  "<i class=\"fas fa-play\"></i>";
            this.play_stop_button.setAttribute('onclick','collection_'+this.page_id+'.playSlider()');
            this.play_stop_button.className = "play";   
            this.play_stop_button = document.querySelector("#pics-buttons-"+this.page_id+" .play");
        }
        
        playSlider(){
            this.play_stop_button.innerHTML =  '<i class="fas fa-pause"></i>';
            this.play_stop_button.setAttribute('onclick','collection_'+this.page_id+'.stopSlider()');
            this.play_stop_button.className = "stop";
            this.play_stop_button = document.querySelector("#pics-buttons-"+this.page_id+" .stop");
            this.image++;
            this.showBackground();
        }

        clickOnImg(){
            if (this.play_stop_button.className == "stop"){
                this.stopSlider();
            }
            else {
                this.playSlider()
            }
        }
 };