//var jQueryScript = document.createElement('script');
//jQueryScript.setAttribute('src', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js');
//document.head.appendChild(jQueryScript);

let debug=0;

class ShowHideForm {

    constructor(formClassName) {
        this.formClassName=formClassName;
        this.isHide=true;
        this.loggingInfo(this.formClassName+" névvel ShowHideForm objektum létrehött.");
    }

    loggingInfo(message) {
        if (debug==1) {
            console.info(message);
        }
    }

    hide() {
        $(this.formClassName).hide();
        this.isHide=true;
        this.loggingInfo(this.formClassName+" form eltüntetve.");
    }

    fadeOutNewItemForm() {    
        $(this.formClassName).fadeOut("slow");
        this.loggingInfo(this.formClassName+" lassan eltüntetve.");
    }

    fadeInNewItemForm() {
        if (this.isHide) {
            $(this.formClassName).show();
            this.loggingInfo(this.formClassName+" megjelenítve.");
            this.isHide=false;
        }
        else {
            $(this.formClassName).fadeIn("slow");
            this.loggingInfo(this.formClassName+" lassan megjelenítve.");
        }
    }
}