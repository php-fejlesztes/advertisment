var jQueryScript = document.createElement('script');
jQueryScript.setAttribute('src', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js');
document.head.appendChild(jQueryScript);

let debug=1;

class ShowHideForm {

    constructor(formClassNeme) {
        this.formClassNeme=formClassNeme;
        this.loggingInfo(this.formClassNeme+" névvel ShowHideForm objektum létrehött");
    }

    loggingInfo(message) {
        if (debug==1) {
            console.info(message);
        }
    }

    hide() {
        $("#form-update").hide();
    }
/*
    function fadeOutNewItemForm() {    
            console.log("fadeOut");
            $("#form-update").fadeOut("slow");
    }

    function fadeInNewItemForm() {
        var isVisibleNewItemForm = $('#form-update').is(':visible');
        console.log("fadeIn:"+isVisibleNewItemForm);
        if (!isVisibleNewItemForm)
            $("#form-update").show();
        else
            $("#form-update").fadeIn("slow");
    }*/


}